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
  <form action='{{ route('kategori.update', ['id_kategori' => $data->id_kategori]) }}' method='post'>
    @csrf
    @method('POST')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
      <a href='{{ url('Stok') }}' class="btn btn-primary">
        Kembali</a>
      <div class="mb-3 row">
        <label for="id" class="col-sm-2 col-form-label">Kode Kategori</label>
        <div class="col-sm-10">
          {{ $data->id_kategori }}
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nama_kategori" class="col-sm-2 col-form-label">Nama Kategori</label>
        <div class="col-sm-10">
          <input type="string" class="form-control" name='nama_kategori' value="{{ $data->nama_kategori }}"
            id="nama_kategori">
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
