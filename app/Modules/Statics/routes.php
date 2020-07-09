<?php
/*
* @Created by: DUYNX
* @Author    : duynx@peacesoft.net / nguyenduypt86@gmail.com
* @Date      : 08/2019
* @Version   : 1.0
*/
$namespace = '\App\Modules\Statics\Controllers';

Route::group(['middleware' => ['web'], 'prefix' => '/', 'namespace' => $namespace], function(){

    Route::get('403', array('as' => 'page.403','uses' => 'BaseStaticsController@page403'));
    Route::get('404', array('as' => 'page.404','uses' => 'BaseStaticsController@page404'));

    Route::get('/', array('as' => 'SIndex','uses' => 'StaticsController@index'));

    Route::get('page-sick', array('as' => 'site.pageSick', 'uses' => 'StaticsController@pageSick'));

    Route::get('page-buy', array('as' => 'site.pageBuy', 'uses' => 'StaticsController@pageBuy'));

    Route::get('page-product', array('as' => 'site.pageProduct', 'uses' => 'StaticsController@pageProduct'));

    Route::get('page-BVCT', array('as' => 'site.pageBVCT', 'uses' => 'StaticsController@pageBVCT'));

    Route::get('page-cam-nang', array('as' => 'site.pageCamnang', 'uses' => 'StaticsController@pageCamnang'));

    Route::get('{name}-{id}.html', array('as' => 'site.actionRouter', 'uses' => 'StaticsController@actionRouter'))->where('name', '[A-Z0-9a-z)_\-]+')->where('id','[0-9]+');

});