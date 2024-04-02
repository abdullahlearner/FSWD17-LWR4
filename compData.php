<?php 

// http://localhost/project-one/compData.php?num1=100&num2=1000



$num1 = $_GET['num1']; 
$num2 = $_GET['num2']; 


if($num1 != $num2){
    echo "hello";
}else{
    echo "equal";
}

// if($num1 == $num2){
//         echo "Both numbers are equal";
// }elseif($num1 > $num2){
//     echo "First number is greater then the second number";
// }else{
//     echo "Second number is greater then the first number";

// }





?>