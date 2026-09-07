<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
header("Cache-Control: no-cache, no-store, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
if(!isset($_SESSION['admin'])){
    header("Location: admin.php");
    exit();
}
?>