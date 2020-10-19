<?php
	include("php/config.php");

	if(isset($_POST['proj_id'])){$proj_id=$_POST['proj_id'];}
	if(isset($_POST['task'])){$task=$_POST['task'];}
	if(isset($_POST['by'])){$by=$_POST['by'];}
	if(isset($_POST['stp_dt'])){$stp_dt=$_POST['stp_dt'];}	
	if(isset($_POST['uper_task'])){$uper_task=$_POST['uper_task'];}	
	//echo "task=".$task;
	//echo ",proj_id=".$proj_id;

	$sql="Insert Into task Set task_name='$task', proj_id='$proj_id', task_by='$by', stop_dt='$stp_dt', uper_task='$uper_task'";		
	$updt=mysqli_query($db, $sql);		
	if($updt==1){
		echo "ok, ";
	}else{
		echo "error, ";
		echo "$sql, ";
	}
		
	$sql="SELECT task_id FROM task Order by task_id Desc";
	$result=mysqli_query($db, $sql); 
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$task_id=$row['task_id'];
		echo $task_id;
	}	

?>	
