<?php
	include("php/config.php");
	include("php/checkuser.php");
	include("php/function.php");
	$p="pole";
	
	if(isset($_GET['pole_name'])){$pole_name=$_GET['pole_name'];}
    if(isset($_POST['pole_name'])){$pole_name=$_POST['pole_name'];}

	
	$sqlx="SELECT * FROM user WHERE usr_ran='".$ran."';";
	$result=mysqli_query($db, $sqlx); 
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$usr_type=$row['usr_type'];
		$usr_name=$row['usr_name'];
		if($usr_type=="admin"){
		
		
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Smart Pole Dashboard</title>
	<meta content='widtd=device-widtd, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
	<meta name="viewport" content="widtd=device-widtd, initial-scale=1">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
</head>
<body>
		<?php  

			$sql="SELECT * FROM pole WHERE pole_name='$pole_name'";			
			$result=mysqli_query($db,$sql);
			if(mysqli_num_rows($result) > 0){
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				$pole_id=$row['pole_id'];
				$pole_name=$row['pole_name'];
				$pole_lat=$row['pole_lat'];
				$pole_lon=$row['pole_lon'];
			}
			
		?>
		
	<div class="wrapper">
		<div class="main-header">
			<!-- logo  -->
			<?php include("logo.php");?>
			<!-- nevbar -->
			<?php include("nevbar.php");?>
			<!-- side bar //start -->
			<?php include("sidebarP.php");?>
			<!-- side bar //end -->
			
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						
						<div class="row">
							
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title"><?php echo $pole_name ?>&nbsp; &nbsp;
										
										</h4>
										
									<!-- 	<p class="card-category">Latitude</p> -->
									</div>
									<div class="card-body">
									<div class="row">
										 <div class="col-md-3 col-sm-12" align="center">
											<?php 
											$sqli="SELECT * FROM log where log_pole_id='$pole_id' ORDER BY log.log_dt DESC";
											$result = mysqli_query($db,$sqli);  
										
											if(mysqli_num_rows($result) > 0){
												while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
												$temp_r=$row['log_temp'];
												$hummit=$row['log_hum'];
												//$pm=$row['log_pm25'];
												
												}
											}
										
										 if($temp_r > 30){?>
											<i class="fas fa-temperature-high" style="font-size:40px;color:orange"></i>
											<font style="font-size:24px;color:orange"><?php echo $temp_r. "°C"; ?></font>
											&nbsp; &nbsp; &nbsp;
										 <?php }elseif($temp_r < 30){?>
											<i class="fas fa-temperature-low" style="font-size:40px;color:blue"></i>
											<font style="font-size:24px;color:blue"><?php echo $temp_r. "°C"; ?></font>
											&nbsp; &nbsp; &nbsp;
										 <?php } ?>
										 
										 <?php 
										 if($hummit > 50){?>
											<img src="assets/img/rain-icon.png" width="20%">
										<!--	<p style="font-size:24px;color:blue"><?php //echo $hummit. "%"; ?></p> -->
										<?php 
										}elseif($hummit < 50){?>
											<img src="assets/img/suny-icon.png" width="20%">
										<!--	<font style="font-size:24px;color:blue"><?php //echo $hummit. "%"; ?></font> -->
										
										<?php } ?>
										</div>
										<div class="col-md-4 col-sm-12" align="center">
											<img src="assets/img/pole_02.png" width="60%">
										</div>
										<?php
												//&#3652;&#3615;&#3621;&#3660;&#3648;&#3594;&#3639;&#3656;&#3629;&#3617;&#3605;&#3656;&#3629;&#3585;&#3633;&#3610; database &#3607;&#3637;&#3656;&#3648;&#3619;&#3634;&#3652;&#3604;&#3657;&#3626;&#3619;&#3657;&#3634;&#3591;&#3652;&#3623;&#3657;&#3585;&#3656;&#3629;&#3609;&#3627;&#3609;&#3657;&#3634;&#3609;&#3657;&#3637;

												$sql="SELECT * FROM log where log_pole_id='$pole_id' ORDER BY log.log_dt DESC";			
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
										<div class="col-md-2 col-xs-6">
										
											<div class="container">
											             
											  <table class="table table-borderless">
												<thead>
												  <tr>
													<th></th>
													<th></th>
													
												  </tr>
												</thead>
												<tbody align="left">
													<tr>
														<td><i class="fas fa-lightbulb" style="font-size:24px;color:#2196F3"></i></td>
														<td style="width: 107px;"><?php echo $log_led; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-battery-full" style="font-size:24px;color:green"></i></td>
														<td><?php echo $log_led_battery; ?></td>
													</tr>
													<tr>
														<td><i class="fa fa-bell" style="font-size:24px;color:red"></i></td>
														<td><?php echo $log_fire_alarm; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-toggle-on" style="font-size:24px;color:#2196F3"></i></td>
														<td><?php echo $log_switch; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-camera" style="font-size:20px"></i>(1)</td>
														<td><?php echo $log_cam1; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-camera" style="font-size:24px"></i>(2)</td>
														<td><?php echo $log_cam2; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-volume-up" style="font-size:24px;color:#2196F3"></i></td>
														<td><?php echo $log_spk; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-temperature-high" style="font-size:24px;color:orange"></i></td>
														<td><?php echo $log_temp; ?> °C</td>
													</tr>
													<tr>
														<td><i class="fas fa-tint" style="font-size:24px;color:#2196F3"></i></td>
														<td><?php echo $log_hum; ?> %</td>
													</tr>
													<tr>
														<td><i class="fas fa-lungs-virus" style="font-size:24px;color:red"></i></td>
														<td><?php echo $log_pm25; ?> µg./m	</td>
													</tr>
													
													
												</tbody>
											  </table>
											</div>
										</div>
										
										<div class="col-md-2 col-xs-6">
											<div class="container">
											             
											  <table class="table table-borderless">
												<thead>
												  <tr>
													<th></th>
													<th></th>
													
												  </tr>
												</thead>
												<tbody align="left">
													<tr>													
														<td><i class="fas fa-desktop" style="font-size:24px;color:#2196F3"></i></td>
														<td style="width: 107px;"><?php echo $log_led_disp; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-digital-tachograph" style="font-size:24px"></i>(ONU)</td>
														<td><?php echo $log_ONU; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-digital-tachograph" style="font-size:24px"></i>(ATA)</td>
														<td><?php echo $log_ATA; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-hdd" style="font-size:24px"></i>(IOT)</td>
														<td><?php echo $log_IOT_GW; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-broadcast-tower" style="font-size:24px"></i></td>
														<td><?php echo $log_POE_sw; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-solar-panel" style="font-size:24px;color:#2196F3"></i></td>
														<td><?php echo $log_solar_pv; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-car-battery" style="font-size:24px;color:green"></i></td>
														<td><?php echo $log_solar_bat; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-plug" style="font-size:24px"></i></td>
														<td><?php echo $log_AC_PW_in; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-fan" style="font-size:24px"></i></td>
														<td><?php echo $log_fan; ?></td>
													</tr>
												</tbody>
											  </table>
											</div>
											
										</div>
										
									</div>
															
								</div>
							</div>
							</div>
						</div>	
									
						
						
						
					
					</div>
				</div>
			</div>
				<footer class="footer">
					<div class="container-fluid">
						<nav class="pull-left">
							
						</nav>
						<div class="copyright ml-auto">
							<?php echo	$pole_name;?> 2020, made with <i class="la la-heart heart text-danger"></i> by <a href="http://www.mkss.co.td">MKSS</a>
						</div>				
					</div>
				</footer>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center">									
					<p>Currently tde pro version of tde <b>Ready Dashboard</b> Bootstrap is in progress development</p>
					<p>
						<b>We'll let you know when it's done</b></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
		if (style == "witdicon") {
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