<?php 
// $_GET
$mahasiswa = [
    [
      'nama' => 'Adrian Muhammad Zidan',
      'jurusan' => 'Teknik Informatika',
      'email' => 'adrian.223040151@mail.unpas.ac.id',
      'nrp' => '223040151',
      'gambar' => 'https://storage.googleapis.com/assets-edlink/p/thumb-6f1722416eb1c16fbe8717218e33a2e263cc9a46c7356695a97dadaf61f10b42-adrian.jpg'
    ],
  
 
   [
      'nama' => 'Tegar Samudra',
      'jurusan' => 'Teknik Informatika',
      'email' => 'tegar.223040180@mail.unpas.ac.id',
      'nrp' => '223040180',
      'gambar' => 'https://storage.googleapis.com/assets-edlink/p/thumb-5c1f95bd7f1f1f4699d450501ba133a01f3481c549a3ef16c2e80c760f3afa20-img-20221206-092022-6305603904430470439.jpg'
   ],

   [
    'nama' => 'Naufal Sayyid Akbar',
    'jurusan' => 'Teknik Informatika',
    'email' => 'naufal.223040151@mail.unpas.ac.id',
    'nrp' => '223040151',
    'gambar' => 'https://storage.googleapis.com/assets-edlink/p/thumb-fc1657a792b811cd70b3691d5b02471e1b10dea3227a1fa73ab101d14fb571a1-img-20220929-191014-3349495824430964855.jpg' 
   ]

  ]; 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs) :?> 
            <li>
              <!-- nambahin data dengan cara post lewat hyperlink -->
             <a 
                href="latihan3.php?
                  nama=<?= $mhs['nama']; ?>&
                  gambar=<?= $mhs['gambar']; ?>&
                  nrp=<?= $mhs['nrp'] ;?>&
                  jurusan=<?= $mhs['jurusan']; ?>&
                  email=<?= $mhs['email'] ;?>
             "> 
             <!-- cara diatas tidak di sarankan, paling akan menggunakan inisial nya saja -->
                <?= $mhs['nama']; ?> 
            </a>
            </li>
        <?php endforeach; ?>
            
    </ul>   

</body>
</html>