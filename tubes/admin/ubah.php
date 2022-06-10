<?php
session_start();

if( !isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

// Query data produk berdasarkan id
$id = $_GET["id"];
$pdk = query("SELECT * FROM produk WHERE id = $id")[0];

//  cek apakah tombol ubah sudah diklik
if (isset($_POST["ubah"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('data berhasih diubah');
                document.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('data gagal diubah');
                document.location.href = 'index.php';
              </script>";
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Data Produk</title>
</head>

<body>

    <div class="container">
        <h1>Form Ubah Data Produk</h1>

        <a href="index.php">Kembali Ke Daftar Produk</a>

        <div class="row mt-3">
            <div class="col-8">

                <form action="" method="post" autocomplete="off" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?= $pdk["id"]; ?>">
                    <input type="hidden" name="gambarLama" value="<?= $pdk["gambar"]; ?>">

                    <div class="mb-3">
                        <label for="nama_produk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" required value="<?= $pdk["nama_produk"]; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="merek" class="form-label">Merek</label>
                        <input type="text" class="form-control" id="merek" name="merek" required value="<?= $pdk["merek"]; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="Harga" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="<?= $pdk["harga"]; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"><?= $pdk["deskripsi"]; ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label><br>
                        <img src="../images/<?= $pdk["gambar"]; ?>" class="rounded float-start" alt="..." width="100">
                        <input type="file" class="form-control" id="gambar" name="gambar" onchange="previewImage()">
                    </div>

                    <button type="submit" name="ubah" class="btn btn-primary">Ubah Data Produk</button>

                </form>

            </div>
        </div>


    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>