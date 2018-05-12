<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />

</head>

<body>
    <form action="modules/runsignup.php" method="POST" class="container">
        <br>
        <h5 class="text-center">Sign in </h5>
        <br>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
               
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
                    <input type="password" name="pword" class="form-control" placeholder="Enter your password" aria-label="password" aria-describedby="basic-addon1">
                </div>
                 <a href="#">Forgot Password?</a>
                 <br><br>
                 <input type="submit" class="btn btn-primary btn-block" name="submit" value="Sign in" />
               
            </div>
            
            <div class="col-sm-4"></div>


        </div>
    </form>

    <script src="jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</body>

</html>
