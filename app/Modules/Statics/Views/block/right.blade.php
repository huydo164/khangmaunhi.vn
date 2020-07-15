<?php
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\FuncLib;
use App\Library\PHPDev\ThumbImg;
?>

<div class="cotainer">
    <div class="right-page">
        <div class="list-news">
            <div class="row">
                @if(isset($data_cat_4) && !empty($data_cat_4))
                    @foreach($data_cat_4 as $key => $item)
                        <div class="col-md-12">
                            <a href="{{FuncLib::buildLinkDetailStatic($item->statics_id, $item->statics_title)}}">
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
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>