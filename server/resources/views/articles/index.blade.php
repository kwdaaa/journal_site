<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>論文投稿アプリ</title>

    {{-- link:css + tab で雛形表示 --}}
    {{-- assetを書くことで、publicフォルダの中身ですよという指示になる。 --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    

    <h1>論文一覧</h1>

    <ul>
        {{-- foreach文。繰り返し。 --}}
        {{-- 全ての情報（３件）が入った$articlesを繰り返して$articleにいれる。 --}}
        {{-- {{ $article->id }}は1、2、3 --}}
        {{-- {{ $article->title }}は論文タイトル --}}
        @foreach ($articles as $article)
            <li><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></li>
        @endforeach
    </ul>

    <!-- 新規登録画面へジャンプする -->
    <a href="/articles/create"><button>新規論文投稿</button></a>
</body>
</html>