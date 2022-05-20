<?php 
// SUPERGLOBAL
// variabel bawaan PHP yang bisa diakses di manapun
// Bentuknya Array Associative
// $_GET
// $_POST
// $_SERVER
// $_GET["nama" => "Imam", "email" => "imam@gmail.com"];
// $_GET["nama"] = "imam";
// $_GET["email"] = "imam@gmail.com";

// var_dump($_GET);

?>

<!-- <h1>Halo, <?= $_GET["nama"]; ?></h1> -->

<ul>
    <li>
        <a href="kuliah_latihan2.php?nama=Imam&npm=213040040&email=imam@gmail.com">Imam</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Allfiandi&npm=213040047&email=allfiandi@gmail.com">Allfiandi</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Audi&npm=213040054&email=audi@gmail.com">Audi</a>
    </li>
</ul>