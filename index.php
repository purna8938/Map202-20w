<?php
require_once 'form.php';



 $films = array(
            "comedy" => array (
                            0 => "Pink Panther",
                           1 => "johnny English",
                            2 => "Tommy Boy"),
            "action" => array (
                            0 => "Die Hard",
                            1 => "Expendables"),
            "epic" => array (
                            0 => "The Lord of the Rings"),
            "Romance" => array (
                            0 => "Romeo and Juliet")
);
	

$favorites = array(
array (
"Name" => "Dave Punk",
"Phone" => "5689741523",
"Email" => "davepunk@gmail.com"),
array (
"Name" => "Monty Smith",
"Phone" => "2584369721",
"Email" => "montysmith@gmail.com"),
array (
"Name" => "John Flinch",
"Phone" => "9875147536",
"Email" => "johnflinch@gmail.com")
);




?>




<!DOCTYPE html>
<html>
	<header>
	</header>
<body>
	<a href="form.php">
	</a>
 
	<section>
		<h1>
			
			first table
		</h1>

<table>

<th> Genre </th>
<th> Movie Name</th>

<?php


 
foreach($films as $a => $val) {
      foreach( $val as $x => $y){
 echo'<tr>';
  echo '<td>' . "$a   " .  '</td>';
		  echo '<td>' . "  $y" .  '</td>';
  echo'</tr>';
  }
}

?>
</table>
</section>
	<h1>
		second table
	</h1>
	<section>
		<table>

<th> Name </th>
<th>  Phone </th>
<th>  Email </th>

<?php


 
foreach($favorites as $a => $val) {
    
 echo'<tr>';
  echo '<td>' . $val['Name']  .  '</td>';
  echo '<td>' . $val['Phone']  .  '</td>';
  echo '<td>' . $val['Email']  .  '</td>';

  echo'</tr>';
  
}

?>
</table>

	</section>

</body>
</html>
