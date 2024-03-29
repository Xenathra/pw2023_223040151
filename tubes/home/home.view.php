    <?php 
    session_start();

    //cek user apakah sudah berhasil login apa belum
    if( !isset($_SESSION["login"]) ) {
        header("location: ../login/login.php");
        exit;
    }

    require '../functions.php';
    $home_cont = query("SELECT * FROM home_content");

    // when search button clikced
    if( isset($_POST['search']) ){
        $home_cont = cari($_POST['keyword']);
    }

    ?>
    
    <!-- header-start -->
    <?php require('partials/home-header.php'); ?>
    <!-- header-end -->

    <header>
    <!-- navbar-start -->
    <?php require('partials/home-navbar.php'); ?>
    <!-- navbar-end -->

    <!-- jumbotron-start -->
    <section class="jumbotron" id="home" >
        <div class="header-wrapper" >
                <h1><span>E</span>dukasi <span>G</span>ames <span>N</span>ich</h1>
                <p>Mengedukasi para gamers mengenai adanya console-console yang keren selain Playstation saja.</p> 
                <p>atau orang biasa menyebutnya plestesen.</p>
                <div class="right-content">
                        <h4><span>A</span>drian <span>Z</span>idan <b>.</b></h4>
                </div>
            
        </div>
    </section>

    <!-- jumbotron-end -->  
    </header>

    <!-- content-start -->
    
    <main id="content">
    <?php if(empty($home_cont)) :?>
    <div class="row">
        <div class="col-md-6 position-absolute top-55 start-50 translate-middle">
            <div class="alert alert-danger text-center" role="alert">
                artikel not found!
            </div>
        </div>
    </div>
    <?php endif ;?>
<?php foreach( $home_cont as $h_cont) : ?>
    
        <div class="card-wrapper" >
            <div class="card" style="width: 18rem;">
                <img id="gambar" src="../img/<?= $h_cont['gambar']; ?>" class="card-img-top" alt="switch-console" width="412">
                <div class="card-body">
                    <h5 id="judul" class="card-title"><?= $h_cont['judul']; ?></h5>
                    <p id="teast_detail" class="card-text"><?= $h_cont['teast_detail']; ?></p>
                    <a href="../content/content.php?id=<?= $h_cont['id'] ;?>" class="btn btn-primary">Click for more</a>
                    <a href="../hapus.php?id=<?= $h_cont['id'] ;?> " class="btn btn-primary" onclick="return confirm('apakah anda yakin?');">Delete</a>
                    <!-- fitur edit-start -->
                    <a class="btn btn-primary" href="../edit.php?id=<?= $h_cont['id'] ;?>">Edit</a>
                    <!-- fitur edit-end -->
                </div>
            </div>
        
       
<?php endforeach; ?>
</div>     
        
    </main>
    <!-- content-end -->
    
    <!-- footer-start -->
    <?php require('partials/home-footer.php'); ?>
    <!-- footer-end -->
    <script src="../js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
