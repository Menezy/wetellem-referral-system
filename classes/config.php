<?php

/* 
 * This file contains config for the site - db conneection. 
 */

$config['server']['name'] = "localhost";
$config['server']['user'] = "root";
$config['server']['pass'] = "Qwertyuiop2";
$config['server']['dbname'] = "tellemdb";
# URL configs
$baseURL = "http://wetellem-referral-system.test/";
$logoURL = $baseURL."assets/img/logo.png";
// Create connection to the database
$conn = new mysqli($config['server']['name'], $config['server']['user'], $config['server']['pass'], $config['server']['dbname']);
// Check connection
if ($conn->connect_error) {
    die("Unable to connect to database: " . mysqli_connect_error());
} else {
   $message = "True";
   //return json_encode($message);
  return $message;
}
?>