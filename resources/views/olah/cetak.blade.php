<html>
    <head>
        <title>Laravel PDF</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
      <h1>LAPORAN MACOFF</h1>
      {{-- <form action="{{ route('olah.cetak') }}" method="GET">
        @csrf
        @method('POST')
        <div class="pb-3">
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-edit m-right-xs"></i>Laporan</button>
          </div>
        </div>    
      </form>
      <button class='btn btn-primary'>Generate PDF</button>
        </a> --}}
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="col-md-1">Kode Olah</th>
              <th class="col-md-2">Nama Barang</th>
              <th class="col-md-2">Jumlah</th>
              <th class="col-md-2">Harga</th>
              <th class="col-md-5">Tanggal</th>
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
              </tr>
            @endforeach
    
          </tbody>
        </table>
    </body>
</html>