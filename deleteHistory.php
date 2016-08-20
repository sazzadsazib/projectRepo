<?php include('connection.php');

session_start();
if(isset($_SESSION['username'])){

}else {
    header("location: logout.php");
}

$id = $_GET['id'];

//amar local file delete korte link lagbe

$q="SELECT * FROM `codehistory` WHERE `orderID`=$id";

//echo $q;
$qee_q = mysqli_query( $conn, $q);
$row = mysqli_fetch_array ($qee_q);
$location = $row['userCodeLink'];
$codeID= $row['codeID'];
//echo $location;
unlink($location); //deleting file
$qrr= "DELETE FROM `codehistory` WHERE `orderID`=$id;";

//echo $qrr;
$queryy = mysqli_query( $conn, $qrr);



if($queryy) {
	header("location: showCode.php?id=$codeID");
}

?>