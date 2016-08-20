<?php include('connection.php');
session_start();

	$userFirstName = $_POST['fname'];
	$userLastName = $_POST['lname'];
	$userDOB = $_POST['dob'];
	$username = $_SESSION['username'];
	$userFavFood = $_POST['favFood'];
	$userFavPet = $_POST['favPet'];
	$userPass = $_POST ['passwords'];
	$userPhoneNo = $_POST ['userPhone'];
	$emailvar= $_POST ['emails'];

/* echo $userFirstName;
	echo $userLastName;
	echo $userDOB;
	echo $username;
	echo $userFavFood;
	echo $userFavPet;
	echo $userPass;
	echo $userPhoneNo;
	echo $emailvar; */

	$qu="UPDATE `userinformation` SET `userEmail` = '$emailvar', `FirstName` = '$userFirstName', `LastName` = '$userLastName', `userPass` = '$userPass', `userPhoneNo` = '$userPhoneNo', `userDOB` = '$userDOB', `userFavFood` = '$userFavFood', `userFavPet` = '$userFavPet' WHERE `userinformation`.`userName` = '$username';";
	echo $qu;
	$query = mysqli_query( $conn,$qu);

	IF($query) {
		header("location: profile.php#userInfo");
	}else {
		echo "ERROR";
	}



?>