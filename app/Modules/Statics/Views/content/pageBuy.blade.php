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
                        <a href="{{FuncLib::getBaseUrl()}}">Trang chủ</a>
                    </li>
                    @if(isset($dataCate->category_id))
                        <li class="active">
                            {{ $dataCate->category_title }}
                        </li>
                    @endif
                </ul>
            </div>
            <div class="buy">
                <div class="row">
                    <div class="col-md-6">
                        <div class="info-buy">
                            <h4>{!! strip_tags($arr_text_10->info_intro) !!}</h4>
                            <div class="tt-gb">
                                {!! $arr_text_10->info_content!!}
                            </div>
                            <div class="chot">
                                <h2>{!! strip_tags($arr_text_11->info_intro) !!}</h2>
                                <div class="f-c">
                                    <div class="count">{!! strip_tags($arr_text_11->info_content) !!}</div>
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
                            @if($arr_text_11->info_img != '')
                                <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_INFO, $arr_text_11->info_id, $arr_text_11->info_img, 2000, 0, '',true, true) }}" alt="">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!------buy------->

            <div class="gh">
                <h4>{!! strip_tags($arr_text_12->info_intro)!!}</h4>
                <p>{!! strip_tags($arr_text_12->info_content) !!}</p>
                <div class="local">
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            @if($arr_text_13->info_img != '')
                                <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_INFO, $arr_text_13->info_id, $arr_text_13->info_img, 2000, 0, '',true, true) }}" alt="">
                            @endif
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="city">
                                <div class="title-local">
                                    <i class="icon-number-1"></i>
                                    <span>{!! strip_tags($arr_text_13->info_content) !!}</span>
                                </div>
                                <div class="big-city">
                                    <a href="">
                                        {!! $arr_text_14->info_content !!}
                                    </a>
                                </div>
                                <div class="more">
                                    <a href=""><p>{!! strip_tags($arr_text_14->info_intro) !!}</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-8">
                            <div class="time">
                                <div class="title-time">
                                    <i class="icon-number-2"></i>
                                    <span>{!! strip_tags($text_16) !!}</span>
                                </div>
                                <div class="day-2">
                                    <a href="">
                                        <p>
                                            {!! strip_tags($arr_text_15->info_intro) !!}
                                        </p>
                                    </a>
                                </div>
                                <div class="day-2-4">
                                    <a href=""><p>{!! strip_tags($arr_text_15->info_content) !!}</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="descrip-gh">
                   {!! isset($text_17) ? strip_tags($text_17) : '' !!}
                </div>
            </div>
            <!------giao-hang------>

            <div class="payment">
                <div class="title-pm">
                    {!! strip_tags($arr_text_16->info_content) !!}
                </div>
                <div class="info-pm">
                    <div class="thumb-pm">
                        @if($arr_text_16->info_img != '')
                            <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_INFO, $arr_text_16->info_id, $arr_text_16->info_img, 2000, 0, '',true, true) }}" alt="">
                        @endif
                    </div>
                    <div class="text-pm">
                        @if(isset($data_cat_8) && !empty($data_cat_8))
                            @foreach($data_cat_8 as $key => $item)
                                <div class="text-pm-1">
                                    <i class="icon-nb-m-1"></i>
                                    <p>{{ strip_tags($item->statics_content) }}</p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop