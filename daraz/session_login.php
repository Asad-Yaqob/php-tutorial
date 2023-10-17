<?php 
include("query.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>login form</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
        <div class="form-group mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group mb-3">
          <label for="" class="form-label">password</label>
          <input type="int" name="pass" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <input type="submit" name="login" class="btn btn-primary">
        </form>
    </div>
</body>
</html>