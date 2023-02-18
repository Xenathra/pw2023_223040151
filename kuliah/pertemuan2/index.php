<?php 
    $nama = "Adrian Zidan"; 
    $kuliah = "Universitas Pasundan";
    $jurusan = "Teknik Informatika";
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendahuluan PHP</title>
</head>
<body>
    
    <h1>
        <?php echo "Hello $nama!";?>
    </h1>

    <h2>
        <?php echo "Saya kuliah di $kuliah";?>
    </h2>

    <p>
        <?php echo "Jurusan saya: $jurusan";?>
    </p>

    <p>
        <?php
        //pake backstring (\) untuk yang ada kutip 1 dan kutip 2 secara bersamaan    
        "\"PENGUMUMAN\" : Sekarang hari Jum'at"
        ?>
    </p>

    <p>
        <?php
            echo 10;
        ?>
    </p>

    
    <p>
        <?php
            echo 10 + 10;
        ?>
    </p>



</body>
</html>