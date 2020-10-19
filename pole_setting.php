<?php
	include("php/config.php");
	
	include("php/checkuser.php");
	include("php/function.php");
	$p="setting";
	if(isset($_GET['pole_id'])){$pole_id=$_GET['pole_id'];}
    if(isset($_POST['pole_id'])){$pole_id=$_POST['pole_id'];}
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
										<h4 class="card-title">Pole Setting</h4>
									
									</div>
									
									<div class="card-body">
											<?php
												//&#3652;&#3615;&#3621;&#3660;&#3648;&#3594;&#3639;&#3656;&#3629;&#3617;&#3605;&#3656;&#3629;&#3585;&#3633;&#3610; database &#3607;&#3637;&#3656;&#3648;&#3619;&#3634;&#3652;&#3604;&#3657;&#3626;&#3619;&#3657;&#3634;&#3591;&#3652;&#3623;&#3657;&#3585;&#3656;&#3629;&#3609;&#3627;&#3609;&#3657;&#3634;&#3609;&#3657;&#3637;

												$sql="SELECT * FROM pole where pole_id='$pole_id'";			
												$result=mysqli_query($db,$sql); 
												// echo $sql;
												if(mysqli_num_rows($result) > 0){
													while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
													$pole_name=$row['pole_name'];
													$pole_stat=$row['pole_stat'];
													$pole_lat=$row['pole_lat'];
													$pole_lon=$row['pole_lon'];
													$pole_add=$row['pole_add'];
													
													}
													
												}
												
											?>
											<form id="edit_form" name="edit_form" method="post" action="pole_edit.php">
											<input type="hidden" name="ran" id="ran" value="<?php echo $ran;?>">
											<input type="hidden" name="pole_id" id="pole_id" value="<?php echo $pole_id;?>">
											<input type="hidden" name="pole_name" id="pole_name" value="<?php echo $pole_name;?>">
											<input type="hidden" name="pole_stat" id="pole_stat" value="<?php echo $pole_stat;?>">
											<input type="hidden" name="pole_lat" id="pole_lat" value="<?php echo $pole_lat;?>">
											<input type="hidden" name="pole_lon" id="pole_lon" value="<?php echo $pole_lon;?>">
											<input type="hidden" name="pole_add" id="pole_add" value="<?php echo $pole_add;?>">
											
													<div class="form-group form-inline">
													<label for="inlineinput" class="col-md-3 col-form-label">Pole Name</label>
													<div class="col-md-9 p-0">
														<input type="text" class="form-control input-full" id="pole_name" name="pole_name" placeholder="N/A"
														<?php echo " value=\"". $pole_name ."\"";?> />
													</div>
													<label for="inlineinput" class="col-md-3 col-form-label">Pole Status</label>
													<div class="col-md-9 p-0">
														<select class="form-control input-full" id="pole_stat" name = "pole_stat" >	
															<?php 
															echo "<option value=\"online\"";						
																	if($pole_stat == "online"){
																	if($pole_stat  == "online"){echo " selected ";}	}							
																			echo ">Online</option>";	
															echo "<option value=\"offline\"";						
																	if($pole_stat == "offline"){
																	if($pole_stat == "offline"){echo " selected ";}	}							
																			echo ">Offline</option>";	
															echo "<option value=\"disable\"";						
																	if($pole_stat == "disable"){
																	if($pole_stat  == "disable"){echo " selected ";}	}							
																			echo ">Disable</option>";	
																								
															?>           
														</select>
														
													</div>
													<label for="inlineinput" class="col-md-3 col-form-label">Latitude</label>
													<div class="col-md-9 p-0">
														<input type="text" class="form-control input-full" id="pole_lat" name="pole_lat" placeholder="ON Buzzer" 
														<?php echo " value=\"". $pole_lat ."\"";?> />
													</div>
													<label for="inlineinput" class="col-md-3 col-form-label">Longtitude</label>
													<div class="col-md-9 p-0">
														<input type="text" class="form-control input-full" id="pole_lon" name="pole_lon" placeholder="ON Buzzer" 
														<?php echo " value=\"". $pole_lon ."\"";?> />
													</div>
													<label for="inlineinput" class="col-md-3 col-form-label">Address</label>
													<div class="col-md-9 p-0">
														<input type="text" class="form-control input-full" id="pole_add" name="pole_add" placeholder="192.168.1.43" 
														<?php echo " value=\"". $pole_add ."\"";?> />
													</div>
													
												</div>
				
												<div class="col-md-12 p-0">
													<div class="card-action" align="center">
														<button type="submit" name="save" class="btn btn-success">Submit</button>
													<!--	<button class="btn btn-danger">Cancel</button> -->
														<input type="button" name="year" class="btn btn-danger" value="Cancel"
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