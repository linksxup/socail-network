 <script>

	
	
      $(document).ready(function(){

		    // like and unlike click
    $(".fa-comment, .fa-heart, .fa-star").click(function(){
        var id = this.id;   // Getting Button id
        var split_id = id.split("_");

        var text = split_id[0];
        var postid = split_id[1];  // postid
		  
	if(text == "like"){
		  
        // Set trigger and container variables
        var trigger = $(".fa fa-heart, .fa fa-star"),
            container = $("#cont_"+postid);
			


			
			
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
$('.postWraper').css('color','#fff');
$('nav').css('background','#333');
$('main').css('background','#333');
$('.twit li b').css('color','#fff');
$('h6').css('color','#fff');
	  });
	  
    </script>";
	
}


$user=$_COOKIE['username'];

  $untoken=$_COOKIE['untoken'];
	if(isset($untoken) && isset($user)){
		require'database.php';
		
		$query= "SELECT untoken FROM users1 WHERE username='$user'";	
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
	
	
	$limit="10";
	$start= $_GET["row"] ;
	
require_once 'database.php';

	$allowed= array('video/avi','video/flv','video/wmv','video/mov','video/mp4','video/webm','video/mkv','video/vob','video/ogv','video/ogg','video/drc','video/gifv','video/mng','video/mpeg','video/svi','video/3gp','video/3g2','video/mxf','video/roq','video/nsv','video/amv','video/asf','audio/3gp','audio/aa','audio/aac','audio/aax','audio/act','audio/aiff','audio/alac','audio/amr','audio/ape','audio/au','audio/awb','audio/dct','audio/dss','audio/dvf','audio/flac','audio/gsm','audio/iklax','audio/ivs','audio/m4a','audio/m4b','audio/m4p','audio/mmf','audio/mp3','audio/mpc','audio/msv','audio/nmf','audio/nsf','audio/ogg','audio/oga','audio/mog','audio/opus','audio/ra','audio/rm','audio/raw','audio/sln','audio/tta','audio/voc','audio/vox','audio/wav','audio/wma','audio/wv','audio/webm','audio/8svx', 'audio/3gpp','image/jpg','image/jpeg','image/png','image/gif','image/webp','image/tiff','image/psd','image/raw','image/bmp','image/heif','image/indd','image/svg','image/ai','image/eps');
				
				$allowedimage= array('image/jpg','image/jpeg','image/png','image/gif','image/webp','image/tiff','image/psd','image/raw','image/bmp','image/heif','image/indd','image/svg','image/ai','image/eps');
				
				$allowedvideo= array('video/avi','video/flv','video/wmv','video/mov','video/mp4','video/webm','video/mkv','video/vob','video/ogv','video/ogg','video/drc','video/gifv','video/mng','video/mpeg','video/svi','video/3gp','video/3g2','video/mxf','video/roq','video/nsv','video/amv','video/asf');
				
				$allowedaudio= array('audio/3gp','audio/aa','audio/aac','audio/aax','audio/act','audio/aiff','audio/alac','audio/amr','audio/ape','audio/au','audio/awb','audio/dct','audio/dss','audio/dvf','audio/flac','audio/gsm','audio/iklax','audio/ivs','audio/m4a','audio/m4b','audio/m4p','audio/mmf','audio/mp3','audio/mpc','audio/msv','audio/nmf','audio/nsf','audio/ogg','audio/oga','audio/mog','audio/opus','audio/ra','audio/rm','audio/raw','audio/sln','audio/tta','audio/voc','audio/vox','audio/wav','audio/wma','audio/wv','audio/webm','audio/8svx', 'audio/3gpp');
				
				$alloweddocument= array('0','1st','600','602','abw','acl','afp','ami','ans','asc','aww','ccf','csv','cwk','dbk','dita','doc','docm','docx','dot','dotx','dwd','egt','epub','ezw','fdx','ftm','ftx','gdoc','html','hwp','hwpml','hwpml','log','lwp','mbp','md','me','mcw','mobi','nb','nbp','neis','odm','odoc','odt','osheet','ott','omm','pages','pap','pdax','pdf','quox','radix','rtf','rpt','sdw','se','stw','sxw','tex','info','troff','txt','uof','uoml','via','wpd','wps','wpt','wrd','wrf','wri','xhtml','xml','xps', 'ppt');
				
		$query = "SELECT * FROM report  ORDER  BY TIME DESC LIMIT $limit OFFSET $start;";
		
		$query11 = "SELECT * FROM report  ORDER  BY TIME DESC";
		
		
$result = mysqli_query($link, $query);
$result11 = mysqli_query($link, $query11);		
$result2=mysqli_num_rows($result11);

	if(mysqli_num_rows($result)>0){

		while($row = mysqli_fetch_array($result)){

	//echo'   <form role="form"  class="registration-form">';

  
echo' <fieldset>';

	 


 
  
	echo'<ul class="twit" role="navigation">';
	echo'<li>';

//the accuser username
	
   echo '<li><a href="/info.php?un=';echo$row['accuser']; echo'"><b>'; 


			   if (strlen($row['accuser']) < 9){
							  
							  echo $row['accuser']; 
							  
							  }else{	  echo substr("$row[accuser]","0", "8"); 
							  echo'...';}

 echo'&nbsp is reporting';

   echo'<br/></a></li>';
  
  
 
  
  
//the accused username
	
   echo '<li><a href="/info.php?un=';echo$row['accused']; echo'"><b>'; 


			   if (strlen($row['accused']) < 9){
							  
							  echo $row['accused']; 
							  
							  }else{	  echo substr("$row[accused]","0", "8"); 
							  echo'...';}



   echo'<br/></a></li>';
  echo'</ul></li>';
  
  
  

  
  
  
  
  
  echo'<div class="postWraper">	';			
		
  if(!empty($row['issue'])){
	  //////////////
 // if no urls/foreign symbols in the text just return the text
  echo $row['issue']; 
 
  
  ////////////
  }
  
   if(!empty($row['file_type'] || $row['contentid'])){
	   if(in_array($row['file_type'],$allowedvideo)){
		   
		   echo'<span class="loginvideo-form-avatar">';
	echo'<video src="/'; echo $row['contentid']; echo'" alt="AVATAR" controls controlslist="nodownload" type="'; echo $row['file_type']; echo'"/>';
	echo'</span><br>';
			
		
	   }
	   
	   if(in_array($row['file_type'],$allowedimage)){
		   
		   echo'<span class="login-form-avatar">';
	echo'<img src="/';echo $row['contentid']; echo'" alt="AVATAR" controls="control">';
	echo'</span>';
		   
	   }
	   
	   
	     if(in_array($row['file_type'],$allowedaudio)){
		   
		   echo'<span class="loginvideo-form-avatar">';
	echo'<audio src="/'; echo $row['contentid']; echo'" alt="AVATAR" controls controlslist="nodownload" type="'; echo $row['file_type']; echo'"align items="center";/>';
	echo'</span><br>';
	

	   }
	   
	   
	   	     if(in_array($row['file_type'],$alloweddocument)){
		   
		   echo'<span class="login200-form-avatar">';
		   
		   echo'<img src="/';echo'document.png'; echo'" alt="AVATAR">';
		   
	echo'<a href="'; echo $row["contentid"]; echo'"';  echo'download>'; echo'<font color="57b846"><h3 align= "center">'; echo"save&nbsp"; echo$row['file_type']; echo'&nbspdocument'; echo'</h3></font>'; echo'</a><br>';
	echo'</span>';
		   
	   }
	   

	   
	   if($row['url']=='multiple'){
		   
		  $e=unserialize($row['file_type']);	
		//print_r($e[0]);
		if(count($e)==4){
			
			   
		   echo'<span class="login-form-avatar">';
	echo'<img src="/'; print_r($e[0]); echo'" alt="AVATAR" controls="control">';
	echo'</span>';
			
			

				echo'<button><a href="/allphotos.php?un=';echo$row['accused']; echo'&punid='; echo$row['contentid']; echo'">+1 more photos</a></button>';
				 
		}	if(count($e)==6){
			
			   
		   echo'<span class="login-form-avatar">';
	echo'<img src="/'; print_r($e[0]); echo'" alt="AVATAR" controls="control">';
	echo'</span>';
			
			

				echo'<button><a href="/allphotos.php?un=';echo$row['accused']; echo'&punid='; echo$row['contentid']; echo'">+2 more photos</a></button>';
				 
		}	if(count($e)==8){
			
			   
		   echo'<span class="login-form-avatar">';
	echo'<img src="/'; print_r($e[0]); echo'" alt="AVATAR" controls="control">';
	echo'</span>';
			
			

				echo'<button><a href="/allphotos.php?un=';echo$row['accused']; echo'&punid='; echo$row['contentid']; echo'">+3 more photos</a></button>';
				 
		}	if(count($e)==10){
			
			   
		   echo'<span class="login-form-avatar">';
	echo'<img src="/'; print_r($e[0]); echo'" alt="AVATAR" controls="control">';
	echo'</span>';
			
			

				echo'<button><a href="/allphotos.php?un=';echo$row['accused']; echo'&punid='; echo$row['contentid']; echo'">+4 more photos</a></button>';
				 
		}	if(count($e)==12){
			
			   
		   echo'<span class="login-form-avatar">';
	echo'<img src="/'; print_r($e[0]); echo'" alt="AVATAR" controls="control">';
	echo'</span>';
			
			

				echo'<button><a href="/allphotos.php?un=';echo$row['accused']; echo'&punid='; echo$row['contentid']; echo'">+5 more photos</a></button>';
				 
		}
		   
	   }
   }
		
	echo'</div>				
			</a><p>';
		
		echo'<h6>'; echo$row['time']; echo'</h6>';	
			
		
	echo'</p></fieldset>';
	
	
	echo'<div class="post">

</div>';
	
	if($start == $result2){echo"<style> .liinkk {
  display: none;
 
}</style>";}

}
			
			}
			
			
			
		//echo"$no";	
	//echo"$limit";
		


	
		
		
	
			
		
		}
	
	
	
else{
	header("location: log in.html");
}

?>
  
