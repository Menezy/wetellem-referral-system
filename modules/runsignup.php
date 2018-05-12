<?php
session_start();
include_once '../classes/config.php';
include_once '../classes/auth.php';
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Initialize Class
    $auth = new Auth($conn);
    // Fetch User Data
     $pword1 = $_POST['pword'];
     $pword2 = $_POST['repeatpword'];
     if ($pword1 !== $pword2) {
         echo "Password does not match";
     } else {
        $userData = 
        array(
            'username' => $_POST['uname'],
            'name' => $_POST['fullname'], 
            'email' => $_POST['email'],
            'password' => $_POST['pword'],
            'myrefID' => $auth->mt_rand_str(16, 'abcdefghijklmnopqrstuvwxyz1234567890'),
            'phone' => $_POST['phone'],
            'gender' => $_POST['gender'],
            'referrerID' => $_POST['referrerID']
        );
        if ($auth->newUser($userData) == 200) {
            echo "Succefully Inserted User";
        } else if ($auth->newUser($userData) == 406) {
            echo $auth->newUser($userData);
        } else {
            echo $auth->newUser($userData);
        }  
     }
 }

?>