<?php
	include("php/config.php");
	
	include("php/checkuser.php");
	include("php/function.php");
	$p="setting";
	if(isset($_GET['pole_id'])){$pole_id=$_GET['pole_id'];}
    if(isset($_POST['pole_id'])){$pole_id=$_POST['pole_id'];}
		$sql="SELECT * FROM pole where pole_id='$pole_id'";			
		$result=mysqli_query($db,$sql); 
		// echo $sql;
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$pole_name=$row['pole_name'];
			}
		}
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
										<h4 class="card-title">Pole Setting <?php echo $pole_name; ?></h4>
									
									</div>
									
									<div class="card-body">
											<form align="center" width="80%" action="pole_set_edit.php" method="post" accept-charset="utf-8"><br/>
											<input type="hidden" name="ran" id="ran" value="<?php echo $ran;?>">
											<input type="hidden" name="pole_id" id="pole_id" value="<?php echo $pole_id;?>">
												<?php
												
													$sql="SELECT * FROM logs where log_dev_id='$pole_id'";			
													$result=mysqli_query($db,$sql); 
													// echo $sql;
													if(mysqli_num_rows($result) > 0){
														while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
														$log_led=$row['log_led'];
														$log_led_battery=$row['log_led_battery'];
														$log_fire_alarm=$row['log_fire_alarm'];
														$log_switch=$row['log_switch'];
														$log_cam1=$row['log_cam1'];
														$log_cam2=$row['log_cam2'];
														$log_spk=$row['log_spk'];
														$log_temp=$row['log_temp'];
														$log_hum=$row['log_hum'];
														$log_pm25=$row['log_pm25'];
														$log_led_disp=$row['log_led_disp'];
														$log_ONU=$row['log_ONU'];
														$log_ATA=$row['log_ATA'];
														$log_IOT_GW=$row['log_IOT_GW'];
														$log_POE_sw=$row['log_POE_sw'];
														$log_solar_pv=$row['log_solar_pv'];
														$log_solar_bat=$row['log_solar_bat'];
														$log_AC_PW_in=$row['log_AC_PW_in'];
														$log_fan=$row['log_fan'];
													
														}
														
													}
													
												?>
											<div class="form-group form-inline">
												<label for="inlineinput" class="col-md-3 col-form-label">LED</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="log_led" name="log_led" placeholder="N/A"
													<?php echo " value=\"". $log_led ."\"";?> />
												</div>
												<label for="inlineinput" class="col-md-3 col-form-label">LED Battery</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="log_led_battery" name="log_led_battery" placeholder="N/A"
													<?php echo " value=\"". $log_led_battery ."\"";?> />
												</div>
												<label for="inlineinput" class="col-md-3 col-form-label">Fire Alarm</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="log_fire_alarm" name="log_fire_alarm" placeholder="ON Buzzer" 
													<?php echo " value=\"". $log_fire_alarm ."\"";?> />
												</div>
												<label for="inlineinput" class="col-md-3 col-form-label">Switch</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="log_switch" name="log_switch" placeholder="ON Buzzer" 
													<?php echo " value=\"". $log_switch ."\"";?> />
												</div>
												<label for="inlineinput" class="col-md-3 col-form-label">Camera1</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="log_cam1" name="log_cam1" placeholder="192.168.1.43" 
													<?php echo " value=\"". $log_cam1 ."\"";?> />
												</div>
												<label for="inlineinput" class="col-md-3 col-form-label">Camera2</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="log_cam2" name="log_cam2" placeholder="192.168.1.44" 
													<?php echo " value=\"". $log_cam2 ."\"";?> />
												</div>
												<label for="inlineinput" class="col-md-3 col-form-label">Speaker</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="log_spk" name="log_spk" placeholder="N/A" 
													<?php echo " value=\"". $log_spk ."\"";?> />
												</div>
												<label for="inlineinput" class="col-md-3 col-form-label">Temp</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="log_temp" name="log_temp" placeholder="N/A" 
													<?php echo " value=\"". $log_temp ."\"";?> />
												</div>
												<label for="inlineinput" class="col-md-3 col-form-label">Humid</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="log_hum" name="log_hum" placeholder="N/A" 
													<?php echo " value=\"". $log_hum ."\"";?> />
												</div>
												<label for="inlineinput" class="col-md-3 col-form-label">PM2.5</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="log_pm25" name="log_pm25" placeholder="N/A" 
													<?php echo " value=\"". $log_pm25 ."\"";?> />
												</div>
												<label for="inlineinput" class="col-md-3 col-form-label">LED Display</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="log_led_disp" name="log_led_disp" placeholder="Auto" 
													<?php echo " value=\"". $log_led_disp ."\"";?> />
												</div>
												<label for="inlineinput" class="col-md-3 col-form-label">ONU</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="log_ONU" name="log_ONU" placeholder="192.168.1.45" 
													<?php echo " value=\"". $log_ONU ."\"";?> />
												</div>
												<label for="inlineinput" class="col-md-3 col-form-label">ATA</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="log_ATA" name="log_ATA" placeholder="192.168.1.46" 
													<?php echo " value=\"". $log_ATA ."\"";?> />
												</div>
												<label for="inlineinput" class="col-md-3 col-form-label">IOT GW</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="log_IOT_GW" name="log_IOT_GW" placeholder="192.168.1.47" 
													<?php echo " value=\"". $log_IOT_GW ."\"";?> />
												</div>
												<label for="inlineinput" class="col-md-3 col-form-label">POE Switch</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="log_POE_sw" name="log_POE_sw" placeholder="ON/OFF" 
													<?php echo " value=\"". $log_POE_sw ."\"";?> />
												</div>
												<label for="inlineinput" class="col-md-3 col-form-label">Solar PV</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="log_solar_pv" name="log_solar_pv" placeholder="N/A" 
													<?php echo " value=\"". $log_solar_pv ."\"";?> />
												</div>
												<label for="inlineinput" class="col-md-3 col-form-label">Solar Battery</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="log_solar_bat" name="log_solar_bat" placeholder="N/A" 
													<?php echo " value=\"". $log_solar_bat ."\"";?> />
												</div>
												<label for="inlineinput" class="col-md-3 col-form-label">AC Power In</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="log_AC_PW_in" name="log_AC_PW_in" placeholder="N/A" 
													<?php echo " value=\"". $log_AC_PW_in ."\"";?> />
												</div>
												<label for="inlineinput" class="col-md-3 col-form-label">Fan</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="log_fan" name="log_fan" placeholder="35 degree" 
													<?php echo " value=\"". $log_fan ."\"";?> />
												</div>
												<label for="inlineinput" class="col-md-3 col-form-label">Signness</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" id="signness" name="signness" placeholder="signness" 
													<?php echo " value=\"". $signness ."\"";?> />
												</div>
											</div>
											<div class="card-action" align="center">
												<button type="submit" name="save" class="btn btn-success">Submit</button>
												<input type="button" class="btn btn-danger" value="Cancel"
												onclick="window.location='dash.php?ran=<?=$ran;?>'"/>
														
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