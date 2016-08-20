<?php include('connection.php');

session_start();
if(isset($_SESSION['username'])){

}else {
    header("location: logout.php");
}

$qr= "SELECT `userName`,`userEmail`,`FirstName`,`LastName`,`userType`, `userPass`,`userPhoneNo`,`userDOB`,`userFavFood`,`userFavPet`FROM `userinformation` WHERE `userName`='".$_SESSION['username']."';";
$query = mysqli_query( $conn, $qr);
//echo $qr;
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
   .container-1{
  width: 300px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
} 
.container-1 input#search{
  width: 200%;
  height: 30px;
  background: #2b303b;
  border: none;
  font-size: 10pt;
  float: left;
  color: #63717f;
  padding-left: 45px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}

.container-1 input#search::-webkit-input-placeholder {
   color: #65737e;
}
 
.container-1 input#search:-moz-placeholder { /* Firefox 18- */
   color: #65737e;  
}
 
.container-1 input#search::-moz-placeholder {  /* Firefox 19+ */
   color: #65737e;  
}
 
.container-1 input#search:-ms-input-placeholder {  
   color: #65737e;  
}
.container-1 .icon{
  position: absolute;
  top: 50%;
  margin-left: 17px;
  margin-top: 17px;
  z-index: 1;
  color: #4f5b66;
}
.container-1 input#search:hover, .container-1 input#search:focus, .container-1 input#search:active{
    outline:none;
    background: #ffffff;
  }

.buttons {
    background-color: #2b303b; /* Green */
    border: none;
    color: white;
    padding: 15px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 0px 2px;
    border-radius: 3px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}



.buttons:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}




</style>

</head>

<body style="background-color: #222222;"  id="page-top">

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
        <img alt="Brand" src="img/logo.png" width="65px"> </img>
      </a>

            </div>
            <div>
      <ul class = "nav navbar-nav" style="Margin:0 0 0 35%">
         <li ><a href = "home.php">HOME</a></li>
         <li class = "active"><a href = "code.php">CODE</a></li>
         <li class = "dropdown">
            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
               PROFILE
               <b class = "caret"></b>
            </a>
            
            <ul class = "dropdown-menu">
               <li><a href = "profile.php">Profile</a></li>
               <li><a href = "profile.php#userInfo">Information</a></li>
               <li><a href = "#">Code History</a></li>
               <li><a href = "#">New Code</a></li>
               
            </ul>
            
         </li>
      </ul>
   </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                    
                     <!--passmeter -->  
          <li >
            <a href="logout.php" class="btn btn-primary btn-xl page-scroll"> <?php 
           // echo $_SESSION["username"];
            if (isset($_SESSION['username'])) { 
            echo  "Logged in AS [ " . $_SESSION["username"] . " ]";
        }else {
        echo "LOGIN";
    }
    ?></a>
          </li>
                    
                    
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


        <!-- search bar starts -->
         <div style="Margin: 10%" >
          <h2 class="section-heading" style="text-align: center; color: #f05f40;  font-style: bold;"> Welcome <?php echo $_SESSION['username'] ?>!</h2>
                    
      <aside class="bg-dark" id="userInfo">
        <div class="container text-center">
            <div class="call-to-action">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                  <br/>
                    <h2 class="section-heading" style="text-align: center; color: #f05f40;  font-style: bold;">Update Your  Information!</h2>
                    <hr class="primary">
                    <p>Click on the field and save changes! </p>
                </div>
                
            </div>

        </div>
        
        <?php   $row = mysqli_fetch_array ($query); ?>
         <form class="form-signin" method="post" action="editInfoAc.php">
                <input type="text" name='fname' class="form-control" value="<?php echo $row['FirstName']; ?>" required autofocus>
                <input type="text"  name='lname' class="form-control" value="<?php echo $row['LastName']; ?>" required autofocus>
                <input type="date"  name='dob' class="form-control" value="<?php echo $row['userDOB']; ?>" required autofocus>
                <input type="text"  name='userName' class="form-control" value ="<?php echo $row['userName']; ?>" required autofocus disabled>
                <input type="text"  name='userPhone' class="form-control" value ="<?php echo $row['userPhoneNo']; ?>" required autofocus >
                <input type="email"  name='emails' class="form-control" value="<?php echo $row['userEmail']; ?>" required autofocus>
                <input type="text"  name='favFood' class="form-control" value="<?php echo $row['userFavFood']; ?>" required autofocus>
                <input type="text"  name='favPet' class="form-control" value="<?php echo $row['userFavPet']; ?>" required autofocus>
                <input type="password" name='passwords' class="form-control" value="<?php echo $row['userPass']; ?>" required autofocus>
                

                <button style="width: 40%; margin: 0 0 0 60%" class="btn btn-lg btn-primary btn-block" name="submit" type="submit">
                 Update</button>
               
               
                </form>
</div>
    </aside>
    
        </div>
        
   
   userPhoneNo

    

    
   

    

     

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
