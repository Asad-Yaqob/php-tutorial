<?php
include("query.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<div class="container mt-5">
    <div class="row">
        <?php
        if(isset($_SESSION['id'])){
        $query=$pdo->query("select * from products");
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $data){
            ?>
<div class="col-md-3">
    <div class="card">
      <img class="card-img-top" src="images/<?php echo $data['image'] ?>" alt="">
      <div class="card-body">
        <h4 class="card_title"><?php echo $data['name'] ?></h4>
        <p class="card_text"><?php echo $data['price'] ?></p>
      </div>
    </div>
</div>
</div>      
            <?php
        }
        ?>
        <button class="btn btn-primary mt-4"><a style="text-decoration:none;" class="text-light" href="logout.php">logout</a></button>
        <?php
        }
        else{
            header("location:session_login.php");
        }
        ?>
        
    
</div>


</body>
</html>