<script type="text/javascript">
			window.addEventListener("load", function () {
		    const loader = document.querySelector(".loader");
		    loader.className += " hidden"; // class "loader hidden"
		});
		</script>
		
		 <script async src='https://www.googletagmanager.com/gtag/js?id=UA-117749332-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117749332-1');
</script>
		<div class="loader">
	    	<img src="img/Preloader_.gif" alt="Loading..." />
		</div>



<?php
$user=$_COOKIE['username'];
 
  $untoken=$_COOKIE['untoken'];
	if(isset($untoken) && isset($user)){

		
	}else{
		setcookie("username","$user", time() - 1);
		setcookie("untoken","$untoken", time() - 1);
		header("location: log in.html");
        exit();
		}
 

if(!empty($_GET['am'] && $_GET['status'])){
	if($_GET['am'] == 100 && $_GET['status']=='success'){
		require'database.php';
		$wallet = "SELECT * FROM users  WHERE username='$user'";
		$wallet1 = mysqli_query($link, $wallet);
		$wallet11=mysqli_fetch_array($wallet1);
		$a = $wallet11['coins'];
		$b = 70;
		$c = $a + $b;
		
		$h =  "UPDATE users SET coins='$c' WHERE username='$user'";
				
				$update1 = mysqli_query($link, $h);
				
				if($update1){header("location: wallet.php");
				exit();
				}
	}elseif($_GET['am'] == 250 && $_GET['status']=='success'){
		require'database.php';
		$wallet = "SELECT * FROM users  WHERE username='$user'";
		$wallet1 = mysqli_query($link, $wallet);
		$wallet11=mysqli_fetch_array($wallet1);
		$a = $wallet11['coins'];
		$b = 160;
		$c = $a + $b;
		
		$h =  "UPDATE users SET coins='$c' WHERE username='$user'";
				
				$update1 = mysqli_query($link, $h);
				
				if($update1){header("location: wallet.php");
				exit();
				}
	}elseif($_GET['am'] == 500 && $_GET['status']=='success'){
		require'database.php';
		$wallet = "SELECT * FROM users  WHERE username='$user'";
		$wallet1 = mysqli_query($link, $wallet);
		$wallet11=mysqli_fetch_array($wallet1);
		$a = $wallet11['coins'];
		$b = 320;
		$c = $a + $b;
		
		$h =  "UPDATE users SET coins='$c' WHERE username='$user'";
				
				$update1 = mysqli_query($link, $h);
				
				if($update1){header("location: wallet.php");
				exit();
				}
	}else{header("location: wallet.php");
	exit();
	}
	
	
}else{header("location: testt.php");
exit();}


?>