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
    <title>Connection</title>
    <style>
       
    </style>
</head>
<body>
    <div class="container mt-5">
    <button class="btn btn-success mb-3 mx-auto"><a style="text-decoration:none;" class= "text-light" href="insert.php">insert data</a></button>

        <table class="table table-striped">
<?php 
$query = $pdo->query("select * from product");
$result = $query->fetchALL(PDO::FETCH_ASSOC);
foreach($result as $products){
    ?>
 
    <tr>
<td><?php echo $products['id']?></td>
<td><?php echo $products['NAME']?></td>
<td><?php echo $products['price']?></td>
<td><?php echo $products['quantity']?></td>
<td><button class="btn btn-primary">
            <a href="update.php?id=<?php echo $products['id']?>" class="text-light" style="text-decoration:none;">update</a></button>
        </td>
        <td><button class="btn btn-danger">
            <a href="con_data.php?id=<?php echo $products['id']?>" class="text-light" style="text-decoration:none;" >delete</a></button>
        </td>
</tr>

    <?php
}
?>
<?php
if(isset($_GET['id'])){
        $m_id=$_GET['id'];
        $query = $pdo -> prepare("delete from product where id = :id");
        $query -> bindParam("id",$m_id);
        $query -> execute();
        echo "data successfully deleted";
        
    }
    ?>

</table> </div>
</body>
</html>