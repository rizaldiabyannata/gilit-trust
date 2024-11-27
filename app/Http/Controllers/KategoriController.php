<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{

    public function index()
    {
        $kategoris = Kategori::all();
        return view('kategori.index', compact('kategoris'));
    }


    public function create()
    {
        return view('kategori.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
            'jenis_kategori' => 'required',
        ]);
        Kategori::create($request->all());
        return redirect()->route('kategori.index')->with('success', 'Kategori created successfully!');
    }


    public function show(Kategori $kategori)
    {
        return view('kategori.show', compact('kategori'));
    }


    public function edit(Kategori $kategori)
    {
        return view('kategori.edit', compact('kategori'));
    }


    public function update(Request $request, Kategori $kategori)
    {
        $request->validate([
            'nama_kategori' => 'required',
            'jenis_kategori' => 'required',
        ]);
        $kategori->update($request->all());
        return redirect()->route('kategori.index')->with('success', 'Kategori updated successfully!');
    }


    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategori.index')->with('success', 'Kategori deleted successfully!');
    }
}
