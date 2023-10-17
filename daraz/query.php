<?php
//login 
session_start();
include("connection.php");

if(isset($_POST['login'])){
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $query = $pdo->prepare("select * from users where name = :name && password = :pass");
    $query->bindParam('name',$name);
    $query->bindParam('pass',$pass);
    $query->execute();
    $data = $query->fetch(PDO::FETCH_ASSOC);
    if($data){
        $_SESSION['id'] = $data['id'];
        echo "<script>alert('data is valid')</script>";
        header("location:select.php");
    }
    else{
        echo "<script>alert('data is not valid')</script>" ;
    }

}

//register 

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $c_pass = $_POST['c_pass'];

    if($pass == $c_pass){

        $query = $pdo -> prepare("insert into users(name,password) values(:name,:pass)");
        $query -> bindParam("name",$name); 
        $query -> bindParam("pass",$pass); 
        $query -> execute();
        echo "<script>alert('account registerd')</script>";
    
    }
    else{
        echo "<script>alert('password does not match!!')</script>";
    }


}


// add products 

if(isset($_POST['add_product'])){
    $name = $_POST['p_name'];
    $price = $_POST['p_price'];
    $c_id = $_POST['c_id'];
    $image_name=$_FILES['p_image']['name'];
    $image_size=$_FILES['p_image']['size'];
    $image_tmp_name=$_FILES['p_image']['tmp_name'];
    $image_extension=pathinfo($image_name,PATHINFO_EXTENSION);
    $destination="images/".$image_name;


 if($image_size <=48000000){
    if($image_extension =='png' || $image_extension == 'jpg' || $image_extension == 'jpeg'){
        if(move_uploaded_file($image_tmp_name,$destination)){
            $query=$pdo->prepare("insert into products(name,price,image,c_id) values(:name,:price,:image,:id)");
            $query->bindParam("name",$name);
            $query->bindParam("price",$price);
            $query->bindParam("image",$image_name);
            $query->bindParam("id",$c_id);
            $query->execute();
            echo "<script>alert('product added successfully')</script>";
        }
    }
    else{
        echo "<script>alert('not valid extension')
        location.assign('insert.php');
        </script>";
    }
 }
 else{
    echo "file size is greater";
 }
 
}
?>

<?php 

if(isset($_POST['sub'])){
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $query = $pdo->prepare("select * from users where name = :name && password = :pass");
    $query->bindParam('name',$name);
    $query->bindParam('pass',$pass);
    $query->execute();
    $data = $query->fetch(PDO::FETCH_ASSOC);
    if($name == $data['name'] && $pass == $data['password'] ){
        echo "<script>alert('data matched')</script>";
    }
    else{
        echo "<script> alert('data not matched')</script>";
    }

}
?>