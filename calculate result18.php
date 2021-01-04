
﻿﻿﻿﻿﻿﻿<!DOCTYPE html>
<html>
<head>

<title>Result </title>

<link rel="shortcut icon" href="icon.png" />

<link rel="stylesheet" type="text/css"
href="sheet3.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- icons -->
    <link rel="shortcut icon" href="icon.png" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
		
		
	  
	  <nav id="nav">
 
   <ul class="twitter" role="navigation">
   <li><a href='gp.php'><font color="white"><i class="fa fa-home"></i></font></a></li>
  
  </ul>
   

  

</nav>
	</head>
	
	<body>

<font color="white">
<h1>
<b>

﻿﻿﻿﻿<?php
if(!empty($_POST["credit"]))
{$cr=$_POST["credit"];}


//for d 1St credit load input text. 


if(!empty($_POST["grade"])) 
 {$grade= $_POST["grade"];}





if($grade=="A")
{$grd=5;} 

elseif($grade=="B")
{$grd=4;}

elseif($grade=="C")
{$grd=3;}

elseif($grade=="D")
{$grd=2;}

elseif($grade=="E")
{$grd=1;}

elseif($grade=="F")
{$grd=0;}





if(!empty($_POST["credit1"]))
{$cr1=$_POST["credit1"];}

else 
{echo "Credit load for the second course 2nd not entered!";}

//for d 1St credit load input text. 


if(!empty($_POST["grade1"])) 
 {$grade1= $_POST["grade1"];}

else
{echo"You didn't select a grade for the first course!";}

if($grade1=="A")
{$grd1=5;}

elseif($grade1=="B")
{$grd1=4;}

elseif($grade1=="C")
{$grd1=3;}

elseif($grade1=="D")
{$grd1=2;}

elseif($grade1=="E")
{$grd1=1;}

elseif($grade1=="F")
{$grd1=0;}





if(!empty($_POST["credit2"]))
{$cr2=$_POST["credit2"];}
else
{echo "Credit load for the Third course  not entered!";}

//for d 3rd credit load input text. 


if(!empty($_POST["grade2"])) 
 {$grade2= $_POST["grade2"];}

else
{echo"You didn't select a grade for the Third course!";}

if($grade2=="A")
{$grd2=5;}

elseif($grade2=="B")
{$grd2=4;}

elseif($grade2=="C")
{$grd2=3;}

elseif($grade2=="D")
{$grd2=2;}

elseif($grade2=="E")
{$grd2=1;}

elseif($grade2=="F")
{$grd2=0;}





if(!empty($_POST["credit3"]))
{$cr3=$_POST["credit3"];}

else 
{echo "Credit load for the fourth course  not entered!";}

//for d 3rd credit load input text. 


if(!empty($_POST["grade3"])) 
 {$grade3= $_POST["grade3"];}

else
{echo"You didn't select a grade for the Fourth course!";}

if($grade3=="A")
{$grd3=5;}

elseif($grade3=="B")
{$grd3=4;}

elseif($grade3=="C")
{$grd3=3;}

elseif($grade3=="D")
{$grd3=2;}

elseif($grade3=="E")
{$grd3=1;}

elseif($grade3=="F")
{$grd3=0;}





if(!empty($_POST["credit4"]))
{$cr4=$_POST["credit4"];}

else 
{echo "Credit load for the Fifth course  not entered!";}

//for d 5th credit load input text. 


if(!empty($_POST["grade4"])) 
 {$grade4= $_POST["grade4"];}

else
{echo"You didn't select a grade for the Fifth course!";}

if($grade4=="A")
{$grd4=5;}

elseif($grade4=="B")
{$grd4=4;}

elseif($grade4=="C")
{$grd4=3;}

elseif($grade4=="D")
{$grd4=2;}

elseif($grade4=="E")
{$grd4=1;}

elseif($grade4=="F")
{$grd4=0;}


if(!empty($_POST["credit5"]))
{$cr5=$_POST["credit5"];}

else 
{echo "Credit load for the Sixth course  not entered!";}

//for d 5th credit load input text. 


if(!empty($_POST["grade5"])) 
 {$grade5= $_POST["grade5"];}

else
{echo"You didn't select a grade for the Sixth course!";}

if($grade5=="A")
{$grd5=5;}

elseif($grade5=="B")
{$grd5=4;}

elseif($grade5=="C")
{$grd5=3;}

elseif($grade5=="D")
{$grd5=2;}

elseif($grade5=="E")
{$grd5=1;}

elseif($grade5=="F")
{$grd5=0;}

if(!empty($_POST["credit6"]))
{$cr6=$_POST["credit6"];}

else 
{echo "Credit load for the Seventh course  not entered!";}

//for d 7th credit load input text. 


if(!empty($_POST["grade6"])) 
 {$grade6= $_POST["grade6"];}

else
{echo"You didn't select a grade for the Seventh course!";}

if($grade6=="A")
{$grd6=5;}

elseif($grade6=="B")
{$grd6=4;}

elseif($grade6=="C")
{$grd6=3;}

elseif($grade6=="D")
{$grd6=2;}

elseif($grade6=="E")
{$grd6=1;}

elseif($grade6=="F")
{$grd6=0;}


if(!empty($_POST["credit7"]))
{$cr7=$_POST["credit7"];}

else 
{echo "Credit load for the eightieth course  not entered!";}

//for d 8th credit load input text. 


if(!empty($_POST["grade7"])) 
 {$grade7= $_POST["grade7"];}

else
{echo"You didn't select a grade for the 8th course!";}

if($grade7=="A")
{$grd7=5;}

elseif($grade7=="B")
{$grd7=4;}

elseif($grade7=="C")
{$grd7=3;}

elseif($grade7=="D")
{$grd7=2;}

elseif($grade7=="E")
{$grd7=1;}

elseif($grade7=="F")
{$grd7=0;}


if(!empty($_POST["credit8"]))
{$cr8=$_POST["credit8"];}

else 
{echo "Credit load for the ninth course  not entered!";}

//for d 9th credit load input text. 


if(!empty($_POST["grade8"])) 
 {$grade8= $_POST["grade8"];}

else
{echo"You didn't select a grade for the 9th course!";}

if($grade8=="A")
{$grd8=5;}

elseif($grade8=="B")
{$grd8=4;}

elseif($grade8=="C")
{$grd8=3;}

elseif($grade8=="D")
{$grd8=2;}

elseif($grade8=="E")
{$grd8=1;}

elseif($grade8=="F")
{$grd8=0;}

if(!empty($_POST["credit9"]))
{$cr9=$_POST["credit9"];}

if(!empty($_POST["grade9"])) 
 {$grade9= $_POST["grade9"];}



if($grade9=="A")
{$grd9=5;}

elseif($grade9=="B")
{$grd9=4;}

elseif($grade9=="C")
{$grd9=3;}

elseif($grade9=="D")
{$grd9=2;}

elseif($grade9=="E")
{$grd9=1;}

elseif($grade9=="F")
{$grd9=0;}

if(!empty($_POST["credit10"]))
{$cr10=$_POST["credit10"];}

if(!empty($_POST["grade10"])) 
 {$grade10= $_POST["grade10"];}



if($grade10=="A")
{$grd10=5;}

elseif($grade10=="B")
{$grd10=4;}

elseif($grade10=="C")
{$grd10=3;}

elseif($grade10=="D")
{$grd10=2;}

elseif($grade10=="E")
{$grd10=1;}

elseif($grade10=="F")
{$grd10=0;}

if(!empty($_POST["credit11"]))
{$cr11=$_POST["credit11"];}

if(!empty($_POST["grade11"])) 
 {$grade11= $_POST["grade11"];}



if($grade11=="A")
{$grd11=5;}

elseif($grade11=="B")
{$grd11=4;}

elseif($grade11=="C")
{$grd11=3;}

elseif($grade11=="D")
{$grd11=2;}

elseif($grade11=="E")
{$grd11=1;}

elseif($grade11=="F")
{$grd11=0;}

if(!empty($_POST["credit12"]))
{$cr12=$_POST["credit12"];}

if(!empty($_POST["grade12"])) 
 {$grade12= $_POST["grade12"];}



if($grade12=="A")
{$grd12=5;}

elseif($grade12=="B")
{$grd12=4;}

elseif($grade12=="C")
{$grd12=3;}

elseif($grade12=="D")
{$grd12=2;}

elseif($grade12=="E")
{$grd12=1;}

elseif($grade12=="F")
{$grd12=0;}

if(!empty($_POST["credit13"]))
{$cr13=$_POST["credit13"];}

if(!empty($_POST["grade13"])) 
 {$grade13= $_POST["grade13"];}



if($grade13=="A")
{$grd13=5;}

elseif($grade13=="B")
{$grd13=4;}

elseif($grade13=="C")
{$grd13=3;}

elseif($grade13=="D")
{$grd13=2;}

elseif($grade13=="E")
{$grd13=1;}

elseif($grade13=="F")
{$grd13=0;}


if(!empty($_POST["credit14"]))
{$cr14=$_POST["credit14"];}

if(!empty($_POST["grade14"])) 
 {$grade14= $_POST["grade14"];}



if($grade14=="A")
{$grd14=5;}

elseif($grade14=="B")
{$grd14=4;}

elseif($grade14=="C")
{$grd14=3;}

elseif($grade14=="D")
{$grd14=2;}

elseif($grade14=="E")
{$grd14=1;}

elseif($grade14=="F")
{$grd14=0;}


if(!empty($_POST["credit15"]))
{$cr15=$_POST["credit15"];}

if(!empty($_POST["grade15"])) 
 {$grade15= $_POST["grade15"];}



if($grade15=="A")
{$grd15=5;}

elseif($grade15=="B")
{$grd15=4;}

elseif($grade15=="C")
{$grd15=3;}

elseif($grade15=="D")
{$grd15=2;}

elseif($grade15=="E")
{$grd15=1;}

elseif($grade15=="F")
{$grd15=0;}

if(!empty($_POST["credit16"]))
{$cr16=$_POST["credit16"];}

if(!empty($_POST["grade16"])) 
 {$grade16= $_POST["grade16"];}



if($grade16=="A")
{$grd16=5;}

elseif($grade16=="B")
{$grd16=4;}

elseif($grade16=="C")
{$grd16=3;}

elseif($grade16=="D")
{$grd16=2;}

elseif($grade16=="E")
{$grd16=1;}

elseif($grade16=="F")
{$grd16=0;}


if(!empty($_POST["credit17"]))
{$cr17=$_POST["credit17"];}

if(!empty($_POST["grade17"])) 
 {$grade17= $_POST["grade17"];}



if($grade17=="A")
{$grd17=5;}

elseif($grade17=="B")
{$grd17=4;}

elseif($grade17=="C")
{$grd17=3;}

elseif($grade17=="D")
{$grd17=2;}

elseif($grade17=="E")
{$grd17=1;}

elseif($grade17=="F")
{$grd17=0;}


echo "The  total GPA of the courses is equal to: " .  (($cr*$grd)+($cr1*$grd1)+($cr2*$grd2)+($cr3*$grd3)+($cr4*$grd4)+($cr5*$grd5)+($cr6*$grd6)+($cr7*$grd7)+($cr8*$grd8)+($cr9*$grd9)+($grd10*$cr10)+($grd11*$cr11)+($grd12*$cr12)+($grd13*$cr13)+($grd14*$cr14)+($grd15*$cr15)+($grd16*$cr16)+($grd17*$cr17))/($cr+$cr1+$cr2+$cr3+$cr4+$cr5+$cr6+$cr7+$cr8+$cr9+$cr10+$cr11+$cr12+$cr13+$cr14+$cr15+$cr16+$cr17);

$a=(($cr*$grd)+($cr1*$grd1)+($cr2*$grd2)+($cr3*$grd3)+($cr4*$grd4)+($cr5*$grd5)+($cr6*$grd6)+($cr7*$grd7)+($cr8*$grd8)+($cr9*$grd9)+($grd10*$cr10)+($grd11*$cr11)+($grd12*$cr12)+($grd13*$cr13)+($grd14*$cr14)+($grd15*$cr15)+($grd16*$cr16)+($grd17*$cr17))/($cr+$cr1+$cr2+$cr3+$cr4+$cr5+$cr6+$cr7+$cr8+$cr9+$cr10+$cr11+$cr12+$cr13+$cr14+$cr15+$cr16+$cr17);
if($a>4.49 && $a<5.55)
echo"(Class category: First class.)";
 

elseif($a>3.40 && $a<4.49)
echo "(Class category: Second class upper.)";

elseif($a>2.40 && $a<3.49)
echo "(Class category: Second class lower.)";

elseif($a>1.40 && $a<2.39)
echo "(Class category: Third class.)";


elseif($a>0.98 && $a<1.49)
echo "(Class category: Pass.)";

elseif($a>=0 && $a<0.99)
echo "\nClass category: Fail.";


?>
</b></h1>
</font>

<hr>
<h6> Linksxup inc.<br /> Copyright © 2018 Linksxup. All right reserved. </h6>

</body>
	</html>
