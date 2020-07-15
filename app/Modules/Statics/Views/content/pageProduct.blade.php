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
                @if(isset($dataBannerLeft) && !empty($dataBannerLeft))
                    @foreach($dataBannerLeft as $item)
                        <img src="{{ThumbImg::thumbBaseNormal(CGlobal::FOLDER_BANNER, $item['banner_id'], $item['banner_image'], 2000, 0, '', true, true, false)}}" alt="">
                    @endforeach
                @endif
            </div>
            <div class="thumb-right">
                @if(isset($dataBannerRight) && !empty($dataBannerRight))
                    @foreach($dataBannerRight as $item)
                        <img src="{{ThumbImg::thumbBaseNormal(CGlobal::FOLDER_BANNER, $item['banner_id'], $item['banner_image'], 2000, 0, '', true, true, false)}}" alt="">
                    @endforeach
                @endif
            </div>
            <div class="container">
                <div class="page-neo">
                    <ul class="breadcrumb">
                        <li>
                            <a href="">Trang chủ</a>
                        </li>
                        @if(isset($dataCate->category_id))
                            <li class="active">
                                {{ $dataCate->category_title }}
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="thumb-thuoc">
                    @if($arr_text_5->info_img  != '')
                        <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_INFO, $arr_text_5->info_id, $arr_text_5->info_img, 1000, 0, '',true, true) }}" alt="">
                    @endif
                </div>
                <div class="info-product">
                    <h4>{!! strip_tags($arr_text_5->info_intro) !!}</h4>
                    <p>
                        {!! strip_tags($arr_text_5->info_content) !!}
                    </p>
                </div>
                <div class="info-thuoc">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 ">
                            <h4>{!! strip_tags($arr_text_6->info_intro) !!}</h4>
                            <div class="tp">
                                {!! $arr_text_6->info_content !!}
                            </div >
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <h4>{!! strip_tags($arr_text_7->info_intro) !!}</h4>
                            {!! $arr_text_7->info_content !!}
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <h4>{!! strip_tags($arr_text_8->info_intro) !!}</h4>
                            {!! $arr_text_8->info_content !!}
                        </div>
                    </div>
                    <div class="sd">
                        <h4>{!! strip_tags($arr_text_9->info_intro) !!}</h4>
                        {!! $arr_text_9->info_content !!}
                    </div>
                </div>
            </div>
            <div class="thumb-product">
                @if(isset($dataBannerFooter) && !empty($dataBannerFooter))
                    @foreach($dataBannerFooter as $item)
                        <img src="{{ThumbImg::thumbBaseNormal(CGlobal::FOLDER_BANNER, $item['banner_id'], $item['banner_image'], 2000, 0, '', true, true, false)}}" alt="">
                    @endforeach
                @endif
                <div class="tron-mid"></div>
            </div>
            <div class="bottom-page">
                <div class="container">
                    @include('Statics::block.bottom')
                </div>
            </div>
        </div>
    </div>
@stop
