<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>macahoo</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="./js/script.js"></script>
</head>
<body>
  <header>
    <nav class="g-navi">
      <div class="container nav-wrapper">
        <!-- グローバルナビゲーション -->
        <ul>
          <li class="nav-item"><a href="#concept">CONCEPT</a></li>
          <li class="nav-item"><a href="#feature">FEATURE</a></li>
          <li class="nav-item"><a href="#menu">MENU</a></li>
          <li class="nav-item"><a href="#store">STORE</a></li>
          <li class="nav-item"><a href="#contact">CONTACT</a></li>
          <li class="nav-item"><a href="#about">ABOUT</a></li>
        </ul>
        <!-- ハンバーガーメニュー -->
      </div>
    </nav>
  </header>
  @yield('content')
  <footer>
    <div class="container">
      <div class="footer-content">
        <div class="logo-wrapper">
          <a href="#" class="logo">macahoo</a>
          <div class="sns-block">
            <a class="mark" href="https://twitter.com/" target="_blank">
              <img class="sns-mark" src="./image/twitter_mark.png" alt="twitter" width="30px">
            </a>
            <a class="mark" href="https://www.facebook.com/" target="_blank">
              <img class="sns-mark" src="./image/facebook_mark.png" alt="facebook" width="30px">
            </a>
            <a class="mark" href="https://www.instagram.com/" target="_blank">
              <img class="sns-mark" src="./image/instagram_mark.png" alt="instagram" width="30px">
            </a>
          </div>
        </div>
      </div>
      <small>© 2023 Mayu Sato</small>
    </div>
  </footer>
</body>
</html>
