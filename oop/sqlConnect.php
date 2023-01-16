<?php 
//Making sql connection with sqli 
$server = "localserver";
$user = "username";
$password = "password";

$connect = new mysqli($server, $user, $password);

//Checking connection

if($connect->connect_error){
    die("Connection error: " . $connect->connect_error);
}else{
    echo "Connected to SQL";
}




?>