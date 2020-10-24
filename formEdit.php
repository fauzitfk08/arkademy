<?php
include_once("koneksi.php");
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id'");
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Edit Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <form action="prosesEdit.php?id=<?php echo $id; ?>" method="post">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Nama Produk</label>
            <input class="form-control" id="exampleFormControlSelect1" type="text" name="nama_produk" value="<?php echo $row['nama_produk']; ?>" />
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Keterangan</label>
            <input class="form-control" id="exampleFormControlSelect2" type="text" name="keterangan" value="<?php echo $row['keterangan']; ?>" />
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect3">Harga</label>
            <input class="form-control" id="exampleFormControlSelect3" type="text" name="harga" value="<?php echo $row['harga']; ?>" />
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect4">Jumlah</label>
            <input class="form-control" id="exampleFormControlSelect4" type="text" name="jumlah" value="<?php echo $row['jumlah']; ?>" />
        </div>
        <button type="submit" class="btn btn-primary" name="produk">Edit Buku</button>
    </form>
</body>

</html>