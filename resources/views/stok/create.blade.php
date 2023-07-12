@extends('form2')
<!-- START FORM -->
@section('konten')
  {{-- @if ($errors->any())
<div class="pt-3">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $item)
             <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif --}}
  <form action='{{ route('stok.store') }}' method='post'>
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
      <a href="{{ url('Stok') }}" class="btn btn-primary">
        Kembali
      </a>
      <div class="mb-3 row">
        <label for="id" class="col-sm-2 col-form-label">Kode Barang</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name='id' value="{{ Session::get('id') }}" id="id">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
        <div class="col-sm-10">
          <input type="string" class="form-control" name='nama barang' value="{{ Session::get('nama_barang') }}"
            id="nama barang">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nama_barang" class="col-sm-2 col-form-label">Nama Kategori</label>
        <div class="col-sm-10"> 
          <select class="form-select form-control" id="" aria-label="Default select example" name="nama_kategori" value="{{ Session::get('nama_kategori')}}">
            @foreach ($jenis as $jenis)
                <option value="{{ $jenis->nama_kategori }}">{{ $jenis->nama_kategori }}</option>
                @endforeach
          </select>
          {{-- <input type="string" class="form-control" name='nama barang' value="{{ Session::get('nama_barang') }}"
            id="nama barang"> --}}
        </div>
      </div>
      
      <div class="mb-3 row">
        <label for="stok_awal" class="col-sm-2 col-form-label">Stok Awal</label>
        <div class="col-sm-10">
          <input type="integer" class="form-control" name='stok awal' value="{{ Session::get('stok_awal') }}"
            id="stok awal">
        </div>
      </div>
      
      <div class="mb-3 row">
        <label for="simpan" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
      </div>
    </div>
  </form>
  <!-- AKHIR FORM -->
@endsection
