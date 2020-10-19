<?php
	include("php/config.php");

	if(isset($_GET['pole_id'])){$pole_id=$_GET['pole_id'];}
	if(isset($_POST['pole_id'])){$pole_id=$_POST['pole_id'];}	
	
	$proj_id=1;

	$sql="SELECT proj_name FROM proj Where proj_id='$proj_id'";
	$result=mysqli_query($db, $sql); 
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$proj_name=$row['proj_name'];
	}
	
?>	

<html>
  <head>	
  </head>
  <body >
	<div><h4>Project : <?php echo $proj_name;?></h4></div>	
		<table border="1" style="border-collapse:collapse">
		<th>ID</th><th>Task</th><th>Target Finish</th><th>By</th><th>Warning</th>
		<?php 
			$i=0;
			$j=0;
			$sql="SELECT * FROM task Where proj_id='$proj_id' Order by task_id";
			$result=mysqli_query($db,$sql);						
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){	
					$i=$i+1;
					$task_id=$row['task_id'];
					echo "<tr>";
					echo "<td>". $i ."</td>";	
					if($row['uper_task']==0){
						echo "<td><b><a href=\"update_task.php?task_id=$task_id\">". $row['task_name'] ."</a></b></td>";						
					}else{
						echo "<td>&nbsp;&nbsp;<a href=\"update_task.php?task_id=$task_id\">". $row['task_name'] ."</a></td>";						
					}
					echo "<td>". $row['stop_dt'] ."</td>";
					echo "<td>". $row['task_by'] ."</td>";
					$dt=date_format(date_sub(date_create($row['stop_dt']),date_interval_create_from_date_string("543 years")),"Y-m-d");
					$dt=date_format(date_sub(date_create($dt),date_interval_create_from_date_string("1 days")),"Y-m-d");
					$diff=date_diff(date_create(date("Y-m-d")),date_create($dt));
					if(date("Y-m-d")>=$dt && $row['stop_dt']!='' && $row['status']!='Done'){
						$waring="Warning! Due in " . $diff->format("%R%a days");
						$uper_arr[$j]="";
						$sqlx="SELECT task_name FROM task Where task_id='".$row['uper_task'] ."'";
						$resultx=mysqli_query($db, $sqlx); 
						if(mysqli_num_rows($resultx) > 0){
							$rowx = mysqli_fetch_array($resultx,MYSQLI_ASSOC);
							$uper_arr[$j]=$rowx['task_name'];
						}						
						$task_arr[$j]=$row['task_name'];
						$stop_arr[$j]=$row['stop_dt'];
						$by_arr[$j]=$row['task_by'];
						$task_id_arr[$j]=$row['task_id'];
						//echo $task_arr[$j];
						$j++;
					}else{
						$waring="";
					}
					echo "<td>". $waring ."</td>";
					echo "</tr>";
				}
			}
		?>
		</table>	
		<?php			
			//========= LINE NOTIFY ===================================================
			$lineapi = "nkalHMINA7YJFA08gHZVZNwI8P3kDYqxOGiRzkfB2jw";
			/*
			echo $mms =  "Project: ". $proj_name. "<br>";
			for($i=0;$i<$j;$i++){
				echo "----------------------------------------------<br>";		
				echo "Task: ". $uper_arr[$i].".".$task_arr[$i]. "<br>".
					 "By: ". $by_arr[$i]. "<br>".
					 "Due Date: ". $stop_arr[$i]. "<br>";									
			}
			*/
			$mms =  "\r\nProject: ". $proj_name;
			for($i=0;$i<$j;$i++){
				$mms = $mms . "\r\n----------------------------------------------".		
					"\r\nTask: ". $uper_arr[$i].".".$task_arr[$i].					
					"\r\nBy: ". $by_arr[$i]. 
					"\r\nDue Date: ". $stop_arr[$i];	
				$mms=$mms."\r\nhttp://www.mkss.co.th/pole/update_task.php?task_id=".$task_id_arr[$i];
			}
			$mms=$mms."\r\n\r\nhttp://www.mkss.co.th/pole/project.php";
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
		?>
  </body>
</html>