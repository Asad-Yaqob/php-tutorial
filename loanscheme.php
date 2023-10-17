<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <title>form</title>
</head>
<body>
    
<div class="container mt-3">
<form action="" method="post">

<div class="form-group">
  <label for="">Name</label>
  <input type="text" name="u_name" id="" class="form-control" placeholder="" aria-describedby="helpId">

</div>
<div class="form-group"> 
  <label for="">age</label>
  <input type="number" name="u_age" id="" class="form-control" placeholder="" aria-describedby="helpId">

</div>
<div class="form-group">
  <label for="">salary</label>
  <input type="number" name="u_salary" id="" class="form-control" placeholder="" aria-describedby="helpId">

</div>
<div class="form-group">
  <label for="">loan_amount</label>
  <input type="number" name="l_amount" id="" class="form-control" placeholder="100000 t0 400000" aria-describedby="helpId">

</div>
<div class="form-group">
  <label for="">advance payment</label>
  <input type="number" name="a_payment" id="" class="form-control" placeholder="" aria-describedby="helpId">
</div>
<label for="">Loan Duration</label>
<select name="u_year" class="form-control">
    <option>Select</option>
    <option>5 </option>
    <option>10  </option>
    <option>15  </option>
</select>

<input type="submit" class="btn btn-dark mt-3" name="loan" value="get_loan" >
</form>
</div>

<?php

if(isset($_POST['loan'])){
$name = $_POST['u_name'];
$age = $_POST['u_age'];
$salary = $_POST['u_salary'];
$loan_amount = $_POST['l_amount'];
$advance_payment = $_POST['a_payment'];
$year = $_POST['u_year'];
$deduct = $advance_payment - $loan_amount /($year*12);

if($age > 25 && $salary >= 30000 && ($loan_amount >= 100000 && $loan_amount <= 400000)){
    echo $name . " you are eligible for loan <br> you will pay  " . $deduct . " at every month till" .$year ."years";
    }
else{
    echo  " you are not eligibal" ;
}}

?>


</body>
</html>