
<?php
	include("config.php");
	
	if(isset($_GET['ran'])){$ran=$_GET['ran'];}
	if(isset($_POST['ran'])){$ran=$_POST['ran'];}
	
	$sqlx="SELECT * FROM user WHERE usr_ran='".$ran."';";
	$result=mysqli_query($db, $sqlx); 
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$usr_type=$row['usr_type'];
		$usr_name=$row['usr_name'];
		if($usr_type=="admin"){
		
		
		}
	}
?>
 <html>
  <head>
    <meta charset="UTF-8">
    <title>SmartPole Map</title>
	
    <style>

      #map {
		width: 40%;
      }

    </style>	
	
</head>
 
<body>

	<div id="map" name="map" style="height: 90%; width: 90%;"></div>	
 
    <script>      
	  var map;
	  var info;
	  var position;
	  var marker;
      function initMap() {
		<?php  
		//$loc_id=0;
		$sql="SELECT * FROM pole";
					
		$result=mysqli_query($db,$sql);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$lat=13.871187;
			$lon=100.589865;

			$i=0;
			echo "	position =  {lat:".$lat.",lng:".$lon."};\n";				
			echo "	map = new google.maps.Map(document.getElementById('map'), {";
			echo "	  center: position,";
			echo "	  zoom: 11,";
			echo "	});\n";

			while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){	
				$i=$i+1;
				$lat=$row['pole_lat'];
				$lon=$row['pole_lon'];
				$pole_name=$row['pole_name'];
				$loc_n="N.".$row['loc_n'];
			
				$sqlx="SELECT count(*) as cnt from pole ";
				$resultx=mysqli_query($db,$sqlx);
				$rowx = mysqli_fetch_array($resultx,MYSQLI_ASSOC);					
				$numdn=$rowx['cnt'];
				if($numdn > 0){
					$mkr="pnk-m2.png";	
					$numdn=$rowx['cnt'];
				}else{
					$mkr="grn-m2.png";
					$numdn=0;					
				}
				$info= $pole_name;
				if(is_numeric($lat) && is_numeric($lon)){					
					set_mark($lat,$lon,$info,$mkr,$i,$pole_name,$ran);
				}
			}
		}
		
		function set_mark($lat,$lon,$info,$mkr,$i,$pole_name,$ran){
			echo "	position =  {lat:".$lat.",lng:".$lon."};\n";				
			echo "	marker".$i."=new google.maps.Marker({\n";
			echo "		position:position,";
			echo "		map:map,";
			echo "		icon: \"../icon/".$mkr."\"";
			echo "	});\n";	
				
			echo "	info".$i."=new google.maps.InfoWindow({";								
			echo "		content : '<a target=\"blank\" href=\"../pole.php?ran=".$ran."&pole_name=".$pole_name."\"><div style=\"font-size: 15px;\">".$info."</div></a>'";
			echo "	});\n";	
				
			echo "	google.maps.event.addListener(marker".$i.",'click',function(){";
			echo "			info".$i.".setContent(location);";
			echo "			info".$i.".open(map,marker".$i.");";
			echo "	});";
		}		
		?>				
      }	  	
    </script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDO0ZcyhJ9ZuCpC0p4Gst82f1Bru7Tc3l0&callback=initMap"
		async defer></script>	 
  
 </body>
 <html>
 