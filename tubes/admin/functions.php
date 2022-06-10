<?php

function koneksi()
{
    $conn = mysqli_connect('localhost', 'root', '', 'pw_tubes_213040040') or die('KONEKSI GAGAL!!');

    return $conn;
}

function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    // Siapkan data produk
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data)
{
    $conn = koneksi();

    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $merek = htmlspecialchars($data["merek"]);
    $harga = htmlspecialchars($data["harga"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }


    $query = "INSERT INTO produk VALUES (null, '$nama_produk', '$merek', '$harga', '$deskripsi', '$gambar')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function upload()
{

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yg diupload

    if ($error === 4) {
        echo "<script>
                    alert('pilih gambar terlebih dahulu!');
              </script>";
        return false;
    }

    // cek yg diupload adalah gambar

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                    alert('yang anda upload bukan gambar!');
              </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar 
    if ($ukuranFile > 2000000) {
        echo "<script>
                    alert('ukuran gambar terlalu besar!');
              </script>";
        return false;
    }

    // lolos pengecekan, gambar akan diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;


    move_uploaded_file($tmpname, '../images/' . $namaFileBaru);

    return $namaFileBaru;
}



function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM produk WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    $conn = koneksi();

    $id = $data["id"];
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $merek = htmlspecialchars($data["merek"]);
    $harga = htmlspecialchars($data["harga"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    $gambarLama = htmlspecialchars($data["gambarLama"]);
    // $gambar = htmlspecialchars($data["gambar"]);


    // cek apakah user pilih gambar baru atau tidak
    if ( $_FILES['gambar']['error']=== 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    // $gambar = upload();
    // if (!$gambar) {
    //     return false;
    // }

    // if ($gambar == 'nophoto.png') {
    //     $gambar = $gambarLama;
    // }



    $query = "UPDATE produk SET 
                nama_produk = '$nama_produk', 
                merek = '$merek',
                harga = '$harga',
                deskripsi = '$deskripsi',
                gambar = '$gambar'
              WHERE id = $id
             ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function registrasi($data)
{
    $conn = koneksi();

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo  "<script>
                alert('username sudah terdaftar!');
               </script>";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
             </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}
