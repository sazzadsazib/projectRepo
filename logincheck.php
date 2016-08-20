<?php include('connection.php');
//if(isset($_SESSION['username'])){
//session_destroy();
//}
session_start();


if(isset($_POST['username'])){
    $username = $_POST['username'];
    if(isset($_POST['passwords'])){
    	$password= $_POST ['passwords'];
    	$query = mysqli_query($conn, "SELECT *FROM `userinformation`WHERE userName='$username' AND userPass='$password'");

	$count = mysqli_num_rows($query);
	$result = mysqli_fetch_array($query,MYSQLI_ASSOC);

	

	if($count==1) {
		if($result['userType'] == 3) {
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            $_SESSION["userType"] = $result['userType'];
            header("location: homeSuperAdmin.php");

            
        }else if($result['userType'] == 1) {
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            $_SESSION["userType"] = $result['userType'];
            header("location: home.php");

            
        } else {
			$_SESSION["username"] = $username;
			$_SESSION["password"] = $password;
			$_SESSION["userType"] = $result['userType'];
			header("location: home.php");
		}	
	} else {
        
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
    <link rel="icon" type="image/png" href="img/iconv2.png" width="50px">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">

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
                        <a class="page-scroll" href="logincheck.php#login">Login</a>
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
                
                <hr>
                <div class="row" style="margin: 0 0 0 20%">
        <div class="col-sm-6 col-md-4 col-md-offset-1" style="width: 60%;  border-radius: 5px;-moz-border-radius: 5px; -webkit-border-radius: 5px;">
            
            <div class="account-wall" style="background-color: #222222; border-radius: 5px;-moz-border-radius: 5px; -webkit-border-radius: 5px;">
                <a href="login.php#signup" class="btn btn-primary btn-xl page-scroll">Wrong Information. Signup?</a>
                
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
    </header>

    

   

     

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

<?php
	}
}
}else {
	//echo "login again";
}


	

?>