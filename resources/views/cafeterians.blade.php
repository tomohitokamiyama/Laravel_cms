@extends('layouts.app')
@section('content')

<link href="{{ asset('css/back.css') }}" rel="stylesheet">

<div class="card-body">
    <div class="card-title">カフェの名前</div>

    <!-- カフェ登録フォーム -->
    <form enctype="multipart/form-data" action="{{ url('cafes') }}" method="POST" class="form-horizontal">
        @csrf <!-- CSRFトークンを含める -->

        <!-- カフェのタイトル -->
        <div class="form-row">
            <div class="form-group">
                <div class="col-sm-6">
                    <input type="text" name="item_name" class="form-control" required>
                </div>
            </div>
        </div>

        <!-- コメント -->
        <div class="form-group">
            <label for="coment" class="col-sm-3 control-label">コメント欄</label>
            <input type="text" id="coment" name="item_text" class="form-control" required>
        </div>

        <!-- 予算 -->
        <div class="form-group">
            <label for="yosan" class="col-sm-3 control-label">価格帯</label>
            <select name="item_number" class="form-control" required>
                <option value="500円～1000円">500円～1000円</option>
                <option value="1000円～2000円">1000円～2000円</option>
                <option value="2000円～3000円">2000円～3000円</option>
                <option value="3000円以上">3000円以上</option>
            </select>
        </div>

        <!-- 滞在時間 -->
        <div class="form-group">
            <label for="number" class="col-sm-3 control-label">滞在できる時間</label>
            <input type="text" name="item_amount" class="form-control" required>
        </div>

        <!-- 人数 -->
        <div class="form-group">
            <label for="human" class="col-sm-3 control-label">来客人数</label>
            <select name="item_human" class="form-control" required>
                <option value="1~2人">1~2人</option>
                <option value="2~3人">2~3人</option>
                <option value="3~4人">3~4人</option>
                <option value="団体">団体</option>
            </select>
        </div>

        <!-- 公開日 -->
        <div class="form-group">
            <label for="koukaibi" class="col-sm-3 control-label">公開日</label>
            <input type="date" name="published" class="form-control" required>
        </div>

        <!-- 画像 -->
        <div class="form-group">
            <label for="item_img" class="col-sm-3 control-label">画像</label>
            <input type="file" name="item_img" class="form-control">
        </div>

        <!-- カフェ登録ボタン -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>

<!-- Cafe: 既に登録されているカフェのリスト -->
@if (count($cafeterians) > 0)
    <div class="container">
        <table class="table">
            <!-- テーブルヘッダ -->
            <thead>
                <th>カフェ一覧</th>
                <th>&nbsp;</th>
            </thead>
            <!-- テーブル本体 -->
            <tbody>
                @foreach ($cafeterians as $cafeterian)
                    <tr>
                        <!-- カフェ名前と画像 -->
                        <td>
                            <div>{{ $cafeterian->item_name }}</div>
                            <div>
                                @if($cafeterian->item_img)
                                    <img src="{{ $cafeterian->item_img }}" width="300">
                                @else
                                    <p>画像なし</p>
                                @endif
                            </div>
                        </td>

                        <!-- 金額 -->
                        <td>
                            <div>{{ $cafeterian->item_number }}</div>
                        </td>

                        <!-- コメント -->
                        <td>
                            <div>{{ $cafeterian->item_text }}</div>
                        </td>

                        <!-- 滞在時間 -->
                        <td>
                            <div>{{ $cafeterian->item_amount }}</div>
                        </td>

                        <!-- 人数 -->
                        <td>
                            <div>{{ $cafeterian->item_human }}</div>
                        </td>

                        <!-- 日付 -->
                        <td>
                            <div>{{ $cafeterian->published }}</div>
                        </td>

                       

                        <!-- カフェ: 削除ボタン -->
                        <td>
                            <form action="{{ url('cafes/'.$cafeterian->id) }}" method="POST">
                                @csrf <!-- CSRFからの保護 -->
                                @method('DELETE') <!-- 擬似フォームメソッド -->
                                <button type="submit" class="btn btn-danger">削除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif
@endsection
