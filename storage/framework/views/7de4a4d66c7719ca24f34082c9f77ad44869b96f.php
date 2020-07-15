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
        <h1>
            <?php echo isset($text_10) ? $text_10 : ''; ?>

        </h1>
        <div class="page-statics">
            <div class="row">
                <?php if($data->count() > 1): ?>
                    <div class="col-md-8">
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-6">
                                <a href="<?php echo e(FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)); ?>">
                                    <div class="info-statics">
                                        <?php if($item->statics_image != ''): ?>
                                            <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800,0, '', true, true)); ?>" alt="">
                                        <?php endif; ?>
                                        <h4><?php echo e($item->statics_title); ?></h4>
                                        <div class="date"><?php echo e(date('d/m/Y', $item->statics_created)); ?></div>
                                        <div class="page-content">
                                            <?php echo $item->statics_intro; ?>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="col-md-4">
                        <div class="vid-statics">
                            <?php if(isset($data_cat_6) && !empty($data_cat_6)): ?>
                                <?php $__currentLoopData = $data_cat_6; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <iframe width="349" height="219" src="<?php echo e($item->statics_video); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                        <div class="right">
                            <h4><?php echo strip_tags($text_9); ?></h4>
                            <?php echo $__env->make('Statics::block.right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <div class="ask">
                            <form action="<?php echo e(URL::route('site.pageContactPost')); ?>" id="pageQuestionAnswer" class="formSendContact index" method="POST" name="txtForm">
                                <?php echo csrf_field(); ?>

                                <h4><?php echo isset($text_11) ? $text_11 : ''; ?></h4>
                                <p><?php echo isset($text_6) ? $text_6 : ''; ?>  </p>
                                <input type="text" class="form-control" name="contact_name" />
                                <p><?php echo isset($text_7) ? $text_7 : ''; ?></p>
                                <input type="text" class="form-control" name="contact_phone" />
                                <p><?php echo isset($text_8) ? $text_8 : ''; ?> </p>
                                <textarea name="contact_content" class="form-control" id="" cols="30" rows="10"></textarea>
                                <button class="btn btn-primary" type="submit">Gửi liên hệ</button>
                            </form>
                        </div>
                        <div class="kn">
                            <p>KẾT NỐI VỚI CHÚNG TÔI</p>
                            <img src="http://localhost:8888/khangmaunhi.vn/public/assets/frontend/img/nhataitro.png" />
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Statics::layout.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\project.vn\khangmaunhi\app\Modules/Statics/Views/content/pageStatics.blade.php ENDPATH**/ ?>