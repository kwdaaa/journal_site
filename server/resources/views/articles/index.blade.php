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
<a href="/articles/create">新規論文投稿</a>