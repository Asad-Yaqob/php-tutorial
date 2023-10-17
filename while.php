<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tbody>
            <?php 
            
    $i=1;
    while($i<=10){
        ?>
<tr>
    <td><?php echo "2" ?></td>
    <td><?php echo "x" ?></td>
    <td><?php echo $i ?></td>
    <td><?php echo "=" ?></td>
    <td><?php echo $i*2 ?></td>
 </tr>  <?php $i++ ?>
        <?php
    }
    ?>   
        </tbody>  
     </table>
</body>
</html>