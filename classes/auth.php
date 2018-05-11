<?php

class Auth {
    public function newUser($conn, $username, $email, $fullname, $pword, $refid, $phone, $gender) {

        $storeQuery = "INSERT INTO users(uname, fullname, email, pword, refid, phone, gender) VALUES('$username', '$fullname', '$email', '$pword', '$refid', '$phone', '$gender')";
        //Check to see if phone number or email has previously been registered.
        $checkEmail = "SELECT * FROM users WHERE email = '$email'";
        $queryEmail = $conn->query($checkEmail);
        if ($conn->affected_rows > 0) {
?>
<script>alert("Email already exists. Try again!"); window.history.back();</script>
<?php
        } else {
            $query = $conn->query($storeQuery) or die($conn->error);;

            if ($query == TRUE) {
    
                die("Successful!");
            }

        }

        
    }
}

$authClass = new Auth();

?>