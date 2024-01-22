<!-- Header -->
<?php
 include "../layout/header.php";
 session_start();
 ?>

<!-- Body -->
<style>
        .body {
            margin: 0;
            padding: 0;
            min-height: 90vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }

        footer {
            background-color: #f0f0f0;
            padding: 10px;
            text-align: center;
        }
    </style>
<div class="body">

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
   
</div>
    <h1 class="text-center">SELAMAT DATANG <?= $_SESSION ["username"] ?></h1>
    <p class="text-center">
      
    </p>
    <div class="container ">
        <form action="view/home.php" method="post">
            <div class="from-group text-center">
                <input type="submit" name="btn btn-primary mt-2" value="Masuk" id="">
            </div>
        </form>
    </div>
</div>

<!-- Footer -->
<?php include "footer.php"?>


    <!-- Spinner End -->

    <!-- Page Header End -->

