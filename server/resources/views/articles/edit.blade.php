{{-- エラーを表示するためのコード --}}
@if (count($errors)>0)
    <div>
    {{-- count()関数。
    count($errors)で$errorsの数を数えてくれる。 --}}
        <p><b>{{ count($errors) }}件のエラーがあります。</b></p>

        <ul>
            {{-- ->all()をつけることで連想配列のValueだけ取得...? --}}
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>投稿論文編集</h1>
<!--更新先はarticlesのidにしないと増える php artisan rote:listで確認①-->
<form action="/articles/{{ $article->id }}" method="post">
    @csrf
    <!-- resourceの場合PUTを指定してあげないとエラーが起きる php artisan rote:listで確認② -->
    @method('PUT')
    <!-- idはそのまま -->
    <input type="hidden" name="id" value="{{ $article->id }}">
    
    <p>
        論文タイトル<br>
        <input type="text" name="title" value="{{ $article->title }}">
    </p>
    <p>
        本文<br>
        <textarea  type="text" name="body">{{ $article->body }}</textarea>
    </p>

    <input type="submit" value="投稿">
</form>