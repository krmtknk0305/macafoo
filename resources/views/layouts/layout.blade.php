<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>macahoo</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/other.css') }}">
    <script src="{{ asset('js/jQuery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>
    <header>
        <nav class="g-navi">
            <div class="container nav-wrapper">
                <!-- グローバルナビゲーション -->
                <ul>
                  <li class="nav-item"><a href="index#concept">CONCEPT</a></li>
                  <li class="nav-item"><a href="index#feature">FEATURE</a></li>
                  <li class="nav-item"><a href="index#menu">MENU</a></li>
                  <li class="nav-item"><a href="index#store">STORE</a></li>
                  <li class="nav-item"><a href="index#contact">CONTACT</a></li>
                  <li class="nav-item"><a href="index#about">ABOUT</a></li>
                </ul>
                <!-- ハンバーガーメニュー -->
            </div>
        </nav>
    </header>
  @yield('content')
    <footer>
        <div class="container">
            <div class="logo-wrapper">
                <a href="#" class="logo">macahoo</a>
                <div class="sns-block">
                    <a class="mark" href="https://twitter.com/" target="_blank">
                        <img class="sns-mark" src="./image/2021 Twitter logo - white.png" alt="twitter" width="30px">
                    </a>
                    <a class="mark" href="https://www.facebook.com/" target="_blank">
                        <img class="sns-mark" src="./image/f_logo_RGB-White_58.png" alt="facebook" width="30px">
                    </a>
                    <a class="mark" href="https://www.instagram.com/" target="_blank">
                        <img class="sns-mark" src="./image/Instagram_Glyph_White.png" alt="instagram" width="30px">
                    </a>
                </div>
            </div>
            <small>© 2023 Mayu Sato</small>
        </div>
    </footer>
</body>
</html>
