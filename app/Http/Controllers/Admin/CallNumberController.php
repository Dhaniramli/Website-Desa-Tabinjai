<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CallNumber;
use Illuminate\Http\Request;

class CallNumberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = CallNumber::where('id', 1)->first();

        return view('admin.callNumber.index', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.callNumber.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'number' => 'required|max:255',
        ], [
            'number.required' => 'Kolom nomor harus diisi.'
        ]);

        CallNumber::create($validatedData);

        return redirect('/admin/nomor-kontak')->with('success', 'Berhasil disimpan!');
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
        $item = CallNumber::where('id', 1)->first();

        return view('admin.callNumber.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'number' => 'required|max:255',
        ],[
            'number.required' => 'Kolom nomor harus diisi.',
        ]);

        CallNumber::where('id', $validatedData['id'])->update($validatedData);

        return redirect('/admin/nomor-kontak')->with('success', 'Berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CallNumber::destroy($id);
        return redirect('/admin/nomor-kontak');
    }
}
