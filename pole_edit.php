<?php
	include("php/config.php");
	
	include("php/checkuser.php");
//	include("php/function.php");
//	$p="dash";
		if(isset($_GET['ran'])){$ran=$_GET['ran'];} 
		if(isset($_POST['ran'])){$ran=$_POST['ran'];} 
		if(isset($_GET['pole_id'])){$pole_id=$_GET['pole_id'];} 
		if(isset($_POST['pole_id'])){$pole_id=$_POST['pole_id'];}
		if(isset($_GET['pole_name'])){$pole_name=$_GET['pole_name'];} 
		if(isset($_POST['pole_name'])){$pole_name=$_POST['pole_name'];} 
		if(isset($_GET['pole_stat'])){$pole_stat=$_GET['pole_stat'];} 
		if(isset($_POST['pole_stat'])){$pole_stat=$_POST['pole_stat'];}     
		if(isset($_GET['pole_lat'])){$pole_lat=$_GET['pole_lat'];} 
		if(isset($_POST['pole_lat'])){$pole_lat=$_POST['pole_lat'];}   
		if(isset($_GET['pole_lon'])){$pole_lon=$_GET['pole_lon'];} 
		if(isset($_POST['pole_lon'])){$pole_lon=$_POST['pole_lon'];}   
		if(isset($_GET['pole_add'])){$pole_add=$_GET['pole_add'];} 
		if(isset($_POST['pole_add'])){$pole_add=$_POST['pole_add'];}    
		
		$sql="UPDATE pole SET pole_name='$pole_name',pole_stat='$pole_stat',pole_lat='$pole_lat',pole_lon='$pole_lon',pole_add='$pole_add' WHERE pole_id='$pole_id'";
		$result=mysqli_query($db,$sql); 
		//echo $sql;
       
		// === Alert ===
		echo "<script language=\"javascript\">";
		echo "alert(\"User has been successfully Edited.\");";
		//echo " location:dash.php?ran=$ran";
		echo "</script>";
		header("location:dash.php?ran=$ran"); 
		
?>