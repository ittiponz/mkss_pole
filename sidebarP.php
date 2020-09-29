<?php
    if ($p=="dash") {$pd = "active";}else{$pd = "";}
    if ($p=="report") {$pr = "active";}else{$pr = "";}
    if ($p=="pole") {$ps = "active";}else{$ps = "";}
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
                <li class="nav-item <?php echo $pr;?>">
                    <?php	
                        echo "	<a href=\"report_form.php?ran=".$ran."\">"; 
                        echo "	<i class=\"la la-newspaper-o\"></i>";
                        echo "	Report";
                        echo "	</a>";
                    ?>
                </li>
                <li class="nav-item <?php echo $ps;?>">
                    <?php	
                        echo "	<a href=\"pole_set.php?ran=".$ran."&pole_id=".$pole_id."\">";
                        echo "	<i class=\"la la-keyboard-o\"></i>";
                        echo "	Pole Setting";
                        echo "	</a>";
                    ?>
                    
                </li>
                
                
            </ul>
        </div>
    </div>