<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
$name = "asa";
$color = "green";
$color1 = "red"; 
if($name == "asad"){
    ?>
   <h1 style=color:<?php echo $color ?>> <?php echo " welcome " . $name ?></h1>;
   <?php
}
else{
    ?>
    <h1 style =color:<?php echo $color1 ?>>"stranger"</h1>;
<?php
}

?>

</body>
</html>