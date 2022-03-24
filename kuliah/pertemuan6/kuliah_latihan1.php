<?php 
// Array Associatieve
// Array uang indexnya berupa string, yang ber-asosiasi dengan nilainya

$mahasiswa = [
             ["nama" => "Acep Imam Hambali", 
              "npm" => "213040040", 
              "email" => "acepimam19@gmail.com", 
              "jurusan" => "Teknik Informatika"
            ],
             ["nama" => "Rendi Sopian",
              "npm" => "213040042",
              "email" => "rendisopian@gmail.com",
              "jurusan" => "Teknik Informatika"
            ],
             ["nama" => "RD Deni", 
              "npm" => "213040044", 
              "email" => "RdDeni@gmail.com", 
              "jurusan" => "Teknik Informatika",]
            ];

// var_dump($mahasiswa[1]["email"])
?>

<?php foreach($mahasiswa as $mhs) {
        echo "<br>"; ?>
<ul>
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NPM : <?= $mhs["npm"]; ?></li>
    <li>Email : <?= $mhs["email"]; ?></li>
    <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
</ul>
<?php } ?>



