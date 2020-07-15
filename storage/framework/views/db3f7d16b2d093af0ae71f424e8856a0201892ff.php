<?php
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\FuncLib;
use App\Library\PHPDev\ThumbImg;
?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('Statics::block.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('Statics::block.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
        <div class="page-contact">
            <div class="col-md-8">
                <h4><?php echo isset($arr_text_3->info_intro) ? strip_tags($arr_text_3->info_intro) : ''; ?></h4>
                <p class="text-contact">
                    <?php echo isset($arr_text_3->info_content) ? strip_tags($arr_text_3->info_content) : ''; ?>

                </p>
                <div class="form-tuvan">
                    <h4><?php echo isset($text_12) ? $text_12 : ''; ?></h4>
                    <form action="<?php echo e(URL::route('site.pageContactPost')); ?>" id="pageQuestionAnswer" class="formSendContact index" method="POST" name="txtForm">
                        <?php echo csrf_field(); ?>

                        <div class="col-md-6">
                            <p><?php echo isset($text_6)  ? strip_tags($text_6) : ''; ?></p>
                            <input type="text" class="form-control" name="contact_name" pattern="[A-Za-z]{0,9}" title="Tên không hợp lệ"/>
                        </div>
                        <div class="col-md-6">
                            <p><?php echo isset($text_7) ? strip_tags($text_7) : ''; ?></p>
                            <input type="text"  class="form-control" name="contact_phone"/>
                        </div>
                        <div class="col-md-12">
                            <p><?php echo isset($text_8) ? strip_tags($text_8) : ''; ?></p>
                            <textarea name="contact_content" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Gửi liên hệ</button>
                        </div>
                    </form>
                </div>
                <div class="form-cmt">
                    <h4><?php echo isset($text_13) ? strip_tags($text_13) : ''; ?></h4>
                    <form action="" method="POST">
                        <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="video-sp">
                    <?php if(isset($data_cat_7) && !empty($data_cat_7)): ?>
                        <?php $__currentLoopData = $data_cat_7; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <iframe width="349" height="219" src="<?php echo e($item->statics_video); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
                <div class="right-page-contact">
                    <h4><?php echo isset($text_14) ? strip_tags($text_14) : ''; ?></h4>
                    <?php echo $__env->make('Statics::block.right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
        <div class="page-contact-bot">
            <div class="row">
                <div class="col-md-8">
                    <h4><?php echo isset($text_15) ? strip_tags($text_15) : ''; ?></h4>
                    <div class="info-contact-bot">
                        <?php if(isset($data_cat_4) && !empty($data_cat_4)): ?>
                            <?php $__currentLoopData = $data_cat_4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-6">
                                    <div class="col-md-5">
                                        <?php if($item->statics_image != ''): ?>
                                            <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800, 0, '', true, true)); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-7">
                                        <h5 class="title"><?php echo e($item->statics_title); ?></h5>
                                        <p class="date"><?php echo e(date('d/m/Y', $item['statics_created'])); ?></p>
                                        <p class="text"><?php echo $item->statics_intro; ?></p>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="chuyen-gia">
                        <h4><?php echo e($arr_text_4->info_title); ?></h4>
                        <div class="thumb-chuyen-gia">
                            <?php if($arr_text_4->info_img != ''): ?>
                                <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_INFO, $arr_text_4->info_id, $arr_text_4->info_img, 800, 0 , '', true, true)); ?>" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="name-cg">
                            <?php echo strip_tags($arr_text_4->info_intro); ?>

                        </div>
                        <div class="date">
                            <?php echo e(date('d/m/Y', $arr_text_4->info_created)); ?>

                        </div>
                        <p class="text">
                            <?php echo strip_tags($arr_text_4->info_content); ?>

                        </p>
                    </div>
                    <div class="img-thuoc">
                        <?php if($image_1->info_img != ''): ?>
                            <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_INFO, $image_1->info_id, $image_1->info_img, 800, 0 , '', true, true)); ?>" alt="">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Statics::layout.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\project.vn\khangmaunhi\app\Modules/Statics/Views/content/pageContact.blade.php ENDPATH**/ ?>