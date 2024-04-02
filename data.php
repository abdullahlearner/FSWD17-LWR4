<?php 

// echo "Form data";

// http://localhost/project-one/data.php?num1=500&operator=-&num2=200

// $_GET[];

// echo $_GET['num1'];
// echo $_GET['num2'];
// echo $_GET['operator'];


$num1  = $_GET["num1"];
$num2  = $_GET["num2"];
$operator =$_GET["operator"];

$result = '';

switch($operator){
    case "+":
        $result =  $num1 + $num2;
    break;  
    case "-":
        $result =  $num1 - $num2;
    break;   
    case "*":
        $result =  $num1 * $num2;
    break;   
    
    case "/":
        $result =  $num1 / $num2;
    break;

    default:
    $result = "Invalid Operator!";
}

echo "Result : " . $result;




?>