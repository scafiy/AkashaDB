<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$name = addslashes($_POST['name']);
		$keywords = addslashes($_POST['keywords']);
		$img = addslashes($_POST['img']);
		$url = addslashes($_POST['url']);
		$category = addslashes($_POST['category']);
		$fivestar = addslashes($_POST['raritymax']);
		$fourstar = addslashes($_POST['raritymin']);


		mysqli_query($conn, "INSERT INTO `artifacts` VALUES('', '$name', '$keywords', '$img', '$url', '$category', '$fivestar' , '$fourstar', '$threestar', '$twostar', '$onestar')") or die(mysqli_error());
		
		header('location: uploadartifact.php');
		
	}
?>