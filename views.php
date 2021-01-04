<?php 

$count= 1;
$id= $_GET['id'];
//$id="5ee396b11e8107.80311662";
require'database.php';
		
		
		
		$query="SELECT views FROM linkupdates WHERE uniqueid='$id'";
		$next= mysqli_query($link, $query);
		$result= mysqli_fetch_row($next);
		
		$new= $result[0] + $count;
		echo"$new";
		
		$query1= "UPDATE linkupdates SET views='$new' WHERE uniqueid='$id'";
		mysqli_query($link, $query1);

?>