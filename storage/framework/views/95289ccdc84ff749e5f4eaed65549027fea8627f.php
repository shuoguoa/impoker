<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="javascript:void(0)" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">OA</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">印象扑克 </span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only"><?php echo e(trans('adminlte_lang::message.togglenav')); ?></span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- User Account Menu -->
                <li class="dropdown user user-menu" id="user_menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="<?php echo e(URL::asset('img/anonymous.jpg')); ?>" class="user-image" alt="User Image"/>
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs"><?php echo e(Auth::user()->name); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="<?php echo e(URL::asset('img/anonymous.jpg')); ?>" class="img-circle" alt="User Image"/>
                            <p>
                                <?php echo e(Auth::user()->name); ?>

                                
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">

                            </div>
                            <div class="pull-right">
                                <a href="<?php echo e(url('/logout')); ?>" class="btn btn-default btn-flat" id="logout"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    安全退出
                                </a>

                                <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST"
                                      style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="submit" value="logout" style="display: none;">
                                </form>

                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
