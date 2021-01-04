
<!DOCTYPE html>

<html lang="en">

<head>

   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- icons -->
    <link rel="shortcut icon" href="icon.png" />
  <meta charset="UTF-8">
  <title>Linksxup.. Linking you up to know whatsxup...</title>
  
 
  	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117749332-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117749332-1');
</script>
  
  
 <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

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
	 

	 
	 
	 
	 
	 
	 
	 
	 
	 
	 <script>
// Check that service workers are supported
if ('serviceWorker' in navigator) {
  // Use the window load event to keep the page load performant
  window.addEventListener('load', () => {
    navigator.serviceWorker.register('service-worker.js');
  });
}
</script> 
	 
	 
	 
	 
	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
		  $('.fa-home').css('color','#57b846');
        // Set trigger and container variables
        var trigger = $(".fa-home,.fa-plus-square"),
            container = $('#content');
        
        // Fire on click
        trigger.on('click', function(){
          // Set $this for re-use. Set target from data attribute
          var $this = $(this),
            target = $this.data('target');       
          
          // Load target page into container
          container.load(target + '.php');
          
          // Stop normal link behavior
          return false;
        });
		
		
		
		
		
		$('.fa-home').click(function(){
		$('.fa-home').css('color','#57b846');
		$('#story').css('display','flex');
		$('body').css('background-color', '#fff');
		$('.fa-plus-square').css('color','#696969');
	  });
		
		
		$('.fa-plus-square').click(function(){
		$('.fa-plus-square').css('color','#57b846');
		$('#story').css('display','none');
		$('.fa-home').css('color','#696969');
		$('body').css('background-color', '#ddd');
	  });
	  
	  
	  
	 /////////////////////////////////////////////////////////////////
	  
		    // like and unlike click
    $("").click(function(){
		
        var id = this.id;   // Getting Button id
        var split_id = id.split("_");

        var text = split_id[0];
        var postid = split_id[1];  // postid
		  
	if(text == "co"){
		  
        // Set trigger and container variables
        var trigger = $(".fa fa-heart, .fa fa-star"),
            container = $("#c_"+postid);
			


			
			
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
          window.location.assign("story.html?"+postid);
		
		
	}
	
	
	
	
	
      });
	  
	  
	  
	  
	  
	  
	  
	  ////////////////
	  $('#co_1').click(function(){
		$('#nav').css('display','none');
		$('.fieldset').css('display','none');
		$('#content').css('display','none');
		$('#story').css('display','none');
		$('main').css('display','none');
		$('body').css('background-color','#1b1d20');
		$('.twit').css('border','hidden');
	  
	  });
	  
	  
	  
	  
	  ////////////

		
	
	  
	  
	  
	  
	
      });
	  
	  
	  
	 </script> 

</head>

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
$('#story').css('background','#333');





$('.postWraper').css('color','#fff');
$('h6').css('color','#fff');
	  });
	  
	  
    </script>";
	
}


if(isset($_COOKIE['username'])){
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
 
	}

 
if(isset($user))
{echo'
  <nav id="nav">
 
   <ul class="twitter" role="navigation">
    <li><i class="fa fa-home" data-target="testt2"></i></li>
	
	<li><a href="search.php"><i class="fa fa-search"></i></a></li>
	
    <li><a href="notifs.php" class="notification">';
	
		require'database.php';
		$result = mysqli_query($link, "SELECT * FROM notifications  WHERE username='$user' AND achieve='unread'");

	if(mysqli_num_rows($result) > 0){
	echo'<font color="#57b846"><i class="fa fa-bell"></i><span class="badge">'; print_r(mysqli_num_rows($result));
	
	//IF my linkups have posted a linkupdate and the notification message is still present then show the + sign close to the notification icon....
	////////////
	 $query1="SELECT * FROM notifications ORDER  BY TIME DESC, STATUS DESC;";

		$result1 = mysqli_query($link, $query1); 
	   if(mysqli_num_rows($result1) > 0){
		
			$row = mysqli_fetch_array($result1);
				
				$linkup1=mysqli_query($link, "SELECT linkups FROM users WHERE username='$user'");
				$linkup=mysqli_fetch_row($linkup1);
				if(!empty($linkup[0])){
					
					$e=unserialize($linkup[0]);
					
					//if its a text linkupdate
	   if(in_array($row['username'], $e)){echo'+';}}}
	///////////
	
	


	echo'</span></font>';
	}else{echo'<i class="fa fa-bell"></i>';
	echo'<span class="badge">';
	
		//IF my linkups still have the have posted a linkupdate and the notification message is still present then show the + sign close to the notification icon....
	////////////
	 $query1="SELECT * FROM notifications ORDER  BY TIME DESC, STATUS DESC;";

		$result1 = mysqli_query($link, $query1); 
	   if(mysqli_num_rows($result1) > 0){
		
			$row = mysqli_fetch_array($result1);
				
				$linkup1=mysqli_query($link, "SELECT linkups FROM users WHERE username='$user'");
				$linkup=mysqli_fetch_row($linkup1);
				if(!empty($linkup[0])){
					
					$e=unserialize($linkup[0]);
					
					//if its a text linkupdate
	   if(in_array($row['username'], $e)){echo'<b>...</b>';}}}
	
	echo'</span>';
	
	}
	
	echo'
	
	
	</a></li>
    
	  <li><i class="fa fa-plus-square" data-target="testt3"></i></li>';
    
	
	
	require'database.php';
	$resultt = mysqli_query($link, "SELECT * FROM users  WHERE username='$user'");
	$result1=mysqli_fetch_array($resultt);
	if(empty($result1['profilepic'])){echo'<li><a href="account.php"><i class="fa fa-user"></i></a></li>';}
	
	else{
	echo'<li><a href="account.php"><span class="useravatar"><img src="';
	echo$result1['profilepic']; echo'" alt="AVATAR">
	
	</span></a></li>';}
	
	
	
	
   echo'<li><button>Linksxup</button></li>
  </ul>
   

  

</nav>










  <main id="main">
 
   <ul class="links" role="navigation">

    <!--<li class="twitter__bird"><i class="fa fa-twitter"></i></li>-->
     <li><button><h5><b>Linksxup</b></button></h5></li>
	 <form action="timeline.php">
	<li><button>+<i class="fa fa-pencil"></button></i></li>
  </form>
  </ul>
</main>';

}else{
header('location: index.html');
exit();}



  ?>
 
  
<body>
<?php

require_once 'database.php';


//Confirm if mode isset!!!
$mode=mysqli_query($link, "SELECT mode FROM users WHERE username='$user'");
	$modes=mysqli_fetch_row($mode);


require'database.php';
 $linkup1=mysqli_query($link, "SELECT * FROM users WHERE username='$user'");
$linkup=mysqli_fetch_array($linkup1);
	

echo'<div id="story">
 <div id="paginated_gallery" class="gallery">
  <div class="gallery_scroller">
   <a href="moment.php">
<span class="login300-form-avatar">';

if($linkup["profilepic"] != "")
	
	{ 
		echo'<img src="'; echo $linkup["profilepic"]; echo'" alt="AVATAR">';
}else{if($linkup["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg'; echo'" alt="AVATAR">';
	}else{
		echo'<img src="';echo'gender/female.jpg'; echo'" alt="AVATAR">';
	}}


echo'<font color="#57b846">+Add</font>
</span></a>';
		

		
		 //Show profilepic 
$que = "SELECT * FROM moment1  ORDER  BY TIME DESC LIMIT 100 OFFSET 0;";
$moment = mysqli_query($link, $que);







///////// for the current user
$qu = "SELECT * FROM moment1  WHERE username='$user'";
$mo = mysqli_query($link, $qu);
$momm = mysqli_fetch_array($mo);


if(mysqli_num_rows($mo) > 0){
	  echo'<div>';
	
	echo'<a href="story.php?un='; echo$momm["username"]; echo'">';
echo'<span class="login300-form-avatar">';

	
	
	if($momm["profilepic"] != "")
	
	{
		echo'<img src="'; echo $momm["profilepic"]; echo'" alt="AVATAR">';
}else{if($momm["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg'; echo'" alt="AVATAR">';
	}else{
		echo'<img src="';echo'gender/female.jpg'; echo'" alt="AVATAR">';
}}

echo'<font color="#57b846">'; echo"My";


echo'</font>';
echo'</span>
</a>
	</div>';

}


while($mom = mysqli_fetch_array($moment)) {
	
	 //Delete medias if more than 24 hour old...
				$time="$mom[time]";
				$date= date('Y-m-d H:i:s');
				
		
		 $date1=date_create("$time");
		 $date2=date_create("$date");
		 $diff=date_diff($date1, $date2);
 	if($diff->format("%a") > 1)
	{

$stmt=mysqli_query($link, "DELETE FROM moment1 WHERE time='$time'");

	}
	


		//Check if the present username in moment1 has data in moment2 else delete such 
	//username from moment2...
	$person= "$mom[username]";
	require'database.php';
	
	$q = "SELECT * FROM moment2  WHERE username='$person'";
$m = mysqli_query($link, $q);


if(mysqli_num_rows($m) < 1){
	require'database.php';
	$s=mysqli_query($link, "DELETE FROM moment1 WHERE username='$person'");	

	
	}
	
if($mom["username"] == "$user"){


}
//////////////

if($mom["username"] != "$user"){	
	  echo'<div>';
	  
echo'<a href="story.php?un='; echo$mom["username"]; echo'">';
echo'<span class="login300-form-avatar">';


	if($mom["profilepic"] != "")
	
	{
		echo'<img src="'; echo $mom["profilepic"]; echo'" alt="AVATAR">';
}else{if($mom["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg'; echo'" alt="AVATAR">';
	}else{
		echo'<img src="';echo'gender/female.jpg'; echo'" alt="AVATAR">';
}}
	
	
	
echo'<font color="#57b846">';
   if (strlen($mom['username']) < 6){
							  
							  echo $mom['username']; 
							  
							  }else{echo substr("$mom[username]","0", "5"); echo'..';}

echo'</font>';
echo'</span>
</a>';
echo'</div>';	
	
	
}
	
	
}

 echo'<span class="btn prev"></span>
  <span class="btn next"></span>
  </div>
</div>
</div>';






?>


	
	
	
	
<style type="text/css">
.badge {
    display: inline-block;
    padding: .25em .4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem;
}

#story{
	z-index: 1;
 min-height:0px;
    background: #fff;
    
	 min-width: 600px;
	 max-width: 600px;
 padding: 15px 10px;

 margin-left: auto;
  margin-right: auto;
	
	
border-radius: 2px;
position: absolute;
top: 68px;
    border-radius: 5px;
    color: rgba(117,117,117 ,1);
    box-shadow: 5px 10px 20px -20px rgba(85,172,238 ,1);
  
}


.useravatar img {
    width: 100%;
}


.useravatar img {
    width: 100%;
    display: flex;
    width: 25px;
    height: 25px;
    border-radius: 100%;
    border-line: 50px;
    border-color: #57b846;
    overflow: hidden;
    margin-left: 0px;
    margin-top: 0px;
    margin-bottom: 0px;
    align-items: center;
}


    .notification  .badge{
    position:relative;
        top: -10px;
        right: 12px;
        padding: 0px 5px;
        border-radius: 50%;
        background: #57b846;
        color: white;
		font-family: "Roboto";
		bod
    }



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
		</style>

		<script type="text/javascript">
			window.addEventListener("load", function () {
		    const loader = document.querySelector(".loader");
		    loader.className += " hidden"; // class "loader hidden"
		});
		</script>
		<div class="loader">
	    	<img src="img/Preloader_.gif" alt="Loading..." />
		</div>




<div id="c_1">

</div>




    <div id="content">
      <?php 
	  $user=$_COOKIE['username'];
 
if(isset($user))
{ 
	  
	  
	  include("testt2.php"); 
	  
	  
}

	else{header("location:log in.html");
	}
	  ?>
    </div>
	
	
	
<style>
.login300-form-avatar img:hover {
  text-decoration: none;
  color: #57b846;
}

a login300-form-avatar img:hover{
	color: #57b846;
}

.twitter li a{
  color: #696969;
  text-decoration: none;
  
}
	
	.twitter li a:hover{
  color: #57b846;
}





p {cursor: pointer;
   margin-left: auto;
  margin-right: auto;}



select option { 
		margin:40px;
		background: rgba(0, 0, 0, 0.3)
		color:#57b846;
		text-shadow:0 1px 0 rgba(0, 0, 0, 0.4); }						
								



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
    min-width: 60px;
    max-width: 600px;
    max-height: auto;
    border-radius: 70px;
    s-resize: 500px;
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
@media(max-width: 767px)
{
body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100%;
  background-color: #fff;
  
}


#story{
	z-index: 1;
 min-height:0px;
    background: #fff;
    
	 min-width: 10px;
	 max-width: auto;
 padding: 15px 10px;

 margin-left: auto;
  margin-right: auto;
	
	
border-radius: 2px;
position: absolute;
top: 68px;
	 

	 
	     
    border-radius: 5px;
    color: rgba(117,117,117 ,1);
    box-shadow: 5px 10px 20px -20px rgba(85,172,238 ,1);
  
	 
	 
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
	
	
.gallery .btn.next {
 display: none;
}

.gallery .btn.prev {
display: none;
}
	
fieldset {
    justify-content: center;
    align-items: center;
    background: #fff;
    border-radius: 5px;
    width: 100%;
    min-width: 20px;
    max-width: 600px;
    padding: 20px 20px;
    margin-left: auto;
    margin-right: auto;
    position: relative;
}



.links li > button {
    font-size: 0.8em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100em;
  display: none;

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


@media (min-width:100px) and (max-width: 259px) {
	
	.gallery {
  position: relative;
   max-width: 100px;
   margin-left: auto;
  margin-right: auto;
  padding: 0 10;
}
	
}


@media (min-width:260px) and (max-width: 399px) {
	
	.gallery {
  position: relative;
   max-width: 255px;
   margin-left: auto;
  margin-right: auto;
  padding: 0 10;
}
	
}

@media(min-width: 400px) and (max-width: 549px) {
	
	.gallery {
  position: relative;
   max-width: 390px;
  margin-left: auto;
  margin-right: auto;
  padding: 0 10;
}
	
}

@media(min-width: 550px) and (max-width: 767px) {
	
	.gallery {
  position: relative;
   max-width: 540px;
  margin-left: auto;
  margin-right: auto;
  padding: 0 10;
}

}
	

@media(max-width: 767px)	
{
	.links li > button {
    font-size: 0.8em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100em;
  display: flex;

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
 
}



.links {
  display: flex;
  
 
}

	
	
	
	
	
	
	
	
	
	
.useravatar img {
    width: 100%;
    display: flex;
    width: 20px;
    height: 20px;
    border-radius: 100%;
    border-line: 50px;
    border-color: #57b846;
    overflow: hidden;
    margin-left: 0px;
    margin-top: 0px;
    margin-bottom: 0px;
    align-items: center;
}
	
	

        .loginvideo-form-avatar {
  display: flex;
    min-width: 200px;
  max-width: 600px;
  max-height: 300px;
  border-radius: 30px;
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
  top: 20px;
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
  border-radius: 100em;

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
