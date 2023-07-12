<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Stok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 4;
        if (strlen($katakunci)) {
            $data = Stok::where('id', 'like', "%$katakunci%")
                ->orWhere('nama_barang', 'like', "&$katakunci%")
                ->orWhere('jumlah_barang', 'like', "&$katakunci%")
                ->paginate($jumlahbaris);
        } else {
            $data = Stok::orderBy('id', 'asc')->paginate($jumlahbaris);
        }
        return view('stok.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenis = Kategori::all();
        return view('stok.create', compact('jenis'));
        // return view('stok.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('id', $request->id);
        Session::flash('id_kategori', $request->id_kategori);
        Session::flash('nama_barang', $request->nama_barang);
        Session::flash('nama_kategori', $request->nama_kategori);
        Session::flash('stok_awal', $request->stok_awal);

        $request->validate([
            'id' => 'required|numeric|unique:stok,id',
            'nama_barang' => 'required',
            'stok_awal' => 'required',
        ], [
            'id.required' => 'Kode barang wajib diisi !',
            'id.numeric' => 'Kode barang wajib diisi dalam angka !',
            'id.unique' => 'Kode barang sudah ada !',
            'nama_barang.required' => 'Nama wajib diisi !',
            'nama_kategori.required' => 'Nama wajib diisi !',
            'stok_awal.required' => 'Stok Awal wajib diisi !',
        ]);
        $data = [
            'id' => $request->id,
            'id_kategori' => $request->id,
            'nama_barang' => $request->nama_barang,
            'nama_kategori' => $request->nama_kategori,
            'stok_awal' => $request->stok_awal,
        ];
        Stok::create($data);
        return redirect()->to('Stok')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataStok = Stok::findOrFail($id);
        // dd($data);
        $namaKategori = Kategori::all();
        return view('stok.edit', compact('namaKategori'))->with('dataStok', $dataStok);
        // $data = Stok::where('id', $id)->first();
        // return view('stok.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'nama_kategori' => 'required',
            'stok_awal' => 'required',
        ], [
            'nama_barang.required' => 'Nama wajib diisi !',
            'nama_kategori.required' => 'Nama wajib diisi !',
            'stok_awal.required' => 'Stok Awal wajib diisi !',
        ]);
        $data = [
            'nama_barang' => $request->nama_barang,
            'nama_kategori' => $request->nama_kategori,
            'stok_awal' => $request->stok_awal,
        ];
        Stok::where('id', $id)->update($data);
        return redirect()->to('Stok')->with('succes', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Stok::where('id', $id)->delete();
        return redirect()->to('Stok')->with('success', 'Data berhasil dihapus');
    }
}
