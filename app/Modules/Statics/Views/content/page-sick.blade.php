<?php
use App\Library\PHPDev\FuncLib;
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\Utility;
use App\Library\PHPDev\ThumbImg;
?>
@extends('Statics::layout.html')
@section('header')
    @include('Statics::block.header')
@stop
@section('footer')
    @include('Statics::block.footer')
@stop
@section('content')
<div class="content">
    <div class="container">
        <div class="page-neo">
            <ul class="breadcrumb">
                <li>
                    <a href="">Trang chủ</a>
                </li>
                <li>
                    <a href="">Bệnh lý</a>
                </li>
                <li>
                    An thai như nào cho đúng?
                </li>
            </ul>
        </div>
        <!-----page-neo------->

        <div class="site-sick">
            <div class="row">
                <div class="col-lg-9">
                    <div class="home-1">
                        <div class="title-1">
                            Bạn đã dưỡng thai đúng cách chưa?
                        </div>
                        <div class="descrip-1">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum diam quis metus viverra, malesuada malesuada justo vulputate.
                            Nunc eget convallis nunc, sed dapibus tortor. Pellentesque sit amet lacinia augue. Sed eget tincidunt tortor, sit amet accumsan magna.
                            Donec vitae odio facilisis, tincidunt turpis in, gravida est. Donec magna mauris, porta sit amet interdum et, laoreet id purus.
                            Praesent imperdiet ligula eget ligula mattis, at egestas elit tempus. Cras egestas urna vitae vehicula sagittis.
                        </div>
                    </div>
                    <div class="dk">
                        <div class="title-dk">
                            Đăng ký tư vấn với bác sĩ
                        </div>
                        <form action="" method="Post" class="form-dk">
                            <textarea name="" id="" cols="30" rows="7" class="form-control"></textarea>
                        </form>
                    </div>
                    <div class="comment">
                        <div class="title-cmt">
                            Mời bạn bình luận
                        </div>
                        <form action="" method="POST" class="form-cmt">
                            <textarea name="" id="" cols="30" rows="7" class="form-control"></textarea>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-----site-sick------>

        <div class="page-same">
            <div class="row">
                <div class="col-lg-9 col-sm-12 col-md-9">
                    <div class="same-left">
                        <h4>Bài viết cùng chuyên mục</h4>
                        <ul class="list-same">
                            <li>
                                <a href="">
                                    <div class="thumb-same">
                                        <img src="http://localhost/project.vn/khangmaunhi/public/assets/frontend/img/same-1.png" alt="">
                                    </div>
                                    <div class="info-same">
                                        <h5>Dưỡng thai an toàn</h5>
                                        <div class="date">07/09/2020</div>
                                        <div class="cont-same">  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum diam quis metus viverra, malesuada malesuada justo vulputate.</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="thumb-same">
                                        <img src="http://localhost/project.vn/khangmaunhi/public/assets/frontend/img/same-3.png" alt="">
                                    </div>
                                    <div class="info-same">
                                        <h5>Những tháng thai kỳ</h5>
                                        <div class="date">07/09/2020</div>
                                        <div class="cont-same">  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum diam quis metus viverra, malesuada malesuada justo vulputate.</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="thumb-same">
                                        <img src="http://localhost/project.vn/khangmaunhi/public/assets/frontend/img/same-2.png" alt="">
                                    </div>
                                    <div class="info-same">
                                        <h5>Thực phẩm giàu dinh dưỡng</h5>
                                        <div class="date">07/09/2020</div>
                                        <div class="cont-same">  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum diam quis metus viverra, malesuada malesuada justo vulputate.</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="thumb-same">
                                        <img src="http://localhost/project.vn/khangmaunhi/public/assets/frontend/img/same-4.png" alt="">
                                    </div>
                                    <div class="info-same">
                                        <h5>Để khỏe mẹ lẫn con</h5>
                                        <div class="date">07/09/2020</div>
                                        <div class="cont-same">  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum diam quis metus viverra, malesuada malesuada justo vulputate.</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="thumb-same">
                                        <img src="http://localhost/project.vn/khangmaunhi/public/assets/frontend/img/same-1.png" alt="">
                                    </div>
                                    <div class="info-same">
                                        <h5>Dưỡng thai an toàn</h5>
                                        <div class="date">07/09/2020</div>
                                        <div class="cont-same">  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum diam quis metus viverra, malesuada malesuada justo vulputate.</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="thumb-same">
                                        <img src="http://localhost/project.vn/khangmaunhi/public/assets/frontend/img/same-3.png" alt="">
                                    </div>
                                    <div class="info-same">
                                        <h5>Những tháng thai kỳ</h5>
                                        <div class="date">07/09/2020</div>
                                        <div class="cont-same">  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum diam quis metus viverra, malesuada malesuada justo vulputate.</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="thumb-same">
                                        <img src="http://localhost/project.vn/khangmaunhi/public/assets/frontend/img/same-2.png" alt="">
                                    </div>
                                    <div class="info-same">
                                        <h5>Thực phẩm giàu dinh dưỡng</h5>
                                        <div class="date">07/09/2020</div>
                                        <div class="cont-same">  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum diam quis metus viverra, malesuada malesuada justo vulputate.</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="thumb-same">
                                        <img src="http://localhost/project.vn/khangmaunhi/public/assets/frontend/img/same-4.png" alt="">
                                    </div>
                                    <div class="info-same">
                                        <h5>Để khỏe mẹ lẫn con</h5>
                                        <div class="date">07/09/2020</div>
                                        <div class="cont-same">  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum diam quis metus viverra, malesuada malesuada justo vulputate.</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!------col-lg-9-------->

                <div class="col-lg-3 col-sm-12 col-md-3">
                    <div class="chuyen-gia">
                        <a href="">
                            <div class="title-cg">
                                Hỏi chuyên gia
                            </div>
                            <div class="thumb-cg">
                                <img src="http://localhost/project.vn/khangmaunhi/public/assets/frontend/img/chuyen-gia.png" alt="">
                            </div>
                            <div class="info-cn">
                                <div class="name-cg">
                                    Chuyên gia Nguyễn Văn A
                                </div>
                                <div class="date">07/09/2020</div>
                                <div class="descrip-cn">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum diam quis metus viverra, malesuada malesuada justo vulputate
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!------page-same------->

        <div class="thumb-bot">
            <img src="http://localhost/project.vn/khangmaunhi/public/assets/frontend/img/H_PNG000.png" alt="">
        </div>
    </div>
</div>
@stop