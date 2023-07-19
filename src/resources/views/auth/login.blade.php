<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログイン</title>
</head>
<body>
    @isset($errors)
        <p style='color:red'>{{ $errors->first('message') }}</p>
    @endisset
    <form name="loginform" action="/login" method="post" id="loginform">
        {{ csrf_field() }}
        <dl>
            <dt>メールアドレス：</dt>
            <dd>
                <input type="email" name="email" size="30"  />
                <span>{{ $errors->first('email') }}</span>
            </dd>
        </dl>
        <dl>
            <dt>パスワード：</dt>
            <dd>
                <input type="password" name="password" size="30"  />
                <span>{{ $errors->first('password') }}</span>
            </dd>
        </dl>
        <button type="submit" name="action" value="send">ログイン</button>
    </form>
</body>
</html>