<?php 
// konkesi ke DBMS   
require 'functions.php';

    //ambil data di url
    $id = $_GET['id'];
    
    // querry data bedasarkan id
    $edit = query("SELECT * FROM home_content WHERE id = $id")[0];
    
// cek jika tombol done/submit sudah di pencet
if ( isset ($_POST["done"]) ){
    
    // cek apakah data berhasil diedit atau tidak
    if( edit($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil edit!');
                document.location.href = 'home/home.view.php';
            </script>
            ";
    } else {
        echo"
            <script>
                alert('Data gagal edit!');
                document.location.href = 'home/home.view.php';
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

    <style>
        /* done-btn-start */
    .done-btn{
        border-radius: 8px;
        background: #949495;
        color: white;
        padding: 14px 20px;
        cursor: pointer;
        font-size: 14px;
        width: 10%;
        margin-top: 12px;
        margin-left: 45%;
    }

    

    .done-btn:hover { /* hover on */
        transition: 1s ease-in-out;
        background: #f7f7f9;
        color: #3c3c3c;
    }

    .done-btn { /* hover off */
        transition: 1s ease-out;
    }
    /* done-btn-end */
    </style>

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
        <div class="title">
            <h1>Welcome, Admin</h1>
            <br><br>
            <h3>Edit an content</h3>
        </div>
        <br><br>
            <form action="" method="post" enctype="multipart/form-data">
            <div class="content-wrapper">
                <div class="cont1">
                    <input type="hidden" id="id" name="id" value="<?= $edit['id'] ;?>">
                    <label for="gambar">Gambar :</label>
                    <img src="img/<?= $edit['gambar'] ;?>">
                    <input type="file" id = "gambar" name="gambar" > 
                    <label for="judul">Judul :</label>
                    <input type="text" id = "judul" name="judul" value="<?= $edit['judul'] ;?>" >
                    <label for="teast_detail">Teast detail :</label>
                    <input type="text" id = "teast_detail" name="teast_detail" value="<?= $edit['teast_detail'] ;?>" >
                </div>                
            </div>
                <button class="done-btn" type="submit" name="done">
                    Done
                </button>
                </form>
    </main>
</body>
</html>