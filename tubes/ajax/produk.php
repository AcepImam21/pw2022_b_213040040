<?php 
require '../admin/functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM produk 
            WHERE
            nama_produk LIKE '%$keyword%' OR 
            merek LIKE '%$keyword%'
            ";
$produk = query($query);

?>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Gambar</th>
            <th scope="col">Produk</th>
            <th scope="col">Merek</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; foreach($produk as $pdk) { ?>
          <tr class="align-middle">
            <th scope="row"><?= $no++; ?></th>
            <td>
              <img src="../images/<?= $pdk["gambar"]; ?>" width="100" class="">
            </td>
            <td><?= $pdk["nama_produk"]; ?></td>
            <td><?= $pdk["merek"]; ?></td>
            <td><?= $pdk["harga"]; ?></td>
            <td>
              <a href="ubah.php?id=<?= $pdk["id"] ?>" class="btn badge bg-warning">ubah</a>
              <a href="hapus.php?id=<?= $pdk["id"] ?>" class="btn badge bg-danger" onclick="return confirm('yakin?');">hapus</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
    </table>