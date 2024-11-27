<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailJasa;

class DetailJasaController extends Controller
{

    public function index()
    {
        $detailJasas = DetailJasa::all();
        return view('detail-jasa.index', compact('detailJasas'));
    }


    public function create()
    {
        return view('detail-jasa.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'waktu_trip' => 'required',
            'maksimal_orang' => 'required',
        ]);
        DetailJasa::create($request->all());
        return redirect()->route('detail-jasa.index')->with('success', 'Detail Jasa created successfully!');
    }


    public function show(DetailJasa $detailJasa)
    {
        return view('detail-jasa.show', compact('detailJasa'));
    }


    public function edit(DetailJasa $detailJasa)
    {
        return view('detail-jasa.edit', compact('detailJasa'));
    }


    public function update(Request $request, DetailJasa $detailJasa)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'waktu_trip' => 'required',
            'maksimal_orang' => 'required',
        ]);
        $detailJasa->update($request->all());
        return redirect()->route('detail-jasa.index')->with('success', 'Detail Jasa updated successfully!');
    }


    public function destroy(DetailJasa $detailJasa)
    {
        $detailJasa->delete();
        return redirect()->route('detail-jasa.index')->with('success', 'Detail Jasa deleted successfully!');
    }
}
