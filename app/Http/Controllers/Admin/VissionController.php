<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vission;
use Illuminate\Http\Request;

class VissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = Vission::where('id', 1)->first();

        return view('admin.vission.index', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'body' => 'required',
        ], [
            'body.required' => 'Kolom Body harus diisi.'
        ]);

        Vission::create($validatedData);

        return redirect('/admin/visi')->with('success', 'Berhasil disimpan!');
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
        $item = Vission::where('id', 1)->first();

        return view('admin.vission.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'body' => 'required',
        ],[
            'body.required' => 'Kolom Body harus diisi.',
        ]);

        Vission::where('id', $validatedData['id'])->update($validatedData);

        return redirect('/admin/visi')->with('success', 'Berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Vission::destroy($id);
        return redirect('/admin/visi');
    }
}
