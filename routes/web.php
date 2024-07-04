<?php

use App\Http\Controllers\CafesController;
use Illuminate\Support\Facades\Route;

// カフェ一覧表示
Route::get('/', [CafesController::class, 'index']);

// カフェ登録処理
Route::post('/cafes', [CafesController::class, 'store']);

// カフェ更新画面
Route::post('/cafesedit/{cafeterians}', function(Cafeterian $cafeterians) {
    return view('cafesedit', ['cafeterians' => $cafeterians]);
});

// カフェ更新処理
Route::post('/cafes/update', [CafesController::class, 'update']);

// カフェ店舗名を削除
Route::delete('/cafes/{cafeterian}', [CafesController::class, 'destroy']);

// 自己紹介ページ
Route::get('/profile', function () {
    return view('profile');
});

// お問い合わせページ
Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


