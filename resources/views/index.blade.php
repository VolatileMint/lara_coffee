<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOPページ</title>
</head>
<body>
    <h1>ログイン画面</h1>
    <form method="post" action="{{ url('/login_check') }}">
        {{ csrf_field() }}
        メールアドレス：<input type="email" name="email"><br>
        パスワード:<input type="password" name="passwd"><br>
        <button type="submit">ログイン</button>
    </form>
    <a href="">新規登録はこちら</a><br>
    <a href="">パスワードを忘れた場合はこちら</a><br>
</body>
</html>