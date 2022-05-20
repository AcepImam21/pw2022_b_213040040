<?php 
// $_GET
$mahasiswa = [
    ["nama" => "Acep Imam Hambali", 
     "npm" => "213040040", 
     "email" => "acepimam19@gmail.com", 
     "jurusan" => "Teknik Informatika",
     "gambar" => "img/imam.jpg"
   ],
    ["nama" => "Rendi Sopian",
     "npm" => "213040042",
     "email" => "rendisopian@gmail.com",
     "jurusan" => "Teknik Informatika",
     "gambar" => "img/rendi.png"
   ],
    ["nama" => "RD Deni", 
     "npm" => "213040044", 
     "email" => "RdDeni@gmail.com", 
     "jurusan" => "Teknik Informatika",
     "gambar" => "img/pinguin.png"
     ]
   ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>
