<?php
	include("php/config.php");

	if(isset($_POST['task_id'])){$task_id=$_POST['task_id'];}
	if(isset($_POST['task_name'])){$task_name=$_POST['task_name'];}
	if(isset($_POST['status'])){$status=$_POST['status'];}
	if(isset($_POST['task_by'])){$task_by=$_POST['task_by'];}
	if(isset($_POST['stop_dt'])){$stop_dt=$_POST['stop_dt'];}

	$sql="SELECT * FROM task Where task_id='$task_id'";
	//echo $sql."<br>";
	$result=mysqli_query($db,$sql);						
	if(mysqli_num_rows($result) > 0){	
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);				
		$uper_task = $row['uper_task'];
	}	

	$sql="SELECT * FROM task Where task_id='$uper_task'";
	//echo $sql."<br>";
	$result=mysqli_query($db,$sql);						
	if(mysqli_num_rows($result) > 0){	
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);				
		$uper_name = $row['task_name'];
	}

	$sql="Update task Set task_name='$task_name', status='$status', task_by='$task_by', stop_dt='$stop_dt' Where task_id='$task_id' ";	
				
	$updt=mysqli_query($db, $sql);		
	if($updt==1){
		echo "Task is Updated";
		
		//========= LINE NOTIFY ===================================================
		$lineapi = "nkalHMINA7YJFA08gHZVZNwI8P3kDYqxOGiRzkfB2jw";
		$mms ="\r\nTask is updated";
		$mms = $mms .	
			"\r\nTask: ". $uper_name.".".$task_name.
			"\r\nBy: ". $task_by. 
			"\r\nDue Date: ". $stop_dt.
			"\r\nStatus: ". $status ;									
		$mms=$mms."\r\nhttp://www.mkss.co.th/pole/project.php";
		//echo $mms;
		
		date_default_timezone_set("Asia/Bangkok");
		$chOne = curl_init(); 
		curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
		curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
		curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
		curl_setopt( $chOne, CURLOPT_POST, 1); 
		curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=$mms"); 
		curl_setopt( $chOne, CURLOPT_FOLLOWLOCATION, 1); 
		$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$lineapi.'', ); 
		curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
		curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
		$result = curl_exec( $chOne ); 
		if(curl_error($chOne)) { echo 'error:' . curl_error($chOne); } 
		else { $result_ = json_decode($result, true); 
		echo "status : ".$result_['status']; echo "message : ". $result_['message']; } 
		curl_close( $chOne );      
		
		//==========================================================================			
		
		
	}else{
		echo "Error";

	}
			
	echo "<br>$sql ";
?>	
