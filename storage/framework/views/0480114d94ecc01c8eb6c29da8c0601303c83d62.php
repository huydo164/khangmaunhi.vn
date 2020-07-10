<?php
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\ThumbImg;
?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('Admin::block.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('left'); ?>
    <?php echo $__env->make('Admin::block.left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="<?php echo e(URL::route('admin.dashboard')); ?>">Trang chủ</a>
                    </li>
                    <li class="active"><?php if($id==0): ?>Thêm mới <?php else: ?> Sửa <?php endif; ?> kiểu chuyên mục</li>
                </ul>
            </div>
            <div class="page-content">
                <div class="col-xs-12">
                    <div class="row">
                        <?php if(isset($error) && $error != ''): ?>
                            <div class="alert-admin alert alert-danger"><?php echo $error; ?></div>
                        <?php endif; ?>
                        <form class="form-horizontal paddingTop30" name="txtForm" action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 mb-12">
                                    <div class="nav-tabs-horizontal nav-tabs-inverse" data-plugin="tabs">
                                        <ul class="nav nav-tabs nav-tabs-solid" role="tablist">
                                            <li class="nav-item active" role="presentation">
                                                <a class="nav-link active" data-toggle="tab" href="#tabNoiDung"
                                                   aria-controls="tabNoiDung" role="tab">
                                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                                    Nội dung
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content pt-10">
                                            <div class="tab-pane panelDetail active" id="tabNoiDung" role="tabpanel">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Tiêu đề<span>*</span></label>
                                                        <input type="text" class="form-control input-sm" name="banner_title" value="<?php if(isset($data['banner_title'])): ?><?php echo e($data['banner_title']); ?><?php endif; ?>">
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Tiêu đề hiển thị<span>*</span></label>
                                                        <input type="text" class="form-control input-sm" name="banner_title_show" value="<?php if(isset($data['banner_title_show'])): ?><?php echo e($data['banner_title_show']); ?><?php endif; ?>">
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Liên kết</label>
                                                        <input type="text" class="form-control input-sm" name="banner_link" value="<?php if(isset($data['banner_link'])): ?><?php echo e($data['banner_link']); ?><?php endif; ?>">
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Mô tả</label>
                                                        <textarea class="form-control input-sm" name="banner_intro"><?php if(isset($data['banner_intro'])): ?><?php echo e($data['banner_intro']); ?><?php endif; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Thời gian chạy quảng cáo</label>
                                                        <select class="form-control input-sm" name="banner_is_run_time">
                                                            <?php echo $optionRunTime; ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Ngày bắt đầu</label>
                                                        <input type="text" class="form-control input-sm date" name="banner_start_time" value="<?php if(isset($data['banner_start_time']) && $data['banner_start_time'] > 0 ): ?><?php echo e(date('d-m-Y',$data['banner_start_time'])); ?><?php endif; ?>">
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Ngày kết thúc</label>
                                                        <input type="text" class="form-control input-sm date" name="banner_end_time" value="<?php if(isset($data['banner_end_time']) && $data['banner_end_time'] > 0): ?><?php echo e(date('d-m-Y',$data['banner_end_time'])); ?><?php endif; ?>">
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Thứ tự</label>
                                                        <input type="text" class="form-control input-sm" name="banner_order_no" value="<?php if(isset($data['banner_order_no'])): ?><?php echo e($data['banner_order_no']); ?><?php endif; ?>">
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Vị trí</label>
                                                        <select class="form-control input-sm" name="banner_type">
                                                            <?php echo $optionType; ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Target</label>
                                                        <select class="form-control input-sm" name="banner_is_target">
                                                            <?php echo $optionTarget; ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Rel</label>
                                                        <select class="form-control input-sm" name="banner_is_rel">
                                                            <?php echo $optionRel; ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Trạng thái</label>
                                                        <select class="form-control input-sm" name="banner_status">
                                                            <?php echo $optionStatus; ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Ảnh banner<span>*</span></label>
                                                        <div class="controls">
                                                            <a href="javascript:;"class="btn btn-primary link-button btn-sm" onclick="UploadAdmin.uploadBannerAdvanced(1);">Upload ảnh quảng cáo</a>
                                                            <div id="sys_show_image_banner">
                                                                <?php if(isset($data['banner_image']) && $data['banner_image'] !=''): ?>
                                                                    <img src="<?php echo e(ThumbImg::thumbBaseNormal(CGlobal::FOLDER_BANNER, $data['banner_id'], $data['banner_image'], 300, 0, '', true, true, false)); ?>"/>
                                                                <?php endif; ?>
                                                            </div>
                                                            <input name="img" type="hidden" id="img" <?php if(isset($data['banner_image'])): ?>value="<?php echo e($data['banner_image']); ?>"<?php endif; ?>>
                                                            <input name="img_old" type="hidden" id="img_old" <?php if(isset($data['banner_image'])): ?>value="<?php echo e($data['banner_image']); ?>"<?php endif; ?>>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer clearfix">
                                            <div class="form-inline float-right">
                                                <div class="form-row">
                                                    <?php echo csrf_field(); ?>

                                                    <input type="hidden" id="id_hiden" name="id_hiden" value="<?php echo e($id); ?>"/>
                                                    <button type="submit" name="txtSubmit" id="buttonSubmit" class="btn btn-primary btn-sm">Lưu lại</button>
                                                    <button type="reset" class="btn btn-sm">Bỏ qua</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Popup Upload Img-->
    <div class="modal fade" id="sys_PopupUploadImgOtherPro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Upload ảnh</h4>
                </div>
                <div class="modal-body">
                    <form name="uploadImage" method="post" action="#" enctype="multipart/form-data">
                        <div class="form_group">
                            <div id="sys_show_button_upload">
                                <div id="sys_mulitplefileuploader" class="btn btn-primary">Upload ảnh</div>
                            </div>
                            <div id="status"></div>

                            <div class="clearfix"></div>
                            <div class="clearfix" style='margin: 5px 10px; width:100%;'>
                                <div id="div_image"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Popup Upload Img-->

    <script type="text/javascript">
        jQuery(document).ready(function($){
            jQuery('.date').datetimepicker({
                timepicker:false,
                format:'d-m-Y',
                lang:'vi'
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin::layout.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\project.vn\khangmaunhi\app\Modules/Admin/Views/banner/add.blade.php ENDPATH**/ ?>