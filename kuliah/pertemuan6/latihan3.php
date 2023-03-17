
<?php
//ARRAY ASSOCIATIVE
//Array yang index adalah string yang kita buat sendiri 
    $mahasiswa= [
                 [
                    'nama' => 'Adrian',
                    'binatang'=>'🐰',
                    'makanan' => '🍗'
                 ],
                 [
                    'nama' =>'Zidan',
                    'binatang' => '🐷',
                    'makanan'=> '🍉'
                 ],
                 [
                    'nama' => 'Budi',
                    'binatang' => '🐮',
                    'makanan' =>'🍊'],
                 [
                    'nama'=> 'Ahmad',
                    'binatang' => '🐢',
                    'makanan' => '🍌'
                 ],
                 [
                    'nama' => 'Abas',
                    'binatang' => '🦈',
                    'makanan' => '🍍'
                 ]
                ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
        <?php foreach ($mahasiswa as  $mhs) :?>
            <ul>
                <li>Nama: <?= $mhs["nama"]  ; ?></li>
                <li>Makanan Favorit: <?= $mhs ["makanan"]; ?> </li>
                <li>Peliharaan:  <?= $mhs ["binatang"]; ?></li>
            </ul>
        <?php endforeach ?>


</body>
</html>