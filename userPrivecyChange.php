<?php include('connection.php');

session_start();
if(isset($_SESSION['username'])){

}else {
    header("location: logout.php");
}

$id = $_GET['id'];
$q= "SELECT `userAccess` FROM `usercodes` WHERE `codeID`=$id;";
//echo $q;
$queryy = mysqli_query( $conn, $q);
$row = mysqli_fetch_array ($queryy);
$access = $row['userAccess'];
if($access == 0) {
	$access =1;
}else {
	$access = 0;
}


$qrr= "UPDATE `usercodes` SET `userAccess` = '$access' WHERE `usercodes`.`codeID` = $id;";
echo $qrr;
$queryy = mysqli_query( $conn, $qrr);

if($queryy) {
	header("location:code.php");
}
?>