<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyakit;

class PengecekanController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $penyakit = Penyakit::where('nama', 'LIKE', '%' . $keyword . '%')->orWhere('gejala', 'LIKE', '%' . $keyword . '%')->paginate(3);
        return view('pengecekan.index', compact('penyakit'));
        
        
    
    }

    public function show($id)
    {
        $penyakit = Penyakit::findOrFail($id);
        $obat = $penyakit->obat;
        
        return view('pengecekan.hasil', compact('penyakit', 'obat'));
    }
}
