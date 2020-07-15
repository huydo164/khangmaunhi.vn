<?php
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\FuncLib;
use App\Library\PHPDev\ThumbImg;
?>

<div class="cotainer">
    <div class="right-page">
        <div class="list-news">
            <div class="row">
                <?php if(isset($data_cat_4) && !empty($data_cat_4)): ?>
                    <?php $__currentLoopData = $data_cat_4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-12">
                            <a href="<?php echo e(FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)); ?>">
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
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div><?php /**PATH E:\xampp\htdocs\project.vn\khangmaunhi\app\Modules/Statics/Views/block/right.blade.php ENDPATH**/ ?>