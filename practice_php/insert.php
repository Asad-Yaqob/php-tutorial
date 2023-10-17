<?php 
include("connection.php");
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
<div class="container mt-5">
  <form action="" method="post">
  <div class="form-group">
  <label for="">Name</label>
  <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
  <label for="">Price</label>
  <input type="number" name="price" id="" class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
  <label for="">Quantity</label>
  <input type="number" name="quantity" id="" class="form-control" placeholder="" aria-describedby="helpId">
</div>
<input type="submit" name="ins">
 </form>

<?php 

if(isset($_POST['ins'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity =$_POST['quantity'];

  $query = $pdo -> prepare("insert into product(NAME,price,quantity) values(:NAME,:price,:quantity)");

  $query -> bindparam("NAME",$name);
  $query -> bindparam("price",$price);
  $query -> bindparam("quantity",$quantity);

  $query -> execute();

  echo "data has been inserted" ;

}


?>

</div>


</body>
</html>