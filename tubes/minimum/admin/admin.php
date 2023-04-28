<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin.css">

</head>
<body>
    <header>
        <!-- navbar-start -->
        <div class="navbar">
           <div class="navbar-kanan">
                <img src="../img/user-icon.png" width="20" >
           </div>

           <div class="navbar-kiri">
                <img src="../img/nintendo-black.png" width="100">
           </div>
        </div>
    <!-- navbar-end -->
    </header> 
    
    <main>  
        <!-- content-start -->
        <h1>Welcome, Admin</h1>
        <br><br>
        <h3>Add an article</h3>
        <br><br>
            <form action="" method="post">
                <label class="colmn1" for="add-txt">Add here :</label>
                <textarea name="add-txt" id="add-txt" cols="50" rows="10"></textarea>
                
                <br><br>

                <button class="done-btn" type="submit" name="done">Done</button>
            </form>
        <!-- content-end -->
        <br><br>
        <div class="logout-btn">
            <p><a href="../index/index.html">Logout?</a></p>
        </div>    
        
    </main>        
</body>
</html>