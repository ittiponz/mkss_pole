<?php
	include("php/config.php");
	
	include("php/checkuser.php");
	include("php/function.php");
	$p="setting";
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
										<h4 class="card-title">Add Pole</h4>
									
									</div>
									
									<div class="card-body">
											<form align="center" width="80%" action="add_pole.php" method="post" accept-charset="utf-8"><br/>
											<input type="hidden" name="ran" id="ran" value="<?php echo $ran;?>">
											<div class="form-group form-inline">
												<label for="inlineinput" class="col-md-3 col-form-label">Pole Name</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="pole_name" name="pole_name" placeholder="Comm.P0XX" />
												</div>
												
												<label for="inlineinput" class="col-md-3 col-form-label">Pole Status</label>
														<div class="col-md-9 p-0">
															<select class="form-control input-full" id="pole_stat" name = "pole_stat" >	
																	<option value="online"> Online </option>
																	<option value="offline"> Offline  </option>
																	<option value="disable"> Disable </option>         
															</select>
														</div>
												<label for="inlineinput" class="col-md-3 col-form-label">Latitude</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="pole_lat" name="pole_lat" placeholder="14.XXX" />
												</div>
												<label for="inlineinput" class="col-md-3 col-form-label">Longtitude</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="pole_lon" name="pole_lon" placeholder="100.XXX" />
												</div>
												<label for="inlineinput" class="col-md-3 col-form-label">Address</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="pole_add" name="pole_add" placeholder="Address" />
												</div>
											
												<div class="col-md-12 p-0">
													
													<div class="card-action" align="center">
														<button type="submit" name="save" class="btn btn-success">Submit</button>
													<!--	<button class="btn btn-danger">Cancel</button> -->
														<input type="button" name="year" class="btn btn-danger" value="Cancel"
														onclick="window.location='setting.php?ran=<?=$ran;?>'"/>
														
													</div>
												</div>
											</form>
										</div>
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