<?php

class Register extends Controller {

    public function index() {		
		$this->view('login/register');
    }
    
    public function verify(){
        $username = $_REQUEST['username'];
		echo $username;
		//if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
          // echo "Only letters and white space allowed";
			//die;
    //}

		$password = $_REQUEST['password'];
		$hash = password_hash($password, PASSWORD_DEFAULT);
	

		
        $user = $this->model('User');
		
		$result=$user->searchforunique($username);
		if(empty($result)){
			$user->insertdata($username,$hash);
			$user->authenticate($username,$password);
			unset($_SESSION['usernameused']);
			die;
		}
		else{
			
			$_SESSION['usernameused']=1;
			header('Location:/register');
			die;
		}
			
		
	
		
		//header('Location: /login/index');
				//die;
			
		}
	
        
    }

