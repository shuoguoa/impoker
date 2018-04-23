<?php $__env->startSection('htmlheader_title'); ?>
    <?php echo e($page_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
    <?php echo e($page_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 权限管理 </a></li>
        <li class="active">权限</li>
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
                        <li class="active"><a href="<?php echo e(url('admin/permission')); ?>"><i class="fa fa-angle-right"></i> 权限列表</a></li>
                        <li><a href="<?php echo e(url('admin/permission/create')); ?>"><i class="fa fa-angle-right"></i> 添加权限</a></li>
                        <li><a href="<?php echo e(url('admin/permission/assign')); ?>"><i class="fa fa-angle-right"></i> 权限分配</a></li>
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
                    <h3 class="box-title">权限</h3>
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

                        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($permission->id); ?></td>
                                <td><?php echo e($permission->name); ?></td>
                                <td><?php echo e($permission->display_name); ?></td>
                                <td><?php echo e($permission->description); ?></td>
                                <td style="width: 160px; text-align: center">

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="no-margin pull-right">
                        <?php echo e($permissions->links()); ?>

                    </div>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('vendor.adminlte.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>