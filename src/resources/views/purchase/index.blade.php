<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>商品購入フォーム</title>
</head>
<body>
    <div class="">
        <p>userId=1が買った商品一覧</p>
        <ul>
            @forelse ($user->purchases as $purchase) 
                <li>{{ $purchase->name }}</li>
            @empty
                データが１件もありません。
            @endforelse
        </ul>
    </div>
    <div id="purchase">
        <dl>
            <dt>商品名</dt>
            <dd>
                <input name="name" size="30"  />
                <span>{{ $errors->first('name') }}</span>
            </dd>
        </dl>
        <button id="action">送信</button>
    </div>
<script src="{{ asset('js/purchase.js') }}"></script>
</body>
</html>