<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <?php if(! Auth::guest()): ?>
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo e(URL::asset('img/anonymous.jpg')); ?>" class="img-circle" alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p><?php echo e(Auth::user()->name); ?></p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> online </a>
                </div>
            </div>
    <?php endif; ?>

    <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- <li class="header"> HEADER</li> -->
           

            <?php if($user->hasRole('games')): ?>
                <li class="m_config"><a href="<?php echo e(url('business/config')); ?>"><i class='fa fa-link'></i>
                        <span> 牌局管理 </span></a></li>
            <?php endif; ?>

            <?php if($user->hasRole('scores')): ?>
                <li class="m_task"><a href="<?php echo e(url('task')); ?>"><i class='fa fa-link'></i> 
                    <span> 战绩管理 </span></a></li>
            <?php endif; ?>

            <?php if($user->hasRole('admin') || $user->hasRole('root')): ?>
                <li class="treeview">
                    <a href="#"><i class='fa fa-link'></i> <span> 系统管理 </span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li class="m_user"><a href="<?php echo e(url('admin/user')); ?>"><i class="fa fa-user"></i> 用户管理 </a></li>
                        <li class="m_account"><a href="<?php echo e(url('admin/account')); ?>"><i class="fa fa-circle-o"></i> 帐户管理
                            </a>
                        </li>
                        <li class="m_account"><a href="<?php echo e(url('admin/role')); ?>"><i class="fa fa-circle-o"></i> 角色 </a></li>
                        <li class="m_permission"><a href="<?php echo e(url('admin/permission')); ?>"><i class="fa fa-circle-o"></i> 权限
                            </a>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>

            <?php if($user->hasRole('admin') || $user->hasRole('root')): ?>
                <li class="treeview">
                    <a href="#"><i class='fa fa-link'></i> <span> 牌局管理 </span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li class="m_account"><a href="<?php echo e(url('admin/games')); ?>"><i class="fa fa-circle-o"></i> 牌局列表 </a></li>
                        <li class="m_account"><a href="<?php echo e(url('admin/create_game')); ?>"><i class="fa fa-circle-o"></i> 创建牌局 </a></li>
                    </ul>
                </li>
            <?php endif; ?>

            <?php if($user->hasRole('admin')  || $user->hasRole('root')): ?>
                <li class="treeview">
                    <a href="#"><i class='fa fa-link'></i> <span> 战绩管理 </span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li class="m_account"><a href="<?php echo e(url('admin/scores')); ?>"><i class="fa fa-circle-o"></i> 战绩列表 </a></li>
                    </ul>
                </li>
            <?php endif; ?>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
