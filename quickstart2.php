<?php
// we'll generate XML output
header('Content-Type: text/xml');
// generate XML header
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
// create the <response> element
echo '<response>';
				
// retrieve the user name
$username = $_GET['name'];
require_once 'database.php';

//Have the username or email been used ??
//if(!empty($_POST['name']))
// $username=strip_tags(htmlspecialchars($_POST['name']));

$checkemail = mysqli_query($link, "SELECT username FROM users WHERE username='$username'");
				$username_exist = mysqli_num_rows($checkemail);
				if ($username_exist) 
					{echo "Oops sorry username already taken. Please input a non-existing 
				    username so that friends can find it easy to link you up..";}
					
					else{echo "This username looks nice!!!";}
	
//

// close the <response> element
echo '</response>';
?>