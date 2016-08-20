<?php include('connection.php');


if(isset($_POST['username'])){
    $username = $_POST['username'];
    $favFood= $_POST ['favFood'];
    $favPet= $_POST ['favPet'];
    $password= $_POST ['passwords'];
    

    $query = mysqli_query($conn, "SELECT * FROM `userinformation` WHERE `userName`='$username'");

	$count = mysqli_num_rows($query);
	$result = mysqli_fetch_array($query,MYSQLI_ASSOC);

	

	if($count==1) {
		if($result['userFavFood'] == $favFood) {
			if($result['userFavPet']==$favPet) {
		 $query = mysqli_query($conn, "UPDATE `userinformation` SET `userPass` = '$password' WHERE `userinformation`.`userName` = '$username' ");
		 		
		 		if($query) {
		 			 header("location: login.php");
		 		}

			}else {
				 header("location: login.php");
			}
		}else {
			 header("location: login.php");
		}
		
	}
}else {
	 header("location: login.php");
}

	

?>