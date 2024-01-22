<!-- ? Preloader Start -->
<div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <p>CKD</p>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">
                                            <li><a href="iyo.php">Home</a></li>
                                            <li><a href="Penyebab.php">Penyebab CKD</a></li>
                                            <li><a href="Nutrisi.php">Panduan Nutrisi</a></li>
                                            <li><a href="Makanan.php">Makanan</a>
                                                <ul class="submenu">
                                                    <li><a href="Makanan.php">Resep Makanan</a></li>
                                                    <li><a href="Rekomendasi.php">Rekomendasi Makanan</a></li>
                                                    <li><a href="Polamakan.php">Tips Pola Makan</a></li>
                                                    <li><a href="inputmakanan.php">Input Makanan</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="admin/Login.php">Login</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>   
                      
</div>

 <!-- input-makanan -->
 <div id="input_makanan" class="appointment-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2>Input Makanan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="well-block">
                    <div class="well-title">
                        <h2>Formulir Input Makanan</h2>
                    </div>
                    <div class="feature-block">
                        <form action="inputmakanan.php" method="post">
                            <div class="form-group">
                                <label for="nama_makanan">Nama Makanan</label>
                                <input type="text" class="form-control" id="nama_makanan" name="nama_makanan" required>
                            </div>
                            <div class="form-group">
                                <label for="kalori">Kalori</label>
                                <input type="number" class="form-control" id="kalori" name="kalori" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>