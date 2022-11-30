<?php
	$conn = mysqli_connect('localhost', 'root', '', 'akashadb') or die(mysqli_error());
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>

<html lang="en">
	<head>
		<title>Upload Artifact</title>
		<meta charset="UTF-8" name="viewport" content="width=device-width"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>

	</head>
			<form method="POST">
							<p>Upload</p>
							<div class="form-group">
								<label>name</label>
								<input type="text" class="form-control" name="name" autocomplete="off" required="required"/>
							</div>
							<div class="form-group">
								<label>keywords</label>
								<input type="text" class="form-control" name="keywords" autocomplete="off" required="required"/>
							</div>
							<div class="form-group">
								<label>img</label>
								<input type="text" class="form-control" name="img" autocomplete="off" required="required" value="images/artifacts//flower.png"/>
							</div>
							<div class="form-group">
								<label>url</label>
								<input type="text" class="form-control" name="url" autocomplete="off" required="required" value=""/>
							</div>

							<div class="form-group">
								<label>category</label>
								<input type="text" class="form-control" name="category" autocomplete="off" required="required" value="Artifact"/>
							</div>
							<div class="form-group">
								<label>raritymax</label>
								<input type="text" class="form-control" name="raritymax" autocomplete="off"/>
							</div>
							<div class="form-group">
								<label>raritymin</label>
								<input type="text" class="form-control" name="raritymin" autocomplete="off"/>
							</div>
						

					</div>
					<button name="save">Upload</button>
				</div>
			</form>
	<?php
	if(ISSET($_POST['save'])){
		$name = addslashes($_POST['name']);
		$keywords = addslashes($_POST['keywords']);
		$img = addslashes($_POST['img']);
		$url = addslashes($_POST['url']);
		$category = addslashes($_POST['category']);
		$raritymax = addslashes($_POST['raritymax']);
		$raritymin = addslashes($_POST['raritymin']);
		mysqli_query($conn, "INSERT INTO `artifacts` VALUES('', '$name', '$keywords', '$img', '$url', '$category', '$raritymax', '$raritymin')") or die(mysqli_error());
		header('location: uploadartifact.php');	
		}
	?>