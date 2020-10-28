<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- link:css + tab で雛形表示 --}}
    {{-- assetを書くことで、publicフォルダの中身ですよという指示になる。 --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <h1>論文詳細</h1>

    <p> 
        タイトル：{{ $article->title }}
    </p>

    <p>
        {{ $article->body }}
    </p>

    <!-- 商品のidを元に編集ページへ遷移する -->
    <a href="/articles"><button>一覧へ戻る</button></a>
    <a href="/articles/{{ $article->id }}/edit"><button>編集する</button></a>


    <div class="buttons">
    <form action="/articles/{{ $article->id }}" method="post">
        @csrf
        @method('DELETE')
        {{-- confirmでYESかNOかみたいなのが出る。 --}}
        {{-- OKだった場合false（とばない？いいえ！）、NOだった場合True（とばない？はい！） --}}
        <a type="submit" onclick="if(!confirm('削除しますか？')){return false};"><button>削除する</button></a>
    </form>
    </div>
</body>
</html>