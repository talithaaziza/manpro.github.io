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
  <form action='{{ route('olah.store') }}' method='post'>
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
      <a href="{{ url('Olah') }}" class="btn btn-primary">
        Kembali
      </a>
      <div class="mb-3 row">
        <label for="id_olah" class="col-sm-2 col-form-label">Kode Olah</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name='id_olah' value="{{ Session::get('id_olah') }}" id="id_olah">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
        <div class="col-sm-10">
          <select class="form-select form-control" id="" aria-label="Default select example" name="nama_barang" value="{{ Session::get('nama_barang')}}">
            @foreach ($jenis as $jenis)
                <option value="{{ $jenis->nama_barang }}">{{ $jenis->nama_barang }}</option>
                @endforeach
          </select>
        </div>
      </div>
      
      <div class="mb-3 row">
        <label for="jumlah_barang" class="col-sm-2 col-form-label">Jumlah</label>
        <div class="col-sm-10">
          <input type="integer" class="form-control" name='jumlah_barang' value="{{ Session::get('jumlah_barang') }}"
            id="jumlah_barang">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-10">
          <input type="integer" class="form-control" name='harga' value="{{ Session::get('harga') }}"
            id="harga">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" name='tanggal' value="{{ date('Y-m-d') }}" value="{{ Session::get('tanggal') }}"
            id="tanggal">
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
