<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/other.css') }}">
    <script src="{{ asset('js/jQuery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>
    <header>
        <div class="admin_title">
            <h1>管理画面</h1>
        </div>
    </header>
    <section id="admin">
        <div class="container">
            <table>
                <tr>
                    <th class="list_created_at">問い合わせ日時</th>
                    <th class="list_name">名前</th>
                    <th class="list_mail">メールアドレス</th>
                    <th class="list_title">問い合わせ内容</th>
                    <th class="list_about">詳細</th>
                </tr>
                @foreach ($list as $list)
                <tr>
                    <div class="contact_about">
                        <td class="list_created_at">{{ $list->created_at }}</td>
                        <td class="list_name">{{ $list->name }}</td>
                        <td class="list_mail">{{ $list->mail }}</td>
                        <td class="list_title">{{ $list->title }}</td>
                        <td class="list_about">{{ $list->about }}</td>
                        <td class="mail_submit"><a href="mailto:{{ $list->mail }}">メール</a></td>
                    </div>
                </tr>
                @endforeach
            </table>
        </div>
    </section>
    <footer>
          <small>© 2023 Mayu Sato</small>
    </footer>
</body>
</html>
