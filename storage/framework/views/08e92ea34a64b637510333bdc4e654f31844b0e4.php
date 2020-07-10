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
<div class="content1">
	<div class="anhbia">
		<?php if(isset($dataBannerHead) && !empty($dataBannerHead)): ?>
			<?php $__currentLoopData = $dataBannerHead; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_BANNER, $item['banner_id'], $item['banner_image'], 2000, 0, '', true, true, false)); ?>" alt="">
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>
	</div>
	<div class="container">
		<div class="gt">
			<div class="row">
				<div class="col-md-7">
					<h3 class="title"><?php echo isset($text_1) ? $text_1 : ''; ?></h3>
					<p class="text"><?php echo isset($arr_text_2->info_content) ? stripcslashes($arr_text_2->info_content) : ''; ?></p>
				</div>
				<div class="col-md-5">
					<?php if($arr_text_2->info_img != '' ): ?>
						<img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_INFO, $arr_text_2->info_id, $arr_text_2->info_img, 1000,0, '', true, true)); ?>" alt="">
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="chuyen-gia">
			<h3 class="title">CHUYÊN GIA NÓI GÌ VỀ SẢN PHẨM</h3>
			<div class="row">
				<div class="col-md-4">
					<img src="http://localhost:8888/khangmaunhi.vn/public/assets/frontend/img/chuyen-gia.png" />
					<p class="name">Bác sĩ Nguyễn Lan Anh</p>
					<p class="quote">abc def ghijklmn on pq qladf jwnf klsw</p>
				</div>
				<div class="col-md-4">
					<img src="http://localhost:8888/khangmaunhi.vn/public/assets/frontend/img/chuyen-gia.png" />
					<p class="name">Bác sĩ Nguyễn Lan Anh</p>
					<p class="quote">abc def ghijklmn on pq qladf jwnf klsw</p>
				</div>
				<div class="col-md-4">
					<img src="http://localhost:8888/khangmaunhi.vn/public/assets/frontend/img/chuyen-gia.png" />
					<p class="name">Bác sĩ Nguyễn Lan Anh</p>
					<p class="quote">abc def ghijklmn on pq qladf jwnf klsw</p>
				</div>
			</div>
		</div>
		<div class="khach-hang">
			<h3 class="title">KHÁCH HÀNG NÓI GÌ VỀ SẢN PHẨM</h3>
			<div class="row">
				<div class="col-md-4">
					<iframe width="349" height="219" src="https://www.youtube.com/embed/RoTvidpL1gM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<p>skd kdskd skdsd skdsdsdk sdsdkdsjkdsd sdjsdsdk skdskd sálp</p>
				</div>
				<div class="col-md-4">
					<iframe width="349" height="219" src="https://www.youtube.com/embed/RoTvidpL1gM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<p>skd kdskd skdsd skdsdsdk sdsdkdsjkdsd sdjsdsdk skdskd sálp</p>
				</div>
				<div class="col-md-4">
					<iframe width="349" height="219" src="https://www.youtube.com/embed/RoTvidpL1gM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<p>skd kdskd skdsd skdsdsdk sdsdkdsjkdsd sdjsdsdk skdskd sálp</p>
				</div>
			</div>
		</div>
	</div>
	<div class="gioithieu" >
		<img src="http://localhost:8888/khangmaunhi.vn/public/assets/frontend/img/anhgt.png"  width="100%" alt="">
	</div>
	<div class="container">
		<div class="dang-ky">
			<div class="row">
				<div class="col-md-8">
					<h5>ĐĂNG KÝ GẶP DƯỢC SĨ</h5>
					<div class="row">
						<div class="col-md-6">
							<p>Họ và tên *</p>
							<input type="text" />
						</div>
						<div class="col-md-6">
							<p>Điện thoại*</p>
							<input type="text" />
						</div>
						<div class="col-md-12">
							<p>Triệu chứng *</p>
							<textarea name="" id="" cols="73%" rows="10"></textarea>
						</div>
						<div class="col-md-12">
							<button>Gửi liên hệ</button>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<h5>TIN MỚI</h5>
					<ul>
						<li>
							<p class="title">Bà bầu nên kiêng gì</p>
							<p class="date">07/09/2018</p>
							<p class="text">skd kdskd skdsd skdsdsdk sdsdkdsjkdsd sdjsdsdk skdskd sálp skd kdskd skdsd skdsdsdk sdsdkdsjkdsd sdjsdsdk skdskd sálp skd kdskd skdsd skdsdsdk sdsdkdsjkdsd sdjsdsdk skdskd sálp</p>
						</li>
						<li>
							<p class="title">Bà bầu nên kiêng gì</p>
							<p class="date">07/09/2018</p>
							<p class="text">skd kdskd skdsd skdsdsdk sdsdkdsjkdsd sdjsdsdk skdskd sálp skd kdskd skdsd skdsdsdk sdsdkdsjkdsd sdjsdsdk skdskd sálp skd kdskd skdsd skdsdsdk sdsdkdsjkdsd sdjsdsdk skdskd sálp</p>
						</li>
						<li>
							<p class="title">Bà bầu nên kiêng gì</p>
							<p class="date">07/09/2018</p>
							<p class="text">skd kdskd skdsd skdsdsdk sdsdkdsjkdsd sdjsdsdk skdskd sálp skd kdskd skdsd skdsdsdk sdsdkdsjkdsd sdjsdsdk skdskd sálp skd kdskd skdsd skdsdsdk sdsdkdsjkdsd sdjsdsdk skdskd sálp</p>
						</li>
					</ul>

				</div>
			</div>
		</div>

	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Statics::layout.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\project.vn\khangmaunhi\app\Modules/Statics/Views/content/index.blade.php ENDPATH**/ ?>