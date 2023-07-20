<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>サービスコンテナのDemo</title>
</head>
<body>
    <h1>バインドの値</h1>
    <p>バインド：{{ $number }}</p>
    <p>バインド２：{{ $number2 }}</p>
    <br />
    <p>シングルトン：{{ $randomNumber1 }}</p>
    <p>シングルトン2：{{ $randomNumber2 }}</p>
    <br />
    <p>デバッグ APP_DEBUGの値が来る：{{ $debug }}</p>
</body>
</html>