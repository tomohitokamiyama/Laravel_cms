@extends('layouts.app')
@section('content')
@csrf

 <link href="{{ asset('css/back.css') }}"rel="stylesheet">


                
                
    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            カフェの名前
        </div>
                           
                      
        　
            
        <!-- カフェ登録フォーム -->
        <form enctype="multipart/form-data" action="{{ url('cafes') }}" method="POST" class="form-horizontal">
            @csrf

            <!-- カフェのタイトル -->
            <div class="form-row">
            <div class="form-group">
                <div class="col-sm-6">
                    <input type="text" name="item_name" class="form-control">
                </div>
            </div>
            
　　　　　　
            </div>
            <!-- コメント -->
            
            <div class="form-group">
                    <label for="coment" class="col-sm-3 control-label">コメント欄</label>
                    <input type="text" name="item_text" class="form-control">
            </div>
            
            <!-- 予算 -->
            <div class="form-group">
                    <label for="yosan" class="col-sm-3 control-label">予算</label>
                    <select name="item_number" class="form-control">
                        <option value="1000">1000</option>
                        <option value="2000">2000</option>
                        <option value="3000">3000</option>
                        <option value="4000">4000</option>
                    </select>
            </div>
            
            <!-- 滞在時間 -->
             <div class="form-group ">
                    <label for="number" class="col-sm-3 control-label">滞在できる時間</label>
                    <input type="text" name="item_amount" class="form-control">
            <div class="form-group ">
                
                <!-- 人数 -->
            <div>
                    <label for="human" class="col-sm-3 control-label">人数キャパ</label>
                    <select name="item_human" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
            </div>

            
           
                
             <!-- 公開日 -->
            <div class="form-group">
                    <label for="koukaibi" class="col-sm-3 control-label">公開日</label>
                     <input type="date" name="published" class="form-control">
            </div>
            
            
           <!-- file追加 -->
　　　　　<div class="col-sm-6">
　　　　　    <lavel>画像</lavel>
　　　　　    <input type="file" name="item_img">
　　　　　</div>
            
　　　　　
            <!-- カフェ 登録ボタン -->
            <div class="form-group">
                @csrf
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </div>
            </div>
            @csrf
            
            <!-- 星評価 -->
                                 
                                 <div id="star">
　                                  <star-rating v-model="rating"></star-rating>
                                 </div>
                                
            
                                    
                            
        </form>
        
    </div>
    <!-- Cafe: 既に登録されてるカフェのリスト -->
    @if (count($cafeterians) > 0)
    
        
            
                <table class="table ">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>カフェ一覧</th>
                        <th>&nbsp;</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($cafeterians as $cafeterian)
                        <div class="container">
                            <tr>
                                <!-- カフェタイトル -->
                                <td >
                                    <div>{{ $cafeterian->item_name }}</div>
                                    <div><img src="upload/{{$cafeterian->item_img}}" width="300"></div>
                                </td>
                                
                                <!-- 金額 -->
                                <td >
                                    <div>{{ $cafeterian->item_number }}</div>
                                </td>
                                
                                 
                                
                            
                                <!-- コメント -->
                                <td >
                                    <div>{{ $cafeterian->item_text }}</div>
                                </td>
                                
                                 <!-- 滞在時間 -->
                                <td >
                                    <div>{{ $cafeterian->item_amount }}</div>
                                </td>
                                
                                <!-- 人数 -->
                                <td >
                                    <div>{{ $cafeterian->item_human }}</div>
                                </td>
                                
                                <!-- 日付 -->
                                <td >
                                    <div>{{ $cafeterian->published }}</div>
                                </td>
                                
                               
                            
                            
                              <!-- カフェ: 削除ボタン -->
                                <td>
                                　 <form action="{{ url('cafes/'.$cafeterian->id) }}" method="POST">
                                     @csrf               <!-- CSRFからの保護 -->
                                    @method('DELETE')   <!-- 擬似フォームメソッド -->
        
                                     <button type="submit" class="btn btn-danger">
                                        削除
                                    </button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach
                        
                        
                        
                    </tbody>
                </table>
            
                    </div>
    @endif
@endsection