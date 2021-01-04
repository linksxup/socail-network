<?php
require_once 'database.php';

$gender=$_GET['gender'];




$data= mysqli_query($link,"SELECT * FROM users ORDER BY verification DESC, Linkups DESC");
while($row = mysqli_fetch_array($data)){
	
	echo $row['username'];
}
?>