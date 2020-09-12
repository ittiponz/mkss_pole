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
			<div class="logo-header">
				<a href="index.php" class="logo">
					<img align ='center' width="180" height="60"src="assets/img/tot-inno.png">	
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" 
				data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
				<!--	
					<form class="navbar-left navbar-form nav-search mr-md-3" action="">
						<div class="input-group">
							<input type="text" placeholder="Search ..." class="form-control">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
							</div>
						</div>
					</form>
					-->
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret"></li>
						<li class="nav-item dropdown hidden-caret"></li>
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> 
								<img src="assets/img/logo_admin.jpg" alt="user-img" width="36" class="img-circle">
								<span >UserName</span></span> 
							</a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="assets/img/logo_admin.jpg" alt="user"></div>
										<div class="u-text">
											<h4>UserName</h4>
											<p class="text-muted">UserType</p></div>
									</div>
									</li>
								
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Setting</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> Logout</a>
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<ul class="nav">
						<li class="nav-item">
							<a href="index.php">
								<i class="la la-users"></i>
								<p>User</p>
								<span class="badge badge-count">5</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="report.php">
								<i class="la la-newspaper-o"></i>
								<p>Report</p>
								<span class="badge badge-count">14</span>
							</a>
						</li>
						<li class="nav-item active">
							<a href="setting.php">
								<i class="la la-keyboard-o"></i>
								<p>System Setting</p>
								<span class="badge badge-count">50</span>
							</a>
						</li>
						
					</ul>
				</div>
			</div>
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
										
										<div class="form-group form-inline">
											<label for="inlineinput" class="col-md-3 col-form-label">LED</label>
											<div class="col-md-9 p-0">
												<input type="text" class="form-control input-full" id="led" placeholder="Auto">
											</div>
											<label for="inlineinput" class="col-md-3 col-form-label">LED Battery</label>
											<div class="col-md-9 p-0">
												<input type="text" class="form-control input-full" id="led_bat" placeholder="N/A">
											</div>
											<label for="inlineinput" class="col-md-3 col-form-label">Fire Alarm</label>
											<div class="col-md-9 p-0">
												<input type="text" class="form-control input-full" id="fa" placeholder="ON Buzzer">
											</div>
											<label for="inlineinput" class="col-md-3 col-form-label">Switch</label>
											<div class="col-md-9 p-0">
												<input type="text" class="form-control input-full" id="sw" placeholder="ON Buzzer">
											</div>
											<label for="inlineinput" class="col-md-3 col-form-label">Camera1</label>
											<div class="col-md-9 p-0">
												<input type="text" class="form-control input-full" id="cam1" placeholder="192.168.1.43">
											</div>
											<label for="inlineinput" class="col-md-3 col-form-label">Camera2</label>
											<div class="col-md-9 p-0">
												<input type="text" class="form-control input-full" id="cam2" placeholder="192.168.1.44">
											</div>
											<label for="inlineinput" class="col-md-3 col-form-label">Speaker</label>
											<div class="col-md-9 p-0">
												<input type="text" class="form-control input-full" id="spk" placeholder="N/A">
											</div>
											<label for="inlineinput" class="col-md-3 col-form-label">Temp</label>
											<div class="col-md-9 p-0">
												<input type="text" class="form-control input-full" id="temp" placeholder="N/A">
											</div>
											<label for="inlineinput" class="col-md-3 col-form-label">Humid</label>
											<div class="col-md-9 p-0">
												<input type="text" class="form-control input-full" id="hm" placeholder="N/A">
											</div>
											<label for="inlineinput" class="col-md-3 col-form-label">PM2.5</label>
											<div class="col-md-9 p-0">
												<input type="text" class="form-control input-full" id="pm" placeholder="N/A">
											</div>
											<label for="inlineinput" class="col-md-3 col-form-label">LED Display</label>
											<div class="col-md-9 p-0">
												<input type="text" class="form-control input-full" id="led_disp" placeholder="Auto">
											</div>
											<label for="inlineinput" class="col-md-3 col-form-label">ONU</label>
											<div class="col-md-9 p-0">
												<input type="text" class="form-control input-full" id="onu" placeholder="192.168.1.45">
											</div>
											<label for="inlineinput" class="col-md-3 col-form-label">ATA</label>
											<div class="col-md-9 p-0">
												<input type="text" class="form-control input-full" id="ata" placeholder="192.168.1.46">
											</div>
											<label for="inlineinput" class="col-md-3 col-form-label">IOT GW</label>
											<div class="col-md-9 p-0">
												<input type="text" class="form-control input-full" id="iot" placeholder="192.168.1.47">
											</div>
											<label for="inlineinput" class="col-md-3 col-form-label">POE Switch</label>
											<div class="col-md-9 p-0">
												<input type="text" class="form-control input-full" id="poe" placeholder="ON/OFF">
											</div>
											<label for="inlineinput" class="col-md-3 col-form-label">Solar PV</label>
											<div class="col-md-9 p-0">
												<input type="text" class="form-control input-full" id="solar_pv" placeholder="N/A">
											</div>
											<label for="inlineinput" class="col-md-3 col-form-label">Solar Battery</label>
											<div class="col-md-9 p-0">
												<input type="text" class="form-control input-full" id="solar_bat" placeholder="N/A">
											</div>
											<label for="inlineinput" class="col-md-3 col-form-label">AC Power In</label>
											<div class="col-md-9 p-0">
												<input type="text" class="form-control input-full" id="ac" placeholder="N/A">
											</div>
											<label for="inlineinput" class="col-md-3 col-form-label">Fan</label>
											<div class="col-md-9 p-0">
												<input type="text" class="form-control input-full" id="fan" placeholder="35 degree">
											</div>
										</div>
		
										<div class="card-action">
											<button class="btn btn-success">Submit</button>
											<button class="btn btn-danger">Cancel</button>
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
							2020, made with <i class="la la-heart heart text-danger"></i> by <a href="http://www.mkss.co.th">MKSS</a>
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

<?php

function get_ran_str($len = 5){
  $charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  $base = strlen($charset);
  $result = '';

  $now = explode(' ', microtime())[1];
  while ($now >= $base){
    $i = $now % $base;
    $result = $charset[$i] . $result;
    $now /= $base;
  }
  return substr($result, -5);
}

function get_ran10($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>