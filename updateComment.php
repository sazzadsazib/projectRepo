<?php include('connection.php');

session_start();
if(isset($_SESSION['username'])){

}else {
    header("location: logout.php");
}


$id = $_GET['id'];
$userName=$_SESSION['username'];
$comment= $_POST['cmnt'];

$q="INSERT INTO `commentcode` (`commentID`, `codeID`, `codeAdminAccess`, `commentS`, `userName`) VALUES (NULL, '$id', '0', '$comment', '$userName');";

//$query = mysqli_query( $conn, $q);
echo $q;

?>