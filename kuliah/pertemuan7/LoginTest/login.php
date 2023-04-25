<?php 
// Cek apakah tombol submit udah di pencet atau belum
if( isset ($_POST['submit'])){
    // cek username & password
    if( $_POST['username'] == "admin" && $_POST['password'] == "123"){

    // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    }else {
    // jika salah, munculkan notif username atau password salah
        $error = true;   
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Halaman Login</title>

    <style>
        ul{
            list-style: none;
        }

        .errormsg{
            color: red;
            font-style: italic;
            text-transform: uppercase;
        }
    </style>

</head>
<body>
<h1>Login Admin</h1>

<!-- notif error yang akan keluar kalau uname dan psw salah -->
    <div class="errormsg">
        <?php if( isset($error) ) :?>
            <p>Username / Password Salah!</p>
        <?php endif ?>
    </div> 
<!-- for dan id, untuk menghubungkan agar si html nya tau  -->

    
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>        
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>

</body>
</html>