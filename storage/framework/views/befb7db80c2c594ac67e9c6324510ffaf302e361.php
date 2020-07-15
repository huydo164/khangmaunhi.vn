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
    <div class="content">
        <div class="page-product">
            <div class="thumb-left">
                <?php if(isset($dataBannerLeft) && !empty($dataBannerLeft)): ?>
                    <?php $__currentLoopData = $dataBannerLeft; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_BANNER, $item['banner_id'], $item['banner_image'], 2000, 0, '', true, true, false)); ?>" alt="">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
            <div class="thumb-right">
                <?php if(isset($dataBannerRight) && !empty($dataBannerRight)): ?>
                    <?php $__currentLoopData = $dataBannerRight; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_BANNER, $item['banner_id'], $item['banner_image'], 2000, 0, '', true, true, false)); ?>" alt="">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
            <div class="container">
                <div class="page-neo">
                    <ul class="breadcrumb">
                        <li>
                            <a href="">Trang chủ</a>
                        </li>
                        <?php if(isset($dataCate->category_id)): ?>
                            <li class="active">
                                <?php echo e($dataCate->category_title); ?>

                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="thumb-thuoc">
                    <?php if($arr_text_5->info_img  != ''): ?>
                        <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_INFO, $arr_text_5->info_id, $arr_text_5->info_img, 1000, 0, '',true, true)); ?>" alt="">
                    <?php endif; ?>
                </div>
                <div class="info-product">
                    <h4><?php echo strip_tags($arr_text_5->info_intro); ?></h4>
                    <p>
                        <?php echo strip_tags($arr_text_5->info_content); ?>

                    </p>
                </div>
                <div class="info-thuoc">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 ">
                            <h4><?php echo strip_tags($arr_text_6->info_intro); ?></h4>
                            <div class="tp">
                                <?php echo $arr_text_6->info_content; ?>

                            </div >
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <h4><?php echo strip_tags($arr_text_7->info_intro); ?></h4>
                            <?php echo $arr_text_7->info_content; ?>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <h4><?php echo strip_tags($arr_text_8->info_intro); ?></h4>
                            <?php echo $arr_text_8->info_content; ?>

                        </div>
                    </div>
                    <div class="sd">
                        <h4><?php echo strip_tags($arr_text_9->info_intro); ?></h4>
                        <?php echo $arr_text_9->info_content; ?>

                    </div>
                </div>
            </div>
            <div class="thumb-product">
                <?php if(isset($dataBannerFooter) && !empty($dataBannerFooter)): ?>
                    <?php $__currentLoopData = $dataBannerFooter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_BANNER, $item['banner_id'], $item['banner_image'], 2000, 0, '', true, true, false)); ?>" alt="">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <div class="tron-mid"></div>
            </div>
            <div class="bottom-page">
                <div class="container">
                    <?php echo $__env->make('Statics::block.bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Statics::layout.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\project.vn\khangmaunhi\app\Modules/Statics/Views/content/pageProduct.blade.php ENDPATH**/ ?>