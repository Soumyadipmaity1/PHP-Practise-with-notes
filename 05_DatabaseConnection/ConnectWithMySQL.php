<?php 
// $db_server = "localhost";
// $db_user = "root";
$server = "localhost";
$user = "root";
$password ="";  
$con = mysqli_connect($server, $user, $password);
if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}   
echo "Connected successfully";
?>