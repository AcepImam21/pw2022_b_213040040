<?php 
$mahasiswa = [
    ["Acep Imam Hambali", "213040040", "Teknik Informatika", "acepimam19@gmail.com"],
    ["Rendi Sopian", "213040042", "Teknik Informatika", "rendisopian@gmail.com"],
    ["RD Deni", "213040044", "Teknik Informatika", "RdDeni@gmail.com"]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>
