<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- icons -->
    <link rel="shortcut icon" href="icon.png"/>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
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
 
 ?>

<title>Linksxup Wallet</title>





		
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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



 <script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>


<script src="js/jquery-3.3.1.js" type="text/javascript"></script>
	  
	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		
<script src="js/jquery-3.3.1.js" type="text/javascript"></script>

 <script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>

	  
	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  
		   <script src="js/clipboard.min.js"></script>

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
    
	
   <li><button>Linkxcoins</button></li>
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
.login200-form-avatar img {
    width: 100%;
}
.login200-form-avatar img {
    display: flex;
    height: auto;
    border-radius: 100%;
    border-line: 50px;
    border-color: #57b846;
    overflow: hidden;
    margin-left: 0px;
    margin-top: 0px;
    margin-bottom: 0px;
    align-items: center;
}

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

button{
	
	
    font-size: 0.9em;
  border: 0;
  background-color: gold;
  color: darkgoldenrod;
  border-radius: 10px;
	
}

.list-group-item button {
   border-radius: 100%;
   background-color: gold;
}
</style>

</head>
<body>




<form>





<fieldset>





	<?php
 
	
	
	if(isset($_COOKIE['darkmode'])){
	
	  echo"<script>
	  $(document).ready(function(){

$('body').css('background-color','#333');
$('fieldset').css('background-color','#121212');
$('.postWraper a').css('color','#fff');
$('postWraper').css('color','#fff');
$('nav').css('background','#333');
$('main').css('background','#333');
$('.twit li b').css('color','#fff');
$('.liink li b').css('color','#fff');
$('.liink').css('color','#fff');
$('article').css('color','#fff');
$('h6').css('color','#57b846');
$('b').css('color','#57b846');
	  });
	  
    </script>";
	
}

require'database.php';
//for coins query
		
		$wallet = "SELECT * FROM users  WHERE username='$user'";
		$wallet1 = mysqli_query($link, $wallet);
		$wallet11=mysqli_fetch_array($wallet1);
	echo"<ul class='twit' role='navigation'><li><h6><font color=''>Your Linkxcoin balance:&nbsp<b>";

							    echo'<button>C</button>&nbsp'; 

	echo$wallet11['coins']; echo"</b></font></h6></li></ul>";
	
	
	
	
	echo'<ul class="twit" role="navigation"><li><span class="login100-form-avatar"><img src="coin100.png" alt="AVATAR"></span></li>&nbsp
	<li><b><font color="">65 linkxcoins</font></b>
	<br><h6>plus extra 5 coins bonus. (Basic)</br></li>
	<br><button><a href="https://paystack.com/pay/linkxcoin100">NGN 100</a></buttton></br>
	</ul>';
	
	
		echo'<ul class="twit" role="navigation"><li><span class="login100-form-avatar"><img src="coin250.png" alt="AVATAR"></span></li>&nbsp
	<li><b><font color="">150 linkxcoins</font></b>
	<br><h6>plus extra 10 coins bonus. (Compact)</br></li>
	<br><button><a href="https://paystack.com/pay/linkxcoin250">NGN 250</a></buttton></br>
	</ul>';
	
	
		echo'<ul class="twit" role="navigation"><li><span class="login100-form-avatar"><img src="coin500.png" alt="AVATAR"></span></li>&nbsp
	<li><b><font color="">300 linkxcoins</font></b>
	<br><h6>plus extra 20 coins bonus. (Premium)</br></li>
	<br><button><a href="https://paystack.com/pay/linkxcoin500">NGN 500</a></buttton></br>
	</ul>';
  ?></br> 
  </ul>
  </fieldset>
  
  
  <fieldset>
  <font color="#fff">Use linkxcoins to award linkupdates (posts). Support Linksxup and encourage your favourite linksxuper. Awarding a linkupdate (post), highlights it for all to see the total amount of awards gotten.
  </font>
  </fieldset>
  
   <fieldset>
  <font color="#fff"><b>What is this award?</b></font>
<p><span class="login-form-avatar"><img src="sample.png" alt="AVATAR"></span></p>

  <p><font color="#fff">The award is given by linksxupers (users) to award post/linkupdate made by other linksxupers  for their contriburions and to as well 
  encourage them for their shared contents. The type of award is the "Gold star award"</font></p>
  
  <p><span class="login100-form-avatar"><img src="medal.jpg" alt="AVATAR"></span> <font color="#fff">Gold star Award requires 5 Linkxcoins.<br>linkupdates (posts) with the highest number of awards rises to the top in the <a href="awards.php">"top awards"</a> page.</font></p>
  
  </fieldset>
  
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


.hmm {
    display: flex; 
    background-color: #57b846;
}

.hmm {
     height: 20px; 
     align-items: center; 
    padding: 110 110px;
     border-radius: 5px; 
     color: #fff; 
     cursor: pointer; 
     min-width: auto; 
    font-size: 0.9em;
    border: 0;
    background: #57b846;
    color: #fff;
    border-radius: 5px;
}



h6{color:#000;}


twit li button a{
  color: #fff;
  text-decoration: none;

}



.twit > button a {
    color: #ffffff;
    text-decoration: none;
}

a {
color: gold;
    text-decoration: none;
}

a:hover {

    text-decoration: none;
	color: darkgoldenrod;
}

postWraper {
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
</style>
  
</form>


 
<style type="text/css">


 .liink postWraper{
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

 .postWraper{
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


.liinkk {
    height: 70px;
    align-items: center;
    padding: 110 110px;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    min-width: 200px;
    position: :;
}
.liinkk {
    display: flex;
    background-color: #57b846;
}

.twit li a {
    text-decoration: none;
    color: #57b846;
}


.postWraper a {
    color: #000000;
    text-decoration: none;
}


audio {
    width: 100%;
}


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
    padding: -1 em;
    background: #ffff;
    margin-left: 1px;
    white-space: nowrap;
	border-radius: 10px;
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
    background: #fff;
}

</style>









<style>

.liinkk {
  display: flex;
   background-color:  #57b846; 
 
}


.liinkk:hover {
  background-color:  #57b846; 
}



.liinkk {
  height: 70px;
  align-items: center;
  padding: 110 110px;
  border-radius: 5px;
  color: #fff;
 cursor: pointer;
  min-width: 200px;
  position: 
}
.liinkk li {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 20px;
}





.login11-form-avatar{
	  display: flex;
    min-width: 500px;
  max-width: 600px;
  max-height: 500px;
  border-radius: 2px;
  s-resize:500px;
  overflow: hidden;
  margin-left: 0px; 
  margin-top: 0px;
margin-bottom: 0px;
	
}

.login11-form-avatar img {
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
	







.login-form-avatar {
  display: flex;
    min-width: 500 px;
  max-width: 500 px;
  max-height: 600px;
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
    min-width: 400px;
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
	
	top: 70px;

  justify-content: center;
  align-items: center;
   background: #57b846;
       border-radius: 5px;
	width: 100%;
	 min-width: 600px;
	 max-width: 600px; 
 padding: 60px 20px;
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
  background-color: #fff;
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



.liink li > button {
  font-size: 1em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 20%;
  
}


.liink {
  display: flex;
  
 
}

.liink {
  height: 70px;
  align-items: center;
  padding: 110 110px;
  border-radius: 5px;
  color: rgba(117,117,117 ,1);
 
  min-width: 200px;
  position: 
}
.liink li {
  cursor: pointer;
   margin-left: auto;
  margin-right: auto;
font-size: 22px;
}

.liink li b {
 color: black;
}

.liink li:hover{
  color: #57b846;
}


.liink article{
 color: black;

}

.liink a{
 color: #57b846;
 text-decoration: none;
}

.liink button a{
 color: #fff;
 text-decoration: none;
}

.twit li b {
 color: black;
}



.twit > button{
background-color: #57b846;
font-size: 1.2em;
color: #fff;
border-radius: 5px;
cursor: pointer;
}

.twit > button a{
color: #ffffff;

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
		
	
	
		  .login11-form-avatar {
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
  height: 100px;
  align-items: center;
  padding: 110 110px;
  border: 1px solid rgba(238,238,238 ,1);
  border-radius: 5px;
  color: rgba(117,117,117 ,1);
  box-shadow: 5px 10px 20px -20px rgba(85,172,238 ,1);
  min-width: 200px;
   background-color: #fff;
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
    background: #57b846;
    border-radius: 5px;
    width: auto;
    min-width: 60px;
    max-width: 80;
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