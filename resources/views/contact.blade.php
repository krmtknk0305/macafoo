@extends('layouts.layout')

@section('content')

@isset($name, $mail, $title, $about)
<section id ="confirm">
    <div class="container">
        <div class="confirm-title">
            <h2>お問い合わせ内容確認画面</h2>
            <p>ご入力いただいた内容はこちらでよろしいでしょうか。<br>お間違いがなければ送信ボタンを押下ください。</p>
        </div>
        <div class="form-confirm">
            <ul>
                <li>
                    <span>お名前</span>
                    <p>{{ $name }}</p>
                </li>
                <li>
                    <span>メールアドレス</span>
                    <p>{{ $mail }}</p>
                </li>
                <li>
                    <span>主なご用件</span>
                    <p>
                        @switch($title)
                            @case(1)
                                {{ "お席のご予約について" }}
                                @break
                            @case(2)
                                {{ "サービスについて" }}
                                @break
                            @case(3)
                                {{ "ネットストアのご利用について" }}
                                @break
                            @case(4)
                                {{ "ご購入いただいた商品について" }}
                                @break
                            @case(5)
                                {{ "求人募集について" }}
                                @break
                            @case(6)
                                {{ "その他のお問い合わせ" }}
                                @break
                        @endswitch
                    </p>
                </li>
                <li>
                    <span>お問い合わせ内容</span>
                    <p>{{ $about }}</p>
                </li>
            </ul>
            <form action="send" method="post">
            @csrf
                <input type="hidden" name="name" value="{{ $name }}">
                <input type="hidden" name="mail" value="{{ $mail }}">
                <input type="hidden" name="title" value="{{ $title }}">
                <input type="hidden" name="about" value="{{ $about }}">
                <div class="confirm-btn">
                    <input type="button" class="send-button" onclick="history.back()" value="戻る">
                    <input type="submit" class="send-button" value="送信">
                </div>
            </form>
        </div>
    </div>
</section>
@endisset

@endsection
