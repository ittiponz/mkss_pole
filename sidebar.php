<?php
    if ($p=="dash") {$pd = "active";}else{$pd = "";}
    if ($p=="report") {$pr = "active";}else{$pr = "";}
	if ($p=="setting") {$ps = "active";}else{$ps = "";}
	$today=date("Y-m-d");
	$week=date ("Y-m-d", strtotime("-7 day", strtotime($today)));
	$month = date ("Y-m-d", strtotime("-1 month", strtotime($today)));
	$year = date ("Y-m-d", strtotime("-1 year", strtotime($today))); 
?>

    <div class="sidebar">
        <div class="scrollbar-inner sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item <?php echo $pd;?>">
                    <?php	
                        echo "	<a href=\"user_list.php?ran=".$ran."\">"; 
                        echo "	<i class=\"la la-users\"></i>";
                        echo "	User";
                        echo "	</a>";
                    ?>
                </li>
				<!-- Dropdown -->
				<li class="nav-item dropdown <?php echo $pr;?>">
				<?php
						echo "	<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbardrop\" data-toggle=\"dropdown\">"; 
                        echo "	<i class=\"la la-newspaper-o\"></i>";
                        echo "	Report";
                        echo "	</a>";
				?>
				  <div class="dropdown-menu ">
				  <?php 
						//--------------------Day---------------------------//
						echo "	<a class=\"dropdown-item\" href=\"report.php?ran=".$ran."&date_day=".$today."\">"; 
						echo "	<i class=\"la la-newspaper-o\"></i>";
						echo "	Daily";
						echo "	</a>";
					
						//--------------------Week---------------------------//
				
						echo "	<a class=\"dropdown-item\" href=\"report.php?ran=".$ran."&date_week=".$week."\">"; 
						echo "	<i class=\"la la-newspaper-o\"></i>";
						echo "	Weekly";
						echo "	</a>";
				
						//--------------------Month---------------------------//
				
						echo "	<a class=\"dropdown-item\" href=\"report.php?ran=".$ran."&date_mounth=".$month."\">"; 
						echo "	<i class=\"la la-newspaper-o\"></i>";
						echo "	Monthly";
						echo "	</a>";
		
						//--------------------Year---------------------------//
					
						echo "	<a class=\"dropdown-item\" href=\"report.php?ran=".$ran."&date_year=".$year."\">"; 
						echo "	<i class=\"la la-newspaper-o\"></i>";
						echo "	Yearly";
						echo "	</a>";

						//--------------------Customize---------------------------//
					
						echo "	<a class=\"dropdown-item\" href=\"report_form.php?ran=".$ran."\">"; 
						echo "	<i class=\"la la-newspaper-o\"></i>";
						echo "	Customize";
						echo "	</a>";
					?>
				  </div>
				</li>
                <li class="nav-item <?php echo $ps;?>">
                    <?php	
						
                        echo "	<a href=\"setting.php?ran=".$ran."\">"; 
                        echo "	<i class=\"la la-keyboard-o\"></i>";
                        echo "	System Setting";
                        echo "	</a>";
						
                    ?>
                    
                </li>
                
                
            </ul>
        </div>
    </div>