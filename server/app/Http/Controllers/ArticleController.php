<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// Articleモデルを読み込む準備
// app > ProvidersのArticle.phpの中に入っているModelクラスを継承したArticleクラスを使いますよ宣言。
use App\Article;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        // articlesフォルダのindex.blade.phpに表示
        return view('articles.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    // 新規の登録処理
    // Request から ArticleRequestに変更することで、バリデーションを書いたArticleRequest.phpを読み込む
    // 10行目に use App\Http\Requests\ArticleRequest;つける。
    public function store(ArticleRequest $request)
    {
        // インスタンスの作成
        $article = new Article;

        // 値の用意
        $article->title = $request->title;
        $article->body = $request->body;

        // articleのtimestampsは設定されてないからfalse
        $article->timestamps = false;

        // インスタンスに値を設定して保存
        $article->save();

        // 登録したらindexに戻る
        return redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        // articlesフォルダのshow.blade.phpに表示
        return view('articles.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // ここはidで探して持ってくる以外はstoreと同じ
        $article = Article::find($id);

        // 値の用意
        $article->title = $request->title;
        $article->body = $request->body;

        // articleのtimestampsは設定されてないからfalse
        $article->timestamps = false;

        // インスタンスに値を設定して保存
        $article->save();

        // 登録したらindexに戻る
        return redirect('/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
