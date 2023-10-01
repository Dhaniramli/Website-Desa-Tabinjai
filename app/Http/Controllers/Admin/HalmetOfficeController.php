<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hamlet;
use App\Models\HamletOffice;
use Illuminate\Support\Facades\Storage;

class HalmetOfficeController extends Controller
{
    public function index($id)
    {
        $item = Hamlet::where('id', $id)->first();
        $itemOffices = HamletOffice::where('hamlet_id', $id)->get();

        return view('admin.hamletOffice.index', compact('item', 'itemOffices'));
    }

    public function create($id)
    {
        $item = Hamlet::where('id', $id)->first();
        return view('admin.hamletOffice.create', compact('item'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'hamlet_id' => 'required',
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'image' => 'image|file',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('hamlet-office-images');
        }

        HamletOffice::create($validatedData);

        return redirect('/admin/dusun/' . $validatedData['hamlet_id'] . '/data-pejabat')->with('success', 'Berhasil ditambahkan!');
    }

    public function edit(string $idOne, string $idTwo)
    {
        $item = HamletOffice::where('id', $idTwo)->first();

        if (!$item) {
            abort(404);
        }

        return view('admin.hamletOffice.edit', compact('item'));
    }

    public function update(Request $request, string $id)
    {
        $rules = [
            'hamlet_id' => 'required',
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'image' => 'image|file',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('hamlet-office-images');
        }

        HamletOffice::where('id', $id)->update($validatedData);

        return redirect('/admin/dusun/' . $validatedData['hamlet_id'] . '/data-pejabat')->with('success', 'Berhasil diperbaharui!');
    }

    public function destroy(string $id)
    {
        $item = HamletOffice::where('id', $id)->first();

        if ($item->image) {
            Storage::delete($item->image);
        }
        HamletOffice::destroy($id);

        return redirect()->back();
    }
}
