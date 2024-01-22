
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
    <!-- Page Header End -->
    <!-- header -->
<?php 
include "../header.php" ?>


<div class="container" class="p-3 mb-2 bg-transparent text-dark">
    <h1 class="text-center">DATA PASIEN</h1>
    <div style="position: absolute; top: 10px; right: 10px;">
    <?php
    if (isset($_SESSION['username'])) {
        echo '<a href="../logout.php" class="btn btn-danger">Logout</a>';
    }
    ?>
</div>

    <a href="create.php" class="btn  btn-outline-dark mb-2"><i class="bi bi-person-plus"></i>Tambahkan data</a>

    <table class="custom-table table-striped text-center table-bordered border-darktable-hover">
        <thead class="table-dark">
            <tr class="container col-md-12">
                <th class="container col-md-4 text-center"scope="col">Nama</th>
                <th class="container col-md-1 text-center"scope="col">Umur</th>
                <th class="container col-md-6 text-center"scope="col">Keterangan</th>
                <th class="container col-md-1 text-center" scope="col" colspan="3" class="text-center">Action</th>
            </tr>
        </thead>

    <tbody>
        <tr>
            <?php
            $query = "SELECT * FROM pasien";//SQL query to fecth all  table daa
            $db = mysqli_query($db, $query); //sending the query to the database

            //displaying all the data retrieved from the database using while lop
            while ($row = mysqli_fetch_assoc($db)){
                $id = $row ['id'];
                $nama = $row ['nama'];
                $umur = $row['umur'];
                $konsumsi = $row['konsumsi'];
                
                echo "<tr>";
                // echo "<th scope='row'> {$id}</th>";
                echo "<td >{$nama}</td>";
                echo "<td > {$umur}</td>";
                echo "<td > {$konsumsi}</td>";
                echo "<td class='text-center'> <a href='read.php?pasien_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i>READ</a></td>";
                echo "<td class='text-center'> <a href='update.php?pasien_id={$id}' class='btn btn-secondary'> <i class='bi bi-pencil'></i>UPDATE</a></td>";
                echo "<td class='text-center'> <a href='confirm.php?delete={$id}' class='btn btn-danger delete-btn' data-id='{$id}'><i class='bi bi-trash'></i> DELETE</a></td>";
               

            }
            ?>
        </tr>
    </tbody>
    </table>  
</div>


<!-- Modal -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hid_surveiden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-body">
                <h1 class="mt-4"><i class="fas fa-trash-alt text-danger fa-3x"></i></h1>
                <h2 class="mb-4"><b>DELETE</b></h2>
                <p>Yakin data akan dihapus?</p>
            </div>
            <div class="modal-footer justify-content-center border-0">
                <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Batal</button>
                <a href="#" class="btn btn-danger btn-block" id="deleteButton">Delete</a>
            </div>
        </div>
    </div>
</div>

<!-- Sesuaikan skrip jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        $('.delete-btn').on('click', function (e) {
            e.preventDefault(); // Mencegah peristiwa default tautan

            var id= $(this).data('id');
            $('#deleteModal').modal('show');

            $('#deleteButton').on('click', function () {
                window.location.href = 'delete.php?delete=' + id;
            });
        });
    });


</script>

<?php include "../footer.php" ?>
