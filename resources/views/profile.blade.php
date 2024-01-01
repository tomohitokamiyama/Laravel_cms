<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    
    <!-- CSS -->
    <link href="{{ asset('css/front.css') }}"rel="stylesheet">
    
    <!-- Scripts -->
    <script src="{{ asset('js/front.js') }}" defer></script>

   <title>カフェ</title>
</head>
<body>
    
    <!-- ローディング画面 -->
    <div id="loading">
        <p>Loading...</p>
        <div id="loading-screen"></div>
         <div id="loading-screen2"></div>
    </div>
    
    
    <div id="home" class="big-gazou">
    <nav>
        <ul class="first-nav">
            <li> <a  href="{{ url('/home') }}">ログイン"！"</a></li>
            <li> <a  href="{{ url('/keijiban') }}">情報提供掲示板"！"</a></li>
        </ul>
    </nav>
    
    <div class="center">
        <h2 class="title">魅惑のひと時</h2>
        <p>みんなでカフェを共有してみよう！</p>
         <a  href="{{ url('/') }}">カフェを探そう</a>
     
     </div>
     
    
    </div>
    
    
    <section class="contact">
    <div class="contact-content wrapper">
        <h2 class="title">お問い合わせ</h2>
        <p>ご不明点があればお問い合わせください</p>
        <a class="btn" href="{{ url('/contact') }}">お問い合わせフォーム</a>
        
        
    </div>
</section>
    
</body>
</html>
