<?php 
    require '../functions.php';

    if( isset($_POST['login']) ){

        $uname = $_POST['uname'];
        $psw = $_POST['psw'];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE uname = '$uname'");
        
        // cek username
        if( mysqli_num_rows($result) === 1) {

            //cek passwrord
            $row = mysqli_fetch_assoc($result);
            if(password_verify($psw, $row['psw']) ) {
                header("Location: ../home/home.view.php");
                exit;
            }
        }

        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>EGN | Login</title>

    <link rel="stylesheet" href="login.css">

    <link rel="shortcut icon" href="../img/EGN.png" type="image/x-icon">
</head>
<body>
<div class="wrapper"> 
    <h2>WELCOME!</h2>
        <!-- Error Messages-start -->
        <div class="errormsg">
            <?php if( isset($error) ) :?>
                <p>The username or password is incorrect.</p>
            <?php endif ?>
        </div> 
    <!-- Error Message-end -->
     
    <!-- form-start -->
        <form action="" method="post">       
                    <!-- username-start -->
                    <label for="uname"><span class="text"><b>Username</b></label></span>
                    <input type="text" id="uname" name="uname" required autocomplete="off" autofocus>
                    <!-- username-end -->
                    
                    <!-- psw-start -->
                    <label for="psw"><span class="text"><b>Password</b></span></label>
                    <input type="password" id="psw" name="psw" required>
                    <!-- psw-end -->
                
                    <!-- LoginButton-start -->
                    <button type="submit" name="login">Login</button>
                    <!-- LoginButton-end -->

                    <p>
                        Dont have any account? <a href="../register/register.php">Register here</a>
                    </p>
        </form>
    <!-- form-end -->
     </div>  
</body>
</html>