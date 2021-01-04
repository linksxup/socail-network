<?php 
	if(isset($_GET['token'])) {
		 $user=$_COOKIE['username'];
		require 'database.php';
		$token = $_GET['token'];
		$stmt=mysqli_query($link, "UPDATE users SET token='$token' WHERE username='$user'");
		
	
		if($stmt) {
			echo 'Token Saved..';
		} else {
			echo 'Failed to saved token..';
		}
	}

 ?>