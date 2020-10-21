<?php
	include("php/config.php");
	
	include("php/checkuser.php");
//	include("php/function.php");
//	$p="dash";

		if(isset($_GET['ran'])){$ran=$_GET['ran'];} 
		if(isset($_POST['ran'])){$ran=$_POST['ran'];} 
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

/*		echo $pole_name;
		echo "<br>";
		echo $pole_stat;
		echo "<br>";
		echo $pole_lat;
		echo "<br>";
		echo $pole_lon;
		echo "<br>";
		echo $pole_add;
*/
		$sql="INSERT INTO pole (pole_name, pole_stat, pole_lat,pole_lon,pole_add) VALUES ('$pole_name','$pole_stat','$pole_lat','$pole_lon','$pole_add')";
		$result=mysqli_query($db,$sql); 
		//echo $sql;
        
		// === Alert ===
		echo "<script language=\"javascript\">";
		echo "alert(\"User has been successfully Added.\");";
		//echo " location:dash.php?ran=$ran";
		echo "</script>";
		header("location:setting.php?ran=$ran"); 
		
?>