

<?php
     echo'<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		';
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
$('h4').css('color','#fff');
$('.b').css('color','#fff');
$('h3').css('color','#fff');

	  });
	  
    </script>";
	
}
		 		 
   echo' <script>

	
	
      $(document).ready(function(){

		    // like and unlike click
    $(".fa-link, .fa-unlink").click(function(){
        var id = this.id;   // Getting Button id
        var split_id = id.split("_");

        var text = split_id[0];
        var postid = split_id[1];  // postid
		  
	if(text == "like"){
		  
        // Set trigger and container variables
        var trigger = $(".fa fa-link, .fa fa-unlink"),
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
    </script>';



	
	
	
echo"<script>

$(document).ready(function(){

    // Load more data
    $('.load-more').click(function(){
        var row = Number($('#row').val());
        var allcount = Number($('#all').val());
        row = row + 2;

        if(row <= allcount){
            $('#row').val(row);

            $.ajax({
                url: 'linkups1.php',
                type: 'post',
                data: {row:row},
                beforeSend:function(){
                    $('.load-more').text('Loading...');
                },
                success: function(response){

                    // Setting little delay while displaying new content
                    setTimeout(function() {
                        // appending posts after last post with class='post'
                        $('.post:last').after(response).show().fadeIn('slow');

                        var rowno = row + 2;

                        // checking row value is greater than allcount or not
                        if(rowno > allcount){

                            // Change the text and background
                            $('.load-more').text('Hide');
                            $('.load-more').css('display','none');
                        }else{
                            $('.load-more').text('Load more');
                        }
                    }, 1000);


                }
            });
        }else{
            $('.load-more').text('Loading...');

            // Setting little delay while removing contents
            setTimeout(function() {

                // When row is greater than allcount then remove all class='post' element after 3 element
                $('.post:nth-child(3)').nextAll('.post').remove().fadeIn('slow');

                // Reset the value of row
                $('#row').val(0);

                // Change the text and background
                $('.load-more').text('Load more');
                $('.load-more').css('background','#15a9ce');

            }, 1000);


        }

    });

});

</script>";

require_once 'database.php';

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
	
	$limit= "10";
	

if(isset($_GET["query"]))
{
	/////////
	

	
require_once 'database.php';

	$search = $_GET['query'];
	$un=$_GET["un"];
			$query1 = "SELECT * FROM users  WHERE username = '$_GET[un]'";
		$result1 = mysqli_query($link, $query1);

 $row = mysqli_fetch_array($result1);
	if(empty($row['linkups'])){echo"$un has no linkups";}else{
		
		$u=unserialize($row['linkups']);
		
		$result= array_search($search, $u);
		
		
		if($result == null){echo"<h3>No results found for '$search'</h3>";}else{
			
			
			require'database.php';
			
				$query = "SELECT * FROM users  WHERE username='$u[$result]'";
				
		$resul= mysqli_query($link, $query);
		
	$r= mysqli_fetch_array($resul);
				
			echo'<ul class="liinkk" role="navigation">
	<li>';
	
	if($r["profilepic"] != "")
	{
	echo'<a href="'; echo $r["profilepic"]; echo'">
	<span class="login100-form-avatar">';}else{ echo'
	<span class="login100-form-avatar">';}
	
	if($r["profilepic"] != "")
	{
	echo'<img src="'; echo $r["profilepic"]; 


	}else{
		if($r["gender"] == "male")
		{echo'<img src="';echo'gender/male.jpg';}else{
		echo'<img src="';echo'gender/female.jpg';
	}
	}
	
	echo'"alt="AVATAR"> 
	</span>
	<a/>
	</li>'; if($r["verification"] == "verified" ){echo'<span class="login10-form-avatar">
	<img src="verified.jpeg" alt="AVATAR"> 
	</span>';}

     echo'<li><a href="info.php?un='; echo $r["username"]; echo'"><b>'; 


					   if (strlen($r['firstname']) < 6){
							  
							  echo $r['firstname']; 
							  
							  }else{	  echo substr("$r[firstname]","0", "5"); echo'...';}


	 echo'&nbsp';

if (strlen($r['lastname']) < 6){
							  
							  echo $r['lastname']; 
							  
							  }else{	  echo substr("$r[lastname]","0", "5"); echo'...';}

	 echo'</b><br>Un@'; 


if (strlen($r['username']) < 8){
							  
							  echo $r['username']; 
							  
							  }else{	  echo substr("$r[username]","0", "7"); echo'...';}

							  
	 echo'<br/>'; 	
echo' </a></li>';
	
    //echo'<li> <br>';

	
	//echo'</br></li> 
	
	
 echo'</ul>';
	
		///////
			 if($user != $r["username"]){

	 echo'<ul class="twit" role="navigation">';
	echo'<li>';
	 
		 
	echo'<div id="cont_'; echo $r["username"]; echo'">
	<button class= "fa fa-unlink" data-target="linkup.php?un=';echo $r["username"]; echo"&status=unlink"; echo'" id="like_'; echo$r["username"]; echo'"> Unlink</button>
	</div>';
	
	echo'</li></ul><hr>';
	}
		
		}
	}







		

	
	
	
	//////////
}
else{
if(!empty($_GET["un"])){$un=$_GET["un"];}	



if($user == "$un"){
	
	$query = "SELECT * FROM users WHERE username='$un' ";
	$result = mysqli_query($link, $query);
	$r = mysqli_fetch_array($result);
	if(empty($r['linkups'])){echo"You are currently not linkedup to any user yet...";}else{
		$u=unserialize($r['linkups']);
		if(count($u) > 400){$count=400;
		
		echo"Only showing result of first 400 /"; print_r(count($u)); echo"&nbsp linkups..";
		
		}else{$count=count($u);}
		
		
			for($j=0; $j<$count; $j++)
{$x="$user";
require'database.php';
		
		$query = "SELECT * FROM users  WHERE username='$u[$j]'";
		$result = mysqli_query($link, $query);
	$row= mysqli_fetch_array($result);
	
		echo'<ul class="liinkk" role="navigation">
	<li>';
	
	if($row["profilepic"] != "")
	{
	echo'<a href="'; echo $row["profilepic"]; echo'">
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
	</span>
	<a/>
	</li>'; if($row["verification"] == "verified" ){echo'<span class="login10-form-avatar">
	<img src="verified.jpeg" alt="AVATAR"> 
	</span>';}

     echo'<li><a href="info.php?un='; echo $row["username"]; echo'"><b>'; 


					   if (strlen($row['firstname']) < 6){
							  
							  echo $row['firstname']; 
							  
							  }else{	  echo substr("$row[firstname]","0", "5"); echo'...';}


	 echo'&nbsp';

if (strlen($row['lastname']) < 6){
							  
							  echo $row['lastname']; 
							  
							  }else{	  echo substr("$row[lastname]","0", "5"); echo'...';}

	 echo'</b><br>Un@'; 


if (strlen($row['username']) < 8){
							  
							  echo $row['username']; 
							  
							  }else{	  echo substr("$row[username]","0", "7"); echo'...';}

							  
	 echo'<br/>'; 	
echo' </a></li>';
	
    echo'<li> <br>';

	
	echo'</br></li> 
	
	
  </ul>';

	 if($user != $row["username"]){
		 
		 echo'<ul class="twit" role="navigation">';
	echo'<li>';
		 
	echo'<div id="cont_'; echo $row["username"]; echo'">
	<button class= "fa fa-unlink" data-target="linkup.php?un=';echo $row["username"]; echo"&status=unlink"; echo'" id="like_'; echo$row["username"]; echo'"> Unlink</button>
	</div></li></ul><hr>';
	}
	
}
		
	}
}elseif($user != "$un"){
	
	//////////////////////////////////////////////////////
	
	$query = "SELECT * FROM users WHERE username='$un' ";
	$query1 = "SELECT * FROM users WHERE username='$user' ";
	
	$result = mysqli_query($link, $query);
	$result1 = mysqli_query($link, $query1);
	
	$r = mysqli_fetch_array($result);
	$r1 = mysqli_fetch_array($result1);
	
	if(empty($r['linkups'])){echo"$un currently have no linkups yet...";}else{
		$u=unserialize($r['linkups']); //random user
		$a=unserialize($r1['linkups']); // myself
		
		$differ= array_diff($u, $a);
		
		if(count($u) > 200){$count=200;
		
		echo"Only showing result of first 200 /"; print_r(count($u)); echo"&nbsp linkups..";
		
		}else{$count=count($u);}
		
			for($j=0;$j<$count;$j++)
{$x="$user";
require'database.php';
		
		$query = "SELECT * FROM users  WHERE username='$u[$j]'";
		$result = mysqli_query($link, $query);
	$row= mysqli_fetch_array($result);
	
		echo'<ul class="liinkk" role="navigation">
	<li>';
	
	if($row["profilepic"] != "")
	{
	echo'<a href="'; echo $row["profilepic"]; echo'">
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
	</span>
	<a/>
	</li>'; if($row["verification"] == "verified" ){echo'<span class="login10-form-avatar">
	<img src="verified.jpeg" alt="AVATAR"> 
	</span>';}

     echo'<li><a href="info.php?un='; echo $row["username"]; echo'"><b>'; 


					   if (strlen($row['firstname']) < 6){
							  
							  echo $row['firstname']; 
							  
							  }else{	  echo substr("$row[firstname]","0", "5"); echo'...';}


	 echo'&nbsp';

if (strlen($row['lastname']) < 6){
							  
							  echo $row['lastname']; 
							  
							  }else{	  echo substr("$row[lastname]","0", "5"); echo'...';}

	 echo'</b><br>Un@'; 


if (strlen($row['username']) < 8){
							  
							  echo $row['username']; 
							  
							  }else{	  echo substr("$row[username]","0", "7"); echo'...';}

							  
	 echo'<br/>'; 	
echo' </a></li>';
	
    echo'<li> <br>';
	
	
	echo'</br></li> 
	
	
  </ul>';

  		 echo'<ul class="twit" role="navigation">';
	echo'<li>';

   if(in_array($u[$j],$differ)){
		 
		 if($u[$j] != $user){
	echo'<div id="cont_'; echo $row["username"]; echo'">
	<button class= "fa fa-link" data-target="linkup.php?un=';echo $row["username"]; echo"&status=linkup"; echo'" id="like_'; echo$row["username"]; echo'"> Link up</button>
	 </div>';}
	}else{  
	   echo'<ul class="hmm">
	<i class= "fa fa-check">&nbsp Linkedup</i>
	</ul>';}
	
	echo'</li></ul>';
}
	
	
}


	
	}
}

}

else{
	header("location: log in.html");
}

// to cut short so much lengthy text. 
//$a="abcdef haha mad oh";
//$t=substr("$a", 0, 9);
//echo"$t.........";
?>



