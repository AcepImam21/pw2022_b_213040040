<?php 
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
     "jurusan" => "Teknik Industri",
     "gambar" => "img/rendi.png"
   ],
    ["nama" => "RD Deni", 
     "npm" => "213040044", 
     "email" => "RdDeni@gmail.com", 
     "jurusan" => "Teknik Mesin",
     "gambar" => "img/php1.png"
    ],
    ["nama" => "Allfiandi", 
     "npm" => "213040050", 
     "email" => "Allfiandi@gmail.com", 
     "jurusan" => "Teknik Informatika",
     "gambar" => "img/all.jpg"
     ]
   ];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>

    <div class="container">
        <h1>Daftar Mahasiswa</h1>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1; foreach($mahasiswa as $mhs) {
                ?>

                <tr class="align-middle">
                <th scope="row"><?= $no++; ?></th>
                <td>
                    <img src="<?= $mhs["gambar"]; ?>" width="50px" class="rounded-circle">
                </td>
                <td><?= $mhs["nama"] ?></td>
                <td>
                    <a href="" class="btn badge bg-warning">edit</a>
                    <a href="" class="btn badge bg-danger">delete</a>
                    <a href="kuliah_latihan4.php?gambar=<?= $mhs["gambar"] ?>&nama=<?= $mhs["nama"] ?>&npm=<?= $mhs["npm"] ?>&email=<?= $mhs["email"] ?>&jurusan=<?= $mhs["jurusan"] ?>" class="btn badge bg-info">detail</a>
                </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>