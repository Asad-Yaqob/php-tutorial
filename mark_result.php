<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    td{
padding: 10px;
    },
    .container{
border: 2px solid black ;
    }

</style>
</head>
<body>

<?php 
if(isset($_POST['sub'])){
    $student_name = $_POST['name'];
    $father_name = $_POST['f_name'];
    $class = $_POST['class'];
    $roll_number = $_POST['r_number'];
    $math_marks = $_POST['mathematics'];
    $eng_marks = $_POST['english'];
    $urdu_marks = $_POST['urdu'];
    $phy_marks = $_POST['physics'];
    $che_marks = $_POST['chemistry']; 
    $islam_marks = $_POST['islamiat'];
      $com_marks = $_POST['computer'];
$com_prac_marks = $_POST['com_practicle'];
      $phy_prac_marks = $_POST['phy_practicle'];
  $che_prac_marks = $_POST['che_practicle'];
    $obtained_marks = $math_marks + $eng_marks + $urdu_marks + $phy_marks + $che_marks + $islam_marks + $com_marks + $com_prac_marks + $che_prac_marks + $phy_prac_marks ;
}
?>

<div class="container mt-5">
    <h2 class='text-center'>Board Of Secondary Education  Karachi</h2>
    <h4 class='text-center'>Iqra Huffaz Boys Secondary School, Karachi</h4>
    <br>
    <hr>
    <br>
    <span>Name of Student : <?php echo $student_name?></span><br>
    <span>Name of father :  <?php echo $father_name?> </span><br>
    <span>Class  <?php echo $class ?></span><br>
    <span>Roll Number  <?php echo $roll_number ?></span>
<br>
<hr>
<br>
    <table class="text-center" border = '1px' >
       <thead>
        <tr>
            <th>Component 1</th>
            <th>Marks</th>
            <th>Component 2</th>
            <th>Marks</th>
        </tr>
       </thead>
       <tbody>
        <tr>
           <td>Mathematics </td>
           <td><?php echo $math_marks ?></td> 
           <td>Physics</td> 
           <td><?php echo $phy_marks ?></td> 
        </tr>
        <tr>
           <td>English </td>
           <td><?php echo $eng_marks ?></td> 
           <td>Chemistry</td> 
           <td><?php echo $che_marks ?></td> 
        </tr>
        <tr>
           <td>Urdu </td>
           <td><?php echo $urdu_marks ?></td> 
           <td>Computer</td> 
           <td><?php echo $com_marks ?></td> 
        </tr>
        <tr>
           <td>Islamiat </td>
           <td><?php echo $islam_marks ?></td> 
           <td>Computer_pr </td> 
           <td><?php echo $com_prac_marks ?></td> 
        </tr>
        <tr>
           <td></td>
           <td></td> 
           <td>Physics_pr</td> 
           <td><?php echo $phy_prac_marks ?></td> 
        </tr>
        <tr>
           <td></td>
           <td></td> 
           <td>Chemistry_pr</td> 
           <td><?php echo $che_prac_marks ?></td> 
        </tr>
        
       </tbody>
</table>
<hr><br>

<span>
Obtained Marks : <?php echo $obtained_marks ?>
</span> <br>

<?php 
if($obtained_marks >= 700){
    echo  "grade A+";
}
elseif($obtained_marks >= 550 ){
    echo   " grade A";
}
elseif($obtained_marks >= 400 ){
    echo  " grade B";
}
elseif($obtained_marks >= 300 ){
    echo  " grade C";
}
elseif($obtained_marks <= 300 ){
    echo  " Fail";
} ;

?>

</div>


</body>
</html>