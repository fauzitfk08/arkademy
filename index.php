<?php
include_once("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <a href="formTambah.php" text-align="center">Tambah Produk</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM produk");
            $no = 1;
            while ($row = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>$row[nama_produk]</td>";
                echo "<td>$row[keterangan]</td>";
                echo "<td>$row[harga]</td>";
                echo "<td>$row[jumlah]</td>";
                echo "<td><a href='formEdit.php?id=$row[id]'>Edit</a>
                      <a href='prosesDelete.php?id=$row[id]'>Delete</a></td>";
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>

</html>