<?php 
$servername="localhost";
$username ="root";
$password ="";
$dbname ="dataparadise_net";
$conn = new mysqli($servername,$username,$password,$dbname);
if(!$conn){
    die("connection failed:".mysqli_connect_error());
}

?>