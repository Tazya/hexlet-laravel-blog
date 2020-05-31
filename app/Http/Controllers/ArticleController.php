<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\StoreArticle;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(2);
        $flashMessage = session('articleStatus');

        return view('article.index', compact('articles', 'flashMessage'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    public function create()
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    public function store(StoreArticle $request)
    {
        $data = $request->validated();

        $article = new Article();
        $article->fill($data);
        $article->save();
        
        $request->session()->flash('articleStatus', 'Article has been added!');
        return redirect()
            ->route('articles.index');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }

    public function update(StoreArticle $request, $id)
    {
        $article = Article::findOrFail($id);
        $data = $request->validated();

        $article->fill($data);
        $article->save();

        $request->session()->flash('articleStatus', 'Article has been updated!');
        return redirect()
            ->route('articles.index');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        if ($article) {
            $article->delete();
        }
        return redirect()->route('articles.index');
    }
}
