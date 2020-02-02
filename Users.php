<?php
class Users{
	
	public function __construct($param = false)
	{}
	public function authenticate ($username,$password)
	{
		require_once('datab.php');
		$db = db_connect();
		$searchterm = $username;
		$query = "SELECT * FROM Users WHERE username=:searchterm";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':searchterm', $searchterm);
        $stmt->execute();
        $rows = $stmt->fetch(PDO::FETCH_ASSOC);
		       //print_r($rows); 
		session_start();
		if (password_verify($password,$rows['PASSWORD'])) {
			header('location:secret.php');
		     $_SESSION['isAuthenticated'] = 1;
			unset($_SESSION['failedAuth']);
		
		}else{
			
			
		if( isset( $_SESSION['failedAuth'] ) ) 
			{	
      		$_SESSION['failedAuth']++;
			if($_SESSION['failedAuth'] > 2)
		{
			echo "maximum attempts, Please try after some time";
		}
		
			
   		   }
			else {
				
    			  $_SESSION['failedAuth'] = 1;
 				  }	
		}
		
	}
}


	
?>