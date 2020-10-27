<h1>論文詳細</h1>

<p>
    タイトル：{{ $article->title }}
</p>

<p>
    {{ $article->body }}
</p>

<!-- 商品のidを元に編集ページへ遷移する -->
<a href="/items"><button>一覧へ戻る</button></a>
<a href="/items/{{ $item->id }}/edit"><button>編集する</button></a>
<form action="/items/{{ $item->id }}" method="post"><button>削除する</button>
    @csrf
    @method('DELETE')
    {{-- confirmでYESかNOかみたいなのが出る。 --}}
    {{-- OKだった場合false（とばない？いいえ！）、NOだった場合True（とばない？はい！） --}}
    <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
</form>