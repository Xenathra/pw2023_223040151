<!DOCTYPE html>
<html lang="en">
<head>

    <title>POST</title>
</head>
<body>
    <?php if( isset($_POST['submit'])) :?>
        <h1>Halo selamat datang <?= $_POST['nama']; ?></h1>    
    <?php endif; ?>
    <!-- maksud dari code diatas adalah, jika tombol submit sudah di pencet maka akan muncul tag yang ada didalamnya (yg dimana tag diatas h1) -->
    <form action="" method="post">
        Masukan Nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>

</body>
</html>