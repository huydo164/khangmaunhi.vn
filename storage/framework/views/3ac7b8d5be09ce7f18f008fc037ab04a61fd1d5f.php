<?php
use App\Library\PHPDev\ThumbImg;
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\FuncLib;
?>
<div class="dang-ky">
    <div class="row">
        <div class="col-md-8">
            <h4><?php echo isset($text_5) ? strip_tags($text_5) : ''; ?></h4>
            <div class="row">
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
        </div>
        <div class="col-md-4">
            <h4><?php echo isset($text_4) ? strip_tags($text_4) : ''; ?></h4>
            <ul>
                <?php if(isset($data_cat_3) && !empty($data_cat_3)): ?>
                    <?php $__currentLoopData = $data_cat_3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <p class="title"><?php echo e(strip_tags($item->statics_title)); ?></p>
                            <p class="date"><?php echo e(date('d/m/Y', $item['statics_created'])); ?></p>
                            <p class="text"><?php echo strip_tags($item->statics_intro); ?></p>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div><?php /**PATH E:\xampp\htdocs\project.vn\khangmaunhi\app\Modules/Statics/Views/block/bottom.blade.php ENDPATH**/ ?>