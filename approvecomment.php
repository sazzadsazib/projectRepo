<?php include('connection.php');

session_start();
if(isset($_SESSION['username'])){

}else {
    header("location: logout.php");
}

if($_SESSION['userType']==1) {

}else {
  header("location: profile.php");
}



$id = $_GET['id'];

$q="UPDATE `commentcode` SET `codeAdminAccess` = '1' WHERE `commentcode`.`commentID` = $id;";
//echo $q;
$qee_q = mysqli_query( $conn, $q);
if($qee_q) {
	header("location: approve.php");
}
?>