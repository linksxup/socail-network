<!DOCTYPE html>
<html lang="en">
<?php
 $user=$_COOKIE['username'];
 
if(isset($user)){} else{header("location: log in.html");}

?>
<head>
<link rel="shortcut icon" href="icon.PNG" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
				<!-- icons -->
    <link rel="shortcut icon" href="icon.PNG" />
<title>PHP GPA CALCULATOR PROGRAMME</title>		
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

    
	<li><button><b>SESSIONAL</b></button></li>
	   <li><a href='account.php'<i class="fa fa-home"></i></a></li>
   <li><button><b>5.0 GPA CALCULATOR</b></button></li>
  </ul>
   

  

</nav>



  
  


<style type="text/css">
.twitter li a{
  color: #57b846;
  text-decoration: none;
  
}
	
	.twitter li a:hover{
  color: #57b846;
}


		


button{
	
	
    font-size: 0.9em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 10px;
 position:center;
	margin-left:auto;
	margin-right:auto;
	
}
</style>



  <script src="js/jquery-3.3.1.js" type="text/javascript"></script>
	  
	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		 
		 
		 
		 </head>
	
		 	<body>	 
    <fieldset>
	<h4 align="center">
Please Select the number of courses you are about to calculate its GPA. </h4>
<button>
   <a href="calculate result5.php"><b>From 2-5 Courses.</b></a>
   </button>
   <br>
   <button>
   <a href="calculate result66.php"><b>6 Courses.</b></a>
   </button>
   
   <br>
   <button>
   <a href="calculate result77.php"><b>7 Courses.</b></a>
   </button>
   
   <br>
   <button>
   <a href="calculate result88.php"><b>8 Courses.</b></a>
   </button>
   
   <br>
   <button>
   <a href="calculate result99.php"><b>9 Courses.</b></a>
   </button>
   
   <br>
   <button>
   <a href="calculate result100.php"><b>10 Courses.</b></a>
   </button>
   
   <br>
   <button>
   <a href="calculate result111.php"><b>11 Courses.</b></a>
   </button>
   
   <br>
   <button>
   <a href="calculate result122.php"><b>12 Courses.</b></a>
   </button>
   
   <br>
   <button>
   <a href="calculate result133.php"><b>13 Courses.</b></a>
   </button>
   
   <br>
   <button>
   <a href="calculate result144.php"><b>14 Courses.</b></a>
   </button>
   
   <br>
   <button>
   <a href="calculate result155.php"><b>15 Courses.</b></a>
   </button>
   
   <br>
   <button>
   <a href="calculate result166.php"><b>16 Courses.</b></a>
   </button>
   
   <br>
   <button>
   <a href="calculate result177.php"><b>17 Courses.</b></a>
   </button>
   
   <br>
   <button>
   <a href="calculate result188.php"><b>18 Courses.</b></a>
   </button>
   
   <br>
   <button>
   <a href="calculate result199.php"><b>19 Courses.</b></a>
   </button>
   
   <br>
   <button>
   <a href="calculate result220.php"><b>20 Courses.</b></a>
   </button>
   
   
   
</fieldset>
</form>


 
<style type="text/css">

#menu li {
    display: block;
    position: relative;
    float: left;
	
}
li ul {
    display: none;
	
}
button a {
    display: flex;
    text-decoration: none;
    color: #fff; 
	width: 90px;
   
}
button a:hover {
background: black;
text-decoration: none;
color: #fff;
}



</style>









<style>

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
  background-color: #57b846;
  
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
	
	top: 80px;
display: grid;
  justify-content: center;
  align-items: center;
   background: #fff;
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
  color: blueviolet;
}



.twitter__bird {
  color: rgba(85,172,238 ,1);
  font-size: 1.3em;
}


.twitter li > button {
  font-size: 0.8em;
  border: 0;
  background: #57b846;
  color: #fff;
  border-radius: 100px;
  margin-top: 10px;
  
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
 color: blueviolet;
 text-decoration: none;
}



.twit li b {
 color: black;
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
  background-color: #57b846;
  
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
  color: blueviolet;
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
	
	
	display: grid;
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