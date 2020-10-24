<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Tambah Produk</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
  <form action="prosesTambah.php" method="post">
    <div class="form-group">
      <label for="exampleFormControlSelect1">Nama Produk</label>
      <input class="form-control" id="exampleFormControlSelect1" type="text" name="nama_produk" />
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect2">Keterangan</label>
      <input class="form-control" id="exampleFormControlSelect2" type="text" name="keterangan" />
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect3">Harga</label>
      <input class="form-control" id="exampleFormControlSelect3" type="text" name="harga" />
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect4">Jumlah</label>
      <input class="form-control" id="exampleFormControlSelect4" type="text" name="jumlah" />
    </div>
    <button type="submit" class="btn btn-primary" name="produk">Tambah Buku Buku</button>
  </form>
</body>

</html>