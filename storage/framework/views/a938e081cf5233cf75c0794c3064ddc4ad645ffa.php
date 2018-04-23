<?php $__env->startSection('htmlheader_title'); ?>
    <?php echo e($page_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
    <?php echo e($page_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 权限管理</a></li>
        <li class="active">权限管理</li>
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
                        <li><a href="<?php echo e(url('admin/permission')); ?>"><i class="fa fa-angle-right"></i> 权限列表</a></li>
                        <li class="active"><a href="<?php echo e(url('admin/permission/create')); ?>"><i class="fa fa-angle-right"></i> 添加权限</a></li>
                        <li><a href="<?php echo e(url('admin/permission/assign')); ?>"><i class="fa fa-angle-right"></i> 权限分配</a></li>
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-9">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">添加权限</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="<?php echo e(url('/admin/permission/store')); ?>" method="post">
                    <div class="box-body">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has("name") ? ' has-error' : ''); ?>">
                            <label for="name" class="col-sm-2 control-label">名称</label>

                            <div class="col-sm-5">
                                <input class="form-control" id="name" name="name" placeholder="权限名，请使用英文" type="input"
                                       value="<?php echo e(old('name')); ?>" required>
                            </div>
                            <?php if($errors->has('name')): ?>
                                <span class="help-block">
                            <strong><?php echo e($errors->first('name')); ?></strong>
                        </span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group<?php echo e($errors->has("display_name") ? ' has-error' : ''); ?>">
                            <label for="display_name" class="col-sm-2 control-label">显示名</label>

                            <div class="col-sm-5">
                                <input class="form-control" id="display_name" name="display_name" placeholder="显示用的权限名" type="input"
                                       value="<?php echo e(old('display_name')); ?>" required>
                            </div>
                            <?php if($errors->has('display_name')): ?>
                                <span class="help-block">
                            <strong><?php echo e($errors->first('display_name')); ?></strong>
                        </span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
                            <label class="col-sm-2 control-label" for="description">描述</label>

                            <div class="col-sm-5">
                                <textarea id="description" class="form-control" name="description" placeholder="权限描述" rows="3" required></textarea>
                            </div>
                            <?php if($errors->has('description')): ?>
                                <span class="help-block">
                            <strong><?php echo e($errors->first('description')); ?></strong>
                        </span>
                            <?php endif; ?>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <div class="col-sm-offset-2">
                            <button type="reset" class="btn btn-default">重置</button>
                            <button type="submit" class="btn btn-info">确认</button>
                        </div>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('vendor.adminlte.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>