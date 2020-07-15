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
            <div class="buy">
                <div class="row">
                    <div class="col-md-6">
                        <div class="info-buy">
                            <h4><?php echo strip_tags($arr_text_10->info_intro); ?></h4>
                            <div class="tt-gb">
                                <?php echo $arr_text_10->info_content; ?>

                            </div>
                            <div class="chot">
                                <h2><?php echo strip_tags($arr_text_11->info_intro); ?></h2>
                                <div class="f-c">
                                    <div class="count"><?php echo strip_tags($arr_text_11->info_content); ?></div>
                                    <form action="" method="GET" class="form-buy">
                                        <input type="number" pattern="[0-9]" name="" class="form-control">
                                        <button class="btn btn-danger" type="submit">Đặt hàng</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="thumb-buy">
                            <?php if($arr_text_11->info_img != ''): ?>
                                <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_INFO, $arr_text_11->info_id, $arr_text_11->info_img, 2000, 0, '',true, true)); ?>" alt="">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!------buy------->

            <div class="gh">
                <h4><?php echo strip_tags($arr_text_12->info_intro); ?></h4>
                <p><?php echo strip_tags($arr_text_12->info_content); ?></p>
                <div class="local">
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <?php if($arr_text_13->info_img != ''): ?>
                                <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_INFO, $arr_text_13->info_id, $arr_text_13->info_img, 2000, 0, '',true, true)); ?>" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="city">
                                <div class="title-local">
                                    <i class="icon-number-1"></i>
                                    <span><?php echo strip_tags($arr_text_13->info_content); ?></span>
                                </div>
                                <div class="big-city">
                                    <a href="">
                                        <?php echo $arr_text_14->info_content; ?>

                                    </a>
                                </div>
                                <div class="more">
                                    <a href=""><p><?php echo strip_tags($arr_text_14->info_intro); ?></p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-8">
                            <div class="time">
                                <div class="title-time">
                                    <i class="icon-number-2"></i>
                                    <span><?php echo strip_tags($text_16); ?></span>
                                </div>
                                <div class="day-2">
                                    <a href="">
                                        <p>
                                            <?php echo strip_tags($arr_text_15->info_intro); ?>

                                        </p>
                                    </a>
                                </div>
                                <div class="day-2-4">
                                    <a href=""><p><?php echo strip_tags($arr_text_15->info_content); ?></p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="descrip-gh">
                   <?php echo isset($text_17) ? strip_tags($text_17) : ''; ?>

                </div>
            </div>
            <!------giao-hang------>

            <div class="payment">
                <div class="title-pm">
                    <?php echo strip_tags($arr_text_16->info_content); ?>

                </div>
                <div class="info-pm">
                    <div class="thumb-pm">
                        <?php if($arr_text_16->info_img != ''): ?>
                            <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_INFO, $arr_text_16->info_id, $arr_text_16->info_img, 2000, 0, '',true, true)); ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="text-pm">
                        <?php if(isset($data_cat_8) && !empty($data_cat_8)): ?>
                            <?php $__currentLoopData = $data_cat_8; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="text-pm-1">
                                    <i class="icon-nb-m-1"></i>
                                    <p><?php echo e(strip_tags($item->statics_content)); ?></p>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Statics::layout.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\project.vn\khangmaunhi\app\Modules/Statics/Views/content/pageBuy.blade.php ENDPATH**/ ?>