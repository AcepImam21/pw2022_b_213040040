<?php 
require 'functions.php';
$id = $_GET["id"];

if(hapus($id) > 0) {
    echo "<script>
            alert('data berhasih ditambahkan');
            document.location.href = 'index.php';
          </script>";
}