<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {

        // mengambil data dari kolom search
        $keyword = request()->keyword;

        if ($keyword) {
            // menampilkan sesuai yang di ketikan kolom search
            $articles = Article::with('Category')
                        ->whereStatus(1)
                        ->where('title', 'like', '%' .$keyword. '%' )
                        ->latest()
                        ->paginate(6);
        } else {
            $articles = Article::with('Category')->whereStatus(1)->latest()->paginate(6);
        }

        return view('front.article.index', [
            // menampilkan semua artikel yang berstatus publish (1)
            'articles' => $articles,
            'keyword'  => $keyword,
            'category_navbar' => Category::latest()->take(3)->get()
        ]);
    }

    public function show($slug)
    {
        $article = Article::whereSlug($slug)->firstOrFail();
        $article->increment('views');

        return view('front.article.show', [
            'article' => $article,
            'categories' => Category::latest()->get(),
            'category_navbar' => Category::latest()->take(3)->get()

        ]);
    }
}
