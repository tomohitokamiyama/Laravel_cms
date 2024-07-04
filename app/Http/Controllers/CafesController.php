<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cafeterian;
use Validator;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class CafesController extends Controller
{
    // カフェ一覧表示
    public function index()
    {
        $cafeterians = Cafeterian::orderBy('created_at', 'asc')->get();
        return view('cafeterians', [
            'cafeterians' => $cafeterians
        ]);
    }

    // 登録
    public function store(Request $request)
    {
        // CSRFトークンとセッションのデバッグログを追加
        Log::info('CSRF Token', ['token' => $request->session()->token()]);
        Log::info('Request CSRF Token', ['token' => $request->_token]);

        // リクエスト内容のログ
        Log::info('Request data', $request->all());

        // バリデーションを追加
        $validator = Validator::make($request->all(), [
            'item_name' => 'required|string|max:255',
            'item_text' => 'required|string|max:1000',
            'item_number' => 'required|string|max:255',
            'item_amount' => 'required|string|max:255',
            'item_human' => 'required|string|max:255',
            'published' => 'required|date',
            'item_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            Log::error('Validation failed', $validator->errors()->toArray());
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }

        // ファイルの取得とS3へのアップロード
        $file = $request->file('item_img');
        if ($file) {
            $filename = $file->getClientOriginalName();
            Log::info('Uploading file', ['filename' => $filename]);
            $imagePath = $file->storeAs('images', $filename, 's3');
            $url = Storage::disk('s3')->url($imagePath);
            Log::info('File uploaded to S3', ['url' => $url]);
        } else {
            $url = "";
            Log::info('No file uploaded');
        }

        // Eloquentモデル（登録処理）
        $cafeterians = new Cafeterian;
        $cafeterians->item_name = $request->item_name;
        $cafeterians->item_text = $request->item_text;
        $cafeterians->item_number = $request->item_number;
        $cafeterians->item_amount = $request->item_amount;
        $cafeterians->item_human = $request->item_human;
        $cafeterians->item_img = $url;
        $cafeterians->published = $request->published;
        $cafeterians->timestamps = false;

        $cafeterians->save();
        Log::info('Cafeterian saved', ['id' => $cafeterians->id, 'img_url' => $cafeterians->item_img]);
        return redirect('/');
    }

    // 削除
    public function destroy(Cafeterian $cafeterian)
    {
        $cafeterian->delete();
        return redirect('/');
    }
}

