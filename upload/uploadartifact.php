<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Upload Artifact</title>
		<meta charset="UTF-8" name="viewport" content="width=device-width"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>

	</head>
			<form action="save_artifact.php" method="POST" enctype="multipart/form-data">
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
								<label>5 star</label>
								<input type="text" class="form-control" name="fivestar" autocomplete="off"/>
							</div>
							<div class="form-group">
								<label>4 star</label>
								<input type="text" class="form-control" name="fourstar" autocomplete="off"/>
							</div>
						
							<div class="form-group">
								<label>3 star</label>
								<input type="text" class="form-control" name="threestar" autocomplete="off"/>
							</div>
						
							<div class="form-group">
								<label>2 star</label>
								<input type="text" class="form-control" name="twostar" autocomplete="off"/>
							</div>
							<div class="form-group">
								<label>1 star</label>
								<input type="text" class="form-control" name="onestar" autocomplete="off"/>
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
			