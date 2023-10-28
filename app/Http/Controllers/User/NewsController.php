<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = Blog::all();
        return view('user.news.index', compact('news'));
    }

    public function show($slug)
    {
        $berita = Blog::where('slug', $slug)->first();
        return view('user.news.show', compact('berita'));
    }
}
