<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = History::where('id', 1)->first();

        return view('admin.history.index', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.history.create');
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

        History::create($validatedData);

        return redirect('/admin/sejarah')->with('success', 'Berhasil disimpan!');
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
        $item = History::where('id', 1)->first();

        return view('admin.history.edit', compact('item'));
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

        History::where('id', $validatedData['id'])->update($validatedData);

        return redirect('/admin/sejarah')->with('success', 'Berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        History::destroy($id);
        return redirect('/admin/sejarah');
    }
}
