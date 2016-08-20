<?php include('connection.php');

	$userFirstName = $_POST['fname'];
	
	$userLastName = $_POST['lname'];
	$userDOB = $_POST['dob'];
	$userName = $_POST['userName'];
	$userTypeName= $_POST['radio'];
	$userFavFood = $_POST['favFood'];
	$userFavPet = $_POST['favPet'];
	$userPass = $_POST ['passwords'];
	$userPhoneNo = $_POST [ 'userPhone'];
	$pin = $_POST ['pin'];
	$emailvar= $_POST ['emails'];

if($pin == "5553") {
	if($userTypeName == "admin") {
		$userType=1;
	}else {
		$userType=0;
	}
}else {
	$userType=0;
}

	 $queryName= "INSERT INTO `userinformation` (`userID`, `userName`, `userEmail`, `FirstName`, `LastName`, `userType`, `userPass`, `userPhoneNo`, `userDOB`, `userFavFood`, `userFavPet`) VALUES (NULL, '$userName', '$emailvar','$userFirstName', '$userLastName', '$userType', '$userPass', '$userPhoneNo', '$userDOB', '$userFavFood', '$userFavPet');";
	 $query = mysqli_query( $conn,$queryName);
     try {
                if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
                {
                    echo "Please select an image.";
                }
                else
                {
                    $image= addslashes($_FILES['image']['tmp_name']);
                    $name= $_POST['userName'];

                    $image= file_get_contents($image);
                    $image= base64_encode($image);
                    saveimage($name,$image);
                }
              }catch (Exception $e) {
                echo $e;
              }
              function saveimage($name,$image)
            {
                include('connection.php');
                
                
                 $qry="INSERT INTO `userinfoimage` (`userName`, `userImage`) VALUES ('$name', '$image' );";
                // echo $qry;
                 
                try {
                $result = mysqli_query( $conn, $qry);
                if($result)
                {
                   // echo "<br/>Image uploaded.";
                }
                else
                {
                   // echo "<br/>Image not uploaded.";
                }
              }catch (Exception $e) {
                echo $e;
              }
            }
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
                <h1><em>Welcome</em></h1>
                <hr>
                <p >Your Repo Signup was</p>

                <a href="login.php#login" class="btn btn-primary btn-xl page-scroll"><?php 
                 if($query) {
	 	echo "Successfull";
	 }else {
	 	echo "Failed";
	 }
	
?>		
</a>
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
 

	