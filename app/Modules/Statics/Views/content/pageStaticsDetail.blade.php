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
    <div class="page-statics-detail">
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
            <div class="page-detail">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="title-view">{{stripcslashes($data->statics_title)}}</h3>
                        <div class="img-detail">
                            @if($data->statics_image != '')
                                <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $data->statics_id, $data->statics_image, 800, 0, '', true, true) }}" alt="">
                            @endif
                        </div>
                        <div class="line">
                            <div class="line content-view">
                                {!! stripcslashes($data->statics_content) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3 class="title">{!! strip_tags($text_5) !!}</h3>
                        @include('Statics::block.right')
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop