<header class="header">
    <a href="/" class="logo">
        <h3>Real Estate</h3>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <div>
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                <div class="responsive_nav"></div>
            </a>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo url('public/ProfileImage') ?>/35x35_{{Auth::user()->image}}" width="35" class="img-circle img-responsive pull-left" height="35" >
                        <div class="riot">
                            <div>
                                {{  Auth::user()->first_name }}
                                <span>
                                        <i class="caret"></i>
                                    </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            <img src="<?php echo url('public/ProfileImage') ?>/90x90_{{Auth::user()->image}}" class="img-responsive img-circle" alt="User Image">
                            <p class="topprofiletext">{{ Auth::user()->first_name.' '.Auth::user()->last_name}}</p>
                        </li>
                        <!-- Menu Body -->
                        <li>
                            <a href="{{ url('admin/view_user') }}">
                                <i class="livicon" data-name="user" data-s="18"></i>
                                My Profile
                            </a>
                        </li>
                        <li role="presentation"></li>
<!--                        <li>
                            <a href="#">
                                <i class="livicon" data-name="gears" data-s="18"></i>
                                Account Settings
                            </a>
                        </li>-->
                        <!-- Menu Footer-->
                        <li class="user-footer">

                            <div class="pull-right">
                                <a href="/admin/logout">
                                    <i class="livicon" data-name="sign-out" data-s="18"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>