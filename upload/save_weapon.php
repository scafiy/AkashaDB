<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$name = addslashes($_POST['name']);
		$keywords = addslashes($_POST['keywords']);
		$img = addslashes($_POST['img']);
		$url = addslashes($_POST['url']);
		$rarity = addslashes($_POST['rarity']);
		$category = addslashes($_POST['category']);
		$weapon = addslashes($_POST['weapon']);
		$stat = addslashes($_POST['stat']);
		$basemin = addslashes($_POST['basemin']);
		$basemax = addslashes($_POST['basemax']);
		$statmin = addslashes($_POST['statmin']);
		$statmax = addslashes($_POST['statmax']);

		mysqli_query($conn, "INSERT INTO `weapons` VALUES('', '$name', '$keywords', '$img', '$url', '$rarity', '$category', '$weapon', '$stat', '$basemin', '$basemax', '$statmin', '$statmax')") or die(mysqli_error());
		
		header('location: uploadweapon.php');
		
	}
?>