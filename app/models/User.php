<?php

class User {

    public $username;
    public $password;
    public $auth = false;

    public function __construct() {
        
    }

    public function authenticate($username, $password) {
        /*
         * if username and password good then
         * $this->auth = true;
         */
		 
		$db = db_connect();
        $statement = $db->prepare("select * from Users
                                WHERE username = :name;
                ");
        $statement->bindValue(':name', $username);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);
		
		if (password_verify($password, $rows['password'])) {
			$_SESSION['auth'] = 1;
			unset($_SESSION['failedAuth']);
			header('Location: /home');
			die;
		} else {
			if(isset($_SESSION['failedAuth'])) {
				$_SESSION['failedAuth'] ++; //increment
			} else {
				$_SESSION['failedAuth'] = 1;
			}
			header('Location: /login');
			die;
		}
    }
	
	public function register ($username, $password) {
		$db = db_connect();
        $statement = $db->prepare("INSERT INTO Users (name)"
                . " VALUES (:name); ");

        $statement->bindValue(':name', $username);
        $statement->execute();

	}
public function insertdata($username,$password){
		$db = db_connect();
		$statement =$db->prepare("INSERT INTO users(username, password) VALUES (:searchterm1,:searchterm2)");
		$statement->bindParam(':searchterm1', $username);

		$statement->bindParam(':searchterm2', $password);

		$statement->execute();	


	}
	public function searchforunique($username){
		$db = db_connect();
        $statement = $db->prepare("select username from users where  username=:username");
        $statement->bindValue(':username', $username);
        $statement->execute();
		$results= $statement->fetchAll(PDO::FETCH_ASSOC);
		return $results;

	}
}
