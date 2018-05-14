<?php  
    /**
     * 
     */
    class Auth
    {
        public $conn;
        public function __construct($conn)
        {
            $this->conn = $conn;
        }
        public function newUser($userData)
        {
            // Connection Query
            $conn = $this->conn;
            // Check if Email Exist
            if ($this->checkEmailExistence($userData['email']) == 200) {
                return 406;
            } else {
                // Insert Data
                if (isset($userData['referrer']) && !empty($userData['referrer'])) {
                    //check if user with ref code exists
                    $referrer = mysqli_real_escape_string($conn, $userData['referrer']);
                    $sql = "SELECT * FROM users WHERE refid = '{$referrer}'";
                    
                    $result = mysqli_query($conn, $sql);
                    if ($result && ($count = mysqli_num_rows($result)) > 0) {
                        //user exists. Update user's ref count
                        $this->updateRefCount($referrer);
                    } else {
                        $referrer = null;
                    }
                } else {
                    $referrer = null;
                }

                $newUser = sprintf("INSERT INTO users (uname, fullname, email, pword, refid, phone, gender, referrer) " .
                "VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s'); ",
                    mysqli_real_escape_string($conn, $userData['username']),
                    mysqli_real_escape_string($conn, $userData['name']),
                    mysqli_real_escape_string($conn, $userData['email']),
                    mysqli_real_escape_string($conn, $userData['password']),
                    mysqli_real_escape_string($conn, $userData['myrefID']),
                    mysqli_real_escape_string($conn, $userData['phone']),
                    mysqli_real_escape_string($conn, $userData['gender']),
                    $referrer,
                    mysqli_insert_id($conn));
                if ($result = mysqli_query($conn, $newUser)) {
                    $_SESSION['userID'] = $userID = mysqli_insert_id($conn);
                    return 200;
                    //return $this->newRef($userData['referrerID'], $userID);
                } else {
                    return mysqli_error($conn);
                }
            }
        }
        public function newRef($refID, $userID)
        {
            // Connection Query
            $conn = $this->conn;
            // Insert Data
            $newRef = sprintf("INSERT INTO trackref (refID, userID, dateJoined) " .
            "VALUES ('%s', '%s', '%s'); ",
                mysqli_real_escape_string($conn, $refID),
                mysqli_real_escape_string($conn, $userID),
                mysqli_real_escape_string($conn, date("Y:m:d H:i:sa")),
                mysqli_insert_id($conn));
            if (mysqli_query($conn, $newRef)) {
                return $this->updateRefCount($refID);
            } else {
                return mysqli_error($conn);
            }
        }
        public function updateRefCount($refID)
        {
            // Connection Query
            $conn = $this->conn;
            // Update Count
            $updateRefCount = "UPDATE users SET refcount = refcount + 1 WHERE refid='$refID'";
            if (mysqli_query($conn, $updateRefCount)) {
                return 200;
            } else {
                return mysqli_error($conn);
            }
        }
        public function userData($userID)
        {
            // Connection Query
            $conn = $this->conn;
            // Fetch user Data
            $userData = "SELECT * FROM users WHERE id='$userID'";
            $req = mysqli_query($conn, $userData);
            if (mysqli_num_rows($req) > 0) {
                $row = mysqli_fetch_assoc($req);
                header("Content-type:application/json");
                return json_encode($row);
            }
        }
        public function checkEmailExistence($email)
        {
            // Connection Query
            $conn = $this->conn;
            // Verify Email
            $checkEmail = "SELECT email FROM users WHERE email='$email'";
            $req = mysqli_query($conn, $checkEmail);
            if (mysqli_num_rows($req) > 0) {
                return 200; // Ok, Found
            } else {
                return 406; // Not Found
            }
        }
        public function Login($email, $password)
        {
            // Connection Query
            $conn = $this->conn;
            // Query Login
            $login = "SELECT * FROM users WHERE email='$email' AND pword='$password'";
            $req = mysqli_query($conn, $login);
            if (mysqli_num_rows($req) > 0) {
                $row = mysqli_fetch_array($req);
                $_SESSION['userID'] = $row['id'];
                return 200;
            } else {
                return 406;
            }
        }
        public function mt_rand_str($l, $c = 'abcdefghijklmnopqrstuvwxyz1234567890')
        {
            for ($s = '', $cl = strlen($c)-1, $i = 0; $i < $l; $s .= $c[mt_rand(0, $cl)], ++$i);
            return $s;
        }
        public function Logout()
        {
            if (isset($_SESSION['userID'])) {
                unset($_SESSION['userID']);
                session_destroy();
                return 200;
            } else {
                return 406;
            }
        }
    }
?>