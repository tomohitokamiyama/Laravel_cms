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
 * お問い合わせページ
 */
Route::get('/contact', function () {
    
      return view('contact');

    
});


/**
 * カフェ店舗一覧表示
 */
Route::get('/', 'CafesController@index');




//登録処理
Route::post('/cafes','CafesController@store');

//更新画面
Route::post('/cafesedit/{cafeterians}', function(Cafeterian $cafeterians) {
    //{books}id 値を取得 => Book $books id 値の1レコード取得
    return view('cafesedit', ['cafeterians' => $cafeterians]);
});


//更新処理
Route::post('/cafes/update', 'CafesController@update');

/**
 * カフェ店舗名を削除
 */
Route::delete('/cafes/{cafeterian}', 'CafesController@destro');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


