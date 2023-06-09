<?php
require('functions.php');

$title = 'Add Data Form';


//insert data jika tombol tambah di click, jalankan fungsi tambah sambil mengirimkan datanya
if(isset ($_POST['tambah'])) {
    //cek jika data berhasil ditambahkan
    if(tambah($_POST) > 0){
        echo "<script>
                alert('Data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>";
    }
}



require('views/tambah.view.php');
