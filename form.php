<?php
	
require_once 'datab.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["moviename"])) {
    echo "movie feild is empty";
  } else {
     echo "the movie name is:" .$_POST['moviename'];
	  echo '<br>';
  }
    echo "movie directed by :" .$_POST['Director'];
	echo '<br>';
	 echo "the budget for the movie:" .$_POST['Budget'];
	echo '<br>';
     echo "the hero acted:" .$_POST['Actor'];
	echo '<br>';
	 echo "the heroine: " .$_POST['Actress'];
	echo '<br>';
}


?>




<!DOCTYPE html>
<html>
	<header>
		<h1>
			MAP 202
		</h1>
	</header>
<body>

<h2>HTML Form</h2>
<form action="form.php" method="post">
  First name:<br>
  <input type="text" name="moviename">
  <br>
  director: <select name="Director">
<?php
			
	foreach($result as $direct) {
		echo '<option>'.$direct['director'].'</option>' ;
	}
	
	
?>
	</select>
  <br>
		collection: <select name="Budget">
<?php
			
	foreach($result as $f) {
		echo '<option>'.$f['budget'].'</option>' ;
	}
	
	
?>
	</select>
	</select>
  <br>
		Actor: <select name="Actor">
<?php
			
	foreach($result as $val) {
		echo '<option>'.$val['actor'].'</option>' ;
	}
	
	
?>
	</select>
	</select>
  <br>
		Actor: <select name="Actress">
<?php
			
	foreach($result as $role) {
		echo '<option>'.$role['actress'].'</option>' ;
	}
	
	
?>
	</select>
  <input type="submit" value="Submit">
</form> 


</body>
</html>
