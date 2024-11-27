<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jasa;
use App\Models\Kategori;
use App\Models\DetailJasa;

class JasaController extends Controller
{

    public function index()
    {
        $jasas = Jasa::all();
        return view('jasa.index', compact('jasas'));
    }


    public function create()
    {
        $kategoris = Kategori::all();
        $detailJasas = DetailJasa::all();
        return view('jasa.create', compact('kategoris', 'detailJasas'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'id_kategori' => 'required',
            'penjasa_id' => 'required',
            'detail_id' => 'required',
        ]);
        Jasa::create($request->all());
        return redirect()->route('jasa.index')->with('success', 'Jasa created successfully!');
    }


    public function show(Jasa $jasa)
    {
        return view('jasa.show', compact('jasa'));
    }


    public function edit(Jasa $jasa)
    {
        $kategoris = Kategori::all();
        $detailJasas = DetailJasa::all();
        return view('jasa.edit', compact('jasa', 'kategoris', 'detailJasas'));
    }


    public function update(Request $request, Jasa $jasa)
    {
        $request->validate([
            'id_kategori' => 'required',
            'penjasa_id' => 'required',
            'detail_id' => 'required',
        ]);
        $jasa->update($request->all());
        return redirect()->route('jasa.index')->with('success', 'Jasa updated successfully!');
    }


    public function destroy(Jasa $jasa)
    {
        $jasa->delete();
        return redirect()->route('jasa.index')->with('success', 'Jasa deleted successfully!');
    }
}
