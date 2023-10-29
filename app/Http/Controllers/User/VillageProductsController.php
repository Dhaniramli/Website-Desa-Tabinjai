<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\VillageProducts;
use Illuminate\Http\Request;

class VillageProductsController extends Controller
{
    public function index()
    {
        $produks = VillageProducts::paginate(6);
        return view('user.villageProducts.index', compact('produks'));
    }

    public function show($id)
    {
        $produk = VillageProducts::where('id', $id)->first();
        
        return view('user.villageProducts.show', compact('produk'));
    }
}
