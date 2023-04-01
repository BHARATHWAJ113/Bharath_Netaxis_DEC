<nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./assets/img/mypic.jpg" alt="Logo" width="50" height="45" class="d-inline-block rounded-circle ">
            <span class="text-muted p-3 h4" style="text-transform:uppercase"> <i class="fa-solid fa-hat-cowboy fa-1x"></i> <?php echo $login_session; ?></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a type="button" class="btn bg-body-secondary text-dark ms-0 ps-0 " data-bs-toggle="modal" data-bs-target="#ChangePass">Change Password</a>
                    
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  disabled" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Maintance
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning p-0" type="submit"><a href="logout.php" class="btn btn-outline-danger ">logout</a></button>
            </form>
        </div>
    </div>
</nav>