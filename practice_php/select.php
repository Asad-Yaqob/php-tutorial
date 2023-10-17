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
</head>
<body>
    <div class="container mt-5"><table class="table table-striped">
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
            <a href="update.php?id=<?php echo $products['id']?>" class="text-light">update</a></button>
        </td>
</tr>

    <?php
}
?>

</table> </div>
</body>
</html>