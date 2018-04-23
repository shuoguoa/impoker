<?php $__env->startSection('htmlheader_title'); ?>
    <?php echo e($page_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
    <?php echo e($page_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 系统管理</a></li>
        <li class="active">用户管理</li>
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
                        <li><a href="<?php echo e(url('admin/user/create')); ?>"><i class="fa fa-angle-right"></i> 添加用户</a></li>
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">系统用户</h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-hover table-striped table-responsive">
                        <tr>
                            <th>#</th>
                            <th>用户名</th>
                            <th>真实姓名</th>
                            <th>Email</th>
                            <th style="text-align: center;">用户类型</th>
                            <th style="text-align: center;">用户状态</th>
                            <th style="text-align: center;">操作</th>
                        </tr>

                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->id); ?></td>
                                <td><?php echo e($item->name); ?></td>
                                <td><?php echo e($item->real_name); ?></td>
                                <td><?php echo e($item->email); ?></td>
                                <td style="text-align: center">
                                    <?php if($item->user_type === 1): ?>
                                        <span>系统管理员</span>
                                    <?php elseif($item->user_type === 2): ?>
                                        <span>运营</span>
                                    <?php elseif($item->user_type === 3): ?>
                                        <span>销售</span>
                                    <?php elseif($item->user_type === 4): ?>
                                        <span>执行</span>
                                    <?php elseif($item->user_type === 5): ?>
                                        <span>业管</span>
                                    <?php endif; ?>
                                </td>
                                <td style="text-align: center">
                                    <?php if($item->status === 1): ?>
                                        <span class="label label-success" style="font-size: 0.9em"> 启用 </span>
                                    <?php elseif($item->status === 2): ?>
                                        <span class="label label-danger" style="font-size: 0.9em"> 未启用 </span>
                                    <?php else: ?>
                                        ----
                                    <?php endif; ?>
                                </td>
                                <td style="width: 240px; text-align: center">
                                    
                                    <?php if($item->status === 1 && $item->name !== 'admin'): ?>
                                        <form action="<?php echo e(url('/admin/user/' . $item->id . '/' . $item->status)); ?>"
                                              method="post" style="display: inline">
                                            <?php echo e(method_field('PUT')); ?>

                                            <?php echo e(csrf_field()); ?>

                                            <button type="submit" class="btn btn-default"><i class="fa fa-lock"></i>
                                                禁用
                                            </button>
                                        </form>
                                    <?php elseif($item->status === 2 && $item->name !== 'admin'): ?>
                                        <form action="<?php echo e(url('/admin/user/' . $item->id . '/' . $item->status)); ?>"
                                              method="post" style="display: inline">
                                            <?php echo e(method_field('PUT')); ?>

                                            <?php echo e(csrf_field()); ?>

                                            <button type="submit" class="btn btn-default"><i
                                                        class="fa fa-unlock"></i>
                                                启用
                                            </button>
                                        </form>
                                        <form action="<?php echo e(url('/admin/user/' . $item->id)); ?>" method="post"
                                              style="display: inline">
                                            <?php echo e(method_field('DELETE')); ?>

                                            <?php echo e(csrf_field()); ?>

                                            <button type="submit" class="btn btn-default"><i
                                                        class="fa fa-trash-o"></i>
                                                删除
                                            </button>
                                        </form>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    <!-- /.table -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer no-padding clearfix">
                    <div class="no-margin pull-right">
                        <?php echo e($users->links()); ?>

                    </div>
                </div>
            </div>
            <!-- /. box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('vendor.adminlte.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>