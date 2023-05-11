  <?php require('partials/header.php'); ?>

  <?php require('partials/nav.php'); ?>



<!-- content-start -->
<div class="container ">
    <h1>Welcome!</h1>

    <h3>Daftar Mahasiswa</h3>
    <?php foreach($studens as $student) : ?>
        <div class="box">
            <ul>
                <li>Nama : <?= $student["nama"] ;?></li>
                <li>NPM : <?= $student["npm"] ;?></li>
                <li>Email : <?= $student["email"] ;?></li>
            </ul>
        </div>
    <?php endforeach ; ?>
</div>
<!-- content-end -->


    <?php require('partials/footer.php'); ?>
