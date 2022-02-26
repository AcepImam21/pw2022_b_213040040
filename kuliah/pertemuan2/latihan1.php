<?php 
// pertemuan 2, belajar sintaks PHP

// NILAI
// angka (integer), tulisan (string), true/false (boolean)
echo 10; // integer
echo '<br>';
echo 'Imam'; // string
echo '<br>';
echo false; // boolean null //bisa tidak pakai titik koma karena ada di akhir
echo '<hr>'; // horizontal line

// VARIABEL
// Tempat penampung NILAI
// awali dengan tanda $
// boleng mengandung angka, tidak boleh diawali angka
// tidak boleh ada spasi
$nama_belakang = 'Hambali';
echo $nama_belakang;
echo '<hr>';

// STRING
// '', ""
$hari = "Juma'at";
echo $hari;
echo '<br>';
echo 'Imam :"Halo, semua!"';
echo '<br>';
// Escape Character
// \
echo 'Imam: "Selamat hari jum\'at"';
echo '<br>';
echo "Imam :\"selamat hari jum'at\"";
echo '<br>';
// interpolasi
// mencetak langsung isi variabel
// hanya bisa oleh ""
echo "halo, nama saya $nama_belakang";
echo '<br>';
echo 'halo, nama saya $nama_belakang';
echo '<hr>';

// Concat / penggabung String
// . 
$nama_depan = 'Imam';
$nama_belakang = 'Hambali';
echo $nama_depan ." ". $nama_belakang;
echo '<br>';
echo 'Imam: "Selamat' . " hari jum'at\"";
echo '<hr>';

// OPERATOR
// Arimatika
// +, -, *, / % (modulo / modulus / sisa bagi)
echo 1 + 1; // Hasil dari 1 + 1 adalah 2;
echo '<br>';
echo "Hasil dari 1 + 1 adalah" . " " .  1 + 1;
echo '<br>';
echo (1 + 2) * 3 - 4; // KaBaTaku
echo '<br>';
echo 10 % 5;
echo '<br>';
echo 1 + "1" + 1;
echo '<hr>';

// Perbandingan
// <, >, <=, >=, ==, !=
echo 1 < 5;
echo '<br>';
echo 1 == "1";
echo '<hr>';

// Identitas / Strict Comparison
// ===, !==
echo 1 === "1";
echo '<hr>';

// Increment / Decrement
// tambah / kurang 1
// ++, -- 
$x = 10;
echo ++$x; // ditambah dulu baru dicetak
echo '<br>';
echo $x++; // dicetak dulu baru di tambah
echo '<hr>';








?>