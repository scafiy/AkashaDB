<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Upload Banner</title>
		<meta charset="UTF-8" name="viewport" content="width=device-width"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>

	</head>
		<?php 
			session_start();
			include '../includes/head.php';
    	?>



			<form method="POST">
				<div class="modal-content">
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
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
								<input value="images/banners/.png" type="text" class="form-control" name="img" autocomplete="off" required="required"/>
							</div>
							<div class="form-group">
								<label>url</label>
								<input type="text" class="form-control" name="url" autocomplete="off" required="required"/>
							</div>
							<div class="form-group">
								<label>category</label>
								<input type="text" value="Banner" class="form-control" name="category" autocomplete="off" required="required"/>
							</div>
							<div class="form-group">
								<label>type</label>
								<input type="text" class="form-control" name="type" autocomplete="off" required="required"/>
							</div>

							<div class="form-group">
								<label>version</label>
								<input type="text" class="form-control" name="version" autocomplete="off" required="required"/>
							</div>
							<div class="form-group">
								<label>phase</label>
								<input type="text" class="form-control" name="phase" autocomplete="off" required="required"/>
							</div>
							



							<div class="form-group">
								<label>startdate</label>
								<input type="text" class="form-control" name="startdate" autocomplete="off" required="required"/>
							</div>

							<div class="form-group">
								<label>finishdate</label>
								<input type="text" class="form-control" name="finishdate" autocomplete="off"/>
							</div>

							<div class="form-group">
								<label>fivestarone</label>
								<input type="text" class="form-control" name="fivestarone" autocomplete="off" />
							</div>
							<div class="form-group">
								<label>fivestartwo</label>
								<input type="text" class="form-control" name="fivestartwo" autocomplete="off" />
							</div>
							<div class="form-group">
								<label>fourstarone</label>
								<input type="text" class="form-control" name="fourstarone" autocomplete="off" />
							</div>
							<div class="form-group">
								<label>fourstartwo</label>
								<input type="text" class="form-control" name="fourstartwo" autocomplete="off" />
							</div>
							<div class="form-group">
								<label>fourstarthree</label>
								<input type="text" class="form-control" name="fourstarthree" autocomplete="off" />
							</div>
							<div class="form-group">
								<label>fourstarfour</label>
								<input type="text" class="form-control" name="fourstarfour" autocomplete="off" />
							</div>
							<div class="form-group">
								<label>fourstarfive</label>
								<input type="text" class="form-control" name="fourstarfive" autocomplete="off" />
							</div>
	

						</div>
						</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Upload</button>
					</div>
				</div>
			</form>
<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$name = addslashes($_POST['name']);
		$keywords = addslashes($_POST['keywords']);
		$img = addslashes($_POST['img']);
		$url = addslashes($_POST['url']);
		$category = addslashes($_POST['category']);
		$type = addslashes($_POST['type']);
		$version = addslashes($_POST['version']);
		$phase = addslashes($_POST['phase']);
		$startdate = addslashes($_POST['startdate']);
		$finishdate = addslashes($_POST['finishdate']);
		$fivestarone = addslashes($_POST['fivestarone']);
		$fivestartwo = addslashes($_POST['fivestartwo']);
		$fourstarone = addslashes($_POST['fourstarone']);
		$fourstartwo = addslashes($_POST['fourstartwo']);
		$fourstarthree = addslashes($_POST['fourstarthree']);
		$fourstarfour = addslashes($_POST['fourstarfour']);
		$fourstarfive = addslashes($_POST['fourstarfive']);
		mysqli_query($conn, "INSERT INTO `banners` VALUES('', '$name', '$keywords', '$img', '$url', '$category', '$type', '$version', '$phase', '$startdate', '$finishdate', '$fivestarone', '$fivestartwo', '$fourstarone', '$fourstartwo', '$fourstarthree', '$fourstarfour', '$fourstarfive')") or die(mysqli_error());

	}

 
?>

