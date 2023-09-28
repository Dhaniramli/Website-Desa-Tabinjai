<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $items = History::all();

        return view('admin.history.index', compact('items'));
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'id' => 'required',
            'body' => '',
        ]);

        History::create($validatedData);

        return redirect('/admin/sejarah')->with('success', 'Berhasil disimpan!');
    }

    public function update(Request $request) {
        $validatedData = $request->validate([
            'id' => 'required',
            'body' => '',
        ]);

        History::where('id', $validatedData['id'])->update($validatedData);

        return redirect('/admin/sejarah')->with('success', 'Berhasil disimpan!');
    }
}
