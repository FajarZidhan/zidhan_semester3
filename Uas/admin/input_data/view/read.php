
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pedoman Penderita</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
  <link rel="shortcut icon" href="../UTS-Tama/img/ginjal.png" type="">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner End -->

    <?php include "../navbar.php"?>


    <!-- Page Header Start -->
    <?php
include "../header.php";


// Check if pasien_id is set in the URL
if (isset($_GET['pasien_id'])) {
    $pasien_id = $_GET['pasien_id'];

    // Using prepared statement to prevent SQL injection
    $query = "SELECT * FROM pasien WHERE id = ?";
    $stmt = mysqli_prepare($db, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $pasien_id);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            // Check if data is found
            if (mysqli_num_rows($result) > 0) {
                $pasien = mysqli_fetch_assoc($result);

                // Extracting data for better readability
                $nama = $pasien['nama'];
                $umur = $pasien['umur'];
                $konsumsi = $pasien['konsumsi'];
?>

                <div>
                    <h1 class="text-center">Detail Pasien: <?= $nama ?></h1>
                    <div class="container">
                        <table class="table table-striped text-center table-bordered table-hover">
                            <thead class="table-dark">
                                <tr class="container col-md-12">
                                    <th class="container col-md-4 text-center" scope="col">Nama</th>
                                    <th class="container col-md-1 text-center" scope="col">Umur</th>
                                    <th class="container col-md-6 text-center" scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $nama ?></td>
                                    <td><?= $umur ?></td>
                                    <td><?= $konsumsi ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="container text-left">
                            <a href="home.php" class="btn btn-dark mt-3">Kembali</a>
                            <!-- Add export button -->
                            <a href="export.php?pasien_id=<?= $pasien_id ?>" class="btn btn-success mt-3">Export Data</a>
                        </div>
                    </div>
                </div>

<?php
            } else {
                echo "Data pasien tidak ditemukan.";
            }

            mysqli_free_result($result);
        } else {
            echo "Query failed: " . mysqli_error($db);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Prepared statement failed.";
    }
} else {
    echo "Pasien ID tidak valid.";
}

include "../footer.php";?>