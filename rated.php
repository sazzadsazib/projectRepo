<?php include('connection.php');

session_start();
if(isset($_SESSION['username'])){

}else {
    header("location: logout.php");
}



$id = $_GET['id'];
$userName=$_SESSION['username'];
$qr= "SELECT * FROM `ratingtable` WHERE `userName`='$userName' AND `codeID`=$id;";
//echo $qr;
$query = mysqli_query( $conn, $qr);
$count = mysqli_num_rows($query);
//echo $count;


$rating= $_POST['radio'];
//echo $rating;
$qqr="";
if($count > 0) {
$qqr="UPDATE `ratingtable` SET `rating` = '$rating' WHERE `ratingtable`.`userName` = '$userName' AND  `ratingtable`.`codeID`=$id;";
}else {
$qqr="INSERT INTO `ratingtable` (`ratingID`, `codeID`, `userName`, `rating`) VALUES (NULL, '$id', '$userName', '$rating');";
}
//echo $qqr;
$query = mysqli_query( $conn, $qqr);
if($query) {
	header("location: viewCodesComment.php?id=$id");
}
?>