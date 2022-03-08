<?php 
// definisikan masing-masing sisi kubus
$a = 9;
$b = 4;

// hitung masing-masing volume kubus
$volume_a = pow ($a, 3);
$volume_b = pow ($b, 3);

// hitung total 2 volume
$total = $volume_a + $volume_b;

// kembalikan nilai total
echo "Jumlah dari volume kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";

echo "<hr>";

// Declarasi / definisi function
function totalVolumeDuaKubus($a, $b) {
$volume_a = pow ($a, 3);
$volume_b = pow ($b, 3);

$total = $volume_a + $volume_b;

    return "Jumlah dari volume kubus dengan sisi $a dan kubus dengan sisi $b adalah $total";
}

// pemanggilan / eksekusi function
echo totalVolumeDuaKubus(9,4);
echo "<br>";
echo totalVolumeDuaKubus(10,20);
echo "<br>";
echo totalVolumeDuaKubus(5,6);

// buat sebuah fungsi untuk menghitung luas segitiga

// echo luasSegiTiga(2,4); // 4

echo "<hr>";

$t = 2;
$a = 4;
$s = 1.5;

$total_ab = $t * $a * $s;

echo $total_ab;

echo "<br>";

function luasSegiTiga($alas, $tinggi) {
    $luas = 0.5 * $alas * $tinggi ;
    return "Luas segi tiga dengan alas $alas dan tinggi $tinggi adalah $luas";
    // return "Luas segi tiga dengan alas $alas dan tinggi $tinggi adalah 0.5 * $alas * $tinggi";

}

echo luasSegiTiga(2,4)



?>