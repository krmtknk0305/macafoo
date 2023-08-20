@extends('layouts.layout')

@section('content')
<section id="main-visual">
  <div class="container mv-wrapper">
    <div class="mv-left">
      <p>魔法のシーシャとマカロンのお店</p>
      <h1>macahoo</h1>
    </div>
  </div>
</section>
<section id="concept">
  <div class="container scroll-up">
    <div class="title">
      <h2>Concept</h2>
      <span>コンセプト</span>
    </div>
    <div class="concept-copy">
      <h3 class="main-copy">魔法＝シーシャ×マカロン</h3>
      <p>――異界に来たよう？  いいえ、ここは”異界そのもの”、なのです。</p>
      <p>忙しない日々を送っている人間の皆さまに、穏やかで幻想的な時間をおすそ分け。<br>ここは魔法使い御用達、シーシャとマカロンの不思議なカフェラウンジです。</p>
      <p>たっぷりの煙と、繊細な味わいのマカロンを心行くまでご堪能ください。</p>
      <p>きっと感じていただけるでしょう。<br>甘そうでほろ苦い、不思議だけれどどこか落ち着くひとときを。</p>
    </div>
  </div>
</section>
<section id="feature">
  <div class="container scroll-up">
    <div class="title">
      <h2>Feature</h2>
      <span>こだわり</span>
    </div>
    <div class="feature-wrapper">
      <div class="feature-box">
        <a href ="#">
          <img class="feature-image" src="./image/hookah-stand1.jpg" alt="hookeh-feature">
          <div class="feature-text">
            <h3>Hookah</h3>
            <p>詳しく見る</p>
          </div>
        </a>
      </div>
      <div class="feature-box">
        <a href ="#">
          <img class="feature-image" src="./image/macarons2.jpg" alt="macaron-feature">
          <div class="feature-text">
            <h3>Macaron</h3>
            <p>詳しく見る</p>
          </div>
        </a>
      </div>
      <div class="feature-box">
        <a href ="#">
          <img class="feature-image" src="./image/candle3.jpg" alt="floor-feature">
          <div class="feature-text">
            <h3>Space</h3>
            <p>詳しく見る</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<section id="menu">
  <div class="container scroll-up">
    <div class="title">
      <h2>Menu</h2>
      <span>メニュー一覧</span>
    </div>
    <img class="book" src="./image/book.png" width="360px">
    <p>シーシャ、マカロン、ドリンクのメニューはこちらからどうぞ。</p>
    <span id="prev" class="slide-button prev"></span>
    <span id="next" class="slide-button next"></span>
    <div class="btn-wrapper" id="slider">
        <div class="menu-btn active">
          <a href=""><img class="menu-img" src="./image/hookah-top2.jpg" width="200px"></a>
          <h3>Hookah</h3>
        </div>
        <div class="menu-btn">
          <a href=""><img class="menu-img" src="./image/macarons1.jpg" width="200px"></a>
          <h3>Macaron</h3>
        </div>
        <div class="menu-btn">
          <a href=""><img class="menu-img" src="./image/drink.jpg" width="200px"></a>
          <h3>Drink etc.</h3>
        </div>
    </div>
  </div>
</section>
<section id="recommend">
  <div class="container scroll-up">
    <a href="" class="modalopen" data-target="modal-recommend">
      <div class="title recommend-title">
        <h2>Recommend</h2>
        <span>季節のおすすめセット</span>
        <p>今季、当店の魔法使い一同からおすすめさせていただくセットは…？</p>
      </div>
    </a>
  </div>
  <div class="modal-main js-modal" id="modal-recommend">
      <div class="inner">
        <div class="inner-content">
          <img src="./image/recommend-img.png" width="840px">
          <p>人間界のとある貴婦人がいらっしゃる度にご注文されたセットです。彼女は魔法に魅了され、いつしか自ら魔術を求めるようになりました。「魔法使いが作ったマカロンには魔力が宿る」、「魔女が吸ったシーシャの煙は魔除けになる」…。果たして本当でしょうか。いつしか姿を消してしまった彼女に、このセットを振舞えることを信じています。</p>
          <div class="button">
            <a class="modalClose">Close</a>
          </div>
        </div>
      </div>
    </div>
</section>
<section id="store">
  <div class="container scroll-up">
    <div class="title">
      <h2>Store</h2>
      <span>お買い物</span>
    </div>
    <img class="cart" src="./image/cart.png" width="320px">
    <p>シーシャフレーバーやマカロン・その他人間界では馴染みのないあれこれ、取り揃えました。</p>
    <p>今では大変便利にお買い物ができるそうですね。<br>文明の進化とは素晴らしいものです。</p>
    <div class="button store-btn">
      <a href ="">macahooのストアへ</a>
    </div>
  </div>
</section>
<section id="contact">
  <div class="container">
    <div class="title scroll-up">
      <h2>Contact</h2>
      <span>ご予約・お問い合わせ</span>
    </div>
    <div class="form scroll-up">
      <p>お席のご予約、当店へのお問い合わせはこちらです。<br>3営業日以内に当店からの返信が無かった場合は、お手数ですがお電話くださいませ。</p>
      <form action="contact" method="post">
        @csrf
        <div class="ct-block">
          <label class="contact-text" for="name">お名前</label>
          <input type="text" name="yourname" required placeholder="例 : 田中太郎" class="form-name">
        </div>
        <div class="ct-block">
          <label class="contact-text" for="email">メールアドレス</label>
          <input type="text" name="yourmail" required placeholder="例 : xxxxx@△△△△△.com" class="form-mail">
        </div>
        <div class="ct-block">
          <label class="contact-text" for="main">主なご用件</label>
          <div class="cp-howto">
            <select name="main-request" required>
              <option value="" hidden>ご選択ください</option>
              <option value="1">お席のご予約について</option>
              <option value="2">サービスについて</option>
              <option value="3">ネットストアのご利用について</option>
              <option value="4">ご購入いただいた商品について</option>
              <option value="5">求人募集について</option>
              <option value="6">その他のお問い合わせ</option>
            </select>
          </div>
        </div>
        <div class="ct-block">
          <label class="contact-text" for="request-about">お問い合わせ内容</label>
          <textarea name="request-about" id="request-about" cols="60" rows="6" placeholder="こちらにご記入お願いします。" required></textarea>
        </div>
        {{ csrf_field() }}
        <div class="ct-block">
          <input class="send-button" type="submit" value="内容を確認する">
        </div>
      </form>
    </div>
  </div>
</section>
<section id="about">
  <div class="container">
    <div class="title">
      <h2>About</h2>
      <span>このサイトについて</span>
    </div>
    <div class="about-box">
      <p><b>macahoo</b></p>
      <p>住所 : ○○○○○○○○○○<br>TEL : 000-0000-0000</p>
    </div>
    <div class="about-box">
      <p>制作 : 佐藤舞祐（さとうまゆ）</p>
      <p>制作 : 工数8/19現在で9人日 ※8時間を1人日とする。</p>
      <p>開発環境</p>
      <p>OS : Windows</p>
      <p>言語 : HTML、CSS、PHP(Laravel)、JavaScript、jQuery</p>
      <p>Webサーバー : Apache</p>
    </div>
  </div>
</section>
@endsection
