<?php
include("query.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Registration Form</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Password</label>
          <input type="text" name="pass" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Confirm Password</label>
          <input type="text" name="c_pass" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div> 
        <input type="submit" class="btn btn-primary" name="register">
        </form>

    </div>
    
</body>
</html>