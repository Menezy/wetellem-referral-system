<?php
require_once ('../classes/config.php');
require_once('../classes/auth.php');
 if(isset($_POST['submit'])){
     $username = $_POST['uname'];
     $email = $_POST['email'];
     $fullname = $_POST['fullname'];
     $pword1 = $_POST['pword'];
     $pword2 = $_POST['repeatpword'];
     $gender = $_POST['gender'];
     $phone = $_POST['phone'];
     if($pword1 !== $pword2){
         die("Gerout! Passwords must match!");
     }else{
         $pword = $pword1;
         //$userData = array($username, $email, $fullname, $pword1, $pword2, $gender);
         $bit1 = mt_rand(1111, 5555);
         $bit2 = mt_rand(3333, 9999);
         $refid = substr($username, 0,3).$bit1.$bit2;

        $authClass->newUser($conn, $username, $email, $fullname, $pword, $refid, $phone, $gender);

         //var_dump($userData);
     }
 }

?>