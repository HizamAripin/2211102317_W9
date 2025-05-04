<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iputan BARANG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="text-center">
            <h1>2211102317_W9</h1>
            <h3>DATA BARANG</h3>
        </div>
        <form action="simpan" method="post">
            @csrf
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jumlah" class="col-sm-2 col-form-label">jumlah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="jumlah" name="jumlah">
                </div>
            </div>
            <div class="mb-3 row">
                <button type="submit" name="simpan" class="btn btn-success">SIMPAN</button>
            </div>
        </form>
        <div class="row">
          <table>
            @foreach ($brg as $item)
                <tr>
                  <td>{{$item->nama}}</td>
                  <td>{{$item->jumlah}}</td>
                </tr>
            @endforeach
          </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>