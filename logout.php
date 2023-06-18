<?php
session_start(); 

unset($_SESSION['EMAIL']); 
unset($_SESSION['USER_ID']);
unset($_SESSION['basket']);


header('Location: login.php');
exit();
?>