<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cafeterian;
use Validator;
use Auth;

class CafesController extends Controller{
    
    //カフェ一覧表示
    public function index(){
        $cafeterians = Cafeterian::orderBy('created_at', 'asc')->get();
    return view('cafeterians', [
        'cafeterians' => $cafeterians
        ]);
    }
    
    //更新（予定）
    public function update(Request $request){
     
       // Eloquentモデル（登録処理）
    $cafeterians = new Cafeterian;
    $cafeterians->item_name = $request->item_name;
    $cafeterians->item_text = $request->item_text;
    $cafeterians->item_number = $request->item_number;
    $cafeterians->published = $request->published;
    $cafeterians->item_amount = $request->item_amount;
    $cafeterians->save(); 
    return redirect('/');
        
    }
    
    //登録
    public function store(Request $request){
        
          // Eloquentモデル（登録処理）
    $cafeterians = new Cafeterian;
    $cafeterians->item_name = $request->item_name;
    $cafeterians->item_text = $request->item_text;
    $cafeterians->item_number = $request->item_number;
    $cafeterians->published = $request->published;
    $cafeterians->item_amount = $request->item_amount;
    $cafeterians->save(); 
    return redirect('/');
    }
    
    public function destro(Cafeterian $cafeterian){
        $cafeterian->delete();       //追加
    return redirect('/');  //追加
    }
    
}
