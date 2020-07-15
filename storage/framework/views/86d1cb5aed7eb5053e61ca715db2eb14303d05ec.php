<?php
use App\Library\PHPDev\FuncLib;
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\Utility;
use App\Library\PHPDev\ThumbImg;
?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('Statics::block.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('Statics::block.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-statics-detail">
        <div class="container">
            <div class="page-neo">
                <ul class="breadcrumb">
                    <li>
                        <a href="<?php echo e(FuncLib::getBaseUrl()); ?>">Trang chủ</a>
                    </li>
                    <?php if(isset($dataCate->category_id)): ?>
                        <li class="active">
                            <?php echo e($dataCate->category_title); ?>

                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="page-detail">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="title-view"><?php echo e(stripcslashes($data->statics_title)); ?></h3>
                        <div class="img-detail">
                            <?php if($data->statics_image != ''): ?>
                                <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $data->statics_id, $data->statics_image, 800, 0, '', true, true)); ?>" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="line">
                            <div class="line content-view">
                                <?php echo stripcslashes($data->statics_content); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3 class="title"><?php echo strip_tags($text_5); ?></h3>
                        <?php echo $__env->make('Statics::block.right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Statics::layout.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\project.vn\khangmaunhi\app\Modules/Statics/Views/content/pageStaticsDetail.blade.php ENDPATH**/ ?>