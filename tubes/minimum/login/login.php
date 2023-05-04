<?php 
    if( isset($_POST['submit']) ){
        if( $_POST['uname'] == "admin" && $_POST['psw'] == "admin" ){
            header("Location: ../admin/admin.php");
            exit;
        }else{
            $errormsg = true;
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>

    <link rel="stylesheet" href="login.css">


</head>
<body>
<div class="wrapper"> 
    <h2>WELCOME!</h2>
        <!-- Error Messages-start -->
        <div class="errormsg">
            <?php if( isset($errormsg) ) :?>
                <p>The username or password is incorrect.</p>
            <?php endif ?>
        </div> 
    <!-- Error Message-end -->
     
    <!-- form-start -->
        <form action="" method="post">       
                    <!-- username-start -->
                    <label for="uname"><span class="text"><b>Username</b></label></span>
                    <input type="text" id="uname" name="uname" required autocomplete="off">
                    <!-- username-end -->
                    
                    <!-- psw-start -->
                    <label for="psw"><span class="text"><b>Password</b></span></label>
                    <input type="password" id="psw" name="psw" required>
                    <!-- psw-end -->
                
                    <!-- LoginButton-start -->
                    <button type="submit" name="submit">Login</button>
                    <!-- LoginButton-end -->
        </form>
    <!-- form-end -->
     </div>  
</body>
</html>