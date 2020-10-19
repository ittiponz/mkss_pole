<?php
	include("php/config.php");
	
	$sql="SELECT task_id FROM task Order By task_id Desc";
	$result=mysqli_query($db, $sql); 
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$task_id=$row['task_id'];
		echo $task_id;
	}	

?>	
