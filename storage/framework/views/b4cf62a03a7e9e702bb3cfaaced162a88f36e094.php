<?php $__env->startSection('htmlheader_title'); ?>
    <?php echo e($page_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
    <?php echo e($page_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 系统管理</a></li>
        <li class="active">媒介管理</li>
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
                        <li class="active"><a href="<?php echo e(url('admin/media')); ?>"><i class="fa fa-angle-right"></i> 媒介列表</a></li>
                        <li><a href="<?php echo e(url('admin/media/create')); ?>"><i class="fa fa-angle-right"></i> 添加媒介</a></li>
                        <li><a href="<?php echo e(url('admin/media/assign')); ?>"><i class="fa fa-angle-right"></i> 媒介分配 </a></li>
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
                    <h3 class="box-title">投放媒介</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-hover table-striped table-responsive">
                        <tr>
                            <th>#</th>
                            <th>媒介名称</th>
                            <th>状态</th>
                            <th>备注</th>
                            <th style="width: 160px; text-align: center">操作</th>
                        </tr>

                        <?php $__currentLoopData = $medias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($media->id); ?></td>
                                <td><?php echo e($media->name); ?></td>
                                <td>
                                    <?php if($media->status === 1): ?>
                                        <span class="label label-success" style="font-size: 0.9em"> 启用 </span>
                                    <?php elseif($media->status === 2): ?>
                                        <span class="label label-danger" style="font-size: 0.9em"> 未启用 </span>
                                    <?php else: ?>
                                        ----
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($media->remark); ?></td>
                                <td style="width: 160px; text-align: center">
                                    <?php if($media->status === 1): ?>
                                        <form action="<?php echo e(url('/admin/media/' . $media->id . '/' . $media->status)); ?>"
                                              method="post" style="display: inline">
                                            <?php echo e(method_field('PUT')); ?>

                                            <?php echo e(csrf_field()); ?>

                                            <button type="submit" class="btn btn-default"><i class="fa fa-lock"></i> 禁用
                                            </button>
                                        </form>
                                    <?php elseif($media->status === 2): ?>
                                        <form action="<?php echo e(url('/admin/media/' . $media->id . '/' . $media->status)); ?>"
                                              method="post" style="display: inline">
                                            <?php echo e(method_field('PUT')); ?>

                                            <?php echo e(csrf_field()); ?>

                                            <button type="submit" class="btn btn-default"><i class="fa fa-unlock"></i>
                                                启用
                                            </button>
                                        </form>
                                        <form action="<?php echo e(url('/admin/media/' . $media->id)); ?>" method="post"
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
                        <?php echo e($medias->links()); ?>

                    </div>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('vendor.adminlte.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>