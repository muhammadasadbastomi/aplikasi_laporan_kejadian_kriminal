<?php

namespace App\Http\Controllers;

use App\Models\Gangguan;
use App\Models\Kegiatan;
use App\Models\Konflik;
use App\Models\Kriminal;

class DashboardController extends Controller
{
    public function index()
    {
        $kegiatan = Kegiatan::all()->count();
        $konflik = Konflik::all()->count();
        $gangguan = Gangguan::all()->count();
        $kriminal = Kriminal::all()->count();
        return view('admin.index', compact('kegiatan', 'konflik', 'gangguan', 'kriminal'));
    }
}
