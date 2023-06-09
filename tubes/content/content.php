<?php 
   //koneksi DMBS
        require '../functions.php';
        $id = $_GET['id'];

        $content_cons = query('SELECT * FROM console_content');
        $content_cons = query("SELECT * FROM console_content 
                            WHERE id_console_content = '$id'");

        $edit = query('SELECT * FROM console_content WHERE id = "$id"');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="content.css">
    <script src="https://kit.fontawesome.com/8531b50185.js" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    
    
</head>

<body>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- navbar-start -->
    <?php require('partials/nav-cont.php'); ?>
    <!-- navbar-end -->

    <!-- content-start -->
    <div class="content-wrapper">        
        <main>
        <!-- detail item -->
        
        <br id="isi1"><br><br><br>
        <?php foreach ( $content_cons as $c_cons) :?>
            <ul>
        <div class="containers">                
                <!-- judul -->
                <li><?= $c_cons['judul'] ;?></li>
                <!-- subjudul -->
                <p style="font-weight: bold;"><?= $c_cons['sub_judul'] ;?></p>
                <!-- isi -->
                <!-- hapus -->
                <p><?= $c_cons['isi'] ;?></p>
                <a href="../hapus.php?id=<?= $c_cons['id'] ;?> " class="btn btn-secondary" onclick="return confirm('apakah anda yakin?');">Delete</a>
                <!-- edit -->
                <a class="btn btn-secondary" href="../edit.php?=id<?= $c_cons['id'] ;?>">Edit</a>

        </div>
        <!-- note untuk content -->
        </ul>
        <br id="isi2"><br><hr><br><br>
        <?php endforeach ; ?>
        
        
        
        </main>
    </div>
    <!-- content-end -->
</body>
<!-- footer-start -->
<?php require('../home/partials/home-footer.php'); ?>
<!-- footer-end -->
</html>