<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <script src="{{ asset('js/jQuery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>
    <header>
        <div class="admin_title">
            <h1>問い合わせ管理</h1>
        </div>
    </header>
    <section id="admin">
        <div class="container">
            <table>
                <tr>
                    <th>問い合わせ日時</th>
                    <th>名前</th>
                    <th>メールアドレス</th>
                    <th>問い合わせ内容</th>
                    <th>詳細</th>
                    <th>返信メール</th>
                </tr>
                @foreach ($list as $list)
                <tr>
                    <div class="contact_about">
                        <td>{{ $list->created_at }}</td>
                        <td>{{ $list->name }}</td>
                        <td>{{ $list->mail }}</td>
                        <td>{{ $list->title }}</td>
                        <td>{{ $list->about }}</td>
                        <td><a href="mailto:{{ $list->mail }}">送付</a></td>
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
