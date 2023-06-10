<?php 
    require '../functions.php';

    if ( isset ($_POST["done"]) ){
        $error = add($_POST);
        // cek apakah data berhasil ditambahkan atau tidak
        if($error['error'] == false) {
            $id = $error['id'];
            echo "
                <script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = '../content/content.php?id=" . $id .   "';
                </script>
                ";
        } else {
            echo"
                <script>
                    alert('Data gagal ditambahkan!');
                    document.location.href = '../content/content.php';
                </script>
                ";
        }
    }
    $judul = query("SELECT * FROM home_content");
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGN | Admin</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="shortcut icon" href="../img/EGN.png" type="image/x-icon">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <!-- nav-start -->
    <?php require('partials/nav-admn.php'); ?>
    <!-- nav-end -->
    
    <main>  
        <!-- content-start -->
        <h1>Welcome, Admin</h1>
        <br>
        <h3>Add existing content</h3>
        <br>
            <div class="container">
                <form action="" method="post">
                    <select name="add" id="add" required>
                        <option selected>Choose</option>
                    <?php foreach($judul as $judul) :?>
                        <option value="<?= $judul['id'] ;?>">
                            <?= $judul['judul'] ;?>
                        </option>
                    <?php endforeach; ?>
                    </select>
                    <br>
                    <label for="judul">Judul</label>
                    <input type="text" id="judul" name="judul" autocomplete="off">
                    <!-- br untuk sementara -->
                    <br><br>
                    <label for="sub_judul">Sub judul</label>
                    <input type="text" id="sub_judul" name="sub_judul" autocomplete="off">
                    <!-- add judul-end -->
                    <br><br>
                    <label class="colmn1" for="isi">isi :</label>
                    <textarea name="isi" id="isi" cols="50" rows="10" autocomplete="off"></textarea>
                
            </div>
                <button class="done-btn" type="submit" name="done">
                    Done
                </button>
            </form>
    </main>