<?php			

			require'database.php';
if(isset($_POST['textstatus'])){
	$to=$_GET['un'];
$cap=addslashes($_POST['textstatus']);
$uniqueid = uniqid('', true);

$query = "SELECT * FROM notifications  WHERE uniqueid='$uniqueid' AND format='message'";
		$result = mysqli_query($link, $query); 
	   if(mysqli_num_rows($result) <= 0){
		   require'database.php';
		 $stm=mysqli_query($link, "INSERT INTO notifications (username, status, url, achieve, format, uniqueid,message) 
		 VALUES ('$to', 'important', '$cap', 'unread', 'message', '$uniqueid','')");


			if($stm){
									
				 header("location:search.php");
				 exit();
				
			}
	   }

	   

				
			
			}
			?>