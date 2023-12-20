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
Route::get('/', function () {
      $cafeterians = Cafeterian::orderBy('created_at', 'asc')->get();
    return view('cafeterians', [
        'cafeterians' => $cafeterians
    ]);
});




/**
 * カフェ店舗を追加
 */
Route::post('/cafes', function (Request $request) {
    
    
    // Eloquentモデル（登録処理）
    $cafeterians = new Cafeterian;
    $cafeterians->item_name = $request->item_name;
    $cafeterians->item_text = $request->item_text;
    $cafeterians->item_number = $request->item_number;
    $cafeterians->published = $request->published;
    $cafeterians->item_amount = $request->item_amount;
    $cafeterians->save(); 
    return redirect('/');
    
});



/**
 * カフェ店舗名を削除
 */
Route::delete('/cafes/{cafeterian}', function (Cafeterian $cafeterian) {
     $cafeterian->delete();       //追加
    return redirect('/');  //追加
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


