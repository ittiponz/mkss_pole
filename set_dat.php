<?php
	include("php/config.php");
	
	if(isset($_GET['pole_id'])){
		$dev_id=$_GET['pole_id'];
		$pole_id=$_GET['pole_id'];
		$pole_ip=$_GET['pole_ip'];
		$led=$_GET['led'];
		$switch=$_GET['switch'];
		$door1=$_GET['door1'];
		$door2=$_GET['door2'];
		$tmp_in=$_GET['temp_in'];
		$tmp_out=$_GET['temp_out'];
		$hum_in=$_GET['humd_in'];
		$hum_out=$_GET['humd_out'];
		$pm25=$_GET['pm25'];
		$bat=$_GET['bat'];
				
		$sql="Insert into log SET ".
			" log_pole_id='$pole_id',".
			" log_dt=now(),".
			" log_temp='$tmp_out',".
			" log_hum='$hum_out',".
			" log_pm25='$pm25'";
			
		echo $sql;
		echo "<br>";
		$insrt=mysqli_query($db, $sql);	
		
		if($insrt==1){
			echo "ok";
		}else{
			echo "error";
		}
		
		$sql="Update pole SET pole_ip='$pole_ip' Where pole_id='$pole_id'";
			
		echo $sql;
		echo "<br>";
		$updt=mysqli_query($db, $sql);	
		
		if($updt==1){
			echo "ok";
		}else{
			echo "error";
		}		
	}
		
	/*	
	$sql="SELECT * FROM log order by log_dt DESC";
	$result=mysqli_query($db, $sql); 
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$tmp=round($row['log_temp']);
		$hum=$row['log_hum'];
		$pm25=$row['log_pm25'];
		echo "$tmp,$hum,$pm25,";
	}	
	*/
	
?>	
