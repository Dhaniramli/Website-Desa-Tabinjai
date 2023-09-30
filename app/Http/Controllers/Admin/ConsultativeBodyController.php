<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConsultativeBody;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConsultativeBodyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = ConsultativeBody::all();

        return view('admin.consultativeBody.index', compact('items'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.consultativeBody.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'image' => 'image|file',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('consultative-body-images');
        }

        ConsultativeBody::create($validatedData);

        return redirect('/admin/badan-permusyawaratan')->with('success', 'Berhasil ditambahkan!');
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
        $item = ConsultativeBody::where('id', $id)->first();

        if (!$item) {
            abort(404);
        }

        return view('admin.consultativeBody.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'image' => 'image|file',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('consultative-body-images');
        }

        ConsultativeBody::where('id', $id)->update($validatedData);

        return redirect('/admin/badan-permusyawaratan')->with('success', 'Berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = ConsultativeBody::where('id', $id)->first();

        if($item->image){
            Storage::delete($item->image);
        }
        ConsultativeBody::destroy($id);

        return redirect('/admin/badan-permusyawaratan')->with('success', 'Berhasil dihapus!');
    }
}
