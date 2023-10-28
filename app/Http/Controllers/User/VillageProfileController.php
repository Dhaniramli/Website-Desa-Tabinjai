<?php

namespace App\Http\Controllers\User;

use App\Models\Blog;
use App\Models\Mission;
use App\Models\Vission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AdministrativeOfficials;
use App\Models\History;

class VillageProfileController extends Controller
{
    public function index()
    {
        $visi = Vission::where('id', 1)->first();
        $misi = Mission::where('id', 1)->first();
        
        $sejarah = History::where('id', 1)->first();

        return view('user.villageProfile.index', compact('visi', 'misi', 'sejarah'));
    }

    public function showSejarah() {
        $sejarah = History::where('id', 1)->first();

        return view('user.villageProfile.history', compact('sejarah'));
    }
}
