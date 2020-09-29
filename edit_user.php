<?php
	include("php/config.php");
	
	include("php/checkuser.php");
//	include("php/function.php");
//	$p="dash";
		if(isset($_GET['ran'])){$ran=$_GET['ran'];} 
		if(isset($_POST['ran'])){$ran=$_POST['ran'];} 
		if(isset($_GET['usr_id'])){$usr_id=$_GET['usr_id'];} 
		if(isset($_POST['usr_id'])){$usr_id=$_POST['usr_id'];} 
		if(isset($_GET['usr_name'])){$usr_name=$_GET['usr_name'];} 
		if(isset($_POST['usr_name'])){$usr_name=$_POST['usr_name'];}     
		if(isset($_GET['usr_pwd'])){$usr_pwd=$_GET['usr_pwd'];} 
		if(isset($_POST['usr_pwd'])){$usr_pwd=$_POST['usr_pwd'];}   
		if(isset($_GET['usr_type'])){$usr_type=$_GET['usr_type'];} 
		if(isset($_POST['usr_type'])){$usr_type=$_POST['usr_type'];}   
		
		$sql="UPDATE user SET usr_name='$usr_name',usr_pwd='$usr_pwd',usr_type='$usr_type' WHERE usr_id='$usr_id'";
		$result=mysqli_query($db,$sql); 
		//echo $sql;
       // 
		// === Alert ===
		echo "<script language=\"javascript\">";
		echo "alert(\"User has been successfully Edited.\");";
		//echo " location:dash.php?ran=$ran";
		echo "</script>";
		header("location:dash.php?ran=$ran"); 
		
?>