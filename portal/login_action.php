<?php 
$url = "https://dummyjson.com/users";

$response = file_get_contents($url);

$users = json_decode($response, true);

// foreach($users['users'] as $user){
//     echo $user['phone'] . "<br>";
// }



// echo $users['users']['id'];

// echo "<pre>";
// print_r($users);
// echo "</pre>";

if(isset($_GET['username'])){

$username = $_GET['username'];
$password = $_GET['pass'];

// echo $username;
session_start();

if(isset($_SESSION['user'])){
    header("location: About.php");
}


foreach($users['users'] as $user){
    if( $user['username'] == $username && $user['password'] == $password ){

        $_SESSION['user'] = $user['username'];
        session_regenerate_id(true);
     echo "login successful";
    } 
 
    }
 
}

?>