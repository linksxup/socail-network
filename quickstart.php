<?php
// we'll generate XML output
header('Content-Type: text/xml');
// generate XML header
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
// create the <response> element
echo '<response>';
		
// retrieve the user name
$username = $_GET['query'];
require_once 'database.php';


//Have the username or email been used ??
//if(!empty($_POST['name']))
// $username=strip_tags(htmlspecialchars($_POST['name']));

if (empty($username))
					{echo '<font color="#57b846">Hello, please input username! &nbsp</font>';}
				
else{
$checkemail = mysqli_query($link, "SELECT username FROM users WHERE username='$username'");
				$username_exist = mysqli_fetch_row($checkemail);
				if ($username_exist) 
					{echo "<font color='red'>Oops sorry username already taken. Please input a non-existing 
				    username so that friends can find it easy to link you up..</font>";}
					
					
					
					
				//else{
						//if ($username_exist!=="$username" || )
					//{echo "This username looks nice!!!";}
					//}
				
				if(preg_match('/[^a-z\-0-9]/i',$username)){echo"<font color='red'>Your username can only 
	contain alphanumerics, with an hyphen (-) as the only possible puntuation mark that could be added. 
	You can't leave space in between the characters of your username</font>";
	}else{if (!$username_exist && $username != '' )
					{echo "<font color='blue'>This username looks nice!!!</font>";} }

				
}		
// close the <response> element


echo '</response>';
?>