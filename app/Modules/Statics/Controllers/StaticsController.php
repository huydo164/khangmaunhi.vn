<?php
/*
* @Created by: DUYNX
* @Author    : nguyenduypt86@gmail.com
* @Date      : 06/2016
* @Version   : 1.0
*/
namespace App\Modules\Statics\Controllers;

use App\Library\PHPDev\Loader;
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\Utility;

class StaticsController extends BaseStaticsController{

    public function index(){

        Loader::loadJS('libs/owl.carousel/owl.carousel.min.js', CGlobal::$postEnd);
        Loader::loadCSS('libs/owl.carousel/owl.carousel.min.css', CGlobal::$postHead);
        

        $messages = Utility::messages('messages');

        return view('Statics::content.index', [
            'messages'=>$messages,
            
        ]);
    }

    public function pageSick(){
        return view('Statics::content.page-sick');
    }

    public function pageBuy(){
        return view('Statics::content.page-buy');
    }

    public function pageProduct(){
        return view('Statics::content.page-product');
    }
}