@extends('tabelkategori')
<!-- START DATA -->
@section('konten')
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
      <form class="d-flex" action="{{ url('Kategori') }}" method="get">
        <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}"
          placeholder="Masukkan kata kunci" aria-label="Search">
        <button class="btn btn-secondary" type="submit">Cari</button>
      </form>
    </div>

    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
      <div class="d-flex justify-content-end">
        <a href='{{ route('kategori.create') }}' class="btn btn-primary" type="submit">+ Tambah Data</a>
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
          <th class="col-md-1">Kode</th>
          <th class="col-md-2">Nama Kategori</th>
          <th class="col-md-1">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $item)
          <tr>
            <td>{{ $item->id_kategori }}</td>
            <td>{{ $item->nama_kategori }}</td>
            <td>
              <a href='{{ route('kategori.edit', ['id_kategori' => $item->id_kategori]) }}'
                class="btn btn-warning btn-sm">Edit</a>
              <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline'
                action="{{ route('kategori.destroy', ['id_kategori' => $item->id_kategori]) }}" method="post">
                @csrf
                @method('POST')
                <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
    {{ $data->withQueryString()->links() }}
  </div>
  <!-- AKHIR DATA -->
@endsection
