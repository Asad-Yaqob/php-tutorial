<?php
include("query.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="" class="form-label">product name</label>
          <input type="text" name="p_name" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="" class="form-label">Product price</label>
          <input type="int" name="p_price" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="" class="form-label">product image</label>
          <input type="file" name="p_image" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Category</label>
            <select name="c_id" id="" class="form-control">
            <option value="">Select category </option>
            <?php 
            $query = $pdo->query("select * from category");
            $result = $query->fetchALL(PDO::FETCH_ASSOC);
            foreach($result as $data){
                ?>
            <option value="<?php echo $data['id'] ?>"><?php echo $data['id'] ?></option>

                <?php
            }
?>
            
            </select>
        </div>
        <input type="submit" value="add product" name="add_product">
        </form>
    </div>
</body>
</html>