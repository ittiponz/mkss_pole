<?php
	include("php/config.php");
	include("php/checkuser.php");
	include("php/function.php");
	$p="report";
	
$date = $_POST['daterange'];  // value &#3607;&#3637;&#3656;&#3626;&#3656;&#3591;&#3617;&#3634;
//$d_day = $_POST['date_day']; 
		if(isset($_GET['date_day'])){$date_day=$_GET['date_day'];} 
		if(isset($_POST['date_day'])){$date_day=$_POST['date_day'];}     
		if(isset($_GET['date_week'])){$date_week=$_GET['date_week'];} 
		if(isset($_POST['date_week'])){$date_week=$_POST['date_week'];}   
		if(isset($_GET['date_mounth'])){$date_mounth=$_GET['date_mounth'];} 
		if(isset($_POST['date_mounth'])){$date_mounth=$_POST['date_mounth'];}   
		if(isset($_GET['date_year'])){$date_year=$_GET['date_year'];} 
		if(isset($_POST['date_year'])){$date_year=$_POST['date_year'];}   		
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
	

	<style>
	.gauge {
	  display: inline-block;
	}
	</style>
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
														<h4 class="card-title">Report</h4>
													
													</div>
													<div class="card-body">
													<?php 
													$now=date("Y-m-d");
													$date_explode = explode('-', $date);   // &#3586;&#3633;&#3657;&#3609;&#3604;&#3657;&#3623;&#3618; '-
																	
													$days = substr($date_explode[0],0,2);
													$months = substr($date_explode[0],3,2);
													$years = substr($date_explode[0],6,4);
													$dt_srt = $years."-".$months."-".$days;
													
													$day = substr($date_explode[1],1,2);
													$month = substr($date_explode[1],4,2);
													$year = substr($date_explode[1],7,4);
													$dt_stp = $year."-".$month."-".$day;
													
													if($date != ""){
														
														echo "Date Start: ". $dt_srt."<br />"; // 1 &#3588;&#3656;&#3634;&#3627;&#3621;&#3633;&#3591; '-'	
														echo "Dete Stop: ". $dt_stp."<br />"; // 1 &#3588;&#3656;&#3634;&#3627;&#3621;&#3633;&#3591; '-'	
													}elseif($date_day != ""){
														echo"<h4>Daily</h4>";
														echo "Date Start: ". $date_day."<br />"; // 1 &#3588;&#3656;&#3634;&#3627;&#3621;&#3633;&#3591; '-'	
														echo "Dete Stop: ". $now."<br />";
													}elseif($date_week != ""){
														echo"<h4>Weekly</h4>";
														echo "Date Start: ".$date_week."<br />"; // 1 &#3588;&#3656;&#3634;&#3627;&#3621;&#3633;&#3591; '-'	
														echo "Dete Stop: ". $now."<br />";
													}elseif($date_mounth != ""){
														echo"<h4>Monthly</h4>";
														echo "Date Start: ". $date_mounth."<br />"; // 1 &#3588;&#3656;&#3634;&#3627;&#3621;&#3633;&#3591; '-'	
														echo "Dete Stop: ". $now."<br />";
													}elseif($date_year != ""){
														echo"<h4>Yearly</h4>";
														echo "Date Start: ". $date_year."<br />"; // 1 &#3588;&#3656;&#3634;&#3627;&#3621;&#3633;&#3591; '-'	
														echo "Dete Stop: ". $now."<br />";
													}
													?>
													<br>
														<div class="col-md-12" align="center">
														<script src="https://www.gstatic.com/charts/loader.js"></script>
														<div class="gauge" id="chart_Temp" width="20%"></div>
														<div class="gauge" id="chart_Humid" width="20%"></div>
														<div class="gauge" id="chart_PM" width="20%"></div>
														</div>
														<table class="table table-striped mt-3">
															<thead>
																<tr>
																	<th scope="col">Temp</th>
																	<th scope="col">Humid</th>
																	<th scope="col">PM2.5</th>
																	<th scope="col">Alarm</th>
																</tr>
															</thead>
															<tbody>
	
														 
															
																	<?php
																	//&#3652;&#3615;&#3621;&#3660;&#3648;&#3594;&#3639;&#3656;&#3629;&#3617;&#3605;&#3656;&#3629;&#3585;&#3633;&#3610; database &#3607;&#3637;&#3656;&#3648;&#3619;&#3634;&#3652;&#3604;&#3657;&#3626;&#3619;&#3657;&#3634;&#3591;&#3652;&#3623;&#3657;&#3585;&#3656;&#3629;&#3609;&#3627;&#3609;&#3657;&#3634;&#3609;&#3657;&#3637;
																	if($date != ""){
																		$sql="SELECT * FROM log where log_dt BETWEEN '$dt_srt 00:00:00' AND '$dt_stp 23:59:59' ";
																		$result=mysqli_query($db,$sql); 
																	}elseif($date_day != ""){
																		$sql="SELECT * FROM log where log_dt BETWEEN '$date_day 00:00:00' AND '$now 23:59:59' ";
																		$result=mysqli_query($db,$sql); 
																	}elseif($date_week != ""){
																		$sql="SELECT * FROM log where log_dt BETWEEN '$date_week 00:00:00' AND '$now 23:59:59' ";
																		$result=mysqli_query($db,$sql); 
																	}elseif($date_mounth != ""){
																		$sql="SELECT * FROM log where log_dt BETWEEN '$date_mounth 00:00:00' AND '$now 23:59:59' ";
																		$result=mysqli_query($db,$sql); 
																	}elseif($date_year != ""){
																		$sql="SELECT * FROM log where log_dt BETWEEN '$date_year 00:00:00' AND '$now 23:59:59' ";
																		$result=mysqli_query($db,$sql); 
																	}
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
																		
																		echo "<tr>";
																			echo "<td>" .$row['log_temp'] .  "</td> ";
																			echo "<td>" .$row['log_hum'] .  "</td> ";
																			echo "<td>" .$row['log_pm25'] .  "</td> ";
																			echo "<td>" .$row['log_fire_alarm'] .  "</td> ";
																					
																		} 
																	}
																	
																	
																	if($date != ""){
																		$sqli="SELECT FORMAT(AVG(log_temp),2) AS avg_temp,
																		FORMAT(AVG(log_hum),2) AS avg_hum,
																		FORMAT(AVG(log_pm25),2) AS avg_pm25
																		FROM log where log_dt BETWEEN '$dt_srt 00:00:00' AND '$dt_stp 23:59:59'";
																		$result = mysqli_query($db,$sqli); 
																	}elseif($date_day != ""){
																		$sqli="SELECT FORMAT(AVG(log_temp),2) AS avg_temp,
																		FORMAT(AVG(log_hum),2) AS avg_hum,
																		FORMAT(AVG(log_pm25),2) AS avg_pm25
																		FROM log where log_dt BETWEEN '$date_day 00:00:00' AND '$now 23:59:59'";
																		$result = mysqli_query($db,$sqli); 
																	}elseif($date_week != ""){
																		$sqli="SELECT FORMAT(AVG(log_temp),2) AS avg_temp,
																		FORMAT(AVG(log_hum),2) AS avg_hum,
																		FORMAT(AVG(log_pm25),2) AS avg_pm25
																		FROM log where log_dt BETWEEN '$date_week 00:00:00' AND '$now 23:59:59'";
																		$result = mysqli_query($db,$sqli); 
																	}elseif($date_mounth != ""){
																		$sqli="SELECT FORMAT(AVG(log_temp),2) AS avg_temp,
																		FORMAT(AVG(log_hum),2) AS avg_hum,
																		FORMAT(AVG(log_pm25),2) AS avg_pm25
																		FROM log where log_dt BETWEEN '$date_mounth 00:00:00' AND '$now 23:59:59'";
																		$result = mysqli_query($db,$sqli);  
																	}elseif($date_year != ""){
																		$sqli="SELECT FORMAT(AVG(log_temp),2) AS avg_temp,
																		FORMAT(AVG(log_hum),2) AS avg_hum,
																		FORMAT(AVG(log_pm25),2) AS avg_pm25
																		FROM log where log_dt BETWEEN '$date_year 00:00:00' AND '$now 23:59:59'";
																		$result = mysqli_query($db,$sqli);  
																	}
																	if(mysqli_num_rows($result) > 0){
																		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
																		$temp=$row['avg_temp'];
																		$hum=$row['avg_hum'];
																		$pm=$row['avg_pm25'];
																		
																		}
																	}
																	//echo $temp;	
																	?>
																</tr>
															</tbody>
														</table>
														
														
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
google.charts.load('current', {
  packages: ['gauge']
}).then(function () {
	var hum=<?=$hum?>;
	var temp=<?=$temp?>;
	var pm=<?=$pm?>;
  var dataHumid = google.visualization.arrayToDataTable([
    ['Label', 'Value'],
    ['Humid', 0]
  ]);

  var dataTemp = google.visualization.arrayToDataTable([
    ['Label', 'Value'],
    ['Temp', 0]
  ]);
  var dataPM = google.visualization.arrayToDataTable([
    ['Label', 'Value'],
    ['PM2.5', 0]
  ]);
  var optionsHumid = {
    width: 80, height: 80,
    redFrom: 0, redTo: 33,
    yellowFrom: 33, yellowTo: 66,
    greenFrom: 66, greenTo: 100,
    majorTicks: ['0','10','20','30','40','50','60','70','80','90', '100'],
    minorTicks: 10
  };

  var formatHumid = new google.visualization.NumberFormat({
    suffix: '%',
    fractionDigits: 1
  });
  formatHumid.format(dataHumid, 1);

  var optionsTemp = {
    width: 80, height: 80,
    redFrom: 45, redTo: 100,
    yellowFrom: 30, yellowTo: 45,
    greenFrom: 12, greenTo: 30,
    majorTicks: ['0','10','20','30','40','50','60','70','80','90', '100'],
    minorTicks: 10
  };

  var formatTemp = new google.visualization.NumberFormat({
    suffix: ' C',
    fractionDigits: 1
  });
  formatTemp.format(dataTemp, 1);
  
  var optionsPM = {
    width: 80, height: 80,
    redFrom: 80, redTo: 100,
    yellowFrom: 50, yellowTo: 80,
    greenFrom: 0, greenTo: 50,
    majorTicks: ['0','10','20','30','40','50','60','70','80','90', '100'],
    minorTicks: 10
  };

  var formatPM = new google.visualization.NumberFormat({
    suffix: ' ug./m',
    fractionDigits: 1
  });
  formatPM.format(dataPM, 1);

  var chartHumid = new google.visualization.Gauge(document.getElementById("chart_Humid"));
  var chartTemp = new google.visualization.Gauge(document.getElementById("chart_Temp"));
  var chartPM = new google.visualization.Gauge(document.getElementById("chart_PM"));

  chartHumid.draw(dataHumid, optionsHumid);
  chartTemp.draw(dataTemp, optionsTemp);
  chartPM.draw(dataPM, optionsPM);

  setInterval(function() {
    /*
    var JSON=$.ajax({
      url:"sensores.php",
      dataType: 'json',
      async: false}).responseText;
    var Respuesta=jQuery.parseJSON(JSON);
    dataHumid.setValue(0, 1, Respuesta[0].humidity);
    */
    dataHumid.setValue(0, 1, hum);
    formatHumid.format(dataHumid, 1);
    chartHumid.draw(dataHumid, optionsHumid);
  }, 1300);

  setInterval(function() {
    /*
    var JSON=$.ajax({
      url:"sensores.php",
      dataType: 'json',
      async: false}).responseText;
    var Respuesta=jQuery.parseJSON(JSON);
    dataTemp.setValue(0, 1, Respuesta[0].temperature);
    */
    dataTemp.setValue(0, 1, temp);
    formatTemp.format(dataTemp, 1);
    chartTemp.draw(dataTemp, optionsTemp);
  }, 1300);
  
    setInterval(function() {
    /*
    var JSON=$.ajax({
      url:"sensores.php",
      dataType: 'json',
      async: false}).responseText;
    var Respuesta=jQuery.parseJSON(JSON);
    dataTemp.setValue(0, 1, Respuesta[0].temperature);
    */
    dataPM.setValue(0, 1, pm);
    formatPM.format(dataPM, 1);
    chartPM.draw(dataPM, optionsPM);
  }, 1300);
});
</script>
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