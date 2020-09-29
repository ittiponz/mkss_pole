
<?php
	include("php/config.php");
	
	include("php/checkuser.php");
//	include("php/function.php");
//	$p="dash";
		if(isset($_GET['ran'])){$ran=$_GET['ran'];} 
		if(isset($_POST['ran'])){$ran=$_POST['ran'];} 
		if(isset($_GET['pole_id'])){$pole_id=$_GET['pole_id'];} 
		if(isset($_POST['pole_id'])){$pole_id=$_POST['pole_id'];} 
		
		$sql="Delete from pole where pole_id='$pole_id'";
		//$result=mysqli_query($db,$sql); 
		//echo $sql;
       // 
		// === Alert ===
		echo "<script language=\"javascript\">";
		echo "alert(\"User has been successfully Added.\");";
		//echo " location:dash.php?ran=$ran";
		echo "</script>";
		header("location:dash.php?ran=$ran"); 
		
?>