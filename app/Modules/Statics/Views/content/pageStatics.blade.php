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
        <h1>
            {!! isset($text_10) ? $text_10 : '' !!}
        </h1>
        <div class="page-statics">
            <div class="row">
                @if($data->count() > 1)
                    <div class="col-md-8">
                        @foreach($data as $item)
                            <div class="col-md-6">
                                <a href="{{FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)}}">
                                    <div class="info-statics">
                                        @if($item->statics_image != '')
                                            <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800,0, '', true, true) }}" alt="">
                                        @endif
                                        <h4>{{ $item->statics_title }}</h4>
                                        <div class="date">{{ date('d/m/Y', $item->statics_created) }}</div>
                                        <div class="page-content">
                                            {!! $item->statics_intro !!}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-4">
                        <div class="vid-statics">
                            @if(isset($data_cat_6) && !empty($data_cat_6))
                                @foreach($data_cat_6 as $key => $item)
                                    <iframe width="349" height="219" src="{{ $item->statics_video }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                @endforeach
                            @endif
                        </div>
                        <div class="right">
                            <h4>{!! strip_tags($text_9) !!}</h4>
                            @include('Statics::block.right')
                        </div>
                        <div class="ask">
                            <form action="{{ URL::route('site.pageContactPost') }}" id="pageQuestionAnswer" class="formSendContact index" method="POST" name="txtForm">
                                {!! csrf_field() !!}
                                <h4>{!! isset($text_11) ? $text_11 : '' !!}</h4>
                                <p>{!! isset($text_6) ? $text_6 : '' !!}  </p>
                                <input type="text" class="form-control" name="contact_name" />
                                <p>{!! isset($text_7) ? $text_7 : '' !!}</p>
                                <input type="text" class="form-control" name="contact_phone" />
                                <p>{!! isset($text_8) ? $text_8 : '' !!} </p>
                                <textarea name="contact_content" class="form-control" id="" cols="30" rows="10"></textarea>
                                <button class="btn btn-primary" type="submit">Gửi liên hệ</button>
                            </form>
                        </div>
                        <div class="kn">
                            <p>KẾT NỐI VỚI CHÚNG TÔI</p>
                            <img src="http://localhost:8888/khangmaunhi.vn/public/assets/frontend/img/nhataitro.png" />
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop
