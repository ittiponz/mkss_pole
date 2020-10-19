<?php
	include("php/config.php");
	
	include("php/checkuser.php");
//	include("php/function.php");
//	$p="dash";

		if(isset($_GET['ran'])){$ran=$_GET['ran'];} 
		if(isset($_POST['ran'])){$ran=$_POST['ran'];} 
		if(isset($_GET['pole_id'])){$pole_id=$_GET['pole_id'];} 
		if(isset($_POST['pole_id'])){$pole_id=$_POST['pole_id'];} 
		if(isset($_GET['log_led'])){$log_led=$_GET['log_led'];} 
		if(isset($_POST['log_led'])){$log_led=$_POST['log_led'];} 
		if(isset($_GET['log_led_battery'])){$log_led_battery=$_GET['log_led_battery'];} 
		if(isset($_POST['log_led_battery'])){$log_led_battery=$_POST['log_led_battery'];}     
		if(isset($_GET['log_fire_alarm'])){$log_fire_alarm=$_GET['log_fire_alarm'];} 
		if(isset($_POST['log_fire_alarm'])){$log_fire_alarm=$_POST['log_fire_alarm'];}   
		if(isset($_GET['log_switch'])){$log_switch=$_GET['log_switch'];} 
		if(isset($_POST['log_switch'])){$log_switch=$_POST['log_switch'];}   
		if(isset($_GET['log_cam1'])){$log_cam1=$_GET['log_cam1'];} 
		if(isset($_POST['log_cam1'])){$log_cam1=$_POST['log_cam1'];}   
		if(isset($_GET['log_cam2'])){$log_cam2=$_GET['log_cam2'];} 
		if(isset($_POST['log_cam2'])){$log_cam2=$_POST['log_cam2'];}   
		if(isset($_GET['log_spk'])){$log_spk=$_GET['log_spk'];} 
		if(isset($_POST['log_spk'])){$log_spk=$_POST['log_spk'];}  
		if(isset($_GET['log_temp'])){$log_temp=$_GET['log_temp'];} 
		if(isset($_POST['log_temp'])){$log_temp=$_POST['log_temp'];}   
		if(isset($_GET['log_hum'])){$log_hum=$_GET['log_hum'];} 
		if(isset($_POST['log_hum'])){$log_hum=$_POST['log_hum'];}   
		if(isset($_GET['log_pm25'])){$log_pm25=$_GET['log_pm25'];} 
		if(isset($_POST['log_pm25'])){$log_pm25=$_POST['log_pm25'];} 
		if(isset($_GET['log_led_disp'])){$log_led_disp=$_GET['log_led_disp'];} 
		if(isset($_POST['log_led_disp'])){$log_led_disp=$_POST['log_led_disp'];}  
		if(isset($_GET['log_ONU'])){$log_ONU=$_GET['log_ONU'];} 
		if(isset($_POST['log_ONU'])){$log_ONU=$_POST['log_ONU'];}   
		if(isset($_GET['log_ATA'])){$log_ATA=$_GET['log_ATA'];} 
		if(isset($_POST['log_ATA'])){$log_ATA=$_POST['log_ATA'];}   
		if(isset($_GET['log_IOT_GW'])){$log_IOT_GW=$_GET['log_IOT_GW'];} 
		if(isset($_POST['log_IOT_GW'])){$log_IOT_GW=$_POST['log_IOT_GW'];} 
		if(isset($_GET['log_POE_sw'])){$log_POE_sw=$_GET['log_POE_sw'];} 
		if(isset($_POST['log_POE_sw'])){$log_POE_sw=$_POST['log_POE_sw'];} 
		if(isset($_GET['log_solar_pv'])){$log_solar_pv=$_GET['log_solar_pv'];} 
		if(isset($_POST['log_solar_pv'])){$log_solar_pv=$_POST['log_solar_pv'];}  
		if(isset($_GET['log_solar_bat'])){$log_solar_bat=$_GET['log_solar_bat'];} 
		if(isset($_POST['log_solar_bat'])){$log_solar_bat=$_POST['log_solar_bat'];}   
		if(isset($_GET['log_AC_PW_in'])){$log_AC_PW_in=$_GET['log_AC_PW_in'];} 
		if(isset($_POST['log_AC_PW_in'])){$log_AC_PW_in=$_POST['log_AC_PW_in'];}   
		if(isset($_GET['log_fan'])){$log_fan=$_GET['log_fan'];} 
		if(isset($_POST['log_fan'])){$log_fan=$_POST['log_fan'];} 
		if(isset($_GET['signness'])){$signness=$_GET['signness'];} 
		if(isset($_POST['signness'])){$signness=$_POST['signness'];} 

/*		echo $pole_name;
		echo "<br>";
		echo $pole_stat;
		echo "<br>";
		echo $pole_lat;
		echo "<br>";
		echo $pole_lon;
		echo "<br>";
		echo $pole_add;
*/
		$sql="UPDATE log SET log_dt=now(),log_dev_id='$log_dev_id',log_led='$log_led',log_led_battery='$log_led_battery',
		log_fire_alarm='$log_fire_alarm',log_switch='$log_switch',log_cam1='$log_cam1',log_cam2='$log_cam2',log_spk='$log_spk',
		log_temp='$log_temp',log_hum='$log_hum',log_pm25='$log_pm25',log_led_disp='$log_led_disp',log_ONU='$log_ONU',log_ATA='$log_ATA',
		log_IOT_GW='$log_IOT_GW',log_POE_sw='$log_POE_sw',log_solar_pv='$log_solar_pv',log_solar_bat='$log_solar_bat',
		log_AC_PW_in='$log_AC_PW_in',log_fan='$log_fan',log_pole_id='$pole_id',signness='$signness'
		WHERE log_dev_id='$pole_id'";
		//$result=mysqli_query($db,$sql); 
		//echo $sql;
        
		// === Alert ===
		echo "<script language=\"javascript\">";
		echo "alert(\"User has been successfully Added.\");";
		//echo " location:dash.php?ran=$ran";
		echo "</script>";
		header("location:dash.php?ran=$ran"); 
		
?>