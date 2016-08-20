<?php 
 include('connection.php');
session_start();
if(isset($_SESSION['username'])){

}else {
    header("location: logout.php");
}



  if(isset($_POST['ssss'])){ 
//$id = $_GET['id'];
$userName=$_SESSION['username'];
$reply= $_POST['reply'];
$date=date("Y-m-d");
//echo $var;
$id= $_GET['id'];
//echo $var2;
 $qwr="INSERT INTO `commentreply` (`replyID`, `commentID`, `replyC0mment`, `userName`, `replyDate`, `codeAdminAccess`) 
 VALUES (NULL, '$id', '$reply', '$userName', '$date', '0');";
     // echo $qwr;
     $qewe = mysqli_query( $conn, $qwr);
     if($qewe) {
      header("location: home.php");
     }else {
     	echo "duplicate Comment try with space";
     }
}
?>