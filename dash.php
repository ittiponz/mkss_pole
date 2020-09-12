<?php
	include("php/config.php");
	
	if(isset($_GET['ran'])){$ran=$_GET['ran'];}
	if(isset($_POST['ran'])){$ran=$_POST['ran'];}
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
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
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
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="assets/img/logo_admin.jpg" alt="user-img" width="36" class="img-circle"><span ><?php echo $usr_name ?></span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="assets/img/logo_admin.jpg" alt="user"></div>
										<div class="u-text">
											<h4><?php echo $usr_name ?></h4>
											<p class="text-muted"><?php echo $usr_type ?></p></div>
										</div>
									</li>
								
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Setting</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="login.php"><i class="fa fa-power-off"></i> Logout</a>
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
						<li class="nav-item active">
							<?php	
								echo "	<a href=\"dash.php?ran=".$ran."\">"; 
								echo "	<i class=\"la la-users\"></i>";
								echo "	User";
								echo "	</a>";
							?>
						</li>
						<li class="nav-item">
							<?php	
								echo "	<a href=\"report.php?ran=".$ran."\">"; 
								echo "	<i class=\"la la-newspaper-o\"></i>";
								echo "	Report";
								echo "	</a>";
							?>
						</li>
						<li class="nav-item">
							<?php	
								echo "	<a href=\"setting.php?ran=".$ran."\">"; 
								echo "	<i class=\"la la-keyboard-o\"></i>";
								echo "	System Setting";
								echo "	</a>";
							?>
							
						</li>
						
					</ul>
				</div>
			</div>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Commu. Pole</h4>
						<div class="row">
							<div class="col-md-3">
								<div class="card card-stats card-danger">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-line-chart"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Critical</p>
													<h4 class="card-title">3</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats card-warning">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-bell"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Warning</p>
													<h4 class="card-title">294</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats card-success">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-bar-chart"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Normal</p>
													<h4 class="card-title">345</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="card card-stats card-primary">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-check-circle"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">total</p>
													<h4 class="card-title">576</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
						
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">SmartPole Map</h4>
										<p class="card-category">
										Map of the distribution of users around the world</p>
									</div>
									<div class="card-body">
									<?php
										
											echo "<iframe src=\"http://mkss.co.th/pole/php/map.php\" width=\"100%\" height=\"500\" style=\"border-style: none;\"></iframe>";
									?>												
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