<?php 
$mahasiswa = [["Acep Imam Hambali", "213040040", "acepimam19@gmail.com", "Teknik Informatika"],
             ["Rendi Sopian", "213040042", "rendisopian@gmail.com", "Teknik Informatika"],
             ["RD Deni", "213040044", "RdDeni@gmail.com", "Teknik Informatika"]
            ];

?>

<?php foreach($mahasiswa as $mhs) {
        echo "<br>"; ?>
<ul>
    <li>Nama: <?php echo $mhs[0]; ?></li>
    <li>NPM: <?php echo $mhs[1]; ?></li>
    <li>Email: <?php echo $mhs[2]; ?></li>
    <li>Jurusan: <?php echo $mhs[3]; ?></li>
</ul>
<?php } ?>