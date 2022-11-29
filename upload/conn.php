<?php
	$conn = mysqli_connect('localhost', 'root', '', 'akashadb') or die(mysqli_error());
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>