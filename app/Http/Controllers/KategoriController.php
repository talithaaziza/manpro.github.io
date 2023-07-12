<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 4;
        if (strlen($katakunci)) {
            $data = Kategori::where('id_kategori', 'like', "%$katakunci%")
                ->orWhere('nama_kategori', 'like', "&$katakunci%")
                ->paginate($jumlahbaris);
        } else {
            $data = Kategori::orderBy('id_kategori', 'asc')->paginate($jumlahbaris);
        }
        return view('kategori.index')->with('data', $data);
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        Session::flash('id_kategori', $request->id_kategori);
        Session::flash('nama_barang', $request->nama_barang);

        $request->validate([
            'id_kategori' => 'required|numeric|unique:kategori,id_kategori',
            'nama_kategori' => 'required',
        ], [
            'id.required' => 'Kode kategori wajib diisi !',
            'id.numeric' => 'Kode kategori wajib diisi dalam angka !',
            'id.unique' => 'Kode kategori sudah ada !',
            'nama_kategori.required' => 'Nama kategori wajib diisi !',
        ]);
        $data = [
            'id_kategori' => $request->id_kategori,
            'nama_kategori' => $request->nama_kategori,
        ];
        Kategori::create($data);
        return redirect()->to('Kategori')->with('success', 'Berhasil menambahkan data');
    }

    public function edit(string $id_kategori)
    {
        $data = Kategori::where('id_kategori', $id_kategori)->first();
        return view('kategori.edit')->with('data', $data);
    }

    public function update(Request $request, string $id_kategori)
    {
        $request->validate([
            'nama_kategori' => 'required',
        ], [
            'nama_kategori.required' => 'Nama wajib diisi !',
        ]);
        $data = [
            'nama_kategori' => $request->nama_kategori,
        ];
        Kategori::where('id_kategori', $id_kategori)->update($data);
        return redirect()->to('Kategori')->with('succes', 'Berhasil mengubah data');
    }

    public function destroy(string $id_kategori)
    {
        Kategori::where('id_kategori', $id_kategori)->delete();
        return redirect()->to('Kategori')->with('success', 'Data berhasil dihapus');
    }
}
