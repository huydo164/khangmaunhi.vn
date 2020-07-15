<?php
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\FuncLib;
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
    <div class="container">
        <div class="page-neo">
            <ul class="breadcrumb">
                <li>
                    <a href="">Trang chủ</a>
                </li>
                @if(isset($dataCate->category_id))
                    <li class="active">
                        {{$dataCate->category_title}}
                    </li>
                @endif
            </ul>
        </div>
        <div class="page-contact">
            <div class="col-md-8">
                <h4>{!! isset($arr_text_3->info_intro) ? strip_tags($arr_text_3->info_intro) : '' !!}</h4>
                <p class="text-contact">
                    {!! isset($arr_text_3->info_content) ? strip_tags($arr_text_3->info_content) : '' !!}
                </p>
                <div class="form-tuvan">
                    <h4>{!! isset($text_12) ? $text_12 : '' !!}</h4>
                    <form action="{{ URL::route('site.pageContactPost') }}" id="pageQuestionAnswer" class="formSendContact index" method="POST" name="txtForm">
                        {!! csrf_field() !!}
                        <div class="col-md-6">
                            <p>{!! isset($text_6)  ? strip_tags($text_6) : '' !!}</p>
                            <input type="text" class="form-control" name="contact_name" pattern="[A-Za-z]{0,9}" title="Tên không hợp lệ"/>
                        </div>
                        <div class="col-md-6">
                            <p>{!! isset($text_7) ? strip_tags($text_7) : '' !!}</p>
                            <input type="text"  class="form-control" name="contact_phone"/>
                        </div>
                        <div class="col-md-12">
                            <p>{!! isset($text_8) ? strip_tags($text_8) : '' !!}</p>
                            <textarea name="contact_content" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Gửi liên hệ</button>
                        </div>
                    </form>
                </div>
                <div class="form-cmt">
                    <h4>{!! isset($text_13) ? strip_tags($text_13) : '' !!}</h4>
                    <form action="" method="POST">
                        <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="video-sp">
                    @if(isset($data_cat_7) && !empty($data_cat_7))
                        @foreach($data_cat_7 as $key => $item)
                            <iframe width="349" height="219" src="{{ $item->statics_video }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        @endforeach
                    @endif
                </div>
                <div class="right-page-contact">
                    <h4>{!! isset($text_14) ? strip_tags($text_14) : '' !!}</h4>
                    @include('Statics::block.right')
                </div>
            </div>
        </div>
        <div class="page-contact-bot">
            <div class="row">
                <div class="col-md-8">
                    <h4>{!! isset($text_15) ? strip_tags($text_15) : '' !!}</h4>
                    <div class="info-contact-bot">
                        @if(isset($data_cat_4) && !empty($data_cat_4))
                            @foreach($data_cat_4 as $key => $item)
                                <div class="col-md-6">
                                    <div class="col-md-5">
                                        @if($item->statics_image != '')
                                            <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800, 0, '', true, true) }}" alt="">
                                        @endif
                                    </div>
                                    <div class="col-md-7">
                                        <h5 class="title">{{ $item->statics_title }}</h5>
                                        <p class="date">{{ date('d/m/Y', $item['statics_created']) }}</p>
                                        <p class="text">{!! $item->statics_intro !!}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="chuyen-gia">
                        <h4>{{ $arr_text_4->info_title }}</h4>
                        <div class="thumb-chuyen-gia">
                            @if($arr_text_4->info_img != '')
                                <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_INFO, $arr_text_4->info_id, $arr_text_4->info_img, 800, 0 , '', true, true) }}" alt="">
                            @endif
                        </div>
                        <div class="name-cg">
                            {!! strip_tags($arr_text_4->info_intro) !!}
                        </div>
                        <div class="date">
                            {{ date('d/m/Y', $arr_text_4->info_created) }}
                        </div>
                        <p class="text">
                            {!! strip_tags($arr_text_4->info_content) !!}
                        </p>
                    </div>
                    <div class="img-thuoc">
                        @if($image_1->info_img != '')
                            <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_INFO, $image_1->info_id, $image_1->info_img, 800, 0 , '', true, true) }}" alt="">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop