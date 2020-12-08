<html>
   <head>
    <meta charset="UTF-8" http-equiv="refresh" content="60">
	<?php //include("php/config.php"); ?>
   </head>
   <body>
	<?php
		echo "Last Check Date: ".date('Y-m-d H:i:s')."<br>";

	/*	$sql="SELECT * FROM log ORDER BY log_dt DESC";
		$result=mysqli_query($db,$sql);					
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
				$log_dev_id=$row['log_dev_id']; 
				$log_led=$row['log_led']; 
				$log_led_battery=$row['log_led_battery'];
				$log_fire_alarm=$row['log_fire_alarm'];
				$log_switch=$row['log_switch'];
				$log_cam1=$row['log_cam1'];
				$log_cam2=$row['log_cam2'];
				$log_spk=$row['log_spk'];
				$og_temp=$row['og_temp'];
				$log_hum=$row['log_hum'];
				$log_pm25=$row['log_pm25'];
				$log_led_disp=$row['log_led_disp'];
				$log_ONU=$row['log_ONU'];
				$log_ATA=$row['log_ATA'];
				$log_IOT_GW=$row['log_IOT_GW'];
				$log_POE_sw=$row['log_POE_sw'];
				$log_solar_pv=$row['log_solar_pv'];
				$log_solar_bat=$row['log_solar_bat'];
				$log_AC_PW_in=$row['log_AC_PW_in'];
				$log_fan=$row['log_fan'];
				$log_pole_id=$row['log_pole_id'];
				$signness=$row['signness'];

				// ==== Get Customer email List ====
				$usr_mail_list="";
				$sqlx="SELECT * FROM user Where proj_id='$proj_id' and usr_type='user-tkc'";
				$resultx=mysqli_query($db, $sqlx);
				if(mysqli_num_rows($resultx) > 0){
					while($rowx = mysqli_fetch_array($resultx,MYSQLI_ASSOC)){	
						$usr_email_list=$usr_email_list.$rowx['usr_email'].",";
					}
				}	
*/				
$light=1;
$tamper=0;
$pm=0;
$dt=date('d-m-Y');
$lineapi = "5opVDLmhEvzl7W6NdmpeqmjfH78LCAw5MKL6yq7Oxr4";

				if($light == "0"){
					$mms =  "Light status Down !!! \r\nDateTime: $dt";
					
					echo $mms.$updt."<br>";
					$x=Line($lineapi,$mms);
						
					
				}
if($tamper == "0"){
					$mms =  "Tamper Alarm status Down !!! \r\nDateTime: $dt";
					
					echo $mms.$updt."<br>";
					$x=Line($lineapi,$mms);
					
				}
if($pm == "0"){
					$mms =  "PM 2.5 status Down !!! \r\nDateTime: $dt";
					
					echo $mms.$updt."<br>";
					$x=Line($lineapi,$mms);
					
				}
	
//			}
//		}
				
	?>							
   </body>
</html>

<?php
function Line($lineapi,$mms){
	date_default_timezone_set("Asia/Bangkok");
	//line Send
	$chOne = curl_init(); 
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
	// SSL USE 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
	//POST 
	curl_setopt( $chOne, CURLOPT_POST, 1); 
	// Message 
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=$mms"); 
	//ถ้าต้องการใส่รุป ให้ใส่ 2 parameter imageThumbnail และimageFullsize
	//curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=$mms&imageThumbnail=http://mkss-ewsd/icon/menu/mkss-2.jpg&imageFullsize=http://mkss-ewsd/icon/menu/mkss-logo.jpg&stickerPackageId=1&stickerId=100"); 
	// follow redirects 
	curl_setopt( $chOne, CURLOPT_FOLLOWLOCATION, 1); 
	//ADD header array 
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$lineapi.'', ); 
	curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
	//RETURN 
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
	$result = curl_exec( $chOne ); 
	//Check error 
	if(curl_error($chOne)) { echo 'error:' . curl_error($chOne); } 
	else { $result_ = json_decode($result, true); 
	echo "status : ".$result_['status']; echo "message : ". $result_['message']; } 
	//Close connect 
	curl_close( $chOne ); 
	return 0;
}
?>