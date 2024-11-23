<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    public function index()
    {
        $penyakit = Penyakit::all();
        return view('penyakit.index', compact('penyakit'));
    }

    public function create()
    {
        return view('penyakit.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'gejala' => 'nullable|string',
        ]);

        Penyakit::create($request->all());
        return redirect()->route('penyakit.index')
                         ->with('success', 'Penyakit berhasil ditambahkan.');
    }

    public function edit(Penyakit $penyakit)
    {
        return view('penyakit.edit', compact('penyakit'));
    }

    public function update(Request $request, Penyakit $penyakit)
    {
        $request->validate([
            'nama' => 'required|string',
            'gejala' => 'nullable|string',
        ]);

        $penyakit->update($request->all());
        return redirect()->route('penyakit.index')
                         ->with('success', 'Penyakit berhasil diperbarui.');
    }

    public function destroy(Penyakit $penyakit)
    {
        $penyakit->delete();
        return redirect()->route('penyakit.index')
                         ->with('success', 'Penyakit berhasil dihapus.');
    }
}
