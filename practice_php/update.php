<?php
include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_GET['id'])){
        $pro_id =$_GET['id'];
        $query = $pdo->prepare("select * from product where id = :p_id");
        $query->bindParam('p_id',$pro_id);
        $query->execute();
        $data = $query->fetch(PDO::FETCH_ASSOC);
        // var_dump ($data);
    }

    ?>
    <div class="container">
        <form action="" method="post" >
<div class="form-group">
  <label for="">Name</label>
  <input type="text" name="name" value="<?php echo $data['NAME']?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
  <label for="">Price</label>
  <input type="text" name="price" value="<?php echo $data['price']?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
  <label for="">Quantity</label>
  <input type="text" name="quantity" value="<?php echo $data['quantity']?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
</div>
<input type="submit" class="btn btn-primary" name="update">
        </form>
<?php 
if(isset($_POST['update'])){

    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $query = $pdo->prepare("update product set NAME = :p_name , price = :p_price , quantity = :p_qty where id = :p_id");
    $query->bindParam('p_id',$pro_id);
    $query->bindParam('p_name',$name);
    $query->bindParam('p_price',$price);
    $query->bindParam('p_qty',$quantity);
    $query->execute();
    echo " data sucsessfully updated" ;

}

?>

    </div>
</body>
</html>