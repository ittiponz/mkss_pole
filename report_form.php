<?php
	include("php/config.php");
	
	include("php/checkuser.php");
	include("php/function.php");
	$p="report";
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
		<!-- Include Required Prerequisites -->
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
	 
	<!-- Include Date Range Picker -->
	<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
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
						</br></br></br></br></br>
										<div class="row">
											
											<div class="col-md-12">
												<div class="card">
													<div class="card-header">
														<h4 class="card-title">Report Form</h4>
													
													</div>
													<div class="card-body">
														<h4 align="center" class="card-title">Plase Select Date</h4>
														<br>
														
														<div align="center">											
															<?php  $date_day=date("Y-m-d"); 
																 //  $date_week=date("Y-m-d");
																   $date_week = date ("Y-m-d", strtotime("-7 day", strtotime($date_day))); 
															?>
															<input type="button" name="day" class="btn btn-info" value="Daily"
															onclick="window.location='report.php?ran=<?=$ran;?>&date_day=<?=$date_day;?>'"/>
															<input type="button" name="day" class="btn btn-success" value="Weekly"
															onclick="window.location='report.php?ran=<?=$ran;?>&date_week=<?=$date_week;?>'"/>
														   
															
														</div>
													
														<br>
														<div align="center">
															<?php //$date_mounth=date("Y-m-d"); 
																  // $date_year=date("Y-m-d");
																   $date_mounth = date ("Y-m-d", strtotime("-1 month", strtotime($date_day)));
																   $date_year = date ("Y-m-d", strtotime("-1 year", strtotime($date_day))); 																   
															?>
															<input type="button" name="mounth" class="btn btn-warning" value="Monthly"
															onclick="window.location='report.php?ran=<?=$ran;?>&date_mounth=<?=$date_mounth;?>'"/>
															<input type="button" name="year" class="btn btn-danger" value="Yearly"
															onclick="window.location='report.php?ran=<?=$ran;?>&date_year=<?=$date_year;?>'"/>
														
														</div>
														<form align="center" width="80%" action="report.php" method="post" accept-charset="utf-8"><br/>
                                                        <input type="hidden" name="ran" id="ran" value="<?php echo $ran;?>">
														<h4 align="center">OR</h4>
														<br>
														<input type="text" name="daterange" placeholder="click" />
															
															<script type="text/javascript">
															$('input[name="daterange"]').daterangepicker(
															{
																locale: {
																  format: 'DD/MM/YYYY'
																
																},
															  //  startDate: '01/01/2017',
															  //  endDate: '31/12/2017'
															}, 

															function(start, end, label) {
																//alert("A new date range was chosen: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
															}
															);
															</script>
															<button type="submit" name="save" class="btn btn-info"> Enter </button>
														</form>
															</br></br>
													</div>	
												</div>
											</div>
										</div>	
										
									
				</div>
			</div>
				<!-- footer -->
			<?php //include("footer.php"); ?>
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