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
 require'database.php';
 $query="SELECT * FROM notifications  WHERE username='$user' ORDER  BY TIME DESC ,STATUS DESC";

		$result = mysqli_query($link, $query);
		
		print_r(mysqli_fetch_array($result));
		
	   if(mysqli_num_rows($result) > 0){
		
			while($row = mysqli_fetch_array($result)){
				$time="$row[time]";
				$date=date('Y-m-d H:i:s');
				
		//echo"$time"; echo'&nbsp';
		
		//echo"$date"; echo'&nbsp';
		
		 $date1=date_create("$time");
		 $date2=date_create("$date");
		 $diff=date_diff($date1, $date2);
		 //echo $diff->format("%a days");
		 
		 if($diff->format("%a") > 4 && $row['achieve'] == 'read' ){
		 $d=mysqli_query($link, "DELETE FROM notifications WHERE  username='$user' AND time='$time' ");}
			 
	
	if($row['format'] == 'remark'){
		
			//echo'BOOOOOOOOOOOOOm';
			
		
 $que="SELECT * FROM linkupdates WHERE uniqueid='$row[uniqueid]'";

		$resu= mysqli_query($link, $que);
		$res= mysqli_fetch_array($resu);
		//To get user profile pic
		$j=mysqli_query($link, "SELECT * FROM users WHERE  username='$user'");
		$i=mysqli_fetch_array($j);

		//echo'<h6>';
		echo'<a href="'; echo$row['url']; echo'">';



			echo'<ul class="twit" role="navigation"><li><span class="login100-form-avatar">';
	
	if($i["profilepic"] != "")
	
	{
		echo'<img src="'; echo $i["profilepic"]; echo'" alt="AVATAR">';
		

	echo'</span></li>';}else{if($i["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';}else{
		echo'<img src="';echo'gender/female.jpg'; echo'" alt="AVATAR">';
		echo'</span></li>';}}



	
		
		echo'<h6><b>&nbsp Your linkupdate updated @ &nbsp'; print_r($res['time']); echo'&nbsp currently have a total of &nbsp'; 	
		//print_r(count(unserialize($res['remarks']))); 
		echo'&nbsp remark(s)</b></a>';
		echo'</h6></ul>';
		 }
		 
		 
		 
		 
		  if($row['format']=='remark'){
		require'database.php';
		$que="SELECT * FROM remarks WHERE secondaryuniqueid='$row[uniqueid]'";

		$resu= mysqli_query($link, $que);
		$res= mysqli_fetch_array($resu);
		
		$j=mysqli_query($link, "SELECT * FROM users WHERE  username='$user'");
		$i=mysqli_fetch_array($j);
		
		echo'<a href="'; echo$row['url']; echo'">';
		
		
				echo'<ul class="twit" role="navigation"><li><span class="login100-form-avatar">';
	
	if($i["profilepic"] != "")
	
	{
		echo'<img src="'; echo $i["profilepic"]; echo'" alt="AVATAR">';
		

	echo'</span></li>';}else{if($i["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';}else{
		echo'<img src="';echo'gender/female.jpg'; echo'" alt="AVATAR">';
		echo'</span></li>';}}
		
		echo'<h6>';
		$k= unserialize($res['replies']);
		//print_r(count($k));
		echo'<b>&nbsp'; print_r(count(unserialize($res['replies']))); echo'&nbsp user(s) replied to your remark. ';	 echo'</b></a>';
		echo'</h6></ul>';
		 }
		 
		 
			}
	   }
?>		 