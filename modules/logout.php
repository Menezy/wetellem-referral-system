<?php
session_start();
include_once '../classes/config.php';
include_once '../classes/auth.php';
// Initialize Class
$auth = new Auth($conn);  
echo $auth->Logout();
?>