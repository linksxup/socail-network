<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
				<!-- icons -->
    <link rel="shortcut icon" href="icon.png" />

		<title>autosearch linkups</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


 <script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>


<script src="js/jquery-3.3.1.js" type="text/javascript"></script>
	  
	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		
		         <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117749332-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117749332-1');
</script>
		
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
	  
	





	  <nav id="nav">
 
   <ul class="twitter" role="navigation">
   <li><a href='testt.php'<i class="fa fa-arrow-left"></i></a></li>
    

   <li><?php
     if(isset($_COOKIE['darkmode'])){
	
	  echo"<script>
	  $(document).ready(function(){

$('body').css('background-color','#333');
$('fieldset').css('background-color','#121212');
$('.postWraper a').css('color','#fff');
$('nav').css('background','#333');
$('main').css('background','#333');
$('.liinkk li b a ').css('color','#fff');
$('.postWraper').css('color','#fff');
$('b').css('color','#fff');
$('name').css('background','#333');


	  });
	  
    </script>";
	
}
   
   
   
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
   }else{
	   
	   header('location: log in.html');
	   exit();
	   
   }?>
<button>
   <a href="testt.php"><font color="#fff">Done linking up for now</font></a>
   </button>
   
  </li>
  
  </ul>

</nav>



   <main id="main">
 
   <ul class="links" role="navigation">

    <!--<li class="twitter__bird"><i class="fa fa-twitter"></i></li>-->
     
	 
	<li><button>Linksxup</button></i></li>
  
  </ul>
  </main>
  
  


<style type="text/css">
.twitter li a{
  color: #57b846;
  text-decoration: none;
  
}
	
	.twitter li a:hover{
  color: #57b846;
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
</style>



	</head>
	<body>
	<fieldset>
		<div class="container">
		
			
			<div class="form-group">
				<div class="input-group">
					
					<input type="text" name="search_text" id="search_text" placeholder="Search linkups by Uname, phone no, fname, lname, location" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />
		</fieldset>
	</body>
	
	
	
	
	
	

<style>



.login-form-avatar {
  display: flex;
    min-width: 600px;
  max-width: 600px;
  max-height: 500px;
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

button{
	background:#57b846;
	color: #fff;
	border-radius: 50px;
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
	
	top: 70px;

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
  height: 70px;
  align-items: center;
  padding: 110 110px;
  border: 1px solid rgba(238,238,238 ,1);
  border-radius: 5px;
  color: rgba(117,117,117 ,1);
 
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








.liinkk li > button {
  font-size: 1em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
 
     margin-left: 0px; 
  margin-right: 0px;
}


.liinkk li > button:hover {
background-color:#fff;
color:#57b846;
cursor:pointer;
}


.liinkk {
  display: flex;
  
 
}


.liinkk:hover {
  background-color:  #DDD; 
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

.li:hover {
 color: 57b846;
}

.liinkk li b {
 color: black;
}

.liinkk li b:hover {
 color: #fff;
}

.liinkk li:hover{
  color: #57b846;
}


.liinkk article{
 color: black;
}

.liinkk a{
 color: #57b846;
 text-decoration: none;
}



.twit li b {
 color: #57b846;
}



.twit > button{
background-color: #57b846;
font-size: 1em;
color: #fff;
border-radius: 5px;
cursor: pointer;
}

/***** Media queries *****/

@media (min-width: 992px) and (max-width: 1199px) {}

@media (min-width: 768px) and (max-width: 991px) {}

@media (max-width: 767px) {
	
	
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



<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch.php",
			method:"get",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>




