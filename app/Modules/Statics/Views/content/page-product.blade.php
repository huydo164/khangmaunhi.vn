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
        <div class="page-product">
            <div class="thumb-left">
                <img src="http://localhost/project.vn/khangmaunhi/public/assets/frontend/img/P_04.png" alt="">
                <div class="tron-left"></div>
            </div>
            <div class="thumb-right">
                <img src="http://localhost/project.vn/khangmaunhi/public/assets/frontend/img/P_03.png" alt="">
                <div class="tron-right"></div>
            </div>
            <div class="container">
                <div class="page-neo">
                    <ul class="breadcrumb">
                        <li>
                            <a href="">Trang chủ</a>
                        </li>
                        <li>
                            Sản phẩm
                        </li>
                    </ul>
                </div>
                <div class="thumb-thuoc">
                    <img src="http://localhost/project.vn/khangmaunhi/public/assets/frontend/img/H_PNG.png" alt="">
                </div>
                <div class="info-product">
                    <h4>abcxyz</h4>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum diam quis metus viverra, malesuada malesuada justo vulputate.
                        Nunc eget convallis nunc, sed dapibus tortor. Pellentesque sit amet lacinia augue. Sed eget tincidunt tortor, sit amet accumsan magna.
                        Donec vitae odio facilisis, tincidunt turpis in, gravida est. Donec magna mauris, porta sit amet interdum et, laoreet id purus.
                        Praesent imperdiet ligula eget ligula mattis, at egestas elit tempus. Cras egestas urna vitae vehicula sagittis.
                    </p>
                </div>
                <div class="info-thuoc">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <h4>Thành phần chính</h4>
                            <p class="tp">
                                Thương Nhĩ Tử
                            </p >
                            <span> 1 6 0</span>
                            <p class="tp">
                                Kim Ngân Hoa
                            </p>
                            <span>mg</span>
                            <p class="tp">
                                Chi tử
                            </p>
                            <span> 1 3 3</span>
                            <p class="tp">
                                Hạ Khô Thảo
                            </p>
                            <span>mg</span>
                            <p class="tp">
                                Liên Kiều
                            </p>
                            <span>1 3 3</span>
                            <p class="tp">
                                Bạch Thược
                            </p>
                            <span>mg</span>
                            <p class="tp">
                                Cà Gai Leo
                            </p>
                            <span> 1 3 3</span>
                            <p class="tp">
                                Các thành phần khác:
                            </p>
                            <span>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                            </span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <h4>Công dụng</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum diam quis metus viverra, malesuada malesuada justo vulputate.
                                Nunc eget convallis nunc, sed dapibus tortor. Pellentesque sit amet lacinia augue. Sed eget tincidunt tortor, sit amet accumsan magna.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum diam quis metus viverra, malesuada malesuada justo vulputate.
                                Nunc eget convallis nunc, sed dapibus tortor. Pellentesque sit amet lacinia augue. Sed eget tincidunt tortor, sit amet accumsan magna.
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <h4>Đối tượng sử dụng</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum diam quis metus viverra, malesuada malesuada justo vulputate.
                                Nunc eget convallis nunc, sed dapibus tortor. Pellentesque sit amet lacinia augue. Sed eget tincidunt tortor, sit amet accumsan magna.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum diam quis metus viverra, malesuada malesuada justo vulputate.
                                Nunc eget convallis nunc, sed dapibus tortor. Pellentesque sit amet lacinia augue. Sed eget tincidunt tortor, sit amet accumsan magna.
                            </p>
                        </div>
                    </div>
                    <div class="sd">
                        <h4>Hướng dẫn sử dụng</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum diam quis metus viverra, malesuada malesuada justo vulputate.
                            Nunc eget convallis nunc, sed dapibus tortor. Pellentesque sit amet lacinia augue. Sed eget tincidunt tortor, sit amet accumsan magna.
                        </p>
                    </div>
                </div>
            </div>
            <div class="thumb-product">
                <img src="http://localhost/project.vn/khangmaunhi/public/assets/frontend/img/BN_SP_PAGE.jpg" alt="">
                <div class="tron-mid"></div>
            </div>
        </div>
    </div>
@stop
