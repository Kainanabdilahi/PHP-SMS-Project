<?php

session_start();

// Unset the specific session variable
// unset($_SESSION['username']);

// Optionally, you can destroy the session if you want to end the session completely
session_unset();    // Unset all session variables
// session_destroy();  // Destroy the session

// Redirect to the login page
header('Location:index.php');
exit();
?>