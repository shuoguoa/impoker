<?php $__env->startSection('htmlheader_title'); ?>
    <?php echo e($page_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
    <?php echo e($page_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 系统管理</a></li>
        <li class="active">帐户管理</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">到帐帐户</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm">
                            <div class="input-group-btn">
                                <a class="btn btn-success" href="<?php echo e(url('admin/account/create')); ?>" title="添加新的帐户"><i
                                            class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-hover table-striped table-responsive">
                        <tr>
                            <th>#</th>
                            <th>帐户名称</th>
                            <th style="text-align: center">帐户类型</th>
                            <th style="text-align: center">状态</th>
                            <th style="width: 50%;">备注</th>
                            <th style="width: 160px; text-align: center">操作</th>
                        </tr>

                        <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($account->id); ?></td>
                                <td><?php echo e($account->name); ?></td>
                                <td style="text-align: center">
                                    <?php if($account->type === 1): ?>
                                        公司
                                    <?php elseif($account->type === 2): ?>
                                        个人
                                    <?php else: ?>
                                        ----
                                    <?php endif; ?>
                                </td>
                                <td style="text-align: center">
                                    <?php if($account->status === 1): ?>
                                        <span class="label label-success" style="font-size: 0.9em"> 启用 </span>
                                    <?php elseif($account->status === 2): ?>
                                        <span class="label label-danger" style="font-size: 0.9em"> 未启用 </span>
                                    <?php else: ?>
                                        ----
                                    <?php endif; ?>
                                </td>
                                <td style="width: 50%; "><?php echo e($account->remark); ?></td>
                                <td style="width: 160px; text-align: center">
                                    <?php if($account->status === 1): ?>
                                        <form action="<?php echo e(url('/admin/account/' . $account->id . '/' . $account->status)); ?>"
                                              method="post" style="display: inline">
                                            <?php echo e(method_field('PUT')); ?>

                                            <?php echo e(csrf_field()); ?>

                                            <button type="submit" class="btn btn-default"><i class="fa fa-lock"></i> 禁用
                                            </button>
                                        </form>
                                    <?php elseif($account->status === 2): ?>
                                        <form action="<?php echo e(url('/admin/account/' . $account->id . '/' . $account->status)); ?>"
                                              method="post" style="display: inline">
                                            <?php echo e(method_field('PUT')); ?>

                                            <?php echo e(csrf_field()); ?>

                                            <button type="submit" class="btn btn-default"><i class="fa fa-unlock"></i>
                                                启用
                                            </button>
                                        </form>
                                        <form action="<?php echo e(url('/admin/account/' . $account->id)); ?>" method="post"
                                              style="display: inline">
                                            <?php echo e(method_field('DELETE')); ?>

                                            <?php echo e(csrf_field()); ?>

                                            <button type="submit" class="btn btn-default"><i class="fa fa-trash-o"></i>
                                                删除
                                            </button>
                                        </form>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="no-margin pull-right">
                        <?php echo e($accounts->links()); ?>

                    </div>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('vendor.adminlte.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>