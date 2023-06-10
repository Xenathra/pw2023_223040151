<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGN | Register</title>
    <link rel="stylesheet" href="register.css">
    <link rel="shortcut icon" href="../img/EGN.png" type="image/x-icon">
</head>
<body>

    <h2>WELCOME!</h2>

        <form class="container" action="" method="post">
            <label for="name"><span class="text"><b>Name</b></label></span>
            <input type="text" id="name" name="name" required autocomplete="off">

            <label for="uname"><span class="text"><b>Username</b></label></span>
            <input type="text" id="uname" name="uname" required autocomplete="off">
            <!-- username-end -->
                    
            <!-- psw-start -->
            <label for="psw"><span class="text"><b>Password</b></span></label>
            <input type="password" id="psw" name="psw" required>

            <label for="confirm-psw"><span class="text"><b>Confirm password</b></span></label>
            <input type="password" id="confirm-psw" name="confirm-psw" required>
            <!-- psw-end -->
                
            <!-- LoginButton-start -->
            <button type="submit" name="submit">Register</button>
            <!-- LoginButton-end -->
        </form>
    
</body>
</html>