<?php

namespace App\Http\Controllers;

use App\Models\Olah;
use App\Models\Stok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade\Pdf;


class OlahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 50;
        if (strlen($katakunci)) {
            $data = Olah::where('id_olah', 'like', "%$katakunci%")
                ->orWhere('nama_barang', 'like', "&$katakunci%")
                ->orWhere('tanggal', 'like', "&$katakunci%")
                ->paginate($jumlahbaris);
        } else {
            $data = Olah::orderBy('id_olah', 'asc')->paginate($jumlahbaris);
        }
        return view('olah.index')->with('data', $data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenis = Stok::all();
        return view('olah.create', compact('jenis'));
    }

    // public function cetakOlah()
    // {
    //     $cetak = Stok::all();
    //     return view('olah.cetak', compact('cetak'));
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('id_olah', $request->id_olah);
        Session::flash('nama_barang', $request->nama_barang);
        Session::flash('jumlah_barang', $request->jumlah_barang);
        Session::flash('harga', $request->harga);
        Session::flash('tanggal', $request->tanggal);

        $request->validate([
            'id_olah' => 'required|numeric|unique:stok,id',
            'nama_barang' => 'required',
            'jumlah_barang' => 'required',
            'harga' => 'required',
            'tanggal' => 'required',
        ], [
            'id_olah.required' => 'Kode wajib diisi !',
            'id_olah.numeric' => 'Kode wajib diisi dalam angka !',
            'id_olah.unique' => 'Kode sudah ada !',
            'nama_barang.required' => 'Nama wajib diisi !',
            'jumlah_barang.required' => 'Jumlah Barang wajib diisi !',
            'harga.required' => 'Harga wajib diisi !',
            'tanggal.required' => 'Tanggal Akhir wajib diisi !',
        ]);
        $data = [
            'id_olah' => $request->id_olah,
            'nama_barang' => $request->nama_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'harga' => $request->harga,
            'tanggal' => $request->tanggal,
        ];
        Olah::create($data);
        return redirect()->to('Olah')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Olah $olah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Olah $olah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Olah $olah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_olah)
    {
        Olah::where('id_olah', $id_olah)->delete();
        $route = route('olah.destroy', ['id_olah' => $id_olah]);
        return redirect($route);

    }

    public function cetak()
    {
        $data = Olah::all();
        $pdf = Pdf::loadView('olah.cetak', ['data' => $data])->setOption(['defaultFont' => 'sans-serif']);
        return $pdf->download('cetakolah.pdf');
        // return view('olah.index', compact('cetak'));
    }
    
}
