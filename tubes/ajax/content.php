<?php 
require '../functions.php';


$keyword = $_GET["keyword"];

$query = "SELECT * FROM home_content
            WHERE judul LIKE '%$keyword%'
                OR  
                teast_detail LIKE '%$keyword%'
        ";
$home_cont = query($query);

?>
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

    <?php if(empty($home_cont)) :?>
    <div class="row">
        <div class="col-md-6 position-absolute top-55 start-50 translate-middle">
            <div class="alert alert-danger text-center" role="alert">
                artikel not found!
            </div>
        </div>
    </div>
    <?php endif ;?>
