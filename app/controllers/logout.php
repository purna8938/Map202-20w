<?php
class Logout extends Controller{
	public function logout(){
		session_destroy();
		header("location:/");
		exit();
	}
}
?>