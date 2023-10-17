<!-- method 1  -->

<?php 
define("DOB", "15/11/2003");
echo  "Date of Birth : " . DOB . "<br>";

define("pi",3.142);
echo "Constant  method one :  " .  pi . "<br>" ;
?>

<!-- method 2  -->
<?php
const blood = "A+";
echo "Constant by method 2 :  " .  blood . "<br>" ;
?>


<!-- function  -->

<?php 
function mul ($num){
    echo "calling constant in function : ". pi * $num ;
}

mul(6)

?>