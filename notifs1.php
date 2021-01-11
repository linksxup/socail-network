
<!DOCTYPE html>

<html lang="en" >

<head>
   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- icons -->
    <link rel="shortcut icon" href="icon.png"/>
		
  <meta charset="UTF-8">
  <title>Notification</title>
  
  
   <!-- FOR THE FONT CHANGE EFFECT -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

  
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117749332-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117749332-1');
</script>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  
   <!-- CSS -->
      <link rel="stylesheet" type="text/css" href="css/component.css" />
      
	  
	  
	  
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		
        		<!-- manifest for Andriod and Chrome -->
		<link rel="manifest" href="manifest.json">
  
	<!-- manifest ios support -->

	<!-- manifest arena -->
    <link rel="apple-touch-icon" href="icons/icon-96x96.png">
    <link rel="apple-touch-icon" href="icons/icon-128x128.png">
	    <link rel="apple-touch-icon" href="icons/icon-144x144.png">
		    <link rel="apple-touch-icon" href="icons/icon-152x152.png">
			    <link rel="apple-touch-icon" href="icons/icon-192x192.png">
				    <link rel="apple-touch-icon" href="icons/icon-384x384.png">
					    <link rel="apple-touch-icon" href="icons/icon-512x512.png">
						
						<meta name="apple-mobile-web-app-status-bar" content="#57b846">
  
   	<!-- Chrome, Firefox OS and Opera --> <meta name="theme-color" content="#57b846"/>
	 <!-- Windows Phone --> <meta name=  "msapplication-navbutton-color" content="#57b846"/>
	  <!-- iOS Safari --> <meta name= "apple-mobile-web-app-status-bar-style" content="#57b846"/>
	  
	  
	  
<link rel="manifest" href="manifest.json">




</head>






  
  
  


<body>

  
  
  
  
<style>
								
								
		select option { 
		margin:40px;
		background: rgba(0, 0, 0, 0.3)
		color:#57b846;
		text-shadow:0 1px 0 rgba(0, 0, 0, 0.4); }						
								
								
								
.login100-form-avatar {
  display: flex;
  width: 70px;
  height: 70px;
  border-radius: 100%;
 border-line:50px;
 border-color:#57b846;
  overflow: hidden;
  margin-left: 0px; 
  margin-top: 0px;
margin-bottom: 0px;
}

.login100-form-avatar img {
  width: 100%;
}
i {cursor: pointer;
   margin-left: auto;
  margin-right: auto;}

</style>
<form>
<fieldset>

<?php
echo'<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>';
 
 if(isset($_COOKIE['darkmode'])){
	
	  echo"<script>
	  $(document).ready(function(){

$('body').css('background-color','#333');
$('fieldset').css('background-color','#121212');
$('.postWraper a').css('color','#fff');
$('nav').css('background','#333');
$('main').css('background','#333');
$('article').css('color','#fff');
$('h6').css('color','#fff');
$('h4').css('color','#fff');
$('a').css('color','#fff');
$('.twit li b').css('color','#fff');
$('.twitter li a').css('color','#57b846');
$('b').css('color','#fff');


	  });
	  
    </script>";
	
}
if(isset($_COOKIE['username'])){
$user=$_COOKIE['username'];}
 
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
 
if(isset($user))
{

			
 require'database.php';
 $query="SELECT * FROM notifications  WHERE username='$user' ORDER  BY TIME DESC, STATUS DESC;";

		$result = mysqli_query($link, $query); 
	   if(mysqli_num_rows($result) > 0){
		//print_r(mysqli_num_rows($result));
			while($row = mysqli_fetch_array($result)){
				$time="$row[time]";
				$date=date('Y-m-d H:i:s');
				
		//echo"$time"; echo'&nbsp';
		
		//echo"$date"; echo'&nbsp';
		
		 $date1=date_create("$time");
		 $date2=date_create("$date");
		 $diff=date_diff($date1, $date2);
		 //echo $diff->format("%a days");
		 
		 if($diff->format("%a") >= 2 && $row['achieve'] == 'read' ){
		 $d=mysqli_query($link, "DELETE FROM notifications WHERE  username='$user' AND time='$time'");}
			 
			 
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
		
		if(!empty($res['remarks']) || $res['remarks'] != null || $res['remarks'] != 0 )
		{print_r(count(unserialize($res['remarks']))); }
		
		echo'&nbsp remark(s)</b></a>';
		echo'</h6></ul>';
		 } 
		 
		 
		  if($row['format'] == 'welcome'){
		echo'<h6>';
		echo'<b>'; echo"<div class='postWraper'>Hello $user Welcome to Linksxup!!!.. Linking you up to network and establish connection with fascinating people..., know whatsxup... and share linkupdate/exciting moments.. "; echo'</b>';
		echo'<br>You have been granted free 20 linkxcoins.</div><hr></h6>';
		 }
	
	
	
	
	//if format is a message from we at linksxup-push-message
	
	
	 if($row['format']=='message'){
	
		
				echo'<ul class="twit" role="navigation">

				
				<li><span class="login100-form-avatar">';
	
		echo'<img src="/'; echo'icon.png'; echo'" alt="AVATAR">';
		

	echo'</span></li>';
		
		echo'<h6>';
		echo'<b>&nbsp'; echo$row['url']; echo'</b>';
		echo'</h6></ul>';
		 }
	
	
	
	
		 
		 
		 
		 
		 
		 if($row['format'] == 'likes'){
		
		$que="SELECT * FROM linkupdates WHERE uniqueid='$row[uniqueid]'";

		$resu= mysqli_query($link, $que);
		$res= mysqli_fetch_array($resu);
		
		$j=mysqli_query($link, "SELECT * FROM users WHERE  username='$user'");
		$i=mysqli_fetch_array($j);
	
		
		
				echo'<ul class="twit" role="navigation"><li><span class="login100-form-avatar">';
		echo'<a href="'; echo$row['url']; echo'">';
	if($i["profilepic"] != "")
	
	{
		echo'<img src="'; echo $i["profilepic"]; echo'" alt="AVATAR">';
		

	echo'</span></li>';}else{if($i["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';}else{
		echo'<img src="';echo'gender/female.jpg'; echo'" alt="AVATAR">';
		echo'</span></li>';}}
		
		echo'<h6>';
		echo'<b>&nbsp'; print_r(count(unserialize($res['likes']))); echo'&nbsp user(s) liked your linkupdate updated @ &nbsp'; print_r($res['time']);	 echo'</b>';
		echo'</h6></a></ul>';
		 }
	
		 if($row['format']=='reply'){
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
		echo'<b>&nbsp'; 
		
	if(!empty($res['replies']) || $res['replies'] != null || $res['replies'] != 0 )
	{print_r(count(unserialize($res['replies']))); 
		
		
		echo'&nbsp user(s) replied to your remark. ';	 echo'</b></a>';
		echo'</h6></ul>';
		 }
		 
		 }
		 
		 if($row['format']=='linkup'){
		
		$que="SELECT * FROM users WHERE username='$row[message]'";

		$resu= mysqli_query($link, $que);
		$res= mysqli_fetch_array($resu);
		
		echo'<a href="'; echo$row['url']; echo'">';
		
			echo'<ul class="twit" role="navigation"><li><span class="login100-form-avatar">';
	
	if($res["profilepic"] != "")
	
	{
		echo'<img src="'; echo $res["profilepic"]; echo'" alt="AVATAR">';
		

	echo'</span></li>';}else{if($res["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';}else{
		echo'<img src="';echo'gender/female.jpg'; echo'" alt="AVATAR">';
		echo'</span></li>';}}
		
		
		echo'<h6>';
		echo'<b>&nbsp'; echo$res['firstname']; echo'&nbsp'; echo$res['lastname']; echo'&nbsp has link you up.';	 echo'</b></a>';
		echo'</h6></ul>';
		 }
		 
		 
		  if($row['format']=='awards'){
		
		$que="SELECT * FROM linkupdates WHERE uniqueid='$row[uniqueid]'";

		$resu= mysqli_query($link, $que);
		$res= mysqli_fetch_array($resu);
		
		
		echo'<a href="'; echo$row['url']; echo'">';
		
		
			echo'<a href="'; echo$row['url']; echo'">';



			echo'<ul class="twit" role="navigation"><li><span class="login100-form-avatar">';
	
		echo'<img src="'; echo'medal.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';
		
		
		
		
		echo'<h6>';
		echo'<b>&nbsp'; echo$res['awards']; echo'&nbsp Star gold award(s) has been awarded to your linkupdate updated @ &nbsp'; print_r($res['time']);	 echo'</b></a>';
		echo'</h6></ul>';
		 }
		 
		 
		 
		
	   }
 	require'database.php';
$st=mysqli_query($link, "UPDATE notifications SET achieve = 'read' WHERE username = '$user'");
		 
	   }
	   
	   
	   
	   
	   
	   //Notifications on linkupdates posted linkups..
	    echo'<div class="postWraper"><h4>Linkupdates &nbsp <i class="fa fa-arrow-circle-o-down"></i></h4></div>';
	   if(!isset($_GET['query'])){
	   
	   
	   require'database.php';
 $query1="SELECT * FROM notifications ORDER  BY TIME DESC, STATUS DESC LIMIT 70 OFFSET 0;";

		$result1 = mysqli_query($link, $query1); 
	   if(mysqli_num_rows($result1) > 0){
		
			while($row = mysqli_fetch_array($result1)){
				
				$linkup1=mysqli_query($link, "SELECT linkups FROM users WHERE username='$user' ");
				$linkup=mysqli_fetch_row($linkup1);
				if(!empty($linkup[0])){
					
					$e=unserialize($linkup[0]);
					
					//if its a text linkupdate
					if(in_array($row['username'], $e) && $row['format'] == 'linkupdate/text'){
						
						
							$que="SELECT * FROM users WHERE username='$row[username]'";

		$resu= mysqli_query($link, $que);
		$res= mysqli_fetch_array($resu);
		
		echo'<a href="'; echo$row['url']; echo'&n=notifs">';
		
			echo'<ul class="twit" role="navigation"><li><span class="login100-form-avatar">';
	
	if($res["profilepic"] != "")
	
	{
		echo'<img src="'; echo $res["profilepic"]; echo'" alt="AVATAR">';
		

	echo'</span></li>';}else{if($res["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';}else{
		echo'<img src="';echo'gender/female.jpg'; echo'" alt="AVATAR">';
		echo'</span></li>';}}
		
		
		echo'<h6>';
		echo'<b>&nbsp'; 
		
		if($res['username'] == $user){echo'You';}
				else{echo substr("$res[username]","0", "8"); echo'...';} 

		echo'&nbsp'; echo$row['message'];	 echo'<h6> &nbsp <font color="#57b846"> <i class="fa fa-pencil"> see now</i></font></h6></b></a>';
		echo'</h6></ul>';
						
					}
					
						//if its a document linkupdate
					if(in_array($row['username'], $e) && $row['format'] == 'linkupdate/document'){
						
						
							$que="SELECT * FROM users WHERE username='$row[username]'";

		$resu= mysqli_query($link, $que);
		$res= mysqli_fetch_array($resu);
		
		echo'<a href="'; echo$row['url']; echo'&n=notifs">';
		
			echo'<ul class="twit" role="navigation"><li><span class="login100-form-avatar">';
	
	if($res["profilepic"] != "")
	
	{
		echo'<img src="'; echo $res["profilepic"]; echo'" alt="AVATAR">';
		

	echo'</span></li>';}else{if($res["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';}else{
		echo'<img src="';echo'gender/female.jpg'; echo'" alt="AVATAR">';
		echo'</span></li>';}}
		
		
		echo'<h6>';
		echo'<b>&nbsp'; 
		
		if($res['username'] == $user){echo'You';}
		else{echo substr("$res[username]","0", "8");echo'...';} 
		
		echo'&nbsp'; echo$row['message'];	 echo'<h6> &nbsp <font color="#57b846"><i class="fa fa-file"> see now</i></font></h6></b></a>';
		echo'</h6></ul>';
						
					}
					
					
						//if its a video linkupdate
					if(in_array($row['username'], $e) && $row['format'] == 'linkupdate/video'){
						
						
							$que="SELECT * FROM users WHERE username='$row[username]'";

		$resu= mysqli_query($link, $que);
		$res= mysqli_fetch_array($resu);
		
		echo'<a href="'; echo$row['url']; echo'&n=notifs">';
		
			echo'<ul class="twit" role="navigation"><li><span class="login100-form-avatar">';
	
	if($res["profilepic"] != "")
	
	{
		echo'<img src="'; echo $res["profilepic"]; echo'" alt="AVATAR">';
		

	echo'</span></li>';}else{if($res["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';}else{
		echo'<img src="';echo'gender/female.jpg'; echo'" alt="AVATAR">';
		echo'</span></li>';}}
		
		
		echo'<h6>';
		echo'<b>&nbsp'; 
		
		if($res['username'] == $user){echo'You';}
		else{echo substr("$res[username]","0", "8");echo'...';} 
		
		echo'&nbsp'; echo$row['message'];	 echo'<h6> &nbsp<font color="#57b846"> <i class="fa fa-play"> see now</i></font></h6></b></a>';
		echo'</h6></ul>';
						
					}
					
					
					
						//if its a audio linkupdate
					if(in_array($row['username'], $e) && $row['format'] == 'linkupdate/audio'){
						
						
							$que="SELECT * FROM users WHERE username='$row[username]'";

		$resu= mysqli_query($link, $que);
		$res= mysqli_fetch_array($resu);
		
		echo'<a href="'; echo$row['url']; echo'&n=notifs">';
		
			echo'<ul class="twit" role="navigation"><li><span class="login100-form-avatar">';
	
	if($res["profilepic"] != "")
	
	{
		echo'<img src="'; echo $res["profilepic"]; echo'" alt="AVATAR">';
		

	echo'</span></li>';}else{if($res["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';}else{
		echo'<img src="';echo'gender/female.jpg'; echo'" alt="AVATAR">';
		echo'</span></li>';}}
		
		
		echo'<h6>';
		echo'<b>&nbsp'; 
		
		if($res['username'] == $user){echo'You';}
		else{echo substr("$res[username]","0", "8");echo'...';} 
		
		echo'&nbsp'; echo$row['message'];	 echo'<h6> &nbsp <font color="#57b846"><i class="fa fa-music"> see now</i></font></h6></b></a>';
		echo'</h6></ul>';
						
					}
					
					
						//if its a image linkupdate
					if(in_array($row['username'], $e) && $row['format'] == 'linkupdate/image'){
						
						
							$que="SELECT * FROM users WHERE username='$row[username]'";

		$resu= mysqli_query($link, $que);
		$res= mysqli_fetch_array($resu);
		
		echo'<a href="'; echo$row['url']; echo'&n=notifs">';
		
			echo'<ul class="twit" role="navigation"><li><span class="login100-form-avatar">';
	
	if($res["profilepic"] != "")
	
	{
		echo'<img src="'; echo $res["profilepic"]; echo'" alt="AVATAR">';
		

	echo'</span></li>';}else{if($res["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';}else{
		echo'<img src="';echo'gender/female.jpg'; echo'" alt="AVATAR">';
		echo'</span></li>';}}
		
		
		echo'<h6>';
		echo'<b>&nbsp'; 
		
		if($res['username'] == $user){echo'You';echo'...';}
		
		else{echo substr("$res[username]","0", "8"); echo'...';} 

		echo'&nbsp'; echo$row['message'];	 echo'<h6> &nbsp <font color="#57b846"><i class="fa fa-photo"> see now</i></font></h6></b></a>';
		echo'</h6></ul>';
						
					}
					
					
					
					
				}
				
				
				
				
				
				$time="$row[time]";
				$date=date('Y-m-d H:i:s');

		 $date1=date_create("$time");
		 $date2=date_create("$date");
		 $diff=date_diff($date1, $date2);
		
		 
		 if($diff->format("%a") >= 2 && $row['achieve'] == 'read' ){
	   $d=mysqli_query($link, "DELETE FROM notifications WHERE  username='$user' AND time='$time' ");}
	   
	   
	   
	   }}}else{
		   //////////
		   //The user is searching for details in the notification page....
		   
		   require'database.php';
		   
		   $search = mysqli_real_escape_string($link, $_GET["query"]);
		   $limit=40;
		   
 $query1="SELECT * FROM notifications WHERE username LIKE '%".$search."%'
	 OR format LIKE '%".$search."%' ORDER  BY TIME DESC, STATUS DESC LIMIT $limit;";

		$result1 = mysqli_query($link, $query1); 
	   if(mysqli_num_rows($result1) > 0){
		
			while($row = mysqli_fetch_array($result1)){
				
				$linkup1=mysqli_query($link, "SELECT linkups FROM users WHERE username='$user'");
				$linkup=mysqli_fetch_row($linkup1);
				if(!empty($linkup[0])){
					
					$e=unserialize($linkup[0]);
					
					//if its a text linkupdate
					if(in_array($row['username'], $e) && $row['format'] == 'linkupdate/text'){
						
						
							$que="SELECT * FROM users WHERE username='$row[username]'";

		$resu= mysqli_query($link, $que);
		$res= mysqli_fetch_array($resu);
		
		echo'<a href="'; echo$row['url']; echo'&n=notifs">';
		
			echo'<ul class="twit" role="navigation"><li><span class="login100-form-avatar">';
	
	if($res["profilepic"] != "")
	
	{
		echo'<img src="'; echo $res["profilepic"]; echo'" alt="AVATAR">';
		

	echo'</span></li>';}else{if($res["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';}else{
		echo'<img src="';echo'gender/female.jpg'; echo'" alt="AVATAR">';
		echo'</span></li>';}}
		
		
		echo'<h6>';
		echo'<b>&nbsp'; 
		
		if($res['username'] == $user){echo'You';}
		else{echo substr("$res[username]","0", "8");echo'...';} 
		
		echo'&nbsp'; echo$row['message'];	 echo'<h6> &nbsp <font color="#57b846"> <i class="fa fa-pencil"> see now</i></font></h6></b></a>';
		echo'</h6></ul>';
						
					}
					
						//if its a document linkupdate
					if(in_array($row['username'], $e) && $row['format'] == 'linkupdate/document'){
						
						
							$que="SELECT * FROM users WHERE username='$row[username]'";

		$resu= mysqli_query($link, $que);
		$res= mysqli_fetch_array($resu);
		
		echo'<a href="'; echo$row['url']; echo'&n=notifs">';
		
			echo'<ul class="twit" role="navigation"><li><span class="login100-form-avatar">';
	
	if($res["profilepic"] != "")
	
	{
		echo'<img src="'; echo $res["profilepic"]; echo'" alt="AVATAR">';
		

	echo'</span></li>';}else{if($res["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';}else{
		echo'<img src="';echo'gender/female.jpg'; echo'" alt="AVATAR">';
		echo'</span></li>';}}
		
		
		echo'<h6>';
		echo'<b>&nbsp'; 
		
		if($res['username'] == $user){echo'You';}
		else{echo substr("$res[username]","0", "8");echo'...';} 
		
		echo'&nbsp'; echo$row['message'];	 echo'<h6> &nbsp <font color="#57b846"><i class="fa fa-file"> see now</i></font></h6></b></a>';
		echo'</h6></ul>';
						
					}
					
					
						//if its a video linkupdate
					if(in_array($row['username'], $e) && $row['format'] == 'linkupdate/video'){
						
						
							$que="SELECT * FROM users WHERE username='$row[username]'";

		$resu= mysqli_query($link, $que);
		$res= mysqli_fetch_array($resu);
		
		echo'<a href="'; echo$row['url']; echo'&n=notifs">';
		
			echo'<ul class="twit" role="navigation"><li><span class="login100-form-avatar">';
	
	if($res["profilepic"] != "")
	
	{
		echo'<img src="'; echo $res["profilepic"]; echo'" alt="AVATAR">';
		

	echo'</span></li>';}else{if($res["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';}else{
		echo'<img src="';echo'gender/female.jpg'; echo'" alt="AVATAR">';
		echo'</span></li>';}}
		
		
		echo'<h6>';
		echo'<b>&nbsp'; 
		
		if($res['username'] == $user){echo'You';}
		else{echo substr("$res[username]","0", "8");echo'...';} 
		
		echo'&nbsp'; echo$row['message'];	 echo'<h6> &nbsp<font color="#57b846"> <i class="fa fa-play"> see now</i></font></h6></b></a>';
		echo'</h6></ul>';
						
					}
					
					
					
						//if its a audio linkupdate
					if(in_array($row['username'], $e) && $row['format'] == 'linkupdate/audio'){
						
						
							$que="SELECT * FROM users WHERE username='$row[username]'";

		$resu= mysqli_query($link, $que);
		$res= mysqli_fetch_array($resu);
		
		echo'<a href="'; echo$row['url']; echo'&n=notifs">';
		
			echo'<ul class="twit" role="navigation"><li><span class="login100-form-avatar">';
	
	if($res["profilepic"] != "")
	
	{
		echo'<img src="'; echo $res["profilepic"]; echo'" alt="AVATAR">';
		

	echo'</span></li>';}else{if($res["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';}else{
		echo'<img src="';echo'gender/female.jpg'; echo'" alt="AVATAR">';
		echo'</span></li>';}}
		
		
		echo'<h6>';
		echo'<b>&nbsp'; 
		
		if($res['username'] == $user){echo'You';}
		else{echo substr("$res[username]","0", "8");echo'...';} 
		
		echo'&nbsp'; echo$row['message'];	 echo'<h6> &nbsp <font color="#57b846"><i class="fa fa-music"> see now</i></font></h6></b></a>';
		echo'</h6></ul>';
						
					}
					
					
						//if its a image linkupdate
					if(in_array($row['username'], $e) && $row['format'] == 'linkupdate/image'){
						
						
							$que="SELECT * FROM users WHERE username='$row[username]'";

		$resu= mysqli_query($link, $que);
		$res= mysqli_fetch_array($resu);
		
		echo'<a href="'; echo$row['url']; echo'&n=notifs">';
		
			echo'<ul class="twit" role="navigation"><li><span class="login100-form-avatar">';
	
	if($res["profilepic"] != "")
	
	{
		echo'<img src="'; echo $res["profilepic"]; echo'" alt="AVATAR">';
		

	echo'</span></li>';}else{if($res["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';}else{
		echo'<img src="';echo'gender/female.jpg'; echo'" alt="AVATAR">';
		echo'</span></li>';}}
		
		
		echo'<h6>';
		echo'<b>&nbsp'; 
		
		if($res['username'] == $user){echo'You';}
		else{echo substr("$res[username]","0", "8");echo'...';} 
		
		echo'&nbsp'; echo$row['message'];	 echo'<h6> &nbsp <font color="#57b846"><i class="fa fa-photo"> see now</i></font></h6></b></a>';
		echo'</h6></ul>';
						
					}
					
					
					
					
				}
				
				
				
				
				
				$time="$row[time]";
				$date=date('Y-m-d H:i:s');

		 $date1=date_create("$time");
		 $date2=date_create("$date");
		 $diff=date_diff($date1, $date2);
		
		 
		 if($diff->format("%a") >= 2 && $row['achieve'] == 'read' ){
	   $d=mysqli_query($link, "DELETE FROM notifications WHERE  username='$user' AND time='$time' ");}
	   
	   
	   
	   }}else{echo'<font color="red">No result found</font>';}
		   ////////////////
		   
	   }
	   
	   
	   
	   
	   
	   
	   
	echo"<div class='postWraper'><h6>your read notifications 
	will disappear after 48 hours (2 days)</div></h6>";
 echo'</fieldset>';
			                    
				
 
}else{header("location: log in.html");
exit();}
?>


 
				</form>
	



<style>

.postWraper {
    color: #000000;
    text-decoration: none;
    overflow_wrap: break-word;
    word-wrap: break-word;
    -ms-word-break: break-all;
    word-break: break-all;
    word-break: break-word;
    -ms-hyphens: auto;
    -moz-hyphens: auto;
    hyphens: auto;
}


.twitter {
  border: 1px solid red;
  height: 50px;
  align-items: center;
  padding: 110 110px;
  border: 1px solid rgba(238,238,238 ,1);
  border-radius: 5px;
  color: rgba(117,117,117 ,1);
  box-shadow: 5px 10px 20px -20px rgba(85,172,238 ,1);
  min-width: 200px;
  position: flex; 
}


.twitter {
    display: flex;
}

.twitter li {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 25px;
}
.twitter li:hover{
  color: #57b846;
}


 a{
    color: #000000;
    text-decoration: none;
}

 a:hover{
    color: #57b846;
    text-decoration: none;
}

.text button {
  font-size: 1.3em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  
}



textarea{
height: 400px;
width:600px;
 border: 2px solid #57b846;
   border-radius:4px;
}

.text{
text-align: center;
 margin-right: auto;
  margin-left: auto;
  position: relative;
;
}

.box{
text-align: center;

}


body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100%;
  background-color: #ddd;
  margin-right: auto;
  margin-left: auto;
  
}

 
p {cursor: pointer;
   margin-left: auto;
  margin-right: auto;}
	


nav {
	
	z-index: 9999;
 min-height:0px;
    width: 100%;
    min-width: px;
    background: #fff;
    
    border-radius: 
    box-shadow: 5px 55px 50px -20px #b6b6b6;
position: fixed;
top: 0px;
	 


}


main {
	
	z-index: 9999;
 min-height:0px;
    width: 100%;
    min-width: auto;
    background: #fff;
    
    position: fixed;
bottom: 0px;
	 display: none;

}

li {
 
  list-style: none;
}



ul {
  padding: 0;
  list-style: none;
}
fieldset{
	
	top: 67px;

  justify-content: center;
  align-items: center;
   background: #fff;
       border-radius: 5px;
	width: 100%;
	 min-width: 600px;
	 max-width: 600px;
 padding: 20px 20px;
 margin-left: auto;
  margin-right: auto;
  position: relative;
}

.twitter li > button {
  font-size: 0.8em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  display: none;
  
}


.twitter li a{
  color: #57b846;
}




.twit {
  display: flex;
  
 
}

.twit {
  border: 1px solid red;
  height: auto;
  align-items: center;
  padding: 110 110px;
  border: 1px solid rgba(238,238,238 ,1);
  border-radius: 5px;
  color: rgba(117,117,117 ,1);
  box-shadow: 5px 10px 20px -20px rgba(85,172,238 ,1);
  min-width: 200px;
  position: 
}
.twit li {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 22px;
}
.twit li:hover{
  color: #57b846;
}





.twit li  i:not(.fa-twitter):not(.fa-search):not(.fa-user-circle-o) {
  margin-right: 3px;
}
.twit li > button {
  font-size: 0.8em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  
}








/***** Media queries *****/

@media (min-width: 992px) and (max-width: 1199px) {}

@media (min-width: 768px) and (max-width: 991px) {}

@media (max-width: 767px) {

.text button {
  font-size: 23px;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  
}


textarea{

	 display: flex;
	max-width:20em;
	min-width: 20em;
   min-height:30em;
   max-height:50em;
   border: 2px solid #57b846;
   border-radius:4px;
   resize:yes;
  
   }

	.single{
	display: none;
	}
	
	.single li > button{
	color:#fff;
	margin-left: auto;
	margin-right: auto;
	font-size: 20px;
	width:10px;
	display: none;
	}

	.single li > button i{
	color:#fff;
	margin-left: auto;
	margin-right: auto;
	font-size: 30px;
	visibility: hidden;
	}

.arrange li > button i{
	color:#fff;
	margin-left: auto;
	margin-right: auto;
	font-size: 30px;
	}
	
	
	
	
	.arrange li > button{
	color:#fff;
	margin-left: auto;
	margin-right: auto;
	font-size: 20px;
	display: flex;
	position:relative;
	}
	
	.arrange li > button:hover{
  color: blue;
}

	.single li > button:hover{
  color: blue;
}


	.arrange li > button{
	margin-top: 10px;
	padding:10px;
	min-width: 10em;
	max-width:20em;
	border-radius: 100%;
	background-color:#57b846;
	margin-left: auto;
	margin-right: auto;
	position: relative;
	display: flex;
	
	}

.single li > button{
	margin-top: 10px;
	padding:10px;
	min-width:10em;
	max-width:10em;
	border-radius: 100%;
	background-color:#57b846;
	margin-left: auto;
	margin-right: auto;
	position: relative;
	display: flex;
	}
  

.arreange li{
	margin-left: auto;
	margin-right: auto;

}

	
	
	
	
	
	
	body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100%;
  background-color: #ddd;
  
}

/***** FOR COOMENT LIKE AND RELINK *****/







main {
z-index: 9999;
min-height:0px;
width: 100%;  
background: #fff; 
position: fixed;
bottom: 0px;
display: flex;

}

	
.twitter li {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 20px;
}

fieldset{
	
	
	
  justify-content: center;
  align-items: center;
   background: #fff;
       border-radius: 5px;
	width: auto;
	 min-width: 60px;
	 max-width: 767px;
	 min-height: 60px;
	 max-height: auto;
 padding: 40px 20px;
 font-size: 40px;
 margin-left: auto;
  margin-right: auto;
}

.twitter li > button {
  font-size: 0.8em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  display: none;
}

.links li > button {
    font-size: 0.8em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 10em;

}

.links li > button i {
    font-size: 0.8em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 10%;
  font-size: 30px;
  
}



.links li {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 20px;
}

.links {
  
  height: 10px;
  align-items: center;
  padding: 110 110px;
  
  border-radius: 5px;
  color: rgba(117,117,117 ,1);
  box-shadow: 5px 10px 20px -20px rgba(85,172,238 ,1);
  min-width: 200px;
  position: 
}



.links {
  display: flex;
  
 
}


h5 { font-size: 22px; }

h6 { font-size: 15px; }
}

@media (max-width: 415px) {
	
	h1, h2 { font-size: 32px; }

}


/* Retina-ize images/icons */

@media
only screen and (-webkit-min-device-pixel-ratio: 2),
only screen and (   min--moz-device-pixel-ratio: 2),
only screen and (     -o-min-device-pixel-ratio: 2/1),
only screen and (        min-device-pixel-ratio: 2),
only screen and (                min-resolution: 192dpi),
only screen and (                min-resolution: 2dppx) {
	
	
	
}

</style>


</body>

</html>