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
                        <a href="">Đặt hàng</a>
                    </li>
                </ul>
            </div>
            <div class="buy">
                <div class="info-buy">
                    <h4>Đặt mua khang mẫu nhi chính hãng</h4>
                    <div class="tt-gb">
                        <p>Giá bán: 3XX VNĐ/Lọ 60 viên</p>
                        <p>Miễn phí vận chuyển khi mau 3 hộp trở lên</p>
                    </div>
                    <div class="chot">
                        <h2>Giá bán: XXX VNĐ / 1 lọ 60 viên</h2>
                        <div class="f-c">
                            <div class="count">Số lượng</div>
                            <form action="" method="GET" class="form-buy">
                                <input type="text" name="" class="form-control">
                                <button class="btn btn-danger" type="submit">Đặt hàng</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="thumb-buy">
                    <img src="http://localhost/project.vn/khangmaunhi/public/assets/frontend/img/H_PNG.png" alt="">
                </div>
            </div>
            <!------buy------->

            <div class="gh">
                <h4>Chính sách giao hàng</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum diam quis metus viverra, malesuada malesuada justo vulputate.</p>
                <div class="local">
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <img src="http://localhost/project.vn/khangmaunhi/public/assets/frontend/img/icon-buy.png" alt="">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="city">
                                <div class="title-local">
                                    <i class="icon-number-1"></i>
                                    <span>Địa chỉ giao hàng</span>
                                </div>
                                <div class="big-city">
                                    <a href="">
                                        <p>Hà Nội</p>
                                        <p>TP Hồ Chí Minh</p>
                                    </a>
                                </div>
                                <div class="more">
                                    <a href=""><p>Cách tỉnh còn lại</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-8">
                            <div class="time">
                                <div class="title-time">
                                    <i class="icon-number-2"></i>
                                    <span>Thời gian Quý Khách nhận được hàng</span>
                                </div>
                                <div class="day-2">
                                    <a href="">
                                        <p>
                                            Trong 2 ngày làm việc
                                        </p>
                                    </a>
                                </div>
                                <div class="day-2-4">
                                    <a href=""><p>Trong 2 - 4 ngày làm việc</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="descrip-gh">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum diam quis metus viverra, malesuada malesuada justo vulputate.
                    Nunc eget convallis nunc, sed dapibus tortor. Pellentesque sit amet lacinia augue. Sed eget tincidunt tortor, sit amet accumsan magna.
                    Donec vitae odio facilisis, tincidunt turpis in, gravida est. Donec magna mauris, porta sit amet interdum et, laoreet id purus.
                    Praesent imperdiet ligula eget ligula mattis, at egestas elit tempus. Cras egestas urna vitae vehicula sagittis.
                </div>
            </div>
            <!------giao-hang------>

            <div class="payment">
                <div class="title-pm">
                    Chính sách thanh toán
                </div>
                <div class="info-pm">
                    <div class="thumb-pm">
                        <img src="http://localhost/project.vn/khangmaunhi/public/assets/frontend/img/arrow.png" alt="">
                    </div>
                    <div class="text-pm">
                        <div class="text-pm-1">
                            <i class="icon-nb-m-1"></i>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum diam quis metus viverra, malesuada malesuada justo vulputate.</p>
                        </div>
                        <div class="text-pm-2">
                            <i class="icon-nb-m-2"></i>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum diam quis metus viverra, malesuada malesuada justo vulputate.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop