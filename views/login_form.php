<?php
require('db_controller.php');

$username = $_GET['username'];
$psw = $_GET['psw'];

$salt = substr (md5($psw), 0, 2);
$cookie = base64_encode ("$username:" . md5 ($psw, $salt));
setcookie ('my-secret-cookie', $cookie);

#redirect user to the main page
header("Location: accueil.php");

?>