<?php include('connection.php');

session_start();
if(isset($_SESSION['username'])){

}else {
    header("location: logout.php");
}

$id = $_GET['id'];

//amar local file delete korte link lagbe

$q="SELECT  `userCodeLink` FROM `usercodes` WHERE `codeID`=$id";

//echo $q;
$qee_q = mysqli_query( $conn, $q);
$row = mysqli_fetch_array ($qee_q);
$location = $row['userCodeLink'];
//echo $location;
unlink($location);
$qrr= "DELETE FROM `usercodes` WHERE `codeID`=$id;";

//echo $qrr;
$queryy = mysqli_query( $conn, $qrr);

if($queryy) {
	header("location: code.php");
}

?>