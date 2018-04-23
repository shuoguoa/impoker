<?php $__env->startSection('htmlheader_title'); ?>
    <?php echo e($page_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
    <?php echo e($page_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 权限管理 </a></li>
        <li class="active">角色管理</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <div class="row">
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Labels</h3>

                </div>
                <div class="box-body no-padding">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="<?php echo e(url('admin/role')); ?>"><i class="fa fa-angle-right"></i> 角色列表</a></li>
                        <li><a href="<?php echo e(url('admin/role/create')); ?>"><i class="fa fa-angle-right"></i> 添加角色</a></li>
                        <li><a href="<?php echo e(url('admin/role/assign')); ?>"><i class="fa fa-angle-right"></i> 角色分配</a></li>
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-xs-9">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">角色</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-hover table-striped table-responsive">
                        <tr>
                            <th>#</th>
                            <th>名称</th>
                            <th>显示名</th>
                            <th>描述</th>
                            <th style="width: 160px; text-align: center">操作</th>
                        </tr>

                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($role->id); ?></td>
                                <td><?php echo e($role->name); ?></td>
                                <td><?php echo e($role->display_name); ?></td>
                                <td><?php echo e($role->description); ?></td>
                                <td style="width: 160px; text-align: center">

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="no-margin pull-right">
                        <?php echo e($roles->links()); ?>

                    </div>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('vendor.adminlte.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>