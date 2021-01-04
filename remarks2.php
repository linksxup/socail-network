
<script>

	
	
      $(document).ready(function(){

		    // like and unlike click
    $(".fa-comment, .fa-heart").click(function(){
        var id = this.id;   // Getting Button id
        var split_id = id.split("_");

        var text = split_id[0];
        var postid = split_id[1];  // postid
		  
	if(text == "like"){
		  
        // Set trigger and container variables
        var trigger = $(".fa fa-heart"),
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
    </script>




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
$('.postWraper').css('color','#fff');
$('b').css('color','#fff');
$('h4').css('color','#fff');
$('article').css('color','#fff');
$('h6').css('color','#fff');
	  });
	  
    </script>";
	
}

if(isset($_COOKIE['username']))
{$user=$_COOKIE['username'];}

if(isset($_COOKIE['untoken']))
{$untoken=$_COOKIE['untoken'];}

	if(isset($untoken) && isset($user)){
		require'database.php';
		
		$query= "SELECT untoken FROM users WHERE username='$user'";	
$next= mysqli_query($link, $query);
$result= mysqli_fetch_array($next);
		
		if($result['untoken'] != $untoken){setcookie("username","$user", time() - 1);
		setcookie("untoken","$untoken", time() - 1);
		header("location: log in.html");
        exit();}
		
	}

if(isset($user)){
	
	
	$limit= 10;
	$start= $_GET["row"] ;
	$key= $_GET["key"] ;
require_once 'database.php';

		
			
	$query = "SELECT * FROM remarks WHERE primaryuniqueid='$key' ORDER BY TIME DESC LIMIT $limit OFFSET $start; ";
$query1 = "SELECT * FROM remarks WHERE primaryuniqueid='$key' ORDER BY TIME DESC; ";

$result = mysqli_query($link, $query);
$result1 = mysqli_query($link, $query1);
$no = mysqli_num_rows($result1);

 
 if(mysqli_num_rows($result1)>0){
	 
	 while($row = mysqli_fetch_array($result)){
	 
	 echo'<ul class="twit" role="navigation">';
	echo'<li>';
	echo'<span class="login100-form-avatar">';
	
	if($row["profilepic"] != "")
	
	{ echo'<a href="'; echo $row["profilepic"]; echo'">';
		echo'<img src="'; echo $row["profilepic"]; echo'" alt="AVATAR">';
	echo'</span></li>';}else{if($row["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';}else{
		echo'<img src="';echo'gender/female.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';}}
		
		
		
		if($row["verification"] == "verified" ){echo'<span class="login10-form-avatar">
	<img src="verified.jpeg" alt="AVATAR"> 
	</span>';}
	
   echo '<li><a href="info.php?un=';echo$row['username']; echo'"><b>'; echo$row['firstname']; echo'&nbsp'; echo$row['lastname']; echo'</b><br>Un@'; echo$row['username']; echo'<br/></a></li>
   <br>';
   
   echo'</li>
	</ul>';
   
   
    

   
   echo'<article>';
  				
				 if(!empty($row['caption'])){	  
 

  
	  
$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/"; //
$reg_exUr="/#+([a-zA-Z0-9_]+)/";//for hash tags
$reg_exU="/(#)[a-z A-Z0-9.]+[A-Za-z.]+(#)/i";//for letter boldness
$reg="/@+([a-zA-Z0-9-]+)/";//for username reference

   
   
 if(preg_match($reg, $row['caption'], $url)){ // Username @ tag..

 echo preg_replace($reg, "<a href='/info.php?un=$1'><font color='57b846'>$0</font></a>", nl2br($row['caption']));  echo '</br>';}
 
   /////////////
 elseif(preg_match($reg_exU, $row['caption'], $url)){ // for text boldness

 echo preg_replace($reg_exU, "<b>$0</b>", nl2br($row['caption']));  echo '</br>';}
 
  ///////////////
 elseif(preg_match($reg_exUr, $row['caption'], $url) ){ // For Hashtag recognition
 
 echo preg_replace($reg_exUr, "<a href='/hashtags.php?query=$1'><font color='57b846'>$0</font></a>", nl2br($row['caption']));  echo '</br>';
 }
 
/////////////////
  elseif(preg_match($reg_exUrl, $row['caption'], $url)) { // make the urls hyper links

 echo preg_replace($reg_exUrl, "<a href='$0'><font color='57b846'>$0</font></a>", nl2br($row['caption']));  echo '</br>';}
 
 else { // if no urls/foreign symbols in the text just return the text
  echo nl2br($row['caption']); }
  echo '</br>';
  }
 
  echo'</article>';
  
 echo' <br><h6>'; echo$row['time']; echo'</h6></br>';
 
 
 echo'<ul class="twit" role="navigation">';
	//echo'<li>';
	
	
	if($user == $row['username'])
{
	echo'<li><a href="delete.php?uniqueid='; echo$row['secondaryuniqueid']; echo'&time='; echo$row['time']; echo'&status=remark'; echo'">&nbsp <i class="fa fa-trash-o"></i></a></li>
	</li>';
}
	
	echo'<li><a href="replies.php?sid='; echo$row['secondaryuniqueid'];  echo'&pid='; echo$row['primaryuniqueid']; echo'">View&nbsp';
	
	if(!empty(unserialize($row['replies'])))
	
	{print_r(count(unserialize($row['replies'])));}else{echo"0";} 
	
	 
	echo'<br>&nbspRepl(y)ies</a></li>';
	
	echo'<li><a href="replytextarea.php?un='; echo$row['username']; echo'&sid='; echo$row['secondaryuniqueid']; echo'&pid='; echo$row['primaryuniqueid']; echo'">&nbspReply</a></li>';
	
	
  //echo'</li>';
  echo'</ul>';
  
echo'<hr>';
	 
	  
 }
 
 }else{
	 
	 echo'<h4>There is no remark yet!!!</h4>';
	 
 }		
		


	
	echo'<div class="post">

</div>';
	
	if($start == $result1){echo"<style> .liinkk {
  display: none;
 
}</style>";}

}



//else if username isnt set in cookie
else{
	
	
	$limit= 10;
	$start= $_GET["row"] ;
	$key= $_GET["key"] ;
require_once 'database.php';

		
			
	$query = "SELECT * FROM remarks WHERE primaryuniqueid='$key' ORDER BY TIME DESC LIMIT $limit OFFSET $start; ";
$query1 = "SELECT * FROM remarks WHERE primaryuniqueid='$key' ORDER BY TIME DESC; ";

$result = mysqli_query($link, $query);
$result1 = mysqli_query($link, $query1);
$no = mysqli_num_rows($result1);

 
 if(mysqli_num_rows($result1)>0){
	 
	 while($row = mysqli_fetch_array($result)){
	 
	 echo'<ul class="twit" role="navigation">';
	echo'<li>';
	echo'<span class="login100-form-avatar">';
	
	if($row["profilepic"] != "")
	
	{ echo'<a href="'; echo $row["profilepic"]; echo'">';
		echo'<img src="'; echo $row["profilepic"]; echo'" alt="AVATAR">';
	echo'</span></li>';}else{if($row["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';}else{
		echo'<img src="';echo'gender/female.jpg'; echo'" alt="AVATAR">';
	echo'</span></li>';}}
		
		
		
		if($row["verification"] == "verified" ){echo'<span class="login10-form-avatar">
	<img src="verified.jpeg" alt="AVATAR"> 
	</span>';}
	
   echo '<li><a href="info.php?un=';echo$row['username']; echo'"><b>'; echo$row['firstname']; echo'&nbsp'; echo$row['lastname']; echo'</b><br>Un@'; echo$row['username']; echo'<br/></a></li>
   <br>';
   
   echo'</li>
	</ul>';
   
   
    

   
   echo'<article>';
  				
				 if(!empty($row['caption'])){	  
 

  
	  
$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/"; //
$reg_exUr="/#+([a-zA-Z0-9_]+)/";//for hash tags
$reg_exU="/(#)[a-z A-Z0-9.]+[A-Za-z.]+(#)/i";//for letter boldness
$reg="/@+([a-zA-Z0-9-]+)/";//for username reference

   
   
 if(preg_match($reg, $row['caption'], $url)){ // Username @ tag..

 echo preg_replace($reg, "<a href='/info.php?un=$1'><font color='57b846'>$0</font></a>", nl2br($row['caption']));  echo '</br>';}
 
   /////////////
 elseif(preg_match($reg_exU, $row['caption'], $url)){ // for text boldness

 echo preg_replace($reg_exU, "<b>$0</b>", nl2br($row['caption']));  echo '</br>';}
 
  ///////////////
 elseif(preg_match($reg_exUr, $row['caption'], $url) ){ // For Hashtag recognition
 
 echo preg_replace($reg_exUr, "<a href='/hashtags.php?query=$1'><font color='57b846'>$0</font></a>", nl2br($row['caption']));  echo '</br>';
 }
 
/////////////////
  elseif(preg_match($reg_exUrl, $row['caption'], $url)) { // make the urls hyper links

 echo preg_replace($reg_exUrl, "<a href='$0'><font color='57b846'>$0</font></a>", nl2br($row['caption']));  echo '</br>';}
 
 else { // if no urls/foreign symbols in the text just return the text
  echo nl2br($row['caption']); }
  echo '</br>';
  }
 
  echo'</article>';
  
 echo' <br><h6>'; echo$row['time']; echo'</h6></br>';
 
 
 echo'<ul class="twit" role="navigation">';
	//echo'<li>';
	
	
if(isset($_COOKIE['username']))
	{$user=$_COOKIE['username'];
	if($user == $row['username'])
{
	echo'<li><a href="delete.php?uniqueid='; echo$row['secondaryuniqueid']; echo'&time='; echo$row['time']; echo'&status=remark'; echo'">&nbsp <i class="fa fa-trash-o"></i></a></li>
	</li>';
	}}
	
	echo'<li><a href="replies.php?sid='; echo$row['secondaryuniqueid'];  echo'&pid='; echo$row['primaryuniqueid']; echo'">View&nbsp';
	
	if(!empty(unserialize($row['replies'])))
	
	{print_r(count(unserialize($row['replies'])));}else{echo"0";} 
	
	 
	echo'<br>&nbspRepl(y)ies</a></li>';
	
	echo'<li><a href="replytextarea.php?un='; echo$row['username']; echo'&sid='; echo$row['secondaryuniqueid']; echo'&pid='; echo$row['primaryuniqueid']; echo'">&nbspReply</a></li>';
	
	
  //echo'</li>';
  echo'</ul>';
  
echo'<hr>';
	 
	  
 }
 
 }else{
	 
	 echo'<h4>There is no remark yet!!!</h4>';
	 
 }		
		


	
	echo'<div class="post">

</div>';
	
	if($start == $result1){echo"<style> .liinkk {
  display: none;
 
}</style>";}	
	
	
}			
			

		
	
	
	
//else{header("location: log in.html");exit();}

?>
  
