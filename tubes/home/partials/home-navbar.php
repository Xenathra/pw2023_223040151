<nav style="background-color: #929292;" class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bolder" href="#">EGN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fw-bold">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#content">Content</a>
                    </li>
                    <!-- fitur search-start -->
                    <li class="nav-item">
                    <div class="row">
                        <div class="col-md">
                        <form action="" method="post">
                        <div class="input-group ">
                            <input type="text" class="form-control" 
                            placeholder="Search" name="keyword" id="keyword" autocomplete="off">
                            <button style="background-color: #000;" class="btn btn-outline-secondary" type="submit" name="search" id="search">
                                <i class="fa-solid fa-magnifying-glass"><a href="#content"></a></i>
                            </button>
                        </div>
                        </form>
                        </div>
                    </div>
                    </li>
                    <!-- fitur search-end -->
                    <li class="nav-item">
                        <!-- logout -->
                        <a class="nav-link ms-3" href="../logout.php"><i class="fa-solid fa-arrow-up-from-bracket fa-lg"></i></a>
                    </li>
                </ul>
            </div>
            <div class="navbar-kanan">
            <ul style="list-style-type: none;">
                <a href="../login/login.php"><li><img src="../img/user-icon.png" width="20"></li></a>    
            </ul>
        </div>
        </div>
    </nav>