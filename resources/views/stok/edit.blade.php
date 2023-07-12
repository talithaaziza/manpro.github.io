@extends('layouts.template')
<!-- START FORM -->
@section('konten')
  @if ($errors->any())
    <div class="pt-3">
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $item)
            <li>{{ $item }}</li>
          @endforeach
        </ul>
      </div>
    </div>
  @endif
  <form action='{{ route('stok.update', ['id' => $dataStok->id]) }}' method='post'>
    @csrf
    @method('POST')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
      <a href='{{ url('Stok') }}' class="btn btn-primary">
        << Kembali</a>
          <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-10">
              {{ $dataStok->id }}
            </div>
            <div class="mb-3 row">
              <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
              <div class="col-sm-10">
                <input type="string" class="form-control" name='nama barang' value="{{ $dataStok->nama_barang }}"
                  id="nama barang">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="nama_kategori" class="col-sm-2 col-form-label">Nama Kategori</label>
              <div class="col-sm-10">
                <select class="form-select form-control" id="" aria-label="Default select example" name="nama_kategori" value="{{ Session::get('nama_kategori')}}">
                  @foreach ($namaKategori as $data)
                      <option value="{{ $data->nama_kategori }}">{{ $data->nama_kategori }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="stok_awal" class="col-sm-2 col-form-label">Stok</label>
              <div class="col-sm-10">
                <input type="integer" class="form-control" name='stok awal' value="{{ $dataStok->stok_awal }}" id="stok awal">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="simpan" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
  </form>
  </div>
  <!-- AKHIR FORM -->
@endsection
