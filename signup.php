<?php  
    include_once 'classes/config.php';
    $refID = (isset($_GET['refID'])) ? $_GET['refID'] : NULL ;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $baseURL . "css/bootstrap.min.css"; ?>">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $baseURL . "main.css"; ?>" />
    <base href="<?php echo $baseURL; ?>">
</head>

<body>
    <form action="modules/runsignup.php" method="POST" class="container">
        <br>
        <h5 class="text-center">Sign Up</h5>
        <br>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <input type="hidden" name="referrerID" value="<?php echo $refID; ?>">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" </span>
                    </div>
                    <input type="text" name="uname" class="form-control" placeholder="Enter your Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" </span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email address" aria-label="email" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" </span>
                    </div>
                    <input type="text" name="fullname" class="form-control" placeholder="Enter your fullname" aria-label="fullname" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" </span>
                    </div>
                    <input type="password" name="pword" class="form-control" placeholder="Enter your password" aria-label="password" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" </span>
                    </div>
                    <input type="password" name="repeatpword" class="form-control" placeholder="Repeat Password" aria-label="password" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" </span>
                    </div>
                    <input type="text" name="phone" class="form-control" placeholder="Enter your phone number" aria-label="number" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" </span>
                    </div>
                    <input type="text" name="referral" class="form-control" placeholder="Enter your referral code" aria-label="number" aria-describedby="basic-addon1"
                        value="<?php echo (isset($_GET['ref_code']) && !empty($_GET['ref_code'])) ? $_GET['ref_code'] : '' ?>">
                </div>
                <!--<div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="profilepic" class="custom-file-input" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>-->
                Gender
                <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                        <label class="form-check-label">Male</label>
                </div>
                <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
                        <label class="form-check-label">Female</label>
                 </div>
                 <a href="#">Forgot Password?</a>
                 <br><br>
                 <input type="submit" class="btn btn-primary btn-block" name="submit" value="Sign up" />
               
            </div>
            
            <div class="col-sm-4"></div>


        </div>
    </form>

    <script src="<?php echo $baseURL . "jquery.js"?>"></script>
    <script src="<?php echo $baseURL . "js/bootstrap.min.js"?>"></script>
    <script src="<?php echo $baseURL . "main.js"?>"></script>
</body>

</html>