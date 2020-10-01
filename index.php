<?php
	session_start();
	session_id();

	include("php/config.php");
	include("php/function.php");
	$infostr="";
	$login_sucess=false;
	if(isset($_POST['user_name'])){
		
		$usr_name=$_POST['user_name'];
		$pwd=$_POST['password'];
		
		$_SESSION['username']= $usr_name;

		$sql="select * from user where usr_name='". $usr_name. "' AND usr_pwd='". $pwd ."';";
					
		$result=mysqli_query($db,$sql);			
		if(mysqli_num_rows($result) > 0){	
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$usr_id=$row['usr_id'];
			$usr_type=$row['usr_type'];
			$login_sucess=true;	
			$ran=get_ran10();
			$_SESSION['user_id']= $usr_id;
			$_SESSION['ran']= $ran;

			$sql="update user SET ".
					" usr_ran='". $ran ."'".
					" Where usr_id='".$usr_id ."'";
			$updt=mysqli_query($db, $sql);			
		}else{
			
			echo "<script language=\"javascript\">";
			echo "alert(\"Invalid  User Name or Password\")";
			echo "</script>";	
			
			$infostr="Invalid User Name or Password";
			header("Location: login.php?infostr=".$infostr);
			exit(0);
		}
				
	//if  send page	
	}else{
		$login_sucess=false;
		$infostr="Invalid User Name or Password";
		header("Location: login.php?infostr=".$infostr);
		exit(0);
	}			

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

	
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDO0ZcyhJ9ZuCpC0p4Gst82f1Bru7Tc3l0&callback=setupMap"></script>
	<script language="JavaScript">
		var marker;
		function initMap() { 
			
			var myCenter = new google.maps.LatLng(13.971187,100.589865);
			var myOptions = {
				zoom: 10,
				center: myCenter,
				//mapTypeId: google.maps.MapTypeId.HYBRID
			};
			var map = new google.maps.Map(document.getElementById('map_canvas'),
				myOptions);
			
			// marker
			<?php
				$sql="SELECT * FROM pole";
				$result=mysqli_query($db,$sql);
				if(mysqli_num_rows($result) > 0){
					$i=0;
					while($row = mysqli_fetch_array($result)){
						$i++;
						$info = '<a href="./pole.php?ran='.$ran.'&pole_name='.$row['pole_name'].'">'.$row['pole_name'].'</a>';
						echo "var pos{$i} = {lat: ".$row['pole_lat'].", lng: ".$row['pole_lon']."};";
						echo "
							var marker{$i} = new google.maps.Marker({
								map,
								position: pos{$i},
								animation: google.maps.Animation.DROP,
							});
						";
						
						echo "
							var infowindow{$i} = new google.maps.InfoWindow({
								content:'".$info."'
							});
						";

						echo "
							google.maps.event.addListener(marker{$i},'click',function(){
								infowindow{$i}.open(map,marker{$i});
							});
						";
					}
				}
			?>
		}

	</script>

</head>
<body onload="initMap()">
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
						<h4 class="page-title">Commu. Pole</h4>
						<!-- sumary stat //start -->
						<?php include("sumstat.php");?>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">SmartPole Map</h4>
										<p class="card-category">
										Map of the distribution of users around the world</p>
									</div>
									<div class="card-body">
										<div id="map_canvas" style="height:450px;"></div>
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