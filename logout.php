<?php
session_start();

if(isset($_SESSION['admin_username']))
{
    unset($_SESSION['admin_username']);
}

session_destroy();

echo "<script> window.open('login.php','_self') </script>";

?>