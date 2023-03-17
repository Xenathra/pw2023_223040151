<?php 
    $mahasiswa = ['Adrian', 'Zidan', 'Budi','Ahmad','Abas'];
    $binatang = ['🐰','🐷','🐮','🐢','🦈'];
    $makanan = ['🍗','🍉','🍊','🍌','🍍'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
        <?php foreach ($mahasiswa as $key => $mhs) {?>
            <ul>
                <li>Nama: <?= $mhs; ?></li>
                <li>Makanan Favorit: <?= $makanan[$key]; ?></li>
                <li>Peliharaan: <?= $binatang [$key]; ?></li>
            </ul>
        <?php } ?>

</body>
</html>