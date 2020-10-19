<?php
	include("php/config.php");
	
	include("php/checkuser.php");
	include("php/function.php");
	$p="dash";
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Smart Pole Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- logo  -->
			<?php include("logo.php");?>
			<!-- nevbar -->
			<?php include("nevbar.php");?>
			<!-- side bar //start -->
			<?php include("sidebar.php");?>
			<!-- side bar //end -->
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						
						<div class="row">
							
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Add User</h4>
									
									</div>
									
									<div class="card-body">
											<form id="add_form" name="add_form" method="post" action="user_add.php">
												<input type="hidden" name="ran" id="ran" value="<?php echo $ran;?>">
											<!--	<input type="hidden" name="usr_name" id="usr_name" value="<?php //echo $usr_name;?>">
												<input type="hidden" name="usr_pwd" id="usr_pwd" value="<?php //echo $usr_pwd;?>">
												<input type="hidden" name="usr_type" id="usr_type" value="<?php // echo $usr_type;?>"> -->
												<div class="form-group form-inline">
													<label for="inlineinput" class="col-md-3 col-form-label">User Name</label>
													<div class="col-md-9 p-0">
														<input type="text" class="form-control input-full" id="usr_name" name="usr_name"/>
													</div>
													<label for="inlineinput" class="col-md-3 col-form-label">User Password</label>
													<div class="col-md-9 p-0">
														<input type="password" class="form-control input-full" id="usr_pwd" name="usr_pwd"/>
													</div>
													<label for="inlineinput" class="col-md-3 col-form-label">User Type</label>
													<div class="col-md-9 p-0">
														<select class="form-control input-full" id="usr_type" name = "usr_type" >	
																<option value="admin"> Admin </option>
																<option value="user">  User  </option>
																<option value="other"> Other </option>         
														</select>
													</div>
													<div class="col-md-12 p-0">
														<div class="card-action" align="center">
														<button type="submit" name="save" class="btn btn-success">Submit</button>
													<!--	<button class="btn btn-danger">Cancel</button> -->
														<input type="button" name="cancel" class="btn btn-danger" value="Cancel"
														onclick="window.location='dash.php?ran=<?=$ran;?>'"/>
														</div>
													</div>
												
											</form>

										</div>	
									</div>
								</div>
							</div>
	
						</div>
					</div>
				<!-- footer -->
			<?php include("footer.php"); ?>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugin/chartist/chartist.min.js"></script>
<script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/js/ready.min.js"></script>
<script>
	$('#displayNotif').on('click', function(){
		var placementFrom = $('#notify_placement_from option:selected').val();
		var placementAlign = $('#notify_placement_align option:selected').val();
		var state = $('#notify_state option:selected').val();
		var style = $('#notify_style option:selected').val();
		var content = {};

		content.message = 'Turning standard Bootstrap alerts into "notify" like notifications';
		content.title = 'Bootstrap notify';
		if (style == "withicon") {
			content.icon = 'la la-bell';
		} else {
			content.icon = 'none';
		}
		content.url = 'index.html';
		content.target = '_blank';

		$.notify(content,{
			type: state,
			placement: {
				from: placementFrom,
				align: placementAlign
			},
			time: 1000,
		});
	});
</script>
</html>