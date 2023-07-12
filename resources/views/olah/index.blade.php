@extends('tabelolah')
<!-- START DATA -->
@section('konten')
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
      <form class="d-flex" action="{{ url('Olah') }}" method="get">
        <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}"
          placeholder="Masukkan kata kunci" aria-label="Search">
        <button class="btn btn-secondary" type="submit">Cari</button>
      </form>
    </div>

    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
      <div class="d-flex justify-content-end">
        <a href='{{ route('olah.create') }}' class="btn btn-primary" class="bi bi-plus-square-fill" type="submit">Tambah Data</a>
      </div>
    </div>
    {{-- <form action="{{ route('olah.cetak') }}" method="GET">
      @csrf
      @method('POST')
      <div class="pb-3">
        <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-edit m-right-xs"></i>Laporan</button>
        </div>
      </div>    
    </form> --}}
    <div class="pb-3">
      <div class="d-flex justify-content-end">
        <a href='{{ route('olah.cetak') }}' class="btn btn-success" type="submit">Cetak Data</a>
      </div>
    </div>
    <div class="col-md-8">
      <div class="page-header-title">
        {{-- <h5 class="m-b-10">Data Stok Barang</h5> --}}
        {{-- <p class="m-b-0">Welcome to SIMEKO!</p> --}}
      </div>
    </div>

    <table class="table table-striped">
      <thead>
        <tr>
          <th class="col-md-1">Kode Olah</th>
          <th class="col-md-2">Nama Barang</th>
          <th class="col-md-2">Jumlah</th>
          <th class="col-md-2">Harga</th>
          <th class="col-md-5">Tanggal</th>
          <th class="col-md-5">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $item)
          <tr>
            <td>{{ $item->id_olah }}</td>
            <td>{{ $item->nama_barang }}</td>
            <td>{{ $item->jumlah_barang }}</td>
            <td>{{ $item->harga }}</td>
            <td>{{ $item->tanggal }}</td>
            <td>
              {{-- <a href='{{ route('olah.edit', ['id' => $item->id]) }}' class="btn btn-warning btn-sm">Edit</a> --}}
              <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline'
                action="{{ route('olah.destroy', ['id_olah' => $item->id_olah]) }}" method="post">
                @csrf
                @method('POST')
                <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
    {{-- {{ $data->withQueryString()->links() }} --}}
  </div>
  <!-- AKHIR DATA -->
@endsection
