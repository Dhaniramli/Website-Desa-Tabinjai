<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class BlogController extends Controller
{
    public function index()
    {
        $items = Blog::all();

        return view('admin.blog.index', compact('items'));
    }

    public function show($slug)
    {
        $item = Blog::where('slug', $slug)->first();

        return view('admin.blog.show', [
            'item' => $item,
        ]);
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:blogs',
            'image' => 'image|file|max:1024',
            'body' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('blog-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Blog::create($validatedData);

        return redirect('/admin/berita')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function edit($slug)
    {
        $item = Blog::where('slug', $slug)->first();

        if (!$item) {
            abort(404);
        }

        return view('admin.blog.edit', [
            'blog' => $item,
        ]);
    }


    public function update(Request $request, $slug)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'body' => 'required',
        ];

        if ($request->slug != $slug) {
            $rules['slug'] = 'required|unique:blogs';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('blog-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Blog::where('slug', $slug)->update($validatedData);

        return redirect('/admin/berita')->with('success', 'Berita diperbarui!');
    }

    public function destroy($slug)
    {
        $item = Blog::where('slug', $slug)->first();

        if($item->image){
            Storage::delete($item->image);
        }
        Blog::destroy($item->id);

        return redirect('/admin/berita')->with('success', 'Berita berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Blog::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
