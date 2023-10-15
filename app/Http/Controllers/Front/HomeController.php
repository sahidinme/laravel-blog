<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        

        return view('front.home.index', [
            'latest_post'   => Article::latest()->first(),
            'articles'      => $articles,
            'categories'    => Category::latest()->get()
        ]);
    }
}
