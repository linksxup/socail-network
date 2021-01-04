
<!DOCTYPE html>
<html>
    <head>
        <title>search linksxup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		    <link rel="shortcut icon" href="icon.png"/>
			
		
	


	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117749332-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117749332-1');
</script>


	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	


 <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

     
  
  
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
	<body>
	
	

<style type="text/css">
			.loader {
		    position: fixed;
		    z-index: 99;
		    top: 0;
		    left: 0;
		    width: 100%;
		    height: 100%;
		    background: white;
		    display: flex;
		    justify-content: center;
		    align-items: center;
		}

		.loader > img {
		    width: 50px;
		}

		.loader.hidden {
		    animation: fadeOut 1s;
		    animation-fill-mode: forwards;
		}

		@keyframes fadeOut {
		    100% {
		        opacity: 0;
		        visibility: hidden;
		    }
		}

		.thumb {
		    height: 500px;
		    border: 3px solid blue;
		    margin: 10px;
		}
		
		
		
		.twit li a {
    text-decoration: none;
    color: #57b846;
}

.login10-form-avatar img {
    width: 100%;
}

.login10-form-avatar {
    display: flex;
    width: 30px;
    height: 30px;
    border-radius: 100%;
    border-line: 50px;
    border-color: #57b846;
    overflow: hidden;
    margin-left: 0px;
    margin-top: 0px;
    margin-bottom: 0px;
}



.twit {
    border: 1px solid red;
    height: 70px;
    align-items: center;
    padding: 110 110px;
    border: 1px solid rgba(238,238,238 ,1);
    border-radius: 5px;
    color: rgba(117,117,117 ,1);
    /* box-shadow: 5px 10px 20px -20px rgba(85,172,238 ,1); */
    min-width: 200px;
    position: ;
}


a:hover {
    text-decoration: none;
    color: #57b846;
}
		</style>

		
			
	
		 		 
     <script>

	
	
      $(document).ready(function(){

		    // like and unlike click
    $(".fa-comment, .fa-heart, .fa-star").click(function(){
        var id = this.id;   // Getting Button id
        var split_id = id.split("_");

        var text = split_id[0];
        var postid = split_id[1];  // postid
		  
	if(text == "like"){
		  
        // Set trigger and container variables
        var trigger = $(".fa fa-heart, .fa fa-star"),
            container = $("#cont_"+postid);
			


			
			
          // Set $this for re-use. Set target from data attribute
          var $this = $(this),
            target = $this.data('target');       
          
          // Load target page into container
          container.load(target);
          
          // Stop normal link behavior
          return false;
        
		
		
		
    }else{
		  // Set $this for re-use. Set target from data attribute
          var $this = $(this),
            target = $this.data('target');       
          window.location.assign("remark.php?"+postid);
		
		
	}
	
	
	
	
	
      });
	  
	 
	  });
    </script>
	





	 <?php
	 
	 
	 
	 
	 			if(isset($_COOKIE['darkmode'])){
	
	  echo"<script>
	  $(document).ready(function(){

$('body').css('background-color','#333');
$('fieldset').css('background-color','#121212');
$('.postWraper a').css('color','#fff');
$('nav').css('background','#333');
$('name').css('background','#333');
$('.twit li b').css('color','#fff');
$('table.table tr td').css('background-bcolor','#121212');
$('table.table tr td').css('color','#fff');
$('h6').css('color','#fff');
$('b').css('color','#fff');

$('.postWraper').css('color','#fff');
	  });
	  
    </script>";
								}
	 
	 
	 
	 
	 
	 
	 
	 
	 
	  echo' <script>

	
	
      $(document).ready(function(){

		    // like and unlike click
    $(".fa-link").click(function(){
        var id = this.id;   // Getting Button id
        var split_id = id.split("_");

        var text = split_id[0];
        var postid = split_id[1];  // postid
		  
	if(text == "like"){
		  
        // Set trigger and container variables
        var trigger = $(".fa fa-link"),
            container = $("#cont_"+postid);
			


			
			
          // Set $this for re-use. Set target from data attribute
          var $this = $(this),
            target = $this.data("target");       
          
          // Load target page into container
          container.load(target);
          
          // Stop normal link behavior
          return false;
        
		
		
		
    }else{
		  // Set $this for re-use. Set target from data attribute
          var $this = $(this),
            target = $this.data("target");       
          window.location.assign("remark.php?"+postid);
		
		
	}
	
	
	
	
	
      });
	  
	 
	  });
    </script>';

	 
	 
	 
	 
	 
	 
	 
	 
	 
	 echo'<form>';
	 
	if(isset($_GET['query'])){
		
		$user=$_COOKIE['username'];

		  $untoken=$_COOKIE['untoken'];
	if(isset($untoken) && isset($user)){
		require'database.php';
		
		$query= "SELECT untoken FROM users1 WHERE username='$user'";	
$next= mysqli_query($link, $query);
$result= mysqli_fetch_array($next);
		
		if($result['untoken'] != $untoken){setcookie("username","$user", time() - 1);
		setcookie("untoken","$untoken", time() - 1);
		header("location: log in.php");
        exit();}
		
	}else{
		setcookie("username","$user", time() - 1);
		setcookie("untoken","$untoken", time() - 1);
		
		header("location: log in.php");
        exit();
	
        
		}
		
if(isset($user)){
	
require_once 'database.php';

$user=$_COOKIE['username'];
if(isset($user)){
	
	$limit= "20";
	


	$search = mysqli_real_escape_string($link, $_GET["query"]);
	$query = "
	SELECT * FROM users 
	WHERE username LIKE '%".$search."%'
	OR lastname LIKE '%".$search."%'
	OR firstname LIKE '%".$search."%'
	OR phone LIKE '%".$search."%' 
	OR mode LIKE '%".$search."%' 
	OR location LIKE '%".$search."%'
	OR gender LIKE '%".$search."%'
	
	ORDER BY verification DESC, Linkups DESC LIMIT $limit OFFSET 0;
	";
	
	
		
		
		$result = mysqli_query($link, $query);





if(mysqli_num_rows($result) > 0 )
{

	while($row = mysqli_fetch_array($result))
	{
	
	echo'<fieldset>';
	echo'<ul class="twit" role="navigation">
	<li>';
	
	if($row["profilepic"] != "")
	{
	echo'<a href="'; echo $row["profilepic"]; echo'">
	<span class="login100-form-avatar">';}else{ echo'
	<span class="login100-form-avatar">';}
	
	if($row["profilepic"] != "")
	{
	echo'<img src="'; echo $row["profilepic"]; 


	}else{
		if($row["gender"] == "male")
		{echo'<img src="/';echo'gender/male.jpg';}else{
		echo'<img src="/';echo'gender/female.jpg';
	
	}
	}
	
	echo'"alt="AVATAR"> 
	</span>
	<a/>
	</li>'; if($row["verification"] == "verified" ){echo'<span class="login10-form-avatar">
	<img src="/verified.jpeg" alt="AVATAR"> 
	</span>';}
 
     echo'<li><a href="/info.php?un='; echo $row["username"]; echo'"><b>'; 
	 


			   if (strlen($row['firstname']) < 9){
							  
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


	 
	 echo'<br/>';
	 
	 	
	echo' </a></li>
    ';
	
	

if($row["verification"] == "verified" ){
	echo'<li> <br><div id="cont_'; echo $row["username"]; echo'">
	<button class= "fa fa-link" data-target="linkup.php?un=';echo $row["username"]; echo"&status=unverify"; echo'" id="like_'; echo$row["username"]; echo'"> unverify</button>
	</div>
	
	</br></li> ';
}

  echo'</ul>';
  
  //if already suspended
  if($row["mode"] == "suspended" ){
  echo'<ul class="twit" role="navigation">
	<li> 
	<div id="cont_'; echo $row["username"]; echo'">
	<button class= "fa fa-link" data-target="linkup.php?un='; echo $row["username"]; echo"&status=unsuspend"; echo'" id="like_'; echo$row["username"]; echo'"> unsuspend</button></li></div>
	</ul>';
  }
  
  //if not yet suspended
	 if($row["mode"] != "suspended" ){
  echo'<ul class="twit" role="navigation">
	<li> 
	<div id="cont_'; echo $row["username"]; echo'">
	<button class= "fa fa-link" data-target="linkup.php?un='; echo $row["username"]; echo"&status=suspend"; echo'" id="like_'; echo$row["username"]; echo'">suspend</button></li></div>
	</ul>';
  }
	
	
	
	
	
  echo'<ul class="twit">';
	echo'<li><font color=""> message &nbsp<i class="fa fa-comment" id="remark_un=';echo$row['username']; echo'"></i></font></li>';
	echo'</ul>';
	
	
  echo'</fieldset>';
	

	}
	

}




else
{
	echo '<fieldset><font color="red">No search result Found</font></fieldset>';
	
}
		
	}
	
	}else{		echo'<fieldset>'; 

	echo'<ul class="twit" role="navigation">';
	echo'<li>';
	
	echo'<a href="log in.html"><h4>Log in</h4></button></a>';

	echo'</li>';

	echo'<li>';
	echo'<a href="sign up.html"><h4>Sign up</h4></a>';

	echo'</li>';
	echo'</ul>';
	echo'</fieldset>';
	}
	
	
	}else{	
		////////////
		
		require'database.php';
			$limit= "20";
	


$query = "SELECT * FROM users ORDER BY RAND() LIMIT $limit OFFSET 0;";
	
	
		
		
		$result = mysqli_query($link, $query);





if(mysqli_num_rows($result) > 0 )
{

	while($row = mysqli_fetch_array($result))
	{
		
		
		
		
		
		
		
		echo'<fieldset>';
	echo'<ul class="twit" role="navigation">
	<li>';
	
	if($row["profilepic"] != "")
	{
	echo'<a href="'; echo $row["profilepic"]; echo'">
	<span class="login100-form-avatar">';}else{ echo'
	<span class="login100-form-avatar">';}
	
	if($row["profilepic"] != "")
	{
	echo'<img src="/'; echo $row["profilepic"]; 


	}else{
		if($row["gender"] == "male")
		{echo'<img src="/';echo'gender/male.jpg';}else{
		echo'<img src="/';echo'gender/female.jpg';
	
	}
	}
	
	echo'"alt="AVATAR"> 
	</span>
	<a/>
	</li>'; if($row["verification"] == "verified" ){echo'<span class="login10-form-avatar">
	<img src="/verified.jpeg" alt="AVATAR"> 
	</span>';}
 
     echo'<li><a href="/info.php?un='; echo $row["username"]; echo'"><b>'; 
	 


			   if (strlen($row['firstname']) < 9){
							  
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


	 
	 echo'<br/>';
	 
	 	
	echo' </a></li>
    ';
	
	

if($row["verification"] == "verified" ){
	echo'<li> <br><div id="cont_'; echo $row["username"]; echo'">
	<button class= "fa fa-link" data-target="linkup.php?un=';echo $row["username"]; echo"&status=unverify"; echo'" id="like_'; echo$row["username"]; echo'"> unverify</button>
	</div>
	
	</br></li> ';
}

  echo'</ul>';
  
  //if already suspended
  if($row["mode"] == "suspended" ){
  echo'<ul class="twit" role="navigation">
	<li> 
	<div id="cont_'; echo $row["username"]; echo'">
	<button class= "fa fa-link" data-target="linkup.php?un='; echo $row["username"]; echo"&status=unsuspend"; echo'" id="like_'; echo$row["username"]; echo'"> unsuspend</button></li></div>
	</ul>';
  }
  
  //if not yet suspended
	 if($row["mode"] != "suspended" ){
  echo'<ul class="twit" role="navigation">
	<li> 
	<div id="cont_'; echo $row["username"]; echo'">
	<button class= "fa fa-link" data-target="linkup.php?un='; echo $row["username"]; echo"&status=suspend"; echo'" id="like_'; echo$row["username"]; echo'">suspend</button></li></div>
	</ul>';
  }
	
	
	
	
	
  echo'<ul class="twit">';
	echo'<li><font color=""> message &nbsp<i class="fa fa-comment" id="remark_un=';echo$row['username']; echo'"></i></font></li>';
	echo'</ul>';
	
	
  echo'</fieldset>';
}}
	
}


		                   
				
			
	
	?>
	
	
	
	</style> 
  
  
  <style type="text/css">
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
  

  .postWraper a{
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

#menu li {
    display: block;
    position: relative;
    float: left;
	
}


#menu li:hover {
    display: block;
    position: relative;
    float: left;
	color: 57b846;
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
    font-size: 1110px;
}
li:hover a { background: #57b846; }
li:hover li a:hover {
    background: #000000;
}


</style>
	
	
	<style>
	
 audio {
  width: 100%;
  
  
}
	
	.loginvideo-form-avatar video {
    width: 100%;
}
	
	button {
    font-size: 0.9em;
    border: 0;
    background: #57b846;
    color: #fff;
    border-radius: 10px;
}
	
	
	.postWraper a {
    color: #000000;
    text-decoration: none;
}
	
	.login-form-avatar img {
    width: 100%;
}
	
	
	a{
		text-decoration: none;
		color: #57b846;
	}
	
	
.twitter li a{
  color: black;
  style: none;
  color: #57b846;
  
}
	
	.twitter li a:hover{
  color: #57b846;
}
	
	input[type="text"] {
	width:50em;
	
	border-radius:20px;
	height:30px;
	border-color:#57b846;
	
	}
	
	.twitter li> button:hover {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 0.8em;
border-radius: 80px;
}
	
	
	.twit {
  display: flex;
  
 
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


.twitter{
display: none;
}
	
	
name {
	
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

ul {
  padding: 0;
  list-style: none;
}
	
	
.twitter {
  display: flex;

}

.twitter__bird {
  margin-left: auto;
  margin-right:auto;
} 

/*
 
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
font-size: 30px;
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
  font-size: 0.6em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  
}
	
	textarea{
	
   top: 160px;
   margin-left: auto;
  margin-right: auto;
  position: relative;
  	

	 display: flex;
   
	max-width:50em;
	min-width: 30em;
   height:30em;
   padding:12px 20px;
   box-sizing:cover;
   border: 2px solid #57b846;
   border-radius:4px;
   background-color:#fff
   resize:none;
   rows:40px;
   cols:10px;
   }
	



    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 5px 15px;
		vertical-align: middle;
		top:80px;
    }
	
    table.table td i {
        font-size: 19px;
    }
	
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




fieldset{
	
	top: 60px;
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






/***** Media queries *****/

@media (min-width: 992px) and (max-width: 1199px) {}

@media (min-width: 768px) and (max-width: 991px) {}

@media (max-width: 767px) {
	
		

    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: -10em -20em;
		vertical-align: middle;
		top:10px;
    }
	
    table.table td i {
        font-size: 19px;
    }
	
	
	<?php
		if(isset($_COOKIE['darkmode'])){
	echo"	
table.table tr td{

padding: 0em 0em;
min-width: 40px;
max-width: auto;

}";
								}else{
									
echo"table.table tr td{
background-color: #fff;
padding: 0em 0em;
min-width: 40px;
max-width: auto;

}";
								}
	
	

	
	
	?>
	
	
	
	
	
	
	
	
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
	
	
	
	
	
	body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100
  background-color: #57b846;
  
}


	input[type="text"] {
	width:17em;
	
	border-radius:20px;
	height: 25px;
	border-color:#57b846;
	
	}
	
	.twit li> button:hover {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 15px;
border-radius: 10px;
}











nav {
	
		z-index: 9999;
 min-height:0px;
    width: 100%;
    min-width:
    background: #fff;
    
    border-radius: 
    box-shadow: 5px 55px 50px -20px #b6b6b6;
position: fixed;
top: 0px;
	 


}


textarea{

   top: 160px;
   margin-left: auto;
  margin-right: auto;
  position: relative;
	 display: flex;
	max-width:50em;
	min-width: 20em;
   min-height:30em;
   max-height:50em;
   padding:12px 20px;
   box-sizing:cover;
   border: 2px solid #57b846;
   border-radius:4px;
   background-color:#fff
   resize:yes;
   rows:40px;
   cols:10px;
   }



	
.twitter li {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 20px;
}



.twitter li > button {
  font-size: 0.8em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  display: flex;
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


.dialog-container{
		padding: 10px;
		margin: 10px;
		width: 90%;

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















}
	
	</style>

	</body>
</html>
