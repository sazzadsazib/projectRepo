<?php include('connection.php');

session_start();
if(isset($_SESSION['username'])){

}else {
    header("location: logout.php");
}

$id = $_GET['id'];
$q= "SELECT`userType` FROM `userinformation` WHERE `userID`=$id;";
//echo $q;
$queryy = mysqli_query( $conn, $q);
$row = mysqli_fetch_array ($queryy);
$type = $row['userType'];
if($type == 0) {
	$type =1;
}else {
	$type = 0;
}


$qrr= "UPDATE `userinformation` SET `userType` = '$type' WHERE `userinformation`.`userID` = $id;";
echo $qrr;
$queryy = mysqli_query( $conn, $qrr);

if($queryy) {
	header("location:homeSuperAdmin.php");
}
?>