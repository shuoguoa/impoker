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
        <li class="active">添加用户</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">添加用户</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="<?php echo e(url('/admin/user/store')); ?>" method="post">
            <div class="box-body">
                <?php echo e(csrf_field()); ?>


                <div class="form-group<?php echo e($errors->has("name") ? ' has-error' : ''); ?>">
                    <label for="name" class="col-sm-2 control-label">用户名</label>

                    <div class="col-sm-5">
                        <input class="form-control" id="name" name="name" placeholder="同app用户名" type="input"
                               value="<?php echo e(old('name')); ?>" required>
                    </div>
                    <?php if($errors->has('name')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('name')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>


                <div class="form-group<?php echo e($errors->has("os") ? ' has-error' : ''); ?>">
                    <label for="name" class="col-sm-2 control-label">设备类型</label>

                    <div class="col-sm-5">
                        <span style="color:#636b6f;font-size: 18px">ANDROID</span>                            
                        <input style="width: 15%;height: 20px" id="name" name="android"  type="radio"
                               value="1" >

                        <span style="color:#636b6f;font-size: 18px">IOS</span>                            
                        <input style="width: 15%;height: 20px" id="name" name="ios"  type="radio" value="0" >
                    </div>

                    <div class="col-sm-5">
                        
                    </div>
                    <?php if($errors->has('os')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('os')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group<?php echo e($errors->has('user_type') ? ' has-error' : ''); ?>">
                    <label for="user_type" class="col-sm-2 control-label">用户类型</label>

                    <div class="col-sm-5">
                        <select id="user_type" name="user_type" class="form-control">
                            <option value="" style="display: none">请选择...</option>
                            <option value="1"<?php echo e(old('user_type') == 1 ? 'selected="selected"' : ""); ?>>管理员</option>
                            <option value="2"<?php echo e(old('user_type') == 2 ? 'selected="selected"' : ""); ?>>运营</option>
                        
                        </select>
                    </div>
                    <?php if($errors->has('user_type')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('user_type')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group<?php echo e($errors->has('status') ? ' has-error' : ''); ?>">
                    <label for="status" class="col-sm-2 control-label">用户状态</label>
                    <div class="col-sm-5">
                        <select id="status" name="status" class="form-control">
                            <option value="1" selected>启用</option>
                            <option value="2">不启用</option>
                        </select>
                    </div>
                    <?php if($errors->has('status')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('status')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group<?php echo e($errors->has('remark') ? ' has-error' : ''); ?>">
                    <label class="col-sm-2 control-label" for="remark">上传头像</label>

                    <div class="col-sm-5">
                        <input type="file" class="form-control" name="photo" id="title" >
                    </div>
                    <div class="col-sm-5">
                        <span style="color:#2bb744;">头像建议设置成与牌局相关图片</span>
                    </div>
                   <!--  <?php if($errors->has('photo')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('photo')); ?></strong>
                        </span>
                    <?php endif; ?> -->
                </div>

                <div class="form-group<?php echo e($errors->has('remark') ? ' has-error' : ''); ?>">
                    <label class="col-sm-2 control-label" for="remark">备注</label>

                    <div class="col-sm-5">
                        <textarea id="remark" class="form-control" name="remark" rows="3"><?php echo e(old('remark')); ?></textarea>
                    </div>
                    <?php if($errors->has('remark')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('remark')); ?></strong>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('vendor.adminlte.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>