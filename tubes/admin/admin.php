<?php 
// konkesi ke DBMS   
require '../functions.php';

// cek jika tombol done/submit sudah di pencet
if ( isset ($_POST["done"]) ){
    
    // cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = '../home/home.view.php';
            </script>
            ";
    } else {
        echo"
            <script>
                alert('Data gagal ditambahkan!');
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
    <title>EGN | Admin</title>
    <link rel="stylesheet" href="admin.css">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/EGN.png" type="image/x-icon">

    <script src="https://kit.fontawesome.com/8531b50185.js" crossorigin="anonymous"></script>

</head>
<body>
    <!-- nav-start -->
    <?php require('partials/nav-admn.php'); ?>
    <!-- nav-end -->
    
    <main>  
        <!-- content-start -->
        <h1>Welcome, Admin</h1>
        <br><br>
        <h3>Add an content</h3>
        <br><br>
            <form action="" method="post">
            <div class="content-wrapper">
                <!-- fitur add content di home.view.php-start -->
                <div class="cont1">
                    <label for="gambar">Gambar :</label>
                    <input type="text" id = "gambar" name="gambar" > <!-- belum bisa input gambar -->
                    <label for="judul">Judul :</label>
                    <input type="text" id = "judul" name="judul" >
                    <label for="teast_detail">Teast detail :</label>
                    <input type="text" id = "teast_detail" name="teast_detail" >
                    <!-- fitur add content di home.view.php-end -->
                </div>

                <!-- add judul-start -->
                <div class="cont2">
                    <label for="judul">Judul</label>
                    <input type="text" id="judul" name="judul">
                    <!-- br untuk sementara -->
                    <br>
                    <label for="sub_judul">Sub judul</label>
                    <input type="text" id="sub_judul" name="sub_judul">

                    <!-- add judul-end -->

                    <label class="colmn1" for="isi">isi :</label>
                    <textarea name="isi" id="isi" cols="50" rows="10"></textarea>
                </div>
            </div>
                <button class="done-btn" type="submit" name="done">
                    Done
                </button>
                </form>
            <div class="more">
            <a href="add_more.php">
                <i class="fa-solid fa-arrow-right fa-2xl"></i>
            </a>
            </div>
                <!-- fungsi admin yang belum ditambahin, dan belum berfungsi -->
                    <!-- add artikel -done -->
                    <!-- add foto di article -->
                    <!-- add foto di home -done-->
                    <!-- add detail teast content di home -done-->
                    <!-- add fitur edt -->
                    <!-- add fitur hapus-done -->
                <!-- kasih button untuk toggle ke hidden form, form untuk nambah yang sudah ada  -->
            

            
        <!-- content-end -->
        <br><br>
        <div class="logout-btn">
            <p><a href="../home/home.view.php">Logout?</a></p>
        </div>    
        
    </main>        
</body>
</html>