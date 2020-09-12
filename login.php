<?php
	include("php/config.php");
	if(isset($_GET['ran'])){
		$ran=$_GET['ran'];
		$sql="update user SET ".
			" usr_ran='X'".
			" Where usr_ran='".$ran ."'";
		$updt=mysqli_query($db, $sql);	
			
	}
?>	

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Smart Pole</title>
<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type="text/css">
	#btn{
		width:100%;
	}
	</style>
	<script type="text/javascript">
	function change(){
			document.getElementById("login_form").submit();
	}	
	</script>

<?php
$infostr="Enter user name and password for login";
if(isset($_GET['infostr'])){$infostr=$_GET['infostr'];}
?>	
	
</head>
  <body>
<div class="container" style="padding-top:100px">
  <div class="row">
  <div class="col-md-4"></div>
    <div class="col-md-4">
      <h3 align="center">
      <div class="login-logo">
		  <img src="assets/img/tot-inno.png" height="200" width="222"/>
        <a href="index.php"></a>
      </div><!-- /.login-logo -->
      <br>
      <span class="glyphicon glyphicon-lock"> </span>
       &#3621;&#3591;&#3594;&#3639;&#3656;&#3629;&#3648;&#3614;&#3639;&#3656;&#3629;&#3648;&#3586;&#3657;&#3634;&#3651;&#3594;&#3657;&#3591;&#3634;&#3609; </h3>
      <form name="login" method="post" action="index.php" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text" id="user_name" name="user_name" class="form-control" required placeholder="UserName" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="password" id="password" name="password" class="form-control" required placeholder="PassWord" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-primary" id="btn" name="signin">
            
            <span class="glyphicon glyphicon-log-in"> </span>
             Login </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!--start footer-->
<!-- <p align="center"> MKSS </p> -->
<!--end footer--> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>