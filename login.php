<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$username = $_REQUEST['user'];
	$password = $_REQUEST['pass'];
	require_once('Users.php');
	$user = new Users();
	$user->authenticate($username,$password);
}

?>
<?php require_once('header.php'); ?>

<form action="login.php" method="post">
    <div class="container">
		<br>
    <label for="name"><b>Username:</b></label><br>
    <input type="text" placeholder="Enter Username" name="user" required>
<br>
    <label for="psw"><b>Password :</b></label><br>
    <input type="password" placeholder="Enter Password" name="pass" required>
<br>
    <button type="submit"  class="primatry btn">Login</button>
    
  </div>
	
  
</form>
<footer>
<?php require_once('footer.php');?>
</footer>