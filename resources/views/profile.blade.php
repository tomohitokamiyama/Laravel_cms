<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    
    <link href="{{ asset('css/front.css') }}"rel="stylesheet">
   <title>カフェ</title>
</head>
<body>
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
     
     <iframe width="250" height="150" src="https://www.youtube.com/embed/xXPUnmhth7s?si=clXmTgDCY1HhKfYm" title="YouTube video player" 
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</body>
</html>
