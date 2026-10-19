<?php 
$servername="m8lc.your-database.de";
$username ="rackno_0";
$password ="m2[L8A@bhX9E";
$dbname ="rackno_db0";
$conn = new mysqli($servername,$username,$password,$dbname);
if(!$conn){
    die("connection failed:".mysqli_connect_error());
}

?>