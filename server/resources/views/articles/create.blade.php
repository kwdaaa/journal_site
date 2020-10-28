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

<h1>新規論文投稿</h1>
<form action="/articles" method="post">

    {{-- @csrfとはCSRF対策のために用意されたBladeディレクティブです。
    これがないとうまくデータの保存ができないので忘れないように注意して下さい。 --}}
    @csrf
    
    {{-- {{ old('title') }}を書くことで、エラーが起きたときに、書いた値が表示される。 --}}
    <p>
        論文タイトル<br>
        <input type="text" name="title" value="{{ old('title') }}">
    </p>
    <p>
        本文<br>
        <textarea  type="text" name="body">{{ old('body') }}</textarea>
    </p>

    <input type="submit" value="投稿">
</form>
