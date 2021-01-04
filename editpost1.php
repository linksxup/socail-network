	<?php
	
	
	if(isset($_COOKIE['username']))
	{$user=$_COOKIE['username'];}else{
	header("location: log in.html");
	exit();
}
	 
	 if(isset($_COOKIE['untoken'])){
	 $untoken=$_COOKIE['untoken'];}
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
require'database.php';		
		$query = "SELECT * FROM users WHERE username='$user'";
$result = mysqli_query($link, $query);
$res=mysqli_fetch_array($result);
		
if(isset($_POST['textstatus']) && $res['mode'] != "suspended" ){
	require'database.php';
	
$cap=addslashes($_POST['textstatus']);

$pid=$_GET['pid'];

$stt=mysqli_query($link, 
"UPDATE linkupdates SET caption='$cap' WHERE uniqueid='$pid'");
if($stt){header("location:remarks.php?pid=$pid");
	   exit();}else{header("location:testt.php");
	   exit();}
}else{header("location:testt.php");
	   exit();}

?>