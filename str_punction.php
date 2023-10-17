<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function explode</title>
</head>
<body>
    <form action="" method = post>
    <label for="">Enter your file name</label>
    <input type="text" name="ex">
    <br>
    <input type="submit" name="sub">
    </form>

    <?php 
    
    if(isset($_POST['sub'])){
$file_name = $_POST['ex'];
$ex = explode(".",$file_name);
$file_ex = $ex[array_key_last($ex)];
echo $file_ex ;

if($file_ex == "jpeg" || $file_ex == "png" || $file_ex == "jpg" ){
    echo "valid" ;
}
else{
    echo "wronge file extension";
}
    }
    ?>
</body>
</html>