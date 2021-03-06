<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome4/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Tell Em'| Dashboard</title>
</head>

<body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <!-- Navbar content -->
                    <a class="navbar-brand" href="#"><img src="Mask.png" alt="logo" width="50px;"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto">
                           
                            <form class="form-inline my-2 my-lg-0">
                                    
                                    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Log Out</button>
                            </form>
                        </ul>
                    </div>
            
                </nav>
    <br>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-xs-12 col-lg-6" id="left">
                    <div class="card card-block" style="width:450px;height:420px;">
                        <br>
                        <h4 class="card-title text-center">Welcome,<span></span></h4>
                        <p class="card-text">
                            <p class="text-center">Your current rank is</p>
                            <span class="text-center" style="color:red"; id="rank">
                                    <h4>New Member</h4>
                                </span>
                            <hr>
                            <p class="text-center">This is your unique referral link</p>
                            <p id="referralLink" style="width:400px;height:40px;">http://wetellem.com/?ref_code=7llg67w24pa51k5x</p>
                            <br>
                            <br>
                            <button class="btn btn-primary" data-clipboard-target="#referralLink">Copy referral link</button>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-6" id="right">
                    <h2 style="color:purple;">Interested in priority access?</h2>
                    <p>Share with <span style="color: red;">9</span> more friends to become a Fresher. The more friends, the higher your reward.</p>
                    <h4 class="" style="color: red;">Share on:</h4>
                    <div id="socialbutton">
                        <button class="btn-primary"><i class="fa fa-facebook"></i>acebook</button>
                        <button><i class="fa fa-twitter"></i>Twitter</button>
                        <button><i class="fa fa-linkedin"></i>LinkedIn</button>
                    </div>
                    <br><br>
                    <img class="img-responsive" src="img/perks .png" alt="referral info" width="70%">
                </div>

            </div>
            
        </div>
        <div class="text-center" id="footer">
                <span>®2018 Tell EM', All rights reserved. <a href="#">Terms</a> and <a href="#">Privacy</a></span>
         </div>

    <script src="jquery.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
    <script src="clipboard.js/dist/clipboard.min.js"></script>
    <script src="main.js"></script>
</body>

</html>