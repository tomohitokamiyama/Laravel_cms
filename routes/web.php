<?php

use App\Cafeterian;
use Illuminate\Http\Request;


/**
 * 自己紹介ページ
 */
Route::get('/profile', function () {
    
      return view('profile');

    
});


/**
 * カフェ店舗一覧表示
 */
Route::get('/', 'CafesController@index');




//登録処理
Route::post('/cafes','CafesController@store');



/**
 * カフェ店舗名を削除
 */
Route::delete('/cafes/{cafeterian}', 'CafesController@destro');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


