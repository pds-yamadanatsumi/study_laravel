<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>リクエストDEMO</title>
</head>
<body>
    GETリクエストの値を表示する。空の場合「ゲスト」になる<br/>
    {{ $name }}
    <h1>ファザード確認用</h1>

    <form method="POST" action="{{ route('request.store') }}">
        @csrf

        <label for="question">質問:</label>
        <input type="text" id="question" name="question">
        <br />

        <label for="answer">回答:</label>
        <input type="text" id="answer" name="answer">
        <br />

        <label for="file">ファイル添付:</label>
        <input type="file" id="file" name="file">
        <br />

        <button type="submit">送信</button>
    </form>

    <div class="">
        <h2>フォームの値</h2>
        @if (Session::has('message'))
            <p>{{ session('message') }}</p>
        @endif
        質問： 
        @if (isset($question))
            {{ $question }}
        @endif       
        <br />
        回答：
        @if (isset($answer))
            {{ $answer }}
        @endif
    </div>
</body>
</html>