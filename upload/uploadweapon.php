<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Upload Weapon</title>
		<meta charset="UTF-8" name="viewport" content="width=device-width"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>

	</head>
	
			<form action="save_weapon.php" method="POST" enctype="multipart/form-data">
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
								<input type="text" class="form-control" name="img" autocomplete="off" required="required" value="images/weapons//profile.png"/>
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
								<tr>3</tr>
								<tr>2</tr>
								<tr>1</tr>

							</td>

							<div class="form-group">
								<label>category</label>
								<input type="text" class="form-control" name="category" autocomplete="off" required="required" value="Weapon"/>
							</div>

					
							
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
								<label>stat</label>
								<input type="text" class="form-control" name="stat" autocomplete="off"/>
							</div>

							<td>
								<tr>ATK</tr>
								<tr>DEF</tr>
								<tr>HP</tr>
								<tr>CR</tr>
								<tr>CD</tr>
								<tr>EM</tr>
								<tr>ER</tr>
								<tr>physicalDMG</tr>
							</td>

							
							<div class="form-group">
								<label>base attack at level 1</label>
								<input type="text" class="form-control" name="basemin" autocomplete="off" required="required"/>
							</div>

							<div class="form-group">
								<label>base attack at level 70/90</label>
								<input type="text" class="form-control" name="basemax" autocomplete="off" required="required"/>
							</div>

							<div class="form-group">
								<label>second stat at level 1</label>
								<input type="text" class="form-control" name="statmin" autocomplete="off"/>
							</div>

							<div class="form-group">
							<label>second stat at level 70/90</label>
								<input type="text" class="form-control" name="statmax" autocomplete="off"/>
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
			