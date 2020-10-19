<?php 
//--------------------ToTal-----------------------//
	$sqlx="SELECT count(*) as cnt from dev ";
	$resultx=mysqli_query($db,$sqlx);
	$rowx = mysqli_fetch_array($resultx,MYSQLI_ASSOC);					
	$totalcnt=$rowx['cnt'];
	if($totalcnt > 50){
		$totalclr=" bg-red ";	
	}elseif($totalcnt > 20 && $totalcnt <=50){
		$totalclr=" bg-yellow ";				
	}else{
		$totalclr="  bg-green ";		
	}
//--------------------Online-----------------------//					
	$sqlx="SELECT count(*) as cnt from dev where dev_stat = 'online'";
	$resultx=mysqli_query($db,$sqlx);
	$rowx = mysqli_fetch_array($resultx,MYSQLI_ASSOC);					
	$oncnt=$rowx['cnt'];
	$onclr="success";		
	
//--------------------Offline-----------------------//
	$sqlx="SELECT count(*) as cnt from dev where dev_stat = 'offline'";
	$resultx=mysqli_query($db,$sqlx);
	$rowx = mysqli_fetch_array($resultx,MYSQLI_ASSOC);					
	$offcnt=$rowx['cnt'];
	if($offcnt > 5){
		$offclr="danger";	
	}elseif($offcnt > 0 && $offcnt <=5){
		$offclr="warning";				
	}else{
		$offclr="success";		
	}
//--------------------Alarm-----------------------//
	$sqlx="SELECT count(*) as cnt from dev where dev_stat = 'alarm'";
	$resultx=mysqli_query($db,$sqlx);
	$rowx = mysqli_fetch_array($resultx,MYSQLI_ASSOC);					
	$alcnt=$rowx['cnt'];
	if($alcnt > 0 ){
		$alclr="danger";				
	}else{
		$alclr="success";		
	}


					
?>

    <div class="row">
        <div class="col-md-3">
			<div class="card card-stats card-<?php echo $onclr; ?>">
				<div class="card-body">
					<div class="row">
						<div class="col-5">
							<div class="icon-big text-center">
								<i class="la la-line-chart"></i>
							</div>
						</div>
						<div class="col-7 d-flex align-items-center">
							<div class="numbers">
								<p class="card-category text-center">Online</p>
								<h4 class="card-title text-center"><a align="center" target="_blank" href="online.php?ran=<?php echo $ran;?>&dev_stat=online">
								<font color="white" size="6"><?php echo $oncnt; ?></font></a></h4>						
							</div>
						</div>
					</div>
				</div>
				<a align="center" target="_blank" href="online.php?ran=<?php echo $ran;?>&dev_stat=online"><font color="white">More Info</font></a>
			</div>									
        </div>
        <div class="col-md-3">
            <div class="card card-stats card-<?php echo $offclr; ?>">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="la la-power-off"></i>
                            </div>
                        </div>
                        <div class="col-7 d-flex align-items-center">
                            <div class="numbers">
                                <p class="card-category text-center">Offline</p>
                                <h4 class="card-title text-center"><a align="center" target="_blank" href="offline.php?ran=<?php echo $ran;?>&dev_stat=offline">
								<font color="white" size="6"><?php echo $offcnt; ?></font></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
				<a align="center" target="_blank" href="offline.php?ran=<?php echo $ran;?>&dev_stat=offline"><font color="white">More Info</font></a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-stats card-<?php echo $alclr; ?>">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="la la-bell"></i>
                            </div>
                        </div>
                        <div class="col-7 d-flex align-items-center">
                            <div class="numbers">
                                <p class="card-category text-center">Alarm</p>
                                <h4 class="card-title text-center"><a align="center" target="_blank" href="alarm.php?ran=<?php echo $ran;?>&dev_stat=alarm">
								<font color="white" size="6"><?php echo $alcnt; ?></font></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
				<a align="center" target="_blank" href="alarm.php?ran=<?php echo $ran;?>&dev_stat=alarm"><font color="white">More Info</font></a>
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
                                <p class="card-category text-center">Total</p>
                                <h4 class="card-title text-center"><a align="center" target="_blank" href="total.php?ran=<?php echo $ran;?>&dev_stat=total">
								<font color="white" size="6"><?php echo $totalcnt; ?></font></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
				<a align="center" target="_blank" href="total.php?ran=<?php echo $ran;?>&dev_stat=total"><font color="white">More Info</font></a>
            </div>
        </div>
    </div>