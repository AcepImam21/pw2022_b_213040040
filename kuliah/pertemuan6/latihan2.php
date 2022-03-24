<?php 
// $mahasiswa = [
//     ["Acep Imam Hambali", "213040040", "Teknik Informatika", "acepimam19@gmail.com"],
//     ["Rendi Sopian", "213040042", "Teknik Informatika", "rendisopian@gmail.com"],
//     ["RD Deni", "213040044", "Teknik Informatika", "RdDeni@gmail.com"]
// ];


// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
            [
             "nama" => "Acep Imam Hambali",
             "nrp" => "213040040", 
             "email" => "acepimam19@gmail.com", 
             "jurusan" => "Teknik Informatika",
             "gambar" => "imam.jpg"
            ],
            [
             "nama" => "Rendi Sopian",
             "nrp" => "213040042", 
             "email" => "rendisopian@gmail.com", 
             "jurusan" => "Teknik Industri",
             "gambar" => "rendi.png"
            ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NPM : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
        </ul>
        <?php endforeach; ?>

    
</body>
</html>
