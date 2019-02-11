<!DOCTYPE html>
<html>
<head>
	<title>Upload Image</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jscript.php"></script>

</head>
<body>
	<div class="container">
		<br>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<!-- Display result -->
				<div id="result"></div>

				<!-- Start Personal Info -->
				<form action="controller.php" method="post" id="saveForm">
					<div class="panel panel-default">
						<div class="panel-heading"><span class="badge">1</span> <span class="title">Personal Info</span></div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group"><label for="" class="label label-fname">First Name</label><input type="text"  id="input-fname" name="fname"  class="form-control">
										<div class="error"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group"><label for="" class="label label-lname">Last Name</label><input type="text" id="input-lname" name="lname"  class="form-control">
										<div class="error"></div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group"><label for="" class="label label-phone">Phone</label><input type="text" id="input-phone" name="phone"  class="form-control">
										<div class="error"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group"><label for="" class="label label-email">Email</label><input type="text" id="input-email" name="email" class="form-control">
										<div class="error"></div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<a href="" class="btn btn-default pull-left">Reset</a>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group"><input type="submit" id="input-email" id="submit" name="submit" class="btn btn-primary pull-right">
									</div>
								</div>

							</div>
						</div>
					</div>
				</form>
				<!-- End Personal Info -->
			</div>
			</div>
		</div>


	</body>
	</html>