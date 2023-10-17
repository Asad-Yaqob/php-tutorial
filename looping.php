<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <table cellspacing= 5px border= 1px >
        <thead>
            <tr>
            <th>name</th>
            <th>age</th>
            <th>email</th>
            </tr>
        </thead>
        <tbody>
             <?php //

        //   ========  for loop ======== 
//             for($i=1;$i<=10;$i++){
// echo "<tr>" 
// . "<td>". $i . "</td>" 
// . "<td>" . "</td>" 
// . "<td>" . "</td>" 
// ."<tr>" ;
//             }

//  =========== while loop ======== 
            // $i=1;
            // while($i<=10){
            //     echo "<tr>" 
            //     . "<td>" . "</td>" 
            //  . "<td>" . "</td>" 
            //     . "<td>" . "</td>" 
            //  ."<tr>" ; $i++ ;
            //  }
          
    //         $i = 1 ;
    //    do{ echo "<tr>" 
    //       . "<td>".$i. "</td>" 
    //     . "<td>" . "</td>" 
    //        . "<td>" . "</td>" 
    //     ."<tr>" ; $i++ ;}
    //    while ($i<=10)
            ?>
        </tbody>
    </table>

--->

<table border = " 1px">
<thead>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>NO</th>
    </tr>
</thead>
<tbody>
    <?php 
    for($i=1;$i<=5; $i++ ){
        ?>
<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
        <?php
    }
?>
    
  
</tbody>
</table>

</body>
</html>