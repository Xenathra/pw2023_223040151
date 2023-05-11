   <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Dan.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ">
            <a class="nav-link <?= ($_SERVER['REQUEST_URI'] === BASE_URL. 'index.php') ? 'active' : '' ;?>" aria-current="page" href="index.php">Home</a>
            <a class="nav-link <?= ($_SERVER['REQUEST_URI'] === BASE_URL. 'about.php') ? 'active' : '' ;?>" href="about.php">About</a>
            <a class="nav-link" href="product.php">Products</a>
            <a class="nav-link" href="#">Contact</a>
        </div>
    </div>
  </div>
</nav>
