    <nav class="navbar navbar-header navbar-expand-lg">
        <div class="container-fluid">
        <!--	
            <form class="navbar-left navbar-form nav-search mr-md-3" action="">
                <div class="input-group">
                    <input type="text" placeholder="Search ..." class="form-control">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="la la-search search-icon"></i>
                        </span>
                    </div>
                </div>
            </form>
            -->
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                <li class="nav-item dropdown hidden-caret"></li>
                <li class="nav-item dropdown hidden-caret"></li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="assets/img/logo_admin.jpg" alt="user-img" width="36" class="img-circle"><span ><?php echo $usr_name ?></span></span> </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <div class="user-box">
                                <div class="u-img"><img src="assets/img/logo_admin.jpg" alt="user"></div>
                                <div class="u-text">
                                    <h4><?php echo $usr_name ?></h4>
                                    <p class="text-muted"><?php echo $usr_type ?></p></div>
                                </div>
                            </li>
                        
                            <div class="dropdown-divider"></div>
							
                            <a class="dropdown-item" href="user_edit.php?ran=<?=$ran;?>&usr_id=<?=$usr_id;?>"><i class="ti-settings"></i> Account Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="login.php"><i class="fa fa-power-off"></i> Logout</a>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                </ul>
            </div>
        </nav>
    </div>