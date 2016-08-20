<?php include('connection.php');

session_start();
if(isset($_SESSION['username'])){

}else {
    header("location:logout.php");
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

    <title>repO -Code</title>

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
           <?php  if($_SESSION['userType']==1) { ?>
           <li><a href = "approve.php">APPROVAL</a></li>
        <?php } ?>
         <li class = "dropdown">
            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
               PROFILE
               <b class = "caret"></b>
            </a>
            
            <ul class = "dropdown-menu">
               <li><a href = "profile.php">Profile</a></li>
               <li><a href = "profile.php#userInfo">Information</a></li>
               <li><a href = "codeHistory.php">Code History</a></li>
               <li><a href = "newCodeUpload.php">New Code</a></li>
               
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
          <h2 class="section-heading" style="text-align: center; color: #f05f40;  font-style: bold;"> Your Codes!</h2>
                    <hr class="primary">
           
    
        </div>
        <div style = "Margin: 10%; color: #aaaaaa;">

<?php 
$username= $_SESSION["username"];
$qrrr=  "SELECT * FROM `usercodes` WHERE `userName`='$username';";
//echo $qrrr;
$queryy = mysqli_query( $conn, $qrrr);


?>
<table class="table table-hover">
  

  
  <tr style="background-color: #333333;">
    <th>CodeID</th><th>CodeTitle</th><th>CodeName</th><th>Status</th><th>Privecy</th><th>Update</th><th>Delete</th><th>View</th>
  </tr>
  <?php while ($row = mysqli_fetch_array ($queryy)) { ?>
  <?php 
$status="";
if($row['userAdminApproval'] == 0 ){
 $status="waiting";
  }else if($row['userAdminApproval'] == 1){
  $status= "accepted";
 }else {
  $status="Rejected";
} ?>
  <tr><td><?php echo $row['codeID']; ?></td>
  <td><?php echo $row['codeTitle']; ?></td>
  <td><?php echo $row['codeName']; ?></td>
  <td><?php
   if($status == "waiting") {
    ?> <span class="label label-warning"><?php echo "Waiting"; ?></span> <?php
}else if($status == "accepted") {
?><span class="label label-success"><?php echo "Accepted"; ?></span> <?php

}else {
  ?> <span class="label label-danger"><?php echo "Rejected"; ?></span><?php
}  
?></td>
  <td><form method="post" action="userPrivecyChange.php?id=<?php echo $row['codeID']; ?>"><button style="width: 60%; font-size: 10pt;" class="btn btn-lm btn-primary btn-block" name="submit" type="submit"><?php $userAcc= $row['userAccess'];if($userAcc == 0) {echo "PRIVATE"; } else {echo "PUBLIC";} ?></button></form></td>
  <td><form method="post" action="updateUserCode.php?id=<?php echo $row['codeID']; ?>"><button style="width: 60%; font-size: 10pt;" class="btn btn-lmlm btn-primary btn-block" name="submit" type="submit">Update</button></form></td>
  <td><form method="post" action="userCodeDelete.php?id=<?php echo $row['codeID']; ?>"><button style="width: 60%; font-size: 10pt;" class="btn btn-lm btn-primary btn-block" name="submit" type="submit">Delete</button></form></td>
<td><form method="post" action="showCode.php?id=<?php echo $row['codeID']; ?>"><button style="width: 60%; font-size: 10pt;" class="btn btn-lm btn-primary btn-block" name="submit" type="submit">View</button></form></td>


 </tr>
  <?php } ?>

  </tbody>
</table>




        </div>
   
   

    

    
   

    

     

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
