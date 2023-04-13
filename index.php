<?php ini_set('display_errors', 'on'); error_reporting(1); 
set_time_limit(0);
error_reporting(0);
session_start();


if(!isset($_SESSION['nombre'])){
    header('location: html/login.php');
}

if(isset($_SESSION['nombre'])){
    header('location: html/inicio.php');
}

?>