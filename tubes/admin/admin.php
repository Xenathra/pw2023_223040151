<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin.css">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <!-- nav-start -->
    <?php require('partials/nav-admn.php'); ?>
    <!-- nav-end -->
    
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
            <!-- fungsi admin yang belum ditambahin, dan belum berfungsi -->
                <!-- add artikel -->
                <!-- add foto di article -->
                <!-- add foto di home -->
                <!-- add foto di home -->
                <!-- add fitur edt -->
                <!-- add fitur hapus -->

            </form>
        <!-- content-end -->
        <br><br>
        <div class="logout-btn">
            <p><a href="../home/home.php">Logout?</a></p>
        </div>    
        
    </main>        
</body>
</html>