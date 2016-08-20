<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>repO</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="icon" type="image/png" href="img/iconv2.png" width="50px">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">


</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
        <img alt="Brand" src="img\logo.png" width="50px"> </img>
      </a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="index.php#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#features">Features</a>
                    </li>
                    <li>
                        <a  class="page-scroll" href="index.php#contact">Contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="login.php#login">Login</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="login.php#signup">Register</a>
                    </li>
                    
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1><em>Allows you to Store Codes and lots of new features</em></h1>
                <hr>
                <p >REPO is a Online code repository !! focused mainly on programmers. it helps new programmers to learn from the codes
                    also let you store your code with privecy.</p>
                <a href="index.php#about" class="btn btn-primary btn-xl page-scroll">Learn More.</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="login">
        <div class="container">
            <h4 class="centerdAllign">Login to your account to have our service!</h4>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                   <div class="container">
                    
                    <hr class="primary">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-1" style="width: 60%;  border-radius: 5px;-moz-border-radius: 5px; -webkit-border-radius: 5px;">
            
            <div class="account-wall" style="background-color: #222222; border-radius: 5px;-moz-border-radius: 5px; -webkit-border-radius: 5px;">
                <img width= "30%" src="img\logo.png" alt="logo">
                
                <!-- formm stratrs for login here -->
                
               <form class="form-signin" method="post" action="logincheck.php">
                <input type="text" name='username' class="form-control" placeholder="User Name" required autofocus>
                <input type="password" name='passwords' class="form-control" placeholder="password" required autofocus>
                

                <button style="width: 40%; margin: 0 0 0 60%" class="btn btn-lg btn-primary btn-block" name="submit" type="submit">
                 Login</button>
               <a style="float: right" href="forgotpass.php">Forgot Password?</a>
                </form>

            </div>
            
        </div>
    </div>
</div>
                   
                </div>
            </div>
        </div>
    </section>

   <section class="bg-dark" id="signup">
        <div class="container text-center">
            <div class="call-to-action">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading" style="text-align:">Signup!</h2>
                    <hr class="primary">
                    <p>Provide All information to signup!</p>
                </div>
                
                <form class="form-signin" method="post" enctype="multipart/form-data" action="signup.php">
                <input type="text" name='fname' class="form-control" placeholder="First Name" required autofocus>
                <input type="text"  name='lname' class="form-control" placeholder="Last Name" required autofocus>
                <input type="date"  name='dob' class="form-control" placeholder="Date Of Birth" required autofocus>
                <input type="text"  name='userName' class="form-control" placeholder="UserName(max: 15char)" required autofocus>
                <input type="text"  name='userPhone' class="form-control" placeholder="Phone No" required autofocus>
                <input type="email"  name='emails' class="form-control" placeholder="Email" required autofocus>
                <label class="radio-inline" style="padding: 5%"><input type="radio"  name='radio' Value="admin" >Admin</label>
                <label class="radio-inline" style="padding: 5%"><input type="radio"  name='radio'  Value="user" checked="checked">User</label>
                <label class="btn btn-primary">
                Browse&hellip; <input type="file" name="image" style="display: none;" required/>
            </label>
                <input type="text"  name='pin' class="form-control" placeholder="If Admin Signup Provide PIN"  autofocus>
                <input type="text"  name='favFood' class="form-control" placeholder="You Favourate Food?" required autofocus>
                <input type="text"  name='favPet' class="form-control" placeholder="Your Favourate Pet?" required autofocus>
                <input type="password" name='passwords' class="form-control" placeholder="password" required autofocus>
                

                <button style="width: 40%; margin: 0 0 0 60%" class="btn btn-lg btn-primary btn-block" name="submit" type="submit">
                 Sign up</button>
               
               
                </form>
            </div>
        </div>
    </section>

     

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
