<?php 
// ARRAY
// Array adalah variabel yang dapat menyimpan lebih dari satu nilai sekaligus.

$hari1 = "senin";
$hari2 = "selasa";
$hari7 = "minggu";

$bulan1 = "Januari";
$bulan12 = "Desember";

$mahasiswa = "Imam";

// Membuat ARRAY
$hari = ["Senin", "Selasa", "Rabu", "Kamis"]; // Cara baru
$bulan = array("Januari", "Februari", "Maret",); // Cara lama
$myArray = [100, "Imam", true];

// Menampilkan Array
// menampilkan 1 elemen menggunakan index, dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";

// Menampilkan semua isi Array sekaligus
// var_dump() atau print_r()
// Khusus untuk debugging

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// Mencetak semua isi array menggunakan Looping
// for
for($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";

// foreach (khusus untuk array)
foreach($bulan as $bln) {
    echo $bln;
    echo "<br>";
}
echo "<hr>";

// Memanipulasi Array
// Menambahkan elemen di akhir array
$hari[] = "Jum'at";
$hari[] = "Sabtu";
var_dump($hari);



?>