<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $obat = Obat::all();
        return view('obat.index', compact('obat'));
    }

    public function create()
    {
        return view('obat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'nullable|string',
        ]);

        Obat::create($request->all());
        return redirect()->route('obat.index')
                         ->with('success', 'obat berhasil ditambahkan.');
    }

    public function edit(Obat $obat)
    {
        return view('obat.edit', compact('obat'));
    }

    public function update(Request $request, Obat $obat)
    {
        $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'nullable|string',
        ]);

        $obat->update($request->all());
        return redirect()->route('obat.index')
                         ->with('success', 'obat berhasil diperbarui.');
    }

    public function destroy(Obat $obat)
    {
        $obat->delete();
        return redirect()->route('obat.index')
                         ->with('success', 'obat berhasil dihapus.');
    }
}
