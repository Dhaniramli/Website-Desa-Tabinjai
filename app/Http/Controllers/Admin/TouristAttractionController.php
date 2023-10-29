<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TouristAttraction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TouristAttractionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = TouristAttraction::all();

        return view('admin.tour.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tour.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'address' => 'required|max:255',
            'image' => 'image|file',
            'body' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('tour-images');
        }

        TouristAttraction::create($validatedData);

        return redirect('/admin/produk-wisata')->with('success', 'Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = TouristAttraction::find($id);

        return view('admin.tour.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'title' => 'required|max:255',
            'address' => 'required|max:255',
            'image' => 'image|file',
            'body' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('tour-images');
        }

        TouristAttraction::where('id', $id)->update($validatedData);

        return redirect('/admin/produk-wisata')->with('success', 'Produk diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TouristAttraction::destroy($id);
        return redirect('/admin/produk-wisata');
    }
}
