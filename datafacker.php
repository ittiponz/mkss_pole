<?php
    include("php/config.php");
$page = $_SERVER['PHP_SELF'];
$sec = "60";
date_default_timezone_set("Asia/Bangkok");
//var_dump(date_default_timezone_get());
$t=time();

?>
<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
    <?php
        echo "Watch the page reload itself in {$sec} second!";
        echo "<p>".(rand(10, 100))."</p>";
    ?>

    <p>log_dt <?php $dt=(date("Y-m-d H:i:s",$t));echo $dt;?></p>
    <p>log_dev_id <?php $dev_id = "001";echo $dev_id;?></p>
    <p>log_LED <?php if(rand(1, 100)>=10){$led = "1";}else{$led = "0";} echo $led;?></p>
    <p>log_LED_Battery <?php if(rand(1, 100)>=10){$ledB = "1";}else{$ledB = "0";} echo $ledB;?></p>
    <p>log_Fire_Alarm <?php if(rand(1, 100)>=10){$falarm = "0";}else{$falarm = "1";} echo $falarm;?></p>
    <p>log_Switch <?php if(rand(1, 100)>=10){$fsw = "0";}else{$fsw = "1";} echo $fsw;?></p>
    <p>log_Camera1 <?php if(rand(1, 100)>=10){$cam1 = "1";}else{$cam1 = "0";} echo $cam1;?></p>
    <p>log_Camera2 <?php if(rand(1, 100)>=10){$cam2 = "1";}else{$cam2 = "0";} echo $cam2;?></p>
    <p>log_Speaker <?php if(rand(1, 100)>=10){$spk = "1";}else{$spk = "0";} echo $spk;?></p>
    <p>log_Temp <?php $tmp = rand(230,280)/10;echo $tmp;?></p>
    <p>log_Humid <?php $humid = rand(50,80);echo $humid;?> %</p>
    <p>log_PM25 <?php $pm25 = rand(0,200)/100; echo $pm25?> ppm</p>
    <p>log_LED_Display <?php if(rand(1, 100)>=10){$ledD = "1";}else{$ledD = "0";} echo $ledD;?></p>
    <p>log_ONU <?php if(rand(1, 100)>=10){$onu = "1";}else{$onu = "0";} echo $onu;?></p>
    <p>log_ATA <?php if(rand(1, 100)>=10){$ata = "1";}else{$ata = "0";} echo $ata;?></p>
    <p>log_IOT_GW <?php if(rand(1, 100)>=10){$iot = "1";}else{$iot = "0";} echo $iot;?></p>
    <p>log_POE_Switch <?php if(rand(1, 100)>=10){$poe = "1";}else{$poe = "0";} echo $poe;?></p>
    <p>log_Solar_PV <?php if(rand(1, 100)>=10){$solar = "1";}else{$solar = "0";} echo $solar;?></p>
    <p>log_Solar_Battery <?php if(rand(1, 100)>=10){$solarbatt = "1";}else{$solarbatt = "0";} echo $solarbatt;?></p>
    <p>log_AC_Power_In <?php if(rand(1, 100)>=10){$acpo = "1";}else{$acpo = "0";} echo $acpo;?></p>
    <p>log_Fan <?php if(rand(1, 100)>=10){$fan = "1";}else{$fan = "0";} echo $fan;?></p>

    <?php
        $sql="INSERT INTO log (log_dev_id,log_led,log_led_battery,log_fire_alarm,log_switch,log_cam1,log_cam2,log_spk,log_temp,log_hum,log_pm25,log_led_disp,log_ONU,log_ATA,log_IOT_GW,log_POE_sw,log_solar_pv,log_solar_bat,log_AC_PW_in,log_fan) VALUES ($dev_id,$led,$ledB,$falarm,$fsw,$cam1,$cam2,$spk,$tmp,$humid,$pm25,$ledD,$onu,$ata,$iot,$poe,$solar,$solarbatt,$acpo,$fan)";
        $result=mysqli_query($db,$sql) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) >0 ){echo "Successfuly";}else{echo "Fail..";}
        echo "<p>$sql</p>";
    ?>
    </body>
</html>