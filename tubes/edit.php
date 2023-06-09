<?php 
// konkesi ke DBMS   
require 'functions.php';

    //ambil data di url
    $id = $_GET['id'];

    // querry data bedasarkan id
    $edit = query("SELECT * FROM home_content WHERE id = $id");

// cek jika tombol done/submit sudah di pencet
if ( isset ($_POST["submit"]) ){
    
    // cek apakah data berhasil diedit atau tidak
    if( edit($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil edit!');
                document.location.href = '../home/home.view.php';
            </script>
            ";
    } else {
        echo"
            <script>
                alert('Data gagal edit!');
                document.location.href = '../home/home.view.php';
            </script>
            ";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit Page</title>
    <link rel="stylesheet" href="admin/admin.css">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <!-- nav-start -->
    <nav style="background-color: #929292;" class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand fw-bolder" href="#">EGN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                
            </div>
            <div class="navbar-kanan">
            <ul style="list-style-type: none;">
                <a href="../login/login.php"><li><img src="img/user-icon.png" width="20"></li></a>    
            </ul>
        </div>
        </div>
    </nav>
    <!-- nav-end -->
    
    <main>  
        <!-- content-start -->
        <h1>Welcome, Admin</h1>
        <br><br>
        <h3>edit an content</h3>
        <br><br>
            <form action="" method="post">
            <div class="content-wrapper">
                <!-- fitur add content di home.view.php-start -->
                <div class="cont1">
                    <input type="hidden" name="id" value="<?= $edit['id'] ;?>">
                    <label for="gambar">Gambar :</label>
                    <input type="text" id = "gambar" name="gambar" value="<?= $edit['gambar'] ;?>" > <!-- belum bisa input gambar -->
                    <label for="judul">Judul :</label>
                    <input type="text" id = "judul" name="judul" value="<?= $edit['judul'] ;?>" >
                    <label for="teast_detail">Teast detail :</label>
                    <input type="text" id = "teast_detail" name="teast_detail" value="<?= $edit['teast_detail'] ;?>" >
                    <!-- fitur add content di home.view.php-end -->
                </div>                
            </div>
                <button class="done-btn" type="submit" name="done">
                    Done
                </button>
                </form>