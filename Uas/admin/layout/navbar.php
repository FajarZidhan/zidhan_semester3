
<?php include "header.php"?>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <div>
            <h1 class="m-0 text-primary" style="padding-top: 10px;"><i class="fa fa-heartbeat "></i>CKD</h1>
            <p style="font-size: 10px;">Cronical Kidney Desease</P></div>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="../index.php" class="nav-item nav-link ">Beranda</a>
                <a href="../about.php" class="nav-item nav-link">Pengertian</a>
                    <a href="../pedoman.php" class="nav-item nav-link">Pedoman</a>
                    <a href="../Resep.php" class="nav-item nav-link">Resep masakan</a>
                <form action="dashboard.php" method="POST">
                    <a name="logout" class="nav-item nav-link"><i class="bi bi-box-arrow-left"></i>log out</a>
                </form>
            </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

