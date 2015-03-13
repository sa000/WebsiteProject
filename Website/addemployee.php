<!DOCTYPE html>
<html lang="en">
	<head>	
		<link href="<?= base_url();?>css/bootstrap.css" rel="stylesheet">
		<script src="<?= base_url();?>js/jquery.js"></script>
		<script src="<?= base_url();?>js/bootstrap.min.js"></script>
	</head>	
	<body>
		<div class="container">
			<div class="col-lg-10">
			<fieldset>
    		<legend>Add Employee Information</legend>
				<form class="form-horizontal" role="form" action='<?= base_url();?>index.php/home/save' method="post">
				 <div class="form-group">
				    <label for="firstName" class="col-lg-3 control-label">First Name</label>
				    <div class="col-lg-6">
				      <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name">
				    </div>
				  </div>	
				  <div class="form-group">
				    <label for="lastName" class="col-lg-3 control-label">Last Name</label>
				    <div class="col-lg-6">
				      <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="email" class="col-lg-3 control-label">Email</label>
				    <div class="col-lg-6">
				      <input type="text" class="form-control" name="email" id="email" placeholder="Email">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-lg-offset-3 col-lg-10">
				      <button type="submit" class="btn btn-success">Save</button> <a href="<?= base_url();?>index.php/home" class="btn btn-primary">Cancel</a>
				    </div>
				  </div>
				</form>
			</fieldset>
        </div>
		</div>
	</body>
</html>