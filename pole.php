
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
<style>
.container {
  position: relative;
  width: 100%;
  max-width: 400px;
}

.container img {
  width: 100%;
  height: auto;
}

.container .btn1 {
  position: absolute;
  top: 53%;
  left: 21%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: white;
  font-size: 16px;
  padding: 41px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.container .btn2 {
  position: absolute;
  top: 4%;
  left: 42%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: white;
  font-size: 16px;
  padding: 12px 12px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.container .btn3 {
  position: absolute;
  top: 15%;
  left: 42%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: white;
  font-size: 16px;
  padding: 15px 15px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.container .btn4 {
  position: absolute;
  top: 24%;
  left: 41%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: white;
  font-size: 16px;
  padding: 16px 16px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.container .btn5 {
  position: absolute;
  top: 37%;
  left: 42%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: white;
  font-size: 16px;
  padding: 17px 17px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.container .btn6 {
  position: absolute;
  top: 65%;
  left: 42%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: white;
  font-size: 16px;
  padding: 15px 15px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.container .btn7 {
  position: absolute;
  top: 79%;
  left: 41%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: white;
  font-size: 16px;
  padding: 25px 16px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.container .btn8 {
  position: absolute;
  top: 48%;
  left: 66%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: white;
  font-size: 16px;
  padding: 16px 43px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.container .btn9 {
  position: absolute;
  top: 15%;
  left: 55%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: white;
  font-size: 16px;
  padding: 15px 15px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.container .btn10 {
  position: absolute;
  top: 5%;
  left: 55%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: white;
  font-size: 16px;
  padding: 15px 15px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.container .btn11 {
  position: absolute;
  top: 17%;
  left: 45%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: white;
  font-size: 16px;
  padding: 15px 15px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.container .btn12 {
  position: absolute;
  top: 50%;
  left: 26%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: white;
  font-size: 16px;
  padding: 16px 43px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.container .btn13 {
  position: absolute;
  top: 54%;
  left: 75%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: white;
  font-size: 16px;
  padding: 45px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.container .btn1:hover {
  background-color: transparent;
}
.container .btn2:hover {
  background-color: transparent;
  
}
.container .btn3:hover {
  background-color: transparent;
  
}
.container .btn4:hover {
  background-color: transparent;
  
}
.container .btn5:hover {
  background-color: transparent;
  
}
.container .btn6:hover {
  background-color: transparent;
  
}
.container .btn7:hover {
  background-color: transparent;
  
}
.container .btn8:hover {
  background-color: transparent;
  
}
.container .btn9:hover {
  background-color: transparent;
  
}.container .btn10:hover {
  background-color: transparent;
  
}
.container .btn11:hover {
  background-color: transparent;
  
}
.container .btn12:hover {
  background-color: transparent;
  
}
.container .btn13:hover {
  background-color: transparent;
  
}
.container .btn14:hover {
  background-image: url('http://mkss.co.th/pole/assets/img/tot-inno.png');
  top: 50%;
  left: 50%;
  padding: 150px 150px;
  
}

</style>	
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
										<div class="col-md-2 col-sm-12" align="center">
											<?php 
											$sqli="SELECT * FROM logs where log_pole_id='$pole_id'";
											$result = mysqli_query($db,$sqli);  
										
											if(mysqli_num_rows($result) > 0){
												while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
												$temp_r=$row['log_temp']/10;
												$hummit=$row['log_hum']/10;
												//$pm=$row['log_pm25'];
												
												}
											}
											//$temp_r=22;
										 if($temp_r > 30){?>
											<i class="fas fa-temperature-high" style="font-size:30px;color:#FFA521"></i>
											<font style="font-size:24px;color:#FFA521"><?php echo $temp_r. "°C"; ?></font>
											&nbsp; &nbsp; &nbsp;
										 <?php }elseif($temp_r < 30){?>
											<i class="fas fa-temperature-low" style="font-size:30px;color:#2196F3"></i>
											<font style="font-size:24px;color:#2196F3"><?php echo $temp_r. "°C"; ?></font>
											&nbsp; &nbsp; &nbsp;
										 <?php } ?>
										 
											 <?php 
											 if($hummit > 50){?>
												<img src="assets/img/rain-icon.png" width="40px">
											<!--	<p style="font-size:24px;color:blue"><?php //echo $hummit. "%"; ?></p> -->
											<?php 
											}elseif($hummit < 50){?>
												<img src="assets/img/suny-icon.png" width="40px">
											<!--	<font style="font-size:24px;color:blue"><?php //echo $hummit. "%"; ?></font> -->
											
											<?php } ?>
										</div>
										<?php
												//&#3652;&#3615;&#3621;&#3660;&#3648;&#3594;&#3639;&#3656;&#3629;&#3617;&#3605;&#3656;&#3629;&#3585;&#3633;&#3610; database &#3607;&#3637;&#3656;&#3648;&#3619;&#3634;&#3652;&#3604;&#3657;&#3626;&#3619;&#3657;&#3634;&#3591;&#3652;&#3623;&#3657;&#3585;&#3656;&#3629;&#3609;&#3627;&#3609;&#3657;&#3634;&#3609;&#3657;&#3637;

												$sql="SELECT * FROM logs where log_pole_id='$pole_id' ORDER BY logs.log_dt DESC";			
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
													$log_temp=$row['log_temp']/10;
													$log_hum=$row['log_hum']/10;
													$log_pm25=$row['log_pm25']/10;
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
										<div class="col-md-2 col-xs-6" align="center">
											<div class="container">
												<img src="assets/img/pole-font.png" width="100%">
												<button class="btn1" data-toggle="tooltip" title="Display!" ></button>
												<button class="btn2" data-toggle="tooltip" data-placement="right" title="Fire Alarm"></button>
												<button class="btn3" data-toggle="tooltip" data-placement="right" title="Camera"></button>
												<button class="btn4" data-toggle="tooltip" title=""></button>
												<button class="btn5" data-toggle="tooltip" title=""></button>
												<button class="btn6" data-toggle="tooltip" data-placement="right" title="Switch"></button>
												<button class="btn7" data-toggle="tooltip" title=""></button>
												<button class="btn8" data-toggle="tooltip" title="Solarcell : <?php echo $log_solar_pv;?>"></button>
												<button class="btn9" data-toggle="tooltip" title=""></button>
											</div>
										</div>
										<div class="col-md-2 col-xs-6" align="center">
											<div class="container">
												<img src="assets/img/pole-back.png" width="100%">
												<button class="btn10" data-toggle="tooltip" data-placement="right" title="Fire Alarm"></button>
												<button class="btn11" data-toggle="tooltip" title=""></button>
												<button class="btn12" data-toggle="tooltip" title="Solarcell : <?php echo $log_solar_pv;?>"></button>
												<button class="btn13" data-toggle="tooltip" title="Display"></button>
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
														<td><i class="fas fa-lightbulb" data-toggle="tooltip" data-placement="right" 
														title="LED" style="font-size:24px;color:#2196F3"></i></td>
														<td><?php echo $log_led; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-battery-full" data-toggle="tooltip" data-placement="right" 
														title="LED Battery" style="font-size:24px;color:green"></i></td>
														<td><?php echo $log_led_battery; ?></td>
													</tr>
													<tr>
														<td><i class="fa fa-bell" data-toggle="tooltip" data-placement="right" 
														title="FIRE ALARM" style="font-size:24px;color:red"></i></td>
														<td><?php echo $log_fire_alarm; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-toggle-on" data-toggle="tooltip" data-placement="right" 
														title="SWITCH" style="font-size:24px;color:#2196F3"></i></td>
														<td><?php echo $log_switch; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-camera" data-toggle="tooltip" data-placement="right" 
														title="CAMERA1" style="font-size:24px;color:black"></i>(1)</td>
														<td><?php echo $log_cam1; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-camera" data-toggle="tooltip" data-placement="right" 
														title="CAMERA2" style="font-size:24px;color:black"></i>(2)</td>
														<td><?php echo $log_cam2; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-volume-up" data-toggle="tooltip" data-placement="right" 
														title="SPEAKER" style="font-size:24px;color:#2196F3"></i></td>
														<td><?php echo $log_spk; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-temperature-high" data-toggle="tooltip" data-placement="right" 
														title="TEMPERATURE" style="font-size:24px;color:orange"></i></td>
														<td><?php echo $log_temp; ?> °C</td>
													</tr>
													<tr>
														<td><i class="fas fa-tint" data-toggle="tooltip" data-placement="right" 
														title="HUMIDITY" style="font-size:24px;color:#2196F3"></i></td>
														<td><?php echo $log_hum; ?> %</td>
													</tr>
													<tr>
														<td><i class="fas fa-lungs-virus" data-toggle="tooltip" data-placement="right" 
														title="PM2.5" style="font-size:24px;color:red"></i></td>
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
														<td><i class="fas fa-desktop" data-toggle="tooltip" data-placement="right" 
														title="DISPLAY" style="font-size:24px;color:#2196F3"></i></td>
														<td><?php echo $log_led_disp; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-digital-tachograph" 
														data-toggle="tooltip" data-placement="right" 
														title="ONU" style="font-size:24px;color:black"></i>(ONU)</td>
														<td><?php echo $log_ONU; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-digital-tachograph" data-toggle="tooltip" data-placement="right" title="ATA" style="font-size:24px;color:black"></i>(ATA)</td>
														<td><?php echo $log_ATA; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-hdd" data-toggle="tooltip" data-placement="right" 
														title="IOT" style="font-size:24px;color:black"></i>(IOT)</td>
														<td><?php echo $log_IOT_GW; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-broadcast-tower" data-toggle="tooltip" data-placement="right" 
														title="POLE" style="font-size:24px;color:green"></i></td>
														<td><?php echo $log_POE_sw; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-solar-panel" data-toggle="tooltip" data-placement="right" 
														title="SOLAR" style="font-size:24px;color:#2196F3"></i></td>
														<td><?php echo $log_solar_pv; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-car-battery" data-toggle="tooltip" data-placement="right" 
														title="SOLAR BATTERY" style="font-size:24px;color:green"></i></td>
														<td><?php echo $log_solar_bat; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-plug" data-toggle="tooltip" data-placement="right" 
														title="AC POWER IN" style="font-size:24px;color:black"></i></td>
														<td><?php echo $log_AC_PW_in; ?></td>
													</tr>
													<tr>
														<td><i class="fas fa-fan" data-toggle="tooltip" data-placement="right" 
														title="FAN" style="font-size:24px;color:#2196F3"></i></td>
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
	


<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

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