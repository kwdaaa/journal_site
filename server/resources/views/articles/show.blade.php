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
    @csrf
    @method('DELETE')
    {{-- confirmでYESかNOかみたいなのが出る。 --}}
    {{-- OKだった場合false（とばない？いいえ！）、NOだった場合True（とばない？はい！） --}}
    <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
</form>