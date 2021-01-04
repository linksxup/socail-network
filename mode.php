<script type="text/javascript">
			window.addEventListener("load", function () {
		    const loader = document.querySelector(".loader");
		    loader.className += " hidden"; // class "loader hidden"
		});
		</script>
		<div class="loader">
	    	<img src="img/Preloader_.gif" alt="Loading..." />
		</div>



<?php
   echo" <script async src='https://www.googletagmanager.com/gtag/js?id=UA-117749332-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117749332-1');
</script>";



if(isset($_COOKIE['darkmode'])){setcookie("darkmode","activate", time() - 1);
header("location: account.php");
exit();

}else{setcookie("darkmode","activate",time() + 2500000);
		header("location: account.php");
exit();		}


?>