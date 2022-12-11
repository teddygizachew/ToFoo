<?php
session_start();
if (!isset($_SESSION['logged'])) header('location: Signin.php');

unset($_SESSION['logged']);
session_destroy();
echo "Logged out!";
