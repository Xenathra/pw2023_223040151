<?php 
session_start();

//cek user apakah sudah berhasil login apa belum
if( !isset($_SESSION["login"]) ) {
    header("location: ../login/login.php");
    exit;
}

    require "functions.php";

    $id = $_GET["id"];


    if( hapus($id) > 0 ) {
        echo "
            <script>
                alert('Data berhasil hapus!');
                document.location.href = 'home/home.view.php';
            </script>
            ";
    } else {
        echo "
            <script>
                alert('Data gagal dihapus!');
                document.location.href = 'home/home.view.php';
            </script>
            ";
    }


?>