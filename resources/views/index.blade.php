@extends('layouts.layout')

@section('content')
<section id="main-visual">
  <div class="container mv-wrapper">
    <div class="mv-left">
      <p class="text">魔法のシーシャとマカロンのお店</p>
      <h1>macahoo</h1>
    </div>
  </div>
</section>
<section id="concept">
  <div class="container">
    <div class="title">
      <h2>Concept</h2>
      <span class="ja-title">コンセプト</span>
    </div>
    <div class="concept-copy">
      <h3 class="main-copy">魔法＝シーシャ×マカロン</h3>
      <p class="concept-text about-text">――異界に来たよう？　いいえ、ここは”異界そのもの”、なのです。</p>
      <p class="concept-text about-text">忙しない日々を送っている人間の皆さまに、穏やかで幻想的な時間をおすそ分け。<br>ここは魔法使い御用達、シーシャとマカロンの不思議なカフェラウンジです。</p>
      <p class="concept-text about-text">たっぷりの煙と、繊細な味わいのマカロンを心行くまでご堪能ください。</p>
      <p class="concept-text about-text">きっと感じていただけるでしょう。<br>甘そうでほろ苦い、不思議だけれどどこか落ち着くひとときを。</p>
    </div>
  </div>
</section>
<section id="feature">
  <div class="container">
    <div class="title">
      <h2>Feature</h2>
      <span class="ja-title">こだわり</span>
    </div>
    <div class="feature-wrapper">
      <div class="feature-box">
        <img class="feature-image" src="./image/hookah-stand1.jpg" alt="hookeh-feature">
        <div class="feature-text">
          <span class="feature-number">Point1</span>
          <h3 class="feature-title">シーシャ</h3>
          <p class="feature-about about-text">詳しく見る</p>
        </div>
      </div>
      <div class="feature-box">
        <img class="feature-image" src="./image/macarons2.jpg" alt="macaron-feature">
        <div class="feature-text">
          <span class="feature-number">Point2</span>
          <h3 class="feature-title">マカロン</h3>
          <p class="feature-about about-text">詳しく見る</p>
        </div>
      </div>
      <div class="feature-box">
        <img class="feature-image" src="./image/candle3.jpg" alt="floor-feature">
        <div class="feature-text">
          <span class="feature-number">Point3</span>
          <h3 class="feature-title">空間</h3>
          <p class="feature-about about-text">詳しく見る</p>
        </div>
      </div>
    </div>
</section>
<section id="menu">
  <div class="container">
    <div class="title">
      <h2>Menu</h2>
      <span class="ja-title">メニュー一覧</span>
    </div>
    <p>シーシャ、マカロン、ドリンクのメニューはこちらからどうぞ。</p>
    <div class="btn-wrapper">
      <div class="button">
        <a>シーシャフレーバー</a>
      </div>
      <div class="button">
        <a>マカロン</a>
      </div>
      <div class="button">
        <a>ドリンク</a>
      </div>
    </div>
  </div>
</section>
<section id="recommend">
  <div class="container">
    <a href="" class="modalopen" data-target="modal-recommend">
      <div class="title recommend-title">
        <h2>Recommend</h2>
        <span class="ja-title">季節のおすすめセット</span>
      </div>
    </a>
    <div class="modal-main js-modal" id="modal-recommend">
      <div class="inner">
        <div class="recommend-set">
          <p class="recommend-text about-text">■今季、当店の魔法使い一同からおすすめさせていただくセットは…？</p>
          <h3 class="recommend-name">～怪しげ果実の芳醇セット～</h3>
          <div class="recommend-wrapper">
            <p class="recommend-text about-text"><b>シーシャ</b><br>ブルーベリータルトMIX</p>
            <p class="recommend-text about-text"><b>マカロン</b><br>ホワイトラズベリー<br>クランベリークリーム<br>ベリーナッツモカ</p>
          </div>
          <p class="recommend-text about-text">and drink…<br><br>人間界のとある貴婦人がいらっしゃる度にご注文されたセットです。彼女は魔法に魅了され、いつしか自ら魔術を求めるようになりました。「魔法使いが作ったマカロンには魔力が宿る」、「魔女が吸ったシーシャの煙は魔除けになる」…。果たして本当でしょうか。いつしか姿を消してしまった彼女に、このセットを振舞えることを信じています。</p>
        </div>
        <div class="button">
          <a class="modalClose">Close</a>
        </div>
      </div>
    </div>
</section>
<section id="store">
  <div class="container">
    <div class="title">
      <h2>Store</h2>
      <span class="ja-title">お買い物</span>
    </div>
    <div class="store-about">
      <p class="store-text about-text">シーシャフレーバーやマカロン・その他人間界では馴染みのないあれこれ、取り揃えました。</p>
      <p class="store-text about-text">今では大変便利にお買い物ができるそうですね。<br>文明の進化とは素晴らしいものです。</p>
    </div>
    <div class="button store-btn">
      <a>macahooのストアへ</a>
    </div>
  </div>
</section>
<section id="contact">
  <div class="container">
    <div class="title">
      <h2>Contact</h2>
      <span class="ja-title">ご予約・お問い合わせ</span>
    </div>
    <div class="form">
      <p class="about-text">お席のご予約、当店へのお問い合わせはこちらです。<br>3営業日以内に当店からの返信が無かった場合は、お手数ですがお電話くださいませ。</p>
      <form action="confirm.php" method="post">
        <div class="ct-block">
          <label class="contact-text" for="name">お名前</label>
          <input type="text" name="yourname" required placeholder="例：田中太郎" class="form-name">
        </div>
        <div class="ct-block">
          <label class="contact-text" for="email">メールアドレス</label>
          <input type="text" name="yourmail" required placeholder="例：xxxxx@△△△△△.com" class="form-mail">
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
      <span class="ja-title">このサイトについて</span>
    </div>
    <div class="about-box">
      <p class="about-text"><b>macahoo</b></p>
      <p class="about-text">住所：○○○○○○○○○○<br>TEL：000-0000-0000</p>
    </div>
    <div class="about-box">
      <p class="about-text">制作：佐藤舞祐（さとうまゆ）</p>
      <p class="about-text">制作工数：8/14現在で6人日 ※8時間を1人日とする。</p>
      <p class="about-text">開発環境</p>
      <p class="about-text">OS：Windows、Linux</p>
      <p class="about-text">言語：HTML、CSS、PHP、JavaScript、jQuery</p>
      <p class="about-text">Webサーバー：Apache</p>
    </div>
  </div>
</section>
@endsection
