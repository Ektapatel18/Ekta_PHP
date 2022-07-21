<?php

session_start();
$_SESSION['user']="Ekta Patel";
echo $_SESSION['user'];

unset($_SESSION['user']);
echo $_SESSION['user'];
?>