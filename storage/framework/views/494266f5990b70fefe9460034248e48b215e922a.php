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
                        <li><a href="<?php echo e(url('admin/permission')); ?>"><i class="fa fa-angle-right"></i> 权限列表</a></li>
                        <li><a href="<?php echo e(url('admin/permission/create')); ?>"><i class="fa fa-angle-right"></i> 添加权限</a>
                        </li>
                        <li class="active"><a href="<?php echo e(url('admin/permission/assign')); ?>"><i
                                        class="fa fa-angle-right"></i> 权限分配</a></li>
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
                    <h3 class="box-title">权限分配</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="box box-solid">
                                

                                <div class="box-body no-padding">
                                    <table class="table table-bordered table-hover table-striped table-responsive">
                                        <tr>
                                            <th>角色</th>
                                            <th>权限</th>
                                            <th style="width: 80px; text-align: center">操作</th>
                                        </tr>

                                        <?php $__currentLoopData = $permission_roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permissionRole): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($permissionRole['role_display_name']); ?></td>
                                                <td><?php echo e($permissionRole['permission_display_name']); ?></td>

                                                <td style="width: 80px; text-align: center">
                                                    <form action="<?php echo e(url('/admin/permission/removal')); ?>" method="post"
                                                          style="display: inline">
                                                        <?php echo e(csrf_field()); ?>

                                                        <input type="hidden" name="role_id"
                                                               value="<?php echo e($permissionRole['role_id']); ?>"/>
                                                        <input type="hidden" name="permission_id"
                                                               value="<?php echo e($permissionRole['permission_id']); ?>"/>
                                                        <button type="submit" class="btn btn-default"><i
                                                                    class="fa fa-trash-o"></i>
                                                            删除
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                </div>
                                <div class="box-footer">
                                    <div class="pull-right">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                            <div class="box box-default box-solid">
                                <!-- form start -->
                                <form role="form" action="<?php echo e(url('/admin/permission/doAssign')); ?>" method="post">
                                    <div class="box-body">
                                        <?php echo e(csrf_field()); ?>


                                        <div class="form-group<?php echo e($errors->has("role_id") ? ' has-error' : ''); ?>">
                                            <label for="role_id">角色</label>

                                            <select class="form-control" id="role_id" name="role_id">
                                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($role->id); ?>"><?php echo e($role->display_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('role_id')): ?>
                                                <p class="help-block">
                                                    <strong><?php echo e($errors->first('role_id')); ?></strong>
                                                </p>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group<?php echo e($errors->has("permission_id") ? ' has-error' : ''); ?>">
                                            <label for="permission_id">权限</label>
                                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="permission_id[]"
                                                               value="<?php echo e($permission->id); ?>"> <?php echo e($permission->display_name); ?>

                                                    </label>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($errors->has('permission_id')): ?>
                                                <p class="help-block">
                                                    <strong><?php echo e($errors->first('permission_id')); ?></strong>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">确认</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- ./box-body -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('vendor.adminlte.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>