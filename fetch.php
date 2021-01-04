

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
$('name').css('background','#333');


	  });
	  
    </script>";
	
}


		 		 
   echo' <script>

	
	
      $(document).ready(function(){

		    // like and unlike click
    $(".fa-link").click(function(){
        var id = this.id;   // Getting Button id
        var split_id = id.split("_");

        var text = split_id[0];
        var postid = split_id[1];  // postid
		  
	if(text == "like"){
		  
        // Set trigger and container variables
        var trigger = $(".fa fa-link"),
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
        row = row + 10;

        if(row <= allcount){
            $('#row').val(row);

            $.ajax({
                url: 'fetch2.php',
                type: 'get',
                data: {row:row},
                beforeSend:function(){
                    $('.load-more').text('Loading...');
                },
                success: function(response){

                    // Setting little delay while displaying new content
                    setTimeout(function() {
                        // appending posts after last post with class='post'
                        $('.post:last').after(response).show().fadeIn('slow');

                        var rowno = row + 10;

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
	$search = mysqli_real_escape_string($link, $_GET["query"]);
	$query = "
	SELECT * FROM users 
	WHERE username LIKE '%".$search."%'
	OR lastname LIKE '%".$search."%'
	OR firstname LIKE '%".$search."%'
	OR phone LIKE '%".$search."%' 
	OR pro LIKE '%".$search."%' 
	OR location LIKE '%".$search."%'
	OR gender LIKE '%".$search."%'
	
	ORDER BY verification DESC, Linkups DESC ;
	";
	
	$query1 = "
	SELECT * FROM users 
	WHERE username LIKE '%".$search."%'
	OR lastname LIKE '%".$search."%'
	OR firstname LIKE '%".$search."%'
	OR phone LIKE '%".$search."%' 
	OR pro LIKE '%".$search."%' 
	OR location LIKE '%".$search."%'
	OR gender LIKE '%".$search."%'
	
		ORDER BY verification DESC, Linkups DESC
	";
	echo"<script> $('.load-more').css('display','none');</script>";
	
}
else
{
	//$limit= $_POST['limit'];
	//$start= $_POST['start'];
	

	$query = "
	SELECT * FROM users ORDER BY verification DESC, Linkups DESC LIMIT $limit OFFSET 0; ";
	
		$query1 = "
	SELECT * FROM users ORDER BY verification DESC, Linkups DESC";
}
$result = mysqli_query($link, $query);

$result1 = mysqli_query($link, $query1);



if(mysqli_num_rows($result) > 0 )
{

	while($row = mysqli_fetch_array($result))
	{
	//if(count(mysqli_num_rows($result)) < $limit ){echo'reachedMax';}
		
		
	//echo $limit;
	//echo $start;
	
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

		   if (strlen($row['firstname']) < 10){
							  
							  echo $row['firstname']; 
							  
							  }else{	  echo substr("$row[firstname]","0", "9"); echo'...';}


	 echo'&nbsp'; 

if (strlen($row['lastname']) < 9){
							  
							  echo $row['lastname']; 
							  
							  }else{	  echo substr("$row[lastname]","0", "8"); echo'...';}

	 echo'</b><br>Un@'; 
	 
	 if (strlen($row['username']) < 11){
							  
							  echo $row['username']; 
							  
							  }else{	  echo substr("$row[username]","0", "10"); echo'...';}
	 
	 echo'<br/>';
	 
	 	
	echo' </a></li>';
	
	

	
 echo'</ul>';
 
 
 
 
	 if(!empty($row["bio"])){
  echo'<ul class="twit">';
  
	echo'<li>&nbsp'; echo substr("$row[bio]","0", "50"); echo'.....</br></h5>
						</li>
	</ul>';}
	
	
	
	if($row["username"] != $user){
		 echo'<ul class="twit">';
		
    echo'<li> <br>';
	
				echo'<div id="cont_'; echo$row["username"]; echo'">
	<button class= "fa fa-link" data-target="linkup.php?un=';echo $row["username"]; echo"&status=linkup"; echo'" id="like_'; echo$row["username"]; echo'"> Linkup</button>
	</div>';
	
	echo'</br></li></ul>';
	}else{}
	
	echo'<hr>';
	}
}




else
{
	echo '<font color="red">No search result Found</font>';
	
}





		

	
	if(mysqli_num_rows($result1) > 0 ){
	$no = mysqli_num_rows( $result1);
 //echo $no;		
//echo"<input type='hidden' id='all' value='$no'>";
  // echo"<input type='hidden' id='row' value='0'>";

	//echo'
    //<div id="content">	
//</div>';
echo"<div class='post'>
</div>";	
	
if($limit < $no){$hide=0;}else{$hide=1;}	
	
	
if($hide=='0'){
	
	echo'<ul class="liinkk" role="navigation">
	<li>';
//echo"<button id='more' data-target='fetch2.php?start=2'><i class='fa fa-caret-down'></i>&nbsp More results...</button></li></ul>";
	 echo'<button class="load-more"><i class="fa fa-caret-down"></i>&nbspLoad More</button>';
	echo"<input type='hidden' id='all' value='$no'>";
   echo"<input type='hidden' id='row' value='0'>";
	
}	
	}
}else{
	header("location: log in.html");
	exit();
}

// to cut short so much lengthy text. 
//$a="abcdef haha mad oh";
//$t=substr("$a", 0, 9);
//echo"$t.........";
?>



