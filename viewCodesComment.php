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
/* desert scheme ported from vim to google prettify */
pre.prettyprint { display: block; background-color: #333 }
pre .nocode { background-color: none; color: #000 }
pre .str { color: #ffa0a0 } /* string  - pink */
pre .kwd { color: #f0e68c; font-weight: bold }
pre .com { color: #87ceeb } /* comment - skyblue */
pre .typ { color: #98fb98 } /* type    - lightgreen */
pre .lit { color: #cd5c5c } /* literal - darkred */
pre .pun { color: #fff }    /* punctuation */
pre .pln { color: #fff }    /* plaintext */
pre .tag { color: #f0e68c; font-weight: bold } /* html/xml tag    - lightyellow */
pre .atn { color: #bdb76b; font-weight: bold } /* attribute name  - khaki */
pre .atv { color: #ffa0a0 } /* attribute value - pink */
pre .dec { color: #98fb98 } /* decimal         - lightgreen */

/* Specify class=linenums on a pre to get line numbering */
ol.linenums { margin-top: 0; margin-bottom: 0; color: #AEAEAE } /* IE indents via margin-left */
li.L0,li.L1,li.L2,li.L3,li.L5,li.L6,li.L7,li.L8 { list-style-type: none }
/* Alternate shading for lines */
li.L1,li.L3,li.L5,li.L7,li.L9 { }

@media print {
  pre.prettyprint { background-color: none }
  pre .str, code .str { color: #060 }
  pre .kwd, code .kwd { color: #006; font-weight: bold }
  pre .com, code .com { color: #600; font-style: italic }
  pre .typ, code .typ { color: #404; font-weight: bold }
  pre .lit, code .lit { color: #044 }
  pre .pun, code .pun { color: #440 }
  pre .pln, code .pln { color: #000 }
  pre .tag, code .tag { color: #006; font-weight: bold }
  pre .atn, code .atn { color: #404 }
  pre .atv, code .atv { color: #060 }
}



.panel-shadow {
    box-shadow: rgba(0, 0, 0, 0.3) 7px 7px 7px;
}
.panel-white {
  border: 1px solid #dddddd;
}
.panel-white  .panel-heading {
  color: #333;
  background-color: #fff;
  border-color: #ddd;
}
.panel-white  .panel-footer {
  background-color: #fff;
  border-color: #ddd;
}

.post .post-heading {
  height: 95px;
  padding: 20px 15px;
}
.post .post-heading .avatar {
  width: 60px;
  height: 60px;
  display: block;
  margin-right: 15px;
}
.post .post-heading .meta .title {
  margin-bottom: 0;
}
.post .post-heading .meta .title a {
  color: black;
}
.post .post-heading .meta .title a:hover {
  color: #aaaaaa;
}
.post .post-heading .meta .time {
  margin-top: 8px;
  color: #999;
}
.post .post-image .image {
  width: 100%;
  height: auto;
}
.post .post-description {
  padding: 15px;
}
.post .post-description p {
  font-size: 14px;
}
.post .post-description .stats {
  margin-top: 20px;
}
.post .post-description .stats .stat-item {
  display: inline-block;
  margin-right: 15px;
}
.post .post-description .stats .stat-item .icon {
  margin-right: 8px;
}
.post .post-footer {
  border-top: 1px solid #ddd;
  padding: 15px;
}
.post .post-footer .input-group-addon a {
  color: #454545;
}
.post .post-footer .comments-list {
  padding: 0;
  margin-top: 20px;
  list-style-type: none;
}
.post .post-footer .comments-list .comment {
  display: block;
  width: 100%;
  margin: 20px 0;
}
.post .post-footer .comments-list .comment .avatar {
  width: 35px;
  height: 35px;
}
.post .post-footer .comments-list .comment .comment-heading {
  display: block;
  width: 100%;
}
.post .post-footer .comments-list .comment .comment-heading .user {
  font-size: 14px;
  font-weight: bold;
  display: inline;
  margin-top: 0;
  margin-right: 10px;
}
.post .post-footer .comments-list .comment .comment-heading .time {
  font-size: 12px;
  color: #aaa;
  margin-top: 0;
  display: inline;
}
.post .post-footer .comments-list .comment .comment-body {
  margin-left: 50px;
}
.post .post-footer .comments-list .comment > .comments-list {
  margin-left: 50px;
}
.btns {
  background: #f06040;
  background-image: -webkit-linear-gradient(top, #f06040, #753c30);
  background-image: -moz-linear-gradient(top, #f06040, #753c30);
  background-image: -ms-linear-gradient(top, #f06040, #753c30);
  background-image: -o-linear-gradient(top, #f06040, #753c30);
  background-image: linear-gradient(to bottom, #f06040, #753c30);
  -webkit-border-radius: 8;
  -moz-border-radius: 8;
  border-radius: 8px;
  text-shadow: 1px 1px 3px #241f24;
  -webkit-box-shadow: 2px 3px 12px #000000;
  -moz-box-shadow: 2px 3px 12px #000000;
  box-shadow: 2px 3px 12px #000000;
  font-family: Arial;
  color: #ffffff;
  font-size: 10px;
  padding: 11px 18px 13px 18px;
  text-decoration: none;
  margin: 0 0 0 68%;
}

.btns:hover {
  background: #665755;
  background-image: -webkit-linear-gradient(top, #665755, #332927);
  background-image: -moz-linear-gradient(top, #665755, #332927);
  background-image: -ms-linear-gradient(top, #665755, #332927);
  background-image: -o-linear-gradient(top, #665755, #332927);
  background-image: linear-gradient(to bottom, #665755, #332927);
  text-decoration: none;
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
         <li ><a href = "code.php">CODE</a></li>
         <?php  if($_SESSION['userType']==1) { ?>
           <li><a href = "approve.php">APPROVAL</a></li>
        <?php } ?>
         <li class = "active" class = "dropdown">
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
<?php

$id = $_GET['id'];
$qr= "SELECT * FROM `usercodes` WHERE `codeID`='$id'";
$query = mysqli_query( $conn, $qr);
$row = mysqli_fetch_array ($query);

?>
        <!-- search bar starts -->
         <div style="Margin: 10%" >
          <h2 class="section-heading" style="text-align: center; color: #f05f40;  font-style: bold;">
            <?php echo $_SESSION['username'] ?></h2>
             <br/>
             <h4  class="section-heading" style="text-align: center; color: #f05f40;  font-style: bold;">
              Title : <?php echo  $row['codeTitle']; ?></h4>
              <h5  class="section-heading" style="text-align: center; color: #f05f40;  font-style: bold;">
              File Name : <?php echo  $row['codeName']; ?></h5>
                  <hr class="primary">  
      <aside class="bg-dark" id="userInfo">
        <div class="container text-center">
            <div class="call-to-action">
                <div class="col-lg-8 col-lg-offset-2 text-center" style="width: 100%;">
                  <br/>




<br/>



                </div>
                
            </div>

        </div>
        <pre class="prettyprint" style="text-align:Left; Margin-right: 20%;padding: 10px;">
          <!--#include file="<?php echo $row['userCodeLink'] ?>" -->

<?php
    $myfilename = $row['userCodeLink'];;
    if(file_exists($myfilename)){
      echo file_get_contents($myfilename);
      // include("$myfilename");  

    }
?>
</pre>

</div>
<div style="Margin: -10% 0 10% 10%">
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<div class="container">
    <div class="row">
        <!-- rating -->
        <div style="color: #f05f40; margin-left: 45% ">
        <h4  class="section-heading" style="text-align: left; color: #CCCCCC;  font-style: bold;">Rate: </h4>
        <form method="post" action="rated.php?id=<?php echo $row['codeID']; ?>">
        <label class="radio-inline" ><input type="radio"  name='radio' Value="1" >1</label>
        <label class="radio-inline" ><input type="radio"  name='radio'  Value="2" >2</label>
         <label class="radio-inline"><input type="radio"  name='radio' Value="3" >3</label>
        <label class="radio-inline" ><input type="radio"  name='radio'  Value="4" >4</label>
         <label class="radio-inline"><input type="radio"  name='radio' Value="5" checked >5</label>
         <button style="width: 12%; font-size: 10pt; Margin-left: 33%; Margin-top: -25px;" class="btn btn-lm btn-primary btn-block" name="submit" type="submit">Rate</button>
       </form>
          <?php
        //rating dekhabo
        $q="SELECT  `rating` FROM `ratingtable` WHERE `codeID`=$id;";
       // echo $q;
        $query = mysqli_query( $conn, $q);
        $sum=0;
        $count = mysqli_num_rows($query);

        while ($row = mysqli_fetch_array ($query)) { 

         $sum= $sum+$row['rating'];

       }
      // echo $sum;
      // echo $count;
        ?><h2  class="section-heading" style="margin-left: 0%; color: #f05f40;"><br/><pre style="font-size: 15pt; width:40%;">    AVG Rating: <?php if($sum==0 || $count==0 ) {echo "0"; }else {echo ($sum/$count);} ?></pre></h2>
         
       </div>
               <br/><br/>
      <!-- write review -->
      <div class="form-group">
   <h4  class="section-heading" style="text-align: left; color: #f05f40;  font-style: bold;">Comment: </h4>

  <form method="post" action="">
  <textarea style="width: 75%;"class="form-control" name="cmnt" rows="5" id="comment"></textarea>
  <button type="submit"  name ="ss" class="btns">Comment</button> </form>
  <?php 
  if(isset($_POST['ss'])){ 
//$id = $_GET['id'];
$userName=$_SESSION['username'];
$comment= $_POST['cmnt'];
$date=date("Y-m-d");

$q="INSERT INTO `commentcode` (`commentID`, `codeID`, `codeAdminAccess`, `commentS`, `commentDate`, `userName`) VALUES (NULL, '$id', '0', '$comment', '$date', '$userName');";
$query = mysqli_query( $conn, $q);
//echo $q;

if($query) {
   ?><h3 class="section-heading" style="text-align: center; color: #f05f40;  font-style: bold;"> Updated &amp; waiting for Admin Approval </h3> <?php
}else {
 ?><h3 class="section-heading" style="text-align: center; color: #f05f40;  font-style: bold;"> Failed </h3> <?php
}

}

?>
        </div>
      <!--comment starts-->
      <?php 
      $qr="SELECT * FROM `commentcode` WHERE `codeID`=$id AND `codeAdminAccess`=1";
     // echo $qr;
      $queryy = mysqli_query( $conn, $qr);

      while ($row = mysqli_fetch_array ($queryy)) {  $cmntid= $row['codeID']; $var= $row["commentID"]; ?>

        <div class="col-sm-8">
            <div class="panel panel-white post panel-shadow">
                <div class="post-heading">
                    <div class="pull-left image">
                      <?php
                      $name= $row['userName'];
                      $st= "SELECT * FROM `userinfoimage` WHERE `userName`='$name'";
                      //echo $st;
                      $result = mysqli_query( $conn, $st);
                 try {
                while($rowss = mysqli_fetch_array ($result))
                {
                    echo ' <center> <img src="data:image;base64,'.$rowss[1].' " class="img-circle avatar" alt="user profile image"> </center>  ';
                }
              }catch(Exception $e) { 
               // echo $e;
              }
                       
        ?>
                        
                    </div>
                    <div class="pull-left meta">
                        <div class="title h5">
                            <a href="#"><b><?php
                            
                           // echo $var;
                             $name= $row['userName'];
                             $qrrr="SELECT `FirstName`, `LastName`FROM `userinformation` WHERE `userName`='$name';";
                               //   echo $qrrr;
                            $quey = mysqli_query( $conn, $qrrr);
                            $rowsa = mysqli_fetch_array ($quey);
                            echo $rowsa['FirstName']; ?> &nbsp; <?php echo $rowsa['LastName'];

                              ?></b></a>
                            Commented
                        </div>
                        <h6 class="text-muted time">on <?php echo $row['commentDate']; ?></h6>
                    </div>
                </div> 
                <div class="post-description"> 
                    <p><?php echo $row['commentS']; ?></p>

                    <?php 
                //    echo "reply hobe ekhane";
                   // echo $var;

                    $qrReply="SELECT * FROM `commentreply` WHERE `commentID`=$var AND `codeAdminAccess`=1;";
                              //    echo $qrReply;
                            $exReply = mysqli_query( $conn, $qrReply);
                           while ($rowReply = mysqli_fetch_array ($exReply)) { 
                            $counts = mysqli_num_rows($exReply);
                            if($counts >0) { 
                           ?> <span Style="color:orange; font-size: 16pt;"> <?php echo $rowReply['userName']; ?> </span> &nbsp;Replied on  <?php
                            echo $rowReply['replyDate']; ?>
                            <br/><p></p> <?php echo $rowReply['replyC0mment'];
                              }
                              ?> <hr> <?php
                            }

                    ?>
                    <br/>
                    <div class="form-group">
   <h4  class="section-heading" style="text-align: left; color: #f05f40;  font-style: bold;">Reply: </h4>

  <form method="post" action="postReply.php?id=<?php echo $row['commentID']; ?>">
  <textarea style="width: 75%;"class="form-control" name="reply" rows="5" id="reply"></textarea>
  <button type="submit"  name ="ssss" class="btns">Reply</button> </form>
  
        </div>
                </div>
            </div>


            <!--write review-->






        </div>
        <?php } ?>

    </aside>


 

    
        </div>
        
   
   

    

    
   

    

     
      <!-- code shower js -->
      <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
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
