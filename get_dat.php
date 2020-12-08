<?php
	include("php/config.php");
	/*
	if(isset($_GET['ran'])){
		$ran=$_GET['ran'];
		$sql="update user SET ".
			" usr_ran='X'".
			" Where usr_ran='".$ran ."'";
		$updt=mysqli_query($db, $sql);	
			
	}
	*/
	
	$sql="SELECT * FROM log order by log_dt DESC limit 1";
	$result=mysqli_query($db, $sql); 
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$tmp=round($row['log_temp']);
		$hum=$row['log_hum'];
		$pm25=$row['log_pm25'];
		echo "$tmp,$hum,$pm25,";
	}	

	if(isset($_POST['pole_id'])){
		$pole_id=$_POST['pole_id'];
		$pole_ip=$_POST['pole_ip'];
						
		$sql="Update pole SET pole_ip='$pole_ip' Where pole_id='$pole_id'";			
		//echo $sql;
		$updt=mysqli_query($db, $sql);			
	}	
	
?>	
