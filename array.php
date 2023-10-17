<?php   
$students = ["ahmed","abdulqadir","azeem","asad"] ;
echo $students[0]. "<br>" . $students[1] ;

foreach($students as $value){
echo $value . "<br>" ;
}
?>

<h1>Associative array</h1>

<?php
$students = [
    "std1" => "asad",
    "std2" => "anas",
    "std3" => "shahbaz",
    "std4" => "ali"
];
echo $students['std1'] . "<br>" . $students['std2'] . "<br>";

foreach($students as $key => $item){
echo $key . " " . $item  . "<br>"; 
}
?>

<h1>For Loop</h1>

<?php 
$students = ["ahmed","abdulqadir","azeem","asad"] ;
for($i=1; $i<count($students); $i++){
    echo $students[$i] . "<br>";
}
?>

