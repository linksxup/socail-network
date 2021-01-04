<?php

      echo" <script async src='https://www.googletagmanager.com/gtag/js?id=UA-117749332-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117749332-1');
</script>";
if(isset($_COOKIE['darkmode'])){setcookie("darkmode","activate", time() - 1);}
 $user=$_COOKIE['username'];
 $untoken=$_COOKIE['untoken'];
setcookie("untoken","$untoken", time() - 1);
setcookie("username","$user", time() - 1);
header("location:/log in.html");
exit();

?>