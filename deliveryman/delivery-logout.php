<?php
// Start session
session_start();

// Destroy the session
session_destroy();

// Redirect to the login page
header("Location: delivery-login.html");
exit();
?>
