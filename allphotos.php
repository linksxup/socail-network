
<!DOCTYPE html>

<html lang="en" >

<head>
   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- icons -->
    <link rel="shortcut icon" href="icon.png" />
  <meta charset="UTF-8">
  
    <!-- FOR THE FONT CHANGE EFFECT -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

  
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
 
 
if(isset($user)){
	
	$un=$_GET['un'];
	$pid=$_GET['punid'];
}else{
	header("location: log in.html");
}

?>
<title><?php echo"$un";?></title>
  
  
 <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
     
         <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117749332-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117749332-1');
</script>
  
   <!-- CSS -->
      
      
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
</head>




  <nav>
 <form>
   <ul class="twitter" role="navigation">
   
    <li><?php

	$un=$_GET['un'];
	$pid=$_GET['punid'];
	
	echo'<a href="remarks.php?'; echo'un='; echo"$un";  echo'&pid='; echo"$pid"; echo'"><i class="fa fa-arrow-left"></a></i></li>';?>
   <li><button>Linkupdate</button></li>

  </ul>
  </form>
</nav>







   <style>
   a {
    color: #57b846;
}
   
   .postWraper a{
  color: #000000;
  text-decoration: none;
  
 
}

.twit li a{
 
  text-decoration: none;
  color:#57b846;
}


</style>
  <style type="text/css">

#menu li {
    display: block;
    position: relative;
    float: left;
	
}
li ul {
    display: none;
	
}
#menu li a {
    display: absolute;
    text-decoration: none;
    color: #000000;
    border-top: 1px solid #ffffff;
	border-radius: 5px;
    padding: -1em;
    background: #ffffff;
    margin-left: 1px;
    white-space: nowrap;
	
}
#menu li a:hover {
background: #57b846;
}
li:hover ul {
    display: block;
    position: absolute;

li:hover li {
    float: none;
    font-size: 11px;
}
li:hover a { background: #57b846; }
li:hover li a:hover {
    background: #000000;
}


</style>
<style>
  								
.login10-form-avatar {
  display: flex;
  width: 30px;
  height: 30px;
  border-radius: 100%;
 border-line:50px;
 border-color:#57b846;
  overflow: hidden;
  margin-left: 0px; 
  margin-top: 0px;
margin-bottom: 0px;
}

.login10-form-avatar img {
  width: 100%;
}	



#a{
 
  text-decoration: none;
  color:#57b846;
}
							
								
 </style> 

<body>

 
  
  <form>
  <?php
  if(isset($_COOKIE['darkmode'])){
	
	  echo"<script>
	  $(document).ready(function(){

$('body').css('background-color','#333');
$('fieldset').css('background-color','#121212');
$('.postWraper a').css('color','#fff');
$('nav').css('background','#333');
$('main').css('background','#333');
$('.twit li b').css('color','#fff');
$('.postWraper').css('color','#fff');
$('b').css('color','#fff');
$('article').css('color','#fff');
$('name').css('background','#333');


	  });
	  
    </script>";
	
}
  
  
  $un=$_GET["un"];
	$pid=$_GET["punid"];
  require'database.php';
	
	$query = "SELECT * FROM linkupdates WHERE uniqueid='$pid'; ";


$result = mysqli_query($link, $query);

$row = mysqli_fetch_array($result);
  //print_r(mysqli_num_rows($result));
  if(mysqli_num_rows($result)>0){
	  
	  
	  echo'<fieldset>';
	  echo'<ul class="twit" role="navigation">';
	echo'<li>';
	echo'<span class="login100-form-avatar">';
	
	if($row["profilepic"] != "")
	
	{ echo'<a href="'; echo $row["profilepic"]; echo'">';
		echo'<img src="'; echo $row["profilepic"]; echo'" alt="AVATAR">';
	echo'</span></li>';}else{if($row["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';}else{
		echo'<img src="';echo'gender/female.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';}}
		
		
		
		if($row["verification"] == "verified" ){echo'<span class="login10-form-avatar">
	<img src="verified.jpeg" alt="AVATAR"> 
	</span>';}
	
   echo '<li><a href="info.php?un=';echo$row['username']; echo'"><b>'; if (strlen($row['firstname']) < 9){
							  
							  echo $row['firstname']; 
							  
							  }else{	  echo substr("$row[firstname]","0", "8"); echo'...';}


   echo'&nbsp'; 


		   if (strlen($row['lastname']) < 9){
							  
							  echo $row['lastname']; 
							  
							  }else{	  echo substr("$row[lastname]","0", "8"); echo'...';}



   echo'</b><br>Un@';


     if (strlen($row['username']) < 11){
							  
							  echo $row['username']; 
							  
							  }else{	  echo substr("$row[username]","0", "10"); echo'...';}
 echo'<br/></a></li>
   <br><br><h6>'; echo'</br> <li>';
   
		echo'<li> <i class="fa fa-caret-down"></i><ul id="menu">';
    
    echo'<li>';
       echo' <ul>';
        echo ' <b> ';



if($row["username"]=="$user"){echo' <li><a href="'; echo'delete.php?uniqueid='; echo$row["uniqueid"]; echo'&status=linkupdate"><i class="fa fa-trash-o"></i></a></li>';}


if($row["username"]!="$user"){echo'<li><a href="report.php?un='; echo$row["username"];echo'&uniqueid='; echo$row["uniqueid"]; echo'">Report</a></li>';}


		echo'</b>';
        echo'</ul>';
    echo'</li>';
echo'</ul></li>';

  echo'</ul></li>';
	  if(!empty($row['caption'])){
		  echo'<article>';
		  echo$row['caption'];
		  echo'</article>';
	  }
	  
	  echo'<hr>';
	  echo$row['time']; echo'</h6>';
	  echo'</fieldset>';
	  
	  
	  
	  
	  
	  
	    if($row['url']=='multiple'){
			$e=unserialize($row['file_type']);
			if(count($e)==4){
			
			   echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[0]; echo'">';
	echo'<img src="'; print_r($e[0]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[0]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		
		
		  echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[2]; echo'">';
	echo'<img src="'; print_r($e[2]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[2]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		}
		
			if(count($e)==6){
			
			   echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[0]; echo'">';
	echo'<img src="'; print_r($e[0]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[0]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		
		
		  echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[2]; echo'">';
	echo'<img src="'; print_r($e[2]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[2]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		
		
		 echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[4]; echo'">';
	echo'<img src="'; print_r($e[4]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[4]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		}
		
		
		
			if(count($e)==8){
			
			   echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[0]; echo'">';
	echo'<img src="'; print_r($e[0]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[0]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		
		
		  echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[2]; echo'">';
	echo'<img src="'; print_r($e[2]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[2]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		
		
		 echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[4]; echo'">';
	echo'<img src="'; print_r($e[4]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[4]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		
		
		 echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[6]; echo'">';
	echo'<img src="'; print_r($e[6]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[6]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		}
		
		
		if(count($e)==8){
			
			   echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[0]; echo'">';
	echo'<img src="'; print_r($e[0]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[0]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		
		
		  echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[2]; echo'">';
	echo'<img src="'; print_r($e[2]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[2]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		
		
		 echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[4]; echo'">';
	echo'<img src="'; print_r($e[4]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[4]); echo'" download><i class="fa fa-save"></i></a>';
		
		if(!empty($row['caption'])){echo$row['caption'];}
		
		
		echo'</fieldset>';
		
		
		 echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[6]; echo'">';
	echo'<img src="'; print_r($e[6]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[6]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		}
		
		
		if(count($e)==10){
			
			   echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[0]; echo'">';
	echo'<img src="'; print_r($e[0]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[0]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		
		
		  echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[2]; echo'">';
	echo'<img src="'; print_r($e[2]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[2]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		
		
		 echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[4]; echo'">';
	echo'<img src="'; print_r($e[4]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[4]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		
		
		 echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[6]; echo'">';
	echo'<img src="'; print_r($e[6]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[6]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		
		
		echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[8]; echo'">';
	echo'<img src="'; print_r($e[8]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[8]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		}
		
		
		if(count($e)==12){
			
			   echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[0]; echo'">';
	echo'<img src="'; print_r($e[0]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[0]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		
		
		  echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[2]; echo'">';
	echo'<img src="'; print_r($e[2]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[2]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		
		
		 echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[4]; echo'">';
	echo'<img src="'; print_r($e[4]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[4]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		
		
		 echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[6]; echo'">';
	echo'<img src="'; print_r($e[6]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[6]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		
		
		echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[8]; echo'">';
	echo'<img src="'; print_r($e[8]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[8]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		
		
		echo'<fieldset>';
		   echo'<span class="login-form-avatar">';
		   echo'<a href="'; echo $e[10]; echo'">';
	echo'<img src="'; print_r($e[10]); echo'" alt="AVATAR" controls="control">';
		echo'</span>';
		
		echo'<a href="'; print_r($e[10]); echo'" download><i class="fa fa-save"></i></a>';
		echo'</fieldset>';
		}
		
			
		}
	  
	  
  }else{
	  
	  echo"<fieldset><h4>Oops!! sorry couldn't find images it could probably be deleted by the user or never exist!</h4></fieldset>";
	  
  }
  
  
  ?>

 </form>
	                
								

<style>


.liinkk li > button {
  font-size: 0.7em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  
}




.liinkk {
  display: flex;
  
 
}



.liinkk {
  height: 70px;
  align-items: center;
  padding: 110 110px;
  border-radius: 5px;
  color: rgba(117,117,117 ,1);
 
  min-width: 200px;
  position: 
}
.liinkk li {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 20px;
}

.liinkk li:hover {
 
 color: 57b846;
}

.liinkk li b {
 color: black;
}



.liinkk article{
 color: black;
}

.liinkk a{
 color: #57b846;
 text-decoration: none;
}






.login-form-avatar {
  display: flex;
    min-width: auto;
  max-width: 600px;
  max-height: 700px;
  border-radius: 2px;
  s-resize:500px;
  overflow: hidden;
  margin-left: 0px; 
  margin-top: 0px;
margin-bottom: 0px;
}

.login-form-avatar img {
  width: 100%;
}
p {cursor: pointer;
   margin-left: auto;
  margin-right: auto;}



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
p {cursor: pointer;
   margin-left: auto;
  margin-right: auto;}








body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100%;
  background-color: #ddd;
  
}

 .loginvideo-form-avatar {
  display: flex;
    min-width: 600px;
  max-width: 600px;
  max-height: 500px;
  border-radius: 70px;
  s-resize:500px;
  overflow: hidden;
  margin-left: 0px; 
  margin-top: 0px;
margin-bottom: 0px;
}

.loginvideo-form-avatar video {
  width: 100%;
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
    min-width: px;
    background: #fff;
    
    position: fixed;
bottom: 0px;
	 display: none;

}


ul {
  padding: 0;
  list-style: none;
}
fieldset{
	
	top: 80px;

  justify-content: center;
  align-items: center;
   background: #fff;
       border-radius: 5px;
	width: 100%;
	 min-width: 600px;
	 max-width: 600px;
	 

	 
 padding: 40px 20px;
 margin-left: auto;
  margin-right: auto;
  position: relative;
}

/* ============================
    Twitter
   ============================
*/

.twitter {
  display: flex;
  
 
}

.twitter__bird {
  margin-left: auto;
  margin-right: auto/*this will push aside the other flex-items and the bird takes the remaining space!*/
} 

/*
  UI cleanups for the twitter navigation. This just makes things look good on the eye ðŸ˜Ž
*/

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
  position: 
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



.twitter__bird {
  color: rgba(85,172,238 ,1);
  font-size: 1.3em;
}

.twitter li  i:not(.fa-twitter):not(.fa-search):not(.fa-user-circle-o) {
  margin-right: 3px;
}
.twitter li > button {
  font-size: 0.8em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  
}





.twit {
  display: flex;
  
 
}

.twit {
  border: 1px solid red;
  height: 70px;
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

.twit li b {
 color: black;
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
	
	
.liinkk li > button {
  font-size: 0.7em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  
}




.liinkk {
  display: flex;
  
 
}



.liinkk {
  height: 70px;
  align-items: center;
  padding: 110 110px;
  border-radius: 5px;
  color: rgba(117,117,117 ,1);
 
  min-width: 200px;
  position: 
}
.liinkk li {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 12px;
}

.liinkk li:hover {
 
 color: 57b846;
}

.liinkk li b {
 color: black;
}



.liinkk article{
 color: black;
}

.liinkk a{
 color: #57b846;
 text-decoration: none;
}

	
	
	
	
	
	
	
	
        .loginvideo-form-avatar {
  display: flex;
    min-width: 200px;
  max-width: 600px;
  max-height: 300px;
  border-radius: 70px;
  s-resize:500px;
  overflow: hidden;
  margin-left: 0px; 
  margin-top: 0px;
margin-bottom: 0px;
}

.loginvideo-form-avatar video {
  width: 100%;
}
p {cursor: pointer;
   margin-left: auto;
  margin-right: auto;}
		
	
	
	
	
	  .login-form-avatar {
  display: flex;
    min-width: 200px;
  max-width: 600px;
  max-height: 400px;
  border-radius: 2px;
  s-resize:500px;
  overflow: hidden;
  margin-left: 0px; 
  margin-top: 0px;
margin-bottom: 0px;
}

.login-form-avatar img {
  width: 100%;
}
p {cursor: pointer;
   margin-left: auto;
  margin-right: auto;}
	
	
	
	
	
	
	
	body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100%;
  background-color: #ddd;
  
}

/***** FOR COOMENT LIKE AND RELINK *****/


.twit {
  display: flex;
  
 
}

.twit {
  border: 1px solid red;
  height: 50px;
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
font-size: 15px;
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






main {
	
	z-index: 9999;
 min-height:0px;
    width: 100%;
    min-width: px;
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
	 max-width: auto;
 padding: 40px 20px;

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
  border-radius: 100%;

}

.links li > button i {
    font-size: 0.8em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100%;
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