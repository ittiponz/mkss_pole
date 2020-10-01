<?php
    session_start();
    $usr_id = $_SESSION['user_id'];

    if(isset($_GET['ran'])){$ran=$_GET['ran'];}else{$ran="xxx";}
    if(isset($_POST['ran'])){$ran=$_POST['ran'];}
    
    $sqlx="SELECT * FROM user WHERE usr_ran='".$ran."';";
    $result=mysqli_query($db, $sqlx); 
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $usr_type=$row['usr_type'];
        $usr_name=$row['usr_name'];
        if($usr_type=="admin"){
        
        
        }
    }else{
        header("Location: login.php?infostr=".$infostr);
        exit(0);
    }
?>