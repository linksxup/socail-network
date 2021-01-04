<?php
$user=$_COOKIE['username'];

  $untoken=$_COOKIE['untoken'];
	if(isset($untoken) && isset($user)){
		require'database.php';
		
		$query= "SELECT untoken FROM users WHERE username='$user'";	
$next= mysqli_query($link, $query);
$result= mysqli_fetch_array($next);
		
		if($result['untoken'] != $untoken){setcookie("username","$user", time() - 1);
		setcookie("untoken","$untoken", time() - 1);
		header("location: log in.html");
        exit();}
		
	}else{
		setcookie("username","$user", time() - 1);
		setcookie("untoken","$untoken", time() - 1);
		header("location: log in.html");
        exit();
		}
		
		if(isset($_GET['grade']))
		{
			
			if($_GET['grade'] == "deactivated"){
			require'database.php';	
$stmt = mysqli_query($link, "UPDATE users SET mode='deactivated' WHERE username='$user'");
	
if($stmt){
	
	header("location: testt.php");
        exit();
	
}	
				
			}else{
				
					require'database.php';	
$stmt = mysqli_query($link, "UPDATE users SET mode='activate' WHERE username='$user'");
	
if($stmt){
	
	header("location: testt.php");
        exit();
	
}	
				
			}
			
		}


?>