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
use App\Modules\Models\Category;
use Illuminate\Support\Facades\Redirect;

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

    public function pageBVCT(){
        return view('Statics::content.pageBVCT');
    }

    public function pageCamnang(){
        return view('Statics::content.pageCamnang');
    }

    /*public function actionRouter($catname, $catid){
        if ($catname != '' && $catid > 0){
            $arrcat = Category::getById($catid);
            if ($arrcat != null){
                $type_keywords = $arrcat->category_type_id;
                if ($type_keywords == 'group_statics'){
                    return self::pageStatics($catname, $catid);
                }
                elseif($type_keywords == 'group_buy'){
                    return self::pageBuy($catname, $catid);
                }
            }
            else{
                return Redirect::route('page.404');
            }
        }
        else{
            return Redirect::route('page.404');
        }
    }*/
}