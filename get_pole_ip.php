<?php
	include("php/config.php");
	/*
	if(isset($_GET['ran'])){
		$ran=$_GET['ran'];
		$sql="update user SET ".
			" usr_ran='X'".
			" Where usr_ran='".$ran ."'";
		$updt=mysqli_query($db, $sql);	
			
	}
	*/
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
