<!-- Format Data Mahasiswa -->
<!-- Nama -->
<!-- Jurusan -->
<!-- Email -->
<!-- Gambar -->
<!-- NRP -->

<?php 

$mahasiswa1 = [
                [
                  'nama' => 'Adrian Muhammad Zidan',
                  'jurusan' => 'Teknik Informatika',
                  'email' => 'adrian.223040151@mail.unpas.ac.id',
                  'nrp' => '223040151',
                  'gambar' => 'https://storage.googleapis.com/assets-edlink/p/thumb-6f1722416eb1c16fbe8717218e33a2e263cc9a46c7356695a97dadaf61f10b42-adrian.jpg'
               ]
              ];
$mahasiswa2 = [
               [
                  'nama' => 'Tegar Samudra',
                  'jurusan' => 'Teknik Informatika',
                  'email' => 'tegar.223040180@mail.unpas.ac.id',
                  'nrp' => '223040180',
                  'gambar' => 'https://storage.googleapis.com/assets-edlink/p/thumb-5c1f95bd7f1f1f4699d450501ba133a01f3481c549a3ef16c2e80c760f3afa20-img-20221206-092022-6305603904430470439.jpg'
                ]
              ]; 
$mahasiswa3 = [
                [
                  'nama' => 'Naufal Sayyid Akbar',
                  'jurusan' => 'Teknik Informatika',
                  'email' => 'naufal.223040152@unpas.ac.id',
                  'nrp' => '223040152',
                  'gambar' => 'https://storage.googleapis.com/assets-edlink/p/thumb-fc1657a792b811cd70b3691d5b02471e1b10dea3227a1fa73ab101d14fb571a1-img-20220929-191014-3349495824430964855.jpg'
                ]
              ];   
$mahasiswa4 = [
                [
                  'nama' => 'Narapati Keysa Anandi',
                  'jurusan' => 'Teknik Informatika',
                  'email' => 'narapati.223040155@mail.unpas.ac.id',
                  'nrp' => '223040155',
                  'gambar' => 'https://storage.googleapis.com/assets-edlink/p/thumb-cafe954742d93b3d882339023ca399240da58b4497ca672a8fadfe0baff67a5b-dsc-8633.png'
                ]
              ];
$mahasiswa5 = [
                [
                  'nama' => 'Muhamad Rinaldi Agus Pratama',
                  'jurusan' => 'Teknik Informatika',
                  'email' => 'rinaldi.223040166@gmail.com',
                  'nrp' => '223040166',
                  'gambar' => 'https://storage.googleapis.com/assets-edlink/p/thumb-557316eef49a1c68d6ef5324df64ecc123e0df47e935f43189bae1ca29119d15-img-20220922-093854-3286185462867630594.jpg'
                ]
              ];
$mahasiswa6 = [
                [
                  'nama' => 'Anissa Nursafitri',
                  'jurusan' => 'Teknik Informatika',
                  'email' => 'anissa.223040163@mail.unpas.ac.id',
                  'nrp' => '223040163',
                  'gambar' => 'https://storage.googleapis.com/assets-edlink/p/thumb-68f53d3dc827d07a31a14628960b2bef3997c719dc25085c3819cd2ef252b5cb-img-20220910-201341-1614560721541899098.jpg'
                ]
              ];    
$mahasiswa7 = [
                [
                  'nama' => 'Hilmi Anugrah Bela Negara',
                  'jurusan' => 'Teknik Informatika',
                  'email' => 'hilmi.223040175@mail.unpas.ac.id',
                  'nrp' => '223040175',
                  'gambar' => 'https://storage.googleapis.com/assets-edlink/p/thumb-e9bf345400cd5ff59e1eb396db669788267eb15abf085e3178f978e7ea1af406-img-20220927-144233-5128513620500898.jpg'
                ] 
              ]; 
$mahasiswa8 = [
                [
                  'nama' => 'Ryan Hidayat',
                  'jurusan' => 'Teknik Informatika',
                  'email' => 'ryan.223040173@mail.unpas.ac.id',
                  'nrp' => '223040173',
                  'gambar' => 'https://storage.googleapis.com/assets-edlink/p/thumb-0b14d7850a56cdcaef9b48464ae849b76d40d6f54db7c103ff0d8197ca5205a4-dsc-0142.jpg'
                ]    
              ]; 
$mahasiswa9 = [
                [
                  'nama' => 'Pebry Adrian',
                  'jurusan' => 'Teknik Informatika',
                  'email' => 'pebry.223040149@mail.unpas.ac.id',
                  'nrp' => '223040149',
                  'gambar' => 'https://storage.googleapis.com/assets-edlink/p/thumb-7692a90842f07b8317a12aacb0440e61af3e5eeace99b6820f7d1487d8bbda43-whatsapp-image-2022-08-25-at-17.57.35.jpeg'
                ]
              ]; 
$mahasiswa10 =[
                [
                  'nama' => 'Aditya Fauzan Salmannaufal',
                  'jurusan' => 'Teknik Informatika',
                  'email' => 'aditya.223040159@mail.unpas.ac.id',
                  'nrp' => '223040159',
                  'gambar' => 'https://storage.googleapis.com/assets-edlink/p/thumb-25d5d10c29563179af2a2a6451f1ee82ad5a67e2df745b8b9000b861469b5ab8-347478.jpg'
                ] 
              ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>    
       <?php foreach ($mahasiswa1 as $mhs1) :?>
        <ul>
            <li>
                <img width="100px" src="<?= $mhs1["gambar"];?>" alt="">
            </li>
            <li>Nama : <?= $mhs1["nama"]; ?></li>
            <li>Jurusan : <?= $mhs1["jurusan"]; ?></li>
            <li>Email : <?= $mhs1["email"]; ?></li>
            <li>NRP : <?= $mhs1["nrp"]; ?></li> 
        </ul>
        <?php endforeach ?>
<hr>        
       <?php foreach ($mahasiswa2 as $mhs2) :?>
        <ul>
            <li>
                <img width="100px" src="<?= $mhs2["gambar"];?>" alt="">
            </li>
            <li>Nama : <?= $mhs2["nama"]; ?></li>
            <li>Jurusan : <?= $mhs2["jurusan"]; ?></li>
            <li>Email : <?= $mhs2["email"]; ?></li>
            <li>NRP : <?= $mhs2["nrp"]; ?></li>
        </ul>
        <?php endforeach ?>
<hr>
       <?php foreach ($mahasiswa3 as $mhs3) :?>
        <ul>
            <li>
                <img width="100px" src="<?= $mhs3["gambar"]; ?>" alt="">
            </li>
            <li>Nama : <?= $mhs3["nama"]; ?></li>
            <li>Jurusan : <?= $mhs3["jurusan"]; ?></li>
            <li>Email : <?= $mhs3["email"]; ?></li>
            <li>NRP : <?= $mhs3["nrp"]; ?></li>
        </ul>
        <?php endforeach ?>
<hr>
       <?php foreach ($mahasiswa4 as $mhs4) :?>
        <ul>
            <li>
                <img width="100px" src="<?= $mhs4["gambar"];?>" alt="">
            </li>
            <li>Nama : <?= $mhs4["nama"]; ?></li>
            <li>Jurusan : <?= $mhs4["jurusan"]; ?></li>
            <li>Email : <?= $mhs4["email"]; ?></li>
            <li>NRP : <?= $mhs4["nrp"]; ?></li>
        </ul>
        <?php endforeach ?>
<hr>
       <?php foreach ($mahasiswa5 as $mhs5) :?>
        <ul>
            <li>
                <img width="100px" src="<?= $mhs5["gambar"];?>" alt="">
            </li>
            <li>Nama : <?= $mhs5["nama"]; ?></li>
            <li>Jurusan : <?= $mhs5["jurusan"]; ?></li>
            <li>Email : <?= $mhs5["email"]; ?></li>
            <li>NRP : <?= $mhs5["nrp"]; ?></li>
        </ul>
        <?php endforeach ?>
<hr>
       <?php foreach ($mahasiswa6 as $mhs6) :?>
        <ul>
            <li>
                <img width="100px" src="<?= $mhs6["gambar"];?>" alt="">
            </li>
            <li>Nama : <?= $mhs6["nama"]; ?></li>
            <li>Jurusan : <?= $mhs6["jurusan"]; ?></li>
            <li>Email : <?= $mhs6["email"]; ?></li>
            <li>NRP : <?= $mhs6["nrp"]; ?></li>
        </ul>
        <?php endforeach ?>
<hr>
       <?php foreach ($mahasiswa7 as $mhs7) :?>
        <ul>
            <li>
                <img width="100px" src="<?= $mhs7["gambar"];?>" alt="">
            </li>
            <li>Nama : <?= $mhs7["nama"]; ?></li>
            <li>Jurusan : <?= $mhs7["jurusan"]; ?></li>
            <li>Email : <?= $mhs7["email"]; ?></li>
            <li>NRP : <?= $mhs7["nrp"]; ?></li>
        </ul>
        <?php endforeach ?>
<hr>
       <?php foreach ($mahasiswa8 as $mhs8) :?>
        <ul>
            <li>
                <img width="100px" src="<?= $mhs8["gambar"];?>" alt="">
            </li>
            <li>Nama : <?= $mhs8["nama"]; ?></li>
            <li>Jurusan : <?= $mhs8["jurusan"]; ?></li>
            <li>Email : <?= $mhs8["email"]; ?></li>
            <li>NRP : <?= $mhs8["nrp"]; ?></li>
        </ul>
        <?php endforeach ?>
<hr>
       <?php foreach ($mahasiswa9 as $mhs9) :?>
        <ul>
            <li>
                <img width="100px" src="<?= $mhs9["gambar"];?>" alt="">
            </li>
            <li>Nama : <?= $mhs9["nama"]; ?></li>
            <li>Jurusan : <?= $mhs9["jurusan"]; ?></li>
            <li>Email : <?= $mhs9["email"]; ?></li>
            <li>NRP : <?= $mhs9["nrp"]; ?></li>
        </ul>
        <?php endforeach ?>
<hr>
      <?php foreach ($mahasiswa10 as $mhs10) :?>
        <ul>
            <li>
                <img width="100px" src="<?= $mhs10["gambar"];?>" alt="">
            </li>
            <li>Nama : <?= $mhs10["nama"]; ?></li>
            <li>Jurusan : <?= $mhs10["jurusan"]; ?></li>
            <li>Email : <?= $mhs10["email"]; ?></li>
            <li>NRP : <?= $mhs10["nrp"]; ?></li>
        </ul>
        <?php endforeach ?>
</body>
</html>