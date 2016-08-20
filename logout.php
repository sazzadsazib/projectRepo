<?php include('connection.php');
//if(isset($_SESSION['username'])){
//session_destroy();
//} 
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("location: login.php#login"); //to redirect back to "index.php" after logging out
exit();
?>