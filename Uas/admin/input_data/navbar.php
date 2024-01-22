
<?php include "header.php";
    session_start();
?>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <p class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <div>
            <h1 class="m-0 text-primary" style="padding-top: 10px;"><i class="bi bi-person-fill"></i><?= $_SESSION ["username"] ?></h1>
            </div>
</p>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="../UAS/Admin/login.php" class="nav-item nav-link">log out <i class="bi bi-box-arrow-right"></i></a>
            </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

