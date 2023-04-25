<?php 
// cek apakah tidak ada data di $_GET
//ketika $_GET ['nama'] belum di set pakas user untuk pindah
if( !isset ($_GET['nama']) || 
    !isset ($_GET['jurusan']) ||
    !isset ($_GET['gambar']) ||
    !isset ($_GET['email']) ||
    !isset ($_GET['nrp']) 
  ){ 
    // redirect
    header("Location: latihan2.php");
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
 
<!-- menerima data dengan cara GET  -->
    <ul>
        <li><img src="<?= $_GET['gambar'] ?>"></li>
        <li><?= $_GET['nama']; ?></li>
        <li><?= $_GET['nrp']; ?></li>
        <li><?= $_GET['email']; ?></li>
        <li><?= $_GET['jurusan']; ?></li>
        
    </ul>
    <a href="latihan2.php">Kembali ke Daftar mahasiswa</a>

</body>
</html>