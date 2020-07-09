<?php
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\FuncLib;
use App\Library\PHPDev\ThumbImg;
?>
<div id="header">
    <div class="container">
        <div class="logo-web">
            <a href=""><img src="http://localhost/project.vn/khangmaunhi/public/assets/frontend/img/LOGO01.png" alt=""></a>
        </div>
        <div class="top">
            <div class="hot-search">
                <div class="hotline">
                    Hotline: <span>0982.91.55.53</span>
                </div>
                <div class="search">
                    <form action="" method="GET">
                        <input type="text" name="" value="" class="form-control">
                        <button type="submit" class="btn btn-primary icon-search"></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="menu">
            <div class="navigation mNavigation">
                           <span class="navigationIcon">
                               <span></span>
                           </span>
                <div class="backdropNav"></div>
                <ul>
                    <li class="search-sh">
                        <div class="hot-search">
                            <div class="hotline">
                                Hotline: <span>0982.91.55.53</span>
                            </div>
                            <div class="search">
                                <form action="" method="GET">
                                    <input type="text" name="" value="" class="form-control">
                                    <button type="submit" class="btn btn-primary icon-search"></button>
                                </form>
                            </div>
                        </div>
                    </li>
                    @if(isset($arrCategory) && !empty($arrCategory))
                        @foreach($arrCategory as $cat)
                            @if($cat->category_menu == CGlobal::status_show && $cat->category_parent_id == 0)
                                <?php $i=0 ?>
                                @foreach($arrCategory as $sub)
                                    @if($sub->category_menu == CGlobal::status_show && $sub->category_parent_id == $cat->category_id)
                                        <?php $i++; ?>
                                    @endif
                                @endforeach
                                <li>
                                    <a @if($i > 0) @endif title="{{$cat->category_title}}" href="">
                                        {{$cat->category_title}}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>