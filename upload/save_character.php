<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$name = addslashes($_POST['name']);
		$keywords = addslashes($_POST['keywords']);
		$img = addslashes($_POST['img']);
		$url = addslashes($_POST['url']);
		$rarity = addslashes($_POST['rarity']);
		$category = addslashes($_POST['category']);
		$element = addslashes($_POST['element']);
		$weapon = addslashes($_POST['weapon']);
		$weapon = addslashes($_POST['weapon']);
		$region = addslashes($_POST['region']);
		$stat = addslashes($_POST['stat']);

		mysqli_query($conn, "INSERT INTO `characters` VALUES('', '$name', '$keywords', '$img', '$url', '$rarity', '$category', '$element', '$weapon', '$region', '$stat')") or die(mysqli_error());
		
		header('location: uploadcharacter.php');
		
	}
?>