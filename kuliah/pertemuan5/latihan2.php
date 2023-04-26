<?php 
$binatang = ['🐰','🐷','🐮','🦛','🦈','🐢'];
$Makanan = ['🍗','🍉','🍊','🍌','🍍']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>
</head>
<body>
<h2>Daftar Binatang</h2>    
<ul>
    <?php foreach ($binatang as $b) {?>
    <li><?= $b ;?></li>
    <?php } ?>
</ul>

<h2>Daftar Makanan</h2>
<ul>
    <?php foreach ($Makanan as $m) {?>
    <li><?= $m; ?></li>
    <?php } ?>
</ul>

<!-- buat manggil key nya pake $key => $m -->

<h2>Daftar Makanan</h2>
   <ul> 
    <?php foreach ($Makanan as $key => $m) {?>
    <li><?= $key; ?></li>
    <?php } ?>
    </ul>
</body>
</html>