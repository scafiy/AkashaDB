<html lang="en">
	<head>
		<title>Upload Artifact</title>
		<meta charset="UTF-8" name="viewport" content="width=device-width"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<?php 
			session_start();
			include '../includes/head.php';
    	?>

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
								<input type="text" class="form-control" name="raritymax" autocomplete="off" required="required"/>
							</div>
							<div class="form-group">
								<label>raritymin</label>
								<input type="text" class="form-control" name="raritymin" autocomplete="off" required="required"/>
							</div>

							<div class="form-group">
								<label>flowerdescription</label>
								<input type="text" class="form-control" name="flowerdescription" autocomplete="off" required="required"/>
							</div>


							<div class="form-group">
								<label>twopiece</label>
								<input type="text" class="form-control" name="twopiece" autocomplete="off" required="required"/>
							</div>

							<div class="form-group">
								<label>fourpiece</label>
								<input type="text" class="form-control" name="fourpiece" autocomplete="off" required="required"/>
							</div>

							<div class="form-group">
								<label>primarycolor</label>
								<input type="text" class="form-control" name="primarycolor" autocomplete="off" required="required"/>
							</div>


							<div class="form-group">
								<label>secondarycolor</label>
								<input type="text" class="form-control" name="secondarycolor" autocomplete="off" required="required"/>
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
		$flowerdescription = addslashes($_POST['flowerdescription']);
		$twopiece = addslashes($_POST['twopiece']);
		$fourpiece = addslashes($_POST['fourpiece']);
		$primarycolor = addslashes($_POST['primarycolor']);
		$secondarycolor = addslashes($_POST['secondarycolor']);


		mysqli_query($conn, "INSERT INTO `artifacts` VALUES('', '$name', '$keywords', '$img', '$url', '$category', '$raritymax', '$raritymax', '$flowerdescription', '$twopiece', '$fourpiece', '$primarycolor', '$secondarycolor')") or die(mysqli_error());
		
		
	}
?>