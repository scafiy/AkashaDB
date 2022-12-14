<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Upload Character</title>
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
								<input type="text" class="form-control" name="img" autocomplete="off" required="required" value="images/characters//profile.png"/>
							</div>
							<div class="form-group">
								<label>url</label>
								<input type="text" class="form-control" name="url" autocomplete="off" required="required" value=""/>
							</div>
							<div class="form-group">
								<label>rarity</label>
								<input type="text" class="form-control" name="rarity" autocomplete="off" required="required"/>
							</div>

							<td>
								<tr>5</tr>
								<tr>4</tr>
							</td>

							<div class="form-group">
								<label>category</label>
								<input type="text" class="form-control" name="category" autocomplete="off" required="required" value="Characters"/>
							</div>

							<div class="form-group">
								<label>element</label>
								<input type="text" class="form-control" name="element" autocomplete="off" required="required"/>
							</div>

							<td>
								<tr>Pyro</tr>
								<tr>Hydro</tr>
								<tr>Dendro</tr>
								<tr>Electro</tr>
								<tr>Anemo</tr>
								<tr>Cryo</tr>
								<tr>Geo</tr>
							</td>
							
							
							
							<div class="form-group">
								<label>weapon</label>
								<input type="text" class="form-control" name="weapon" autocomplete="off" required="required"/>
							</div>

							<td>
								<tr>Sword</tr>
								<tr>Bow</tr>
								<tr>Claymore</tr>
								<tr>Catalyst</tr>
								<tr>Polearm</tr>
							</td>

							<div class="form-group">
								<label>region</label>
								<input type="text" class="form-control" name="region" autocomplete="off" required="required"/>
							</div>

							<td>
								<tr>Mondstadt</tr>
								<tr>Liyue</tr>
								<tr>Inazuma</tr>
								<tr>Sumeru</tr>
							</td>


							

							<div class="form-group">
								<label>stat</label>
								<input type="text" class="form-control" name="stat" autocomplete="off" required="required"/>
							</div>

							<td>
								<tr>ATK</tr>
								<tr>DEF</tr>
								<tr>HP</tr>
								<tr>CR</tr>
								<tr>CD</tr>
								<tr>EM</tr>
								<tr>ER</tr>
								<tr>HB</tr>
								<tr>physicalDMG</tr>
								<tr>pyroDMG</tr>
								<tr>hydroDMG</tr>
								<tr>dendroDMG</tr>
								<tr>electroDMG</tr>
								<tr>anemoDMG</tr>
								<tr>cryoDMG</tr>
								<tr>geoDMG</tr>

							<div class="form-group">
								<label>description</label>
								<input type="text" class="form-control" name="description" autocomplete="off" required="required"/>
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
		$rarity = addslashes($_POST['rarity']);
		$category = addslashes($_POST['category']);
		$element = addslashes($_POST['element']);
		$weapon = addslashes($_POST['weapon']);
		$region = addslashes($_POST['region']);
		$stat = addslashes($_POST['stat']);
		$description = addslashes($_POST['description']);

		mysqli_query($conn, "INSERT INTO `characters` VALUES('', '$name', '$keywords', '$img', '$url', '$rarity', '$category', '$element', '$weapon', '$region', '$stat', $description)") or die(mysqli_error());
				
	}
?>