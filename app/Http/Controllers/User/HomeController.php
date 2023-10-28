<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AdministrativeOfficials;
use App\Models\Blog;
use App\Models\Mission;
use App\Models\Vission;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $visi = Vission::where('id', 1)->first();
        $misi = Mission::where('id', 1)->first();

        $pejabatAdministrasi = AdministrativeOfficials::all();
        $beritas = Blog::latest()->paginate(5)->withQueryString();

        return view('user.index', compact('visi', 'misi', 'pejabatAdministrasi', 'beritas'));
    }
}
