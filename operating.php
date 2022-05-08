<?php

$Oper = $_GET['operator'];
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$result = "";

switch($Oper){
    case("Add"):
        $result = $num1 + $num2;
        break;
    case("Sub"):
        $result = $num1 - $num2;
        break;
    case("Multi"):
        $result = $num1 * $num2;
        break;
    case("Div"):
        $result = $num1 / $num2;
        break;
}

echo "결과: " $result "<br>"; 
?>