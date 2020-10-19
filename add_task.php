<?php
	include("php/config.php");

	if(isset($_GET['pole_id'])){$pole_id=$_GET['pole_id'];}
	if(isset($_POST['pole_id'])){$pole_id=$_POST['pole_id'];}
		
	$sql="SELECT pole_ip FROM pole Where pole_id='$pole_id'";
	$result=mysqli_query($db, $sql); 
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$pole_ip=$row['pole_ip'];
		echo $pole_ip;

	}	
	
?>	

<html>
  <head>	
  </head>
  <body >
	<form  id="add_task" name="add_task" method="post" action="add_task_land.php" > 
		<input type="hidden" name="ran_str" id="ran_str" value="<?php echo $ran_str;?>">
		<div>
			Task Name : <input type="text" name="task_name" id="task_name" >
		</div>	
		<div>Project : 
		<select id = "proj_id"  name = "proj_id" onchange="change()">	
			<?php 
				$sql="SELECT * FROM proj";
				$result=mysqli_query($db,$sql);						
				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){					  
						echo "<option ";																
						echo " value=\"". $row['proj_id'] ."\">".$row['proj_name']."</option>";
					}
				}
			?>  			
		</select></div>	
		<!--BUTTON--->	
		<div>
		  <button type="submit" class="btn btn-primary btn-block btn-flat" name="add_device">Add Task</button><br>
		</div>		
	</form>
  </body>
</html>