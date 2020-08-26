<?php
session_start();
include('conection.php');

if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['login']);
    header('Location: index.php');
}

?>

