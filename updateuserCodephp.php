<?php include('connection.php');

session_start();
if(isset($_SESSION['username'])){

}else {
    header("location: logout.php");
}

$id = $_GET['id'];
$codes_name=$_FILES['codes']['name'];
$codes_tmp=$_FILES['codes']['tmp_name'];
//echo $codes_name;
//echo $id ;
//echo $newAdd;
$newAddr= "codes/$codes_name";
//echo $newAddr;
$q="UPDATE `usercodes` SET `codeName` = '$newAddr' WHERE `usercodes`.`codeID` = $id;";
$qee_q = mysqli_query( $conn, $q);
move_uploaded_file($codes_tmp,$newAddr);
 
 if($qee_q) {
 	header("location: code.php");
 }


?>