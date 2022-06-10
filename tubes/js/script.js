// ambil elemen2 yg dibutuhkan

var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// tombolCari.addEventListener('click', function() {
//     alert('berhasil');
// }) ;

// tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function() {
    
    // buat object ajax
    var xhr = new XMLHttpRequest();

    // mengecek kesiapan ajax
    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            container.innerHTML = xhr.responseText;
        }
    }

    // eksekusi ajax
    xhr.open('GET', '../ajax/produk.php?keyword=' + keyword.value, true);
    xhr.send();


});