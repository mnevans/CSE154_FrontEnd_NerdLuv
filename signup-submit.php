<!DOCTYPE html>
<html>
	<!--
	Morgan Evans, CSE 154 AL, Homework 4
	This page submits the user's information entered in into the server to find them matches on NerdLuv, and prompts them
	to log in to view the matches.
	-->	

<?php 
	include("common.php");
	head();
?>	
	
	<body>
		<?php banner(); ?>

	<?php
		//Stores user's data into an array to find matches
		$user_data = array('name' => $_POST["name"], 'gender' => $_POST["gender"], 
		'age' => $_POST["age"], 'type' => $_POST["type"], 'os' => $_POST["os"], 
		'min_age' => $_POST["min_age"], 'max_age' => $_POST["max_age"]);

		file_put_contents("singles.txt", implode(",", $user_data) . "\n", FILE_APPEND);
	?>
		<strong>Thank you!</strong>

		<p>Welcome to NerdLuv, <?=$_POST["name"] ?>!</p>

		<p>Now <a href="matches.php">log in to see your matches!</a></p>

	<?php footer(); ?>
	</body>
</html>  
