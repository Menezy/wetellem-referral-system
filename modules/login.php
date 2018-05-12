<?php
session_start();
include_once '../classes/config.php';
include_once '../classes/auth.php';
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Initialize Class
    $auth = new Auth($conn);
    // Fetch User Data
    $email = $_POST['email'];
    $password = $_POST['pword'];
	echo $auth->Login($email, $password);
}
?>