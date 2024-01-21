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
        
        
    <!-- ナビゲーションメニュー -->
    <nav>
        <button id="menu-open" class="btn-menu">
            <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                <title>メニューを開く</title>
                <path clip-rule="evenodd" d="m4.25 8c0-.41421.33579-.75.75-.75h14c.4142 0 .75.33579.75.75s-.3358.75-.75.75h-14c-.41421 0-.75-.33579-.75-.75zm0 4c0-.4142.33579-.75.75-.75h14c.4142 0 .75.3358.75.75s-.3358.75-.75.75h-14c-.41421 0-.75-.3358-.75-.75zm.75 3.25c-.41421 0-.75.3358-.75.75s.33579.75.75.75h14c.4142 0 .75-.3358.75-.75s-.3358-.75-.75-.75z" fill-rule="evenodd"/>
            </svg>
        </button>
        <div id="menu-panel">
            <button id="menu-close" class="btn-menu">
                <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <title>メニューを閉じる</title>
                    <path clip-rule="evenodd" d="m7.53033 6.46967c-.29289-.29289-.76777-.29289-1.06066 0s-.29289.76777 0 1.06066l4.46963 4.46967-4.46963 4.4697c-.29289.2929-.29289.7677 0 1.0606s.76777.2929 1.06066 0l4.46967-4.4696 4.4697 4.4696c.2929.2929.7677.2929 1.0606 0s.2929-.7677 0-1.0606l-4.4696-4.4697 4.4696-4.46967c.2929-.29289.2929-.76777 0-1.06066s-.7677-.29289-1.0606 0l-4.4697 4.46963z" fill-rule="evenodd"/>
                </svg>
            </button>
            
            <ul class="menu-list">
            <li> <a  href="{{ url('/home') }}">ログイン"！"</a></li>
            <li> <a  href="{{ url('/keijiban') }}">情報提供掲示板"！"</a></li>
            </ul>
            
        </div>
    </nav>
    <nav>
       
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
