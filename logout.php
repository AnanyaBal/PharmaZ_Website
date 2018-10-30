<?php
if(isset($_COOKIE["user_name"])) {
  setcookie("user_name","",time()-100);
}
  header("Location: Home.php");


?>
