<?php
	echo " Welcome to our page";

if(isset($_SESSION['loginSuccess']))
  {
        $_SESSION['loginSuccess']++; //increment
  } else {
        $_SESSION['loginSuccess'] = 1;
  }

echo '<br>';
require_once('logout.php');
?>
