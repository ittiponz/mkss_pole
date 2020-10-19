<?php
	include("php/config.php");

	if(isset($_GET['task_id'])){$task_id=$_GET['task_id'];}
	if(isset($_POST['pole_id'])){$pole_id=$_POST['pole_id'];}
		
	$sql="SELECT * FROM task Where task_id='$task_id'";
	$result=mysqli_query($db, $sql); 
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$task_name=$row['task_name'];
		$proj_id=$row['proj_id'];
		$stop_dt=$row['stop_dt'];
		$status=$row['status'];
		$task_by=$row['task_by'];
		$uper_task=$row['uper_task'];
	}	
	
?>	

<html>
  <head>	
  </head>
  <body >
	<table width="400">
	<form  id="add_task" name="add_task" method="post" action="update_main_task_land.php" > 
		<input type="hidden" name="task_id" id="task_id" value="<?php echo $task_id;?>">
		<tr>
			<td>Project : </td>
			<td>
			<?php 
				$sql="SELECT * FROM proj Where proj_id='$proj_id'";
				//echo $sql."<br>";
				$result=mysqli_query($db,$sql);						
				if(mysqli_num_rows($result) > 0){	
					$row = mysqli_fetch_array($result,MYSQLI_ASSOC);				
					echo $row['proj_name'];
				}
			?>  
			</td>	
		</tr>		
		<tr>
			<td>Main Task : </td>
			<td>
			<?php 
				$sql="SELECT * FROM task Where task_id='$uper_task'";
				echo $sql."<br>";
				$result=mysqli_query($db,$sql);						
				if(mysqli_num_rows($result) > 0){	
					$row = mysqli_fetch_array($result,MYSQLI_ASSOC);				
					echo $row['task_name'];
				}
			?>  
			</td>
		</tr>			
		<tr>
			<td>Task Name : </td><td><input type="text" name="task_name" id="task_name" value="<?php echo $task_name;?> "></td>
		</tr>	
			
		<!--BUTTON--->	
		<tr><td></td>
			<td>
			<button type="submit" name="update_task">Update Task</button>
			</td>
		</tr>	
				
	</form>
	</table>
  </body>
</html>