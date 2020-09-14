<?php
	include("php/config.php");
	include("php/checkuser.php");
	include("php/function.php");
	$p="pole";
	
	if(isset($_GET['pole_name'])){$pole_name=$_GET['pole_name'];}


	
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
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
		<?php  

			$sql="SELECT * FROM pole WHERE pole_name = '$pole_name'";			
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
										<h4 class="card-title"><?php $pole_name ?></h4>
									<!-- 	<p class="card-category">Latitude</p> -->
									</div>
									<div class="card-body">
									<div class="user-box">
										
										<div class="u-text">
											<h4></h4>
											
										</div>
										<div class="u-text">
											<h4></h4>
											
										</div>
										
										<div class="u-text">
											<h4>Status Alarm</h4>
											<p class="text-muted">1.Fire Alarm</p>
											<p class="text-muted">2.Switch</p>
										</div>
										<div class="u-img"><img src="assets/img/pole_02.png" width="100" height="300" ></div>
										
										<div class="u-text">
											<h4></h4>
											
										</div>
										
										<div class="u-text">
											<h4>Status</h4>
											<p class="text-muted">LED : Normal</p>
											<p class="text-muted">LED Battery : Normal</p>
											<p class="text-muted">Fire Alarm : On</p>
											<p class="text-muted">Switch : On</p>
											<p class="text-muted">Camera1 : Normal</p>
											<p class="text-muted">Camera2 : Normal</p>
											<p class="text-muted">Speaker : Normal</p>
											<p class="text-muted">Temp : 35</p>
											<p class="text-muted">Humid : 82%</p>
											<p class="text-muted">PM2.5 : 8.5 ppm</p>											
										</div>
										<div class="u-text">
											<h4></h4>
											
										</div>
										<div class="u-text">
											<h4></h4>
											
										</div>
										<div class="u-text">
											<h4>Status</h4>
											
											<p class="text-muted">LED Display : Normal</p>
											<p class="text-muted">ONU : Normal</p>
											<p class="text-muted">ATA : Normal</p>
											<p class="text-muted">IOT GW : Normal</p>
											<p class="text-muted">POE Switch : Normal</p>
											<p class="text-muted">Solar PV : Normal</p>
											<p class="text-muted">Solar Battery : Normal</p>
											<p class="text-muted">AC Power In : Normal</p>
											<p class="text-muted">Fan : Normal</p>
											
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
							<?php echo	$pole_name;?>2020, made with <i class="la la-heart heart text-danger"></i> by <a href="http://www.mkss.co.th">MKSS</a>
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
					<p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
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