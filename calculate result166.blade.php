<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>

<link rel="stylesheet" type="text/css" href="sheet3.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- icons -->
    <link rel="shortcut icon" href="icon.png" />
	<script src="js/jquery.js"></script>
	<script src="js/touchTouch.jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src="js/script.js"></script>
	<script src="js/packery.pkgd.min.js"></script>
	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/wow.js"></script>
	<script>
		$(document).ready(function () {
			if ($('html').hasClass('desktop')) {
				new WOW().init();
			}
		});
		<scrpt src="js/html5shiv.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" media="screen" href="css/ie-8.css">
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


<h1 ><font color="white">GP CALCULATION</font></h1>
<form action ='calculate result16.php' method='POST'>
@csrf
<br>Course code.</br>
 <input type='text'    placeholder='Course name' name='username' auto complete='on'>

<br>Course load</br>
 <input type='number'    placeholder='Credit load' name='credit' required='required'>

Grade
<select name="grade" size="1"  single="single"> 
 <option value="A">A</option>   <option value="B">B</option>   <option value="C">C</option>   <option value="D">D</option>   <option value="E">E</option> 
<option value="F">F</option></select>


<br>Course code.</br>
 <input type='text'    placeholder='Course
 name' name='username' auto complete='on'>


<br>Course load</br>
 <input type='number'    placeholder='Credit load' name='credit1' required='required'>

Grade
<select name="grade1" size="1" single="single"> 
 <option value="A">A</option>   <option value="B">B</option>   <option value="C">C</option>   <option value="D">D</option>   <option value="E">E</option> <option value="F">F</option></select>
 </select>


<br>Course code.</br>
 <input type='text'    placeholder='credit name'Course name' name='username' auto complete='on'>


<br>Course load</br>
 <input type='number'    placeholder='Credit load' name='credit2' required='required'>

Grade
<select name="grade2" size="1" single="single"> 
 <option value="A">A</option>   <option value="B">B</option>   <option value="C">C</option>   <option value="D">D</option>   <option value="E">E</option><option value="F">F</option></select> </select>


<br>Course code.</br>
 <input type='text'    placeholder='Course name.' name='username' auto complete='on'>

<br>Course load</br>
 <input type='number'    placeholder='Credit load' name='credit3' required='required'>

Grade
<select name="grade3" size="1" single="single"> 
 <option value="A">A</option>   <option value="B">B</option>   <option value="C">C</option>   <option value="D">D</option>   <option value="E">E</option> <option value="F">F</option></select></select></br>

<br>Course code.</br>
 <input type='text'    placeholder='Course name' name='username' auto complete='on'>


<br>Course load</br>
 <input type='number'    placeholder='Credit load' name='credit4' required='required'>

Grade
<select name="grade4" size="1" single="single"> 
 <option value="A">A</option>   <option value="B">B</option>   <option value="C">C</option>   <option value="D">D</option>   <option value="E">E</option> <option value="F">F</option></select></select>



<br>Course code.</br>
 <input type='text'    placeholder='Course name' name='username' auto complete='on'>


<br>Course load</br>
 <input type='number'    placeholder='Credit load' name='credit5' required='required'>

Grade
<select name="grade5" size="1" single="single"> 
 <option value="A">A</option>   <option value="B">B</option>   <option value="C">C</option>   <option value="D">D</option>   <option value="E">E</option> <option value="F">F</option></select></select>


<br>Course code.</br>
 <input type='text'    placeholder='Course name' name='username' auto complete='on'>


<br>Course load</br>
 <input type='number'    placeholder='Credit load' name='credit6' required='required'>

Grade
<select name="grade6" size="1" single="single"> 
 <option value="A">A</option>   <option value="B">B</option>   <option value="C">C</option>   <option value="D">D</option>   <option value="E">E</option> <option value="F">F</option></select></select>

<br>Course code.</br>
 <input type='text'    placeholder='Course name' name='username' auto complete='on'>


<br>Course load</br>
 <input type='number'    placeholder='Credit load' name='credit7' required='required'>

Grade
<select name="grade7" size="1" single="single"> 
 <option value="A">A</option>   <option value="B">B</option>   <option value="C">C</option>   <option value="D">D</option>   <option value="E">E</option> <option value="F">F</option></select></select>



<br>Course code.</br>
 <input type='text'    placeholder='Course name' name='username' auto complete='on'>


<br>Course load</br>
 <input type='number'    placeholder='Credit load' name='credit8' required='required'>

Grade
<select name="grade8" size="1" single="single"> 
 <option value="A">A</option>   <option value="B">B</option>   <option value="C">C</option>   <option value="D">D</option>   <option value="E">E</option> <option value="F">F</option></select></select>

<br>Course code.</br>
 <input type='text'    placeholder='Course name' name='username' auto complete='on'>



<br>Course load</br>
 <input type='number'    placeholder='Credit load' name='credit9' required='required'>

Grade
<select name="grade9" size="1" single="single"> 
 <option value="A">A</option>   <option value="B">B</option>   <option value="C">C</option>   <option value="D">D</option>   <option value="E">E</option> <option value="F">F</option></select></select>

<br>Course code.</br>
 <input type='text'    placeholder='Course name' name='username' auto complete='on'>



<br>Course load</br>
 <input type='number'    placeholder='Credit load' name='credit10' required='required'>

Grade
<select name="grade10" size="1" single="single"> 
 <option value="A">A</option>   <option value="B">B</option>   <option value="C">C</option>   <option value="D">D</option>   <option value="E">E</option> <option value="F">F</option></select></select>
 
<br>Course code.</br>
 <input type='text'    placeholder='Course name' name='username' auto complete='on'>



<br>Course load</br>
 <input type='number'    placeholder='Credit load' name='credit11' required='required'>

Grade
<select name="grade11" size="1" single="single"> 
 <option value="A">A</option>   <option value="B">B</option>   <option value="C">C</option>   <option value="D">D</option>   <option value="E">E</option> <option value="F">F</option></select></select>

<br>Course code.</br>
 <input type='text'    placeholder='Course name' name='username' auto complete='on'>



<br>Course load</br>
 <input type='number'    placeholder='Credit load' name='credit12' required='required'>

Grade
<select name="grade12" size="1" single="single"> 
 <option value="A">A</option>   <option value="B">B</option>   <option value="C">C</option>   <option value="D">D</option>   <option value="E">E</option> <option value="F">F</option></select></select>


<br>Course code.</br>
 <input type='text'    placeholder='Course name' name='username' auto complete='on'>



<br>Course load</br>
 <input type='number'    placeholder='Credit load' name='credit13' required='required'>

Grade
<select name="grade13" size="1" single="single"> 
 <option value="A">A</option>   <option value="B">B</option>   <option value="C">C</option>   <option value="D">D</option>   <option value="E">E</option> <option value="F">F</option></select></select>

<br>Course code.</br>
 <input type='text'    placeholder='Course name' name='username' auto complete='on'>



<br>Course load</br>
 <input type='number'    placeholder='Credit load' name='credit14' required='required'>

Grade
<select name="grade14" size="1" single="single"> 
 <option value="A">A</option>   <option value="B">B</option>   <option value="C">C</option>   <option value="D">D</option>   <option value="E">E</option> <option value="F">F</option></select></select>


<br>Course code.</br>
 <input type='text'    placeholder='Course name' name='username' auto complete='on'>



<br>Course load</br>
 <input type='number'    placeholder='Credit load' name='credit15' required='required'>

Grade
<select name="grade15" size="1" single="single"> 
 <option value="A">A</option>   <option value="B">B</option>   <option value="C">C</option>   <option value="D">D</option>   <option value="E">E</option> <option value="F">F</option></select></select>

<p><input type="submit" value="Calculate Result Gp"></p>


</form>

<hr><h6>
<div id="bottom" class="footer"> <p class="credit muted text-right"> Linksxup inc.<br /> Copyright © 2018 Linksxup. All right reserved. <script type="text/javascript"> renderCurrentYear(); </script></h6>

</body>
</html>


    
