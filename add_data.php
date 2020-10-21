<?php
	include("php/config.php");
	
//	include("php/function.php");
//	$p="dash";

		if(isset($_GET['log_dev_id'])){$dev_id=$_GET['log_dev_id'];}else{$dev_id=0;}
		if(isset($_GET['log_led'])){$led=$_GET['log_led'];}else{$led=0;}
		if(isset($_GET['log_led_battery'])){$ledB=$_GET['log_led_battery'];}else{$ledB=0;}
		if(isset($_GET['log_fire_alarm'])){$falarm=$_GET['log_fire_alarm'];}else{$falarm=0;}
		if(isset($_GET['log_switch'])){$fsw=$_GET['log_switch'];}else{$fsw=0;}
		if(isset($_GET['log_cam1'])){$cam1=$_GET['log_cam1'];}else{$cam1=0;}
		if(isset($_GET['log_cam2'])){$cam2=$_GET['log_cam2'];}else{$cam2=0;}
		if(isset($_GET['log_spk'])){$spk=$_GET['log_spk'];}else{$spk=0;}
		if(isset($_GET['log_temp'])){$tmp=$_GET['log_temp'];}else{$tmp=0;}
		if(isset($_GET['log_hum'])){$humid=$_GET['log_hum'];}else{$humid=0;}
		if(isset($_GET['log_pm25'])){$pm25=$_GET['log_pm25'];}else{$pm25=0;}
		if(isset($_GET['log_led_disp'])){$ledD=$_GET['log_led_disp'];}else{$ledD=0;}
		if(isset($_GET['log_ONU'])){$onu=$_GET['log_ONU'];}else{$onu=0;}
		if(isset($_GET['log_ATA'])){$ata=$_GET['log_ATA'];}else{$ata=0;}
		if(isset($_GET['log_IOT_GW'])){$iot=$_GET['log_IOT_GW'];}else{$iot=0;}
		if(isset($_GET['log_POE_sw'])){$poe=$_GET['log_POE_sw'];}else{$poe=0;}
		if(isset($_GET['log_solar_pv'])){$solar=$_GET['log_solar_pv'];}else{$solar=0;}
		if(isset($_GET['log_solar_bat'])){$solarbatt=$_GET['log_solar_bat'];}else{$solarbatt=0;}
		if(isset($_GET['log_AC_PW_in'])){$acpo=$_GET['log_AC_PW_in'];}else{$acpo=0;}
		if(isset($_GET['log_fan'])){$fan=$_GET['log_fan'];}else{$fan=0;}
		if(isset($_GET['log_pole_id'])){$poid=$_GET['log_pole_id'];}else{$poid=0;}
		if(isset($_GET['signness'])){$signness=$_GET['signness'];}else{$signness=0;}

		echo $dev_id."<br>";
		echo $led."<br>";
		echo $ledB."<br>";
		echo $falarm."<br>";
		echo $fsw."<br>";
		echo $cam1."<br>";
		echo $cam2."<br>";
		echo $spk."<br>";
		echo $tmp."<br>";
		echo $humid."<br>";
		echo $pm25."<br>";
		echo $ledD."<br>";
		echo $onu."<br>";
		echo $ata."<br>";
		echo $iot."<br>";
		echo $poe."<br>";
		echo $solar."<br>";
		echo $solarbatt."<br>";
		echo $acpo."<br>";
		echo $fan."<br>";
		echo $poid."<br>";
		echo $signness."<br>";

    $sql="INSERT INTO logs (log_dev_id,log_led,log_led_battery,log_fire_alarm,log_switch,log_cam1,log_cam2,log_spk,log_temp,log_hum,log_pm25,log_led_disp,log_ONU,log_ATA,log_IOT_GW,log_POE_sw,log_solar_pv,log_solar_bat,log_AC_PW_in,log_fan,log_pole_id,signness) VALUES ($dev_id,$led,$ledB,$falarm,$fsw,$cam1,$cam2,$spk,$tmp,$humid,$pm25,$ledD,$onu,$ata,$iot,$poe,$solar,$solarbatt,$acpo,$fan,$poid,$signness)";
    $result=mysqli_query($db,$sql) or die(mysqli_error($db));
    if(mysqli_affected_rows($db) >0 ){echo "Successfuly";}else{echo "Fail..";}
    echo "<p>$sql</p>";
		
?>