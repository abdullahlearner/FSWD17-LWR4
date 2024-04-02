<?php 

// 4 
// localhost user password local 
// servername 
// username 
// password 
// database 
$server = "localhost";
$username = "root";
$password = "";
$database = "dbjobs";


$conn =  mysqli_connect($server,$username,$password,$database);
if($conn){
    echo "Connected";
}else{
    echo "error";
}


?>

