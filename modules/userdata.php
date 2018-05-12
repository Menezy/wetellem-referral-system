<?php
session_start();
include_once '../classes/config.php';
include_once '../classes/auth.php';
// Initialize Class
$auth = new Auth($conn);
$userID = $_SESSION['userID'];
echo $json = $auth->userData($userID);
$obj = json_decode($json, true);
/**
 * echo $obj['name'] == Precious Tom
 */
?>