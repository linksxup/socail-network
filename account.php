<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="icon.png" />


<title>My account</title>		
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>







<script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
	  
	  	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117749332-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117749332-1');
</script>
	  
			   <script src="js/clipboard.min.js"></script>

  <nav id="nav">
 
   <ul class="twitter" role="navigation">
   <li><a href='testt.php'<i class="fa fa-arrow-left"></i></a></li>
    
	
   <li><button>Account profile</button></li>
  </ul>
   

  

</nav>



   <main id="main">
 
   <ul class="links" role="navigation">

    <!--<li class="twitter__bird"><i class="fa fa-twitter"></i></li>-->
     
	 <form action="timeline.php">
	<li><button>+<i class="fa fa-pencil"></button></i></li>
  </form>
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


.col-lg-3{
align-items: center;
margin-left: auto;
margin-right: auto;

}



	.accordion .card {
		color: #424e5d;
		border: 1px solid #dddddd;
		top: 20px;
		
	}
	.accordion .card a {
		color: #424e5d;
		text-decoration: none;				
	}
	.accordion .card-header {
		background: linear-gradient(#fff, #f1f1f1);
		padding: .75rem 1rem;
		position: relative;
	}
	.accordion .card-header:hover {
		background: linear-gradient(#f1f1f1, #e8e8e8);
	}
	.accordion .card-header h2 {
		font-size: 1rem;
	}
	.accordion .fa {
		width: 20px;
		margin-right: .25rem;
	}
	.accordion .card-header a {
		align-items: center;
		width: 100%;
		cursor: pointer;
	}
	.accordion .toggle {
		font-size: .8rem;
		line-height: .8rem;
		cursor: pointer;
		opacity: 0.7;
		position: absolute;
		right: 16px;
		top: 16px;
		width: 14px;
		margin: 0;
	}
	.accordion .toggle:hover {
		opacity: 1;
	}
	.accordion .card-body {
		padding: 0;
		align-items: center;
		margin-left: auto;
	
		margin-right: auto;
	}
	.accordion .list-group-item {				
		border-radius: 0;
		border-width: 1px 0 1px 0;
		padding-left: 30px;
		background: #d6dbe0;
		font-weight: 500;
	}
	.accordion .list-group-item:hover {
		background: #57b846;
	}
	.accordion .list-group-item:hover a {
		color: #fff !important;
	}
	.accordion .list-group-item:hover .badge{
		background: #fff;
		color: #007bff;
	}
	.accordion .list-group-item a {
		color: #61656b;
		display: block;
	}
	.accordion .list-group-item .badge {
		float: right;
		min-width: 36px;
	}
	.accordion .rotate{
		transform: rotate(180deg); 
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
</style>


	 <!-- 3. Instantiate clipboard -->
    <script>
    var clipboard = new ClipboardJS('.ntn', {
        target: function() {
            return document.querySelector('.link');
        }
    });

    clipboard.on('success', function(e) {
        alert("copied link to clipboard");
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
	<style>
	.link{
	opacity: 0;
	}
	
	</style>
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
		
	

<div class="container mt-5">
	<div class="row">
		<div class="col-lg-3">
			<div class="accordion mb-2" id="accordionExample">
				<div class="card">
					<div class="card-header" id="headingOne">
						<h2 class="mb-0">									
							<a data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								<span>
						
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
											require'database.php';
	
	$query = "
	SELECT * FROM users WHERE username='$user' ";


$result = mysqli_query($link, $query);

$row = mysqli_fetch_array($result);

if($row["profilepic"] != "")
	{
	 echo'
	<span class="login100-form-avatar">';}else{ echo'
	<span class="login100-form-avatar">';}
	
	if($row["profilepic"] != "")
	{
	echo'<img src="'; echo $row["profilepic"]; 


	}else{
		if($row["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg';}else{
		echo'<img src="';echo'gender/female.jpg';
	
	}
	}
	
	echo'"alt="AVATAR">
	
	</span>';








											
										}else{
											header("location: log in.html");
											exit();
										}
								
								
								
									echo'<b>'; echo$row['username']; echo'</b>	
								</span>';
								?>
								<i class="fa fa-chevron-down toggle"></i>
							
						</h2>
					</div>
					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="card-body">
							<ul class="list-group">
							
							<li class="list-group-item"><?php
							
							echo'<a href="info.php?un=';echo$row['username']; echo'">';
							?><i class="fa fa-street-view"></i> View Pofile</a></li>
							
								<li class="list-group-item"><?php
								
								echo'<a href="edit profile.php';echo'">'; ?><i class="fa fa-pencil"></i> Edit Pofile</a></li>
								
								
								
								<li class="list-group-item"><a href="wallet.php">
								<button><b><font color='darkgoldenrod'>C</font></b></button> Linkxcoin
								
								</a></li>
								
								
								<style>
	 button {
    font-size: 1em;
   border: 0;
    background: gold;
    color: #fff;
    border-radius: 100%;
}
								</style>
								
								
								<li class="list-group-item"><a href="verificationapplication.php?un=<?php echo$row['username']; ?>"><i class="fa fa-check"></i> Request account verification</a></li>

								
							</ul>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingTwo">
						<h2 class="mb-0">									
							<a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<span><i class="fa fa-pie-chart"></i> BUSINESS MODE</span>
								<i class="fa fa-chevron-down toggle rotate"></i>
							</a>
						</h2>
					</div>
					<div id="heading" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body">
							<ul class="list-group">
								<li class="list-group-item"><a href="#"><i class="fa fa-paper-plane"></i> Linksxup Ads<span class="badge badge-pill badge-primary"></span><h6>coming soon!!!</h6></a></li>
								<li class="list-group-item"><a href="#"><i class="fa fa-bar-chart"></i> Ads analytics</a></li>
								
							</ul>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingThree">
						<h2 class="mb-0">									
							<a data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								<span><i class="fa fa-cube"></i> Tools</span>
								<i class="fa fa-chevron-down toggle"></i>
							</a>
						</h2>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="card-body">
							<ul class="list-group">										
								<li class="list-group-item"><a href="gp.php"><i class="fa fa-calculator"></i> 5.00 GPA Calculator</a></li>
						
																		
							</ul>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingFour">
						<h2 class="mb-0">									
							<a data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								<span><i class="fa fa-cog"></i> Settings</span>
								<i class="fa fa-chevron-down toggle"></i>
							</a>
						</h2>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
						<div class="card-body">
							<ul class="list-group">
							<b>Invite a friend</b>
								<li class="ntn"><a href="#"><i class="fa fa-user-plus"></i><b> invite friend</b></a></li>
								
								
					
								
								<b>Light/Dark mode</b>
								<li class="list-group-item"><a href="mode.php">
								<?php
								if(isset($_COOKIE['darkmode'])){
								
								echo'<i class="fa fa-sun-o"></i>'; 
								}else{echo'<i class="fa fa-moon-o"></i>'; }
								?>
								
								</a></li>
						
								</li>
								
								
					
						


			
								<b>News Feed settings</b>
	<b>Show me linkupdates/post</b>
								<li class="list-group-item"><form action="activate.php" method="GET">
								<?php
								require_once 'database.php';


//Confirm if mode isset!!!
$mode=mysqli_query($link, "SELECT mode FROM users WHERE username='$user'");
	$modes=mysqli_fetch_row($mode);
if($modes[0] == "" || $modes[0]=="deactivated"){
								
								echo'
								
<select name="grade" size="1"  single="single" style="max-width:80px;">
 
   <option value="deactivated"><li>Posted by any user (default)</li></option>
   <option value="activate"><li>Posted by my linkups</li></option>
	
  </select>
								
								'; 
								
								
								}else{
									
									
										echo'
								
<select name="grade" size="1"  single="single" style="max-width:80px;">
 
	<option value="activate"><li>Posted by my linkups</li></option>
	
   <option value="deactivated"><li>Posted by any user (default)</li></option>
   
  </select>
								
								';
									
								}
								?>
								<button>Apply</button>
								</form></li>
						
								</li>				
								
								
								
								<b>Change/Reset password</b>
								<li class="list-group-item"><a href="changepassword.php"><i class="fa fa-key"></i> Change Password</a></li>
								
							</ul>
						</div>
						<a href="about.html">About</a>
						<a href="policy.html">policy</a>
						<a href="tos.html">Terms of service</a>
						<a href="help.html">Help</a>
					</div>
					
				</div>
				<div class="card">
					<div class="card-header" id="headingFive">
						<h2 class="mb-0"><a href="log out.php"><i class="fa fa-power-off"></i> Logout</a></h2>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	<div class='link'>
Hey hello... Join Linksxup!! And Linkup To Know What's up...
	
Explore New ways For The UNIBEN Community To Connect, Stay Informed,
And Find/Share Inspirational Ideas On Linksxup.	Logon to https://linksxup.appspot.com Or Install On Play store
now:  https://play.google.com/store/apps/details?id=com.appspot.linksxup.twa
 </div>
	
</div>


<style>

.ntn:hover {
    background: #57b846;
	color: #fffff;
}

.ntn{
	
	    background-color: #dddddd;
    display: block;
	color: #fff;
}

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
	 display: flex;
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
	
	
	 display: flex;
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