<!-- nulis array di dalam array  -->
<?php 
    $mahasiswa= [
                 ['Adrian','🐰','🍗'],
                 ['Zidan','🐷','🍉'],
                 ['Budi','🐮','🍊'],
                 ['Ahmad','🐢','🍌'],
                 ['Abas','🦈','🍍']
                ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
        <?php foreach ($mahasiswa as  $mhs) {?>
            <ul>
                <li>Nama: <?= $mhs[0]  ; ?></li>
                <li>Makanan Favorit: <?= $mhs [2]; ?> </li>
                <li>Peliharaan:  <?= $mhs [1]; ?></li>
            </ul>
        <?php } ?>

        <!-- pembuka di php nya pake ":" dan ditutup dengan endforeach(foreach nya sesuai dengan sintaks yang kita pakai) -->
        <h2>Daftar Mahasiswa</h2>
        <?php foreach ($mahasiswa as  $mhs) :?>    
            <ul>
                <li>Nama: <?= $mhs[0]  ; ?></li>
                <li>Makanan Favorit: <?= $mhs [2]; ?> </li>
                <li>Peliharaan:  <?= $mhs [1]; ?></li>
            </ul>
        <?php endforeach ?>

</body>
</html>