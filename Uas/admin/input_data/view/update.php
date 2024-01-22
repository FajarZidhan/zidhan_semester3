<!-- Header -->
<?php
include "../header.php";
include "../db.php";

// Inisialisasi variabel pesan
$message = "";

// Cek apakah pasien_id sudah diatur di URL
if (isset($_GET['pasien_id'])) {
    $pasien_id = $_GET['pasien_id'];

    // Menggunakan prepared statement untuk mencegah SQL injection
    $query = "SELECT * FROM pasien WHERE id = ?";
    $stmt = mysqli_prepare($db, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $pasien_id);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            // Periksa apakah data ditemukan
            if (mysqli_num_rows($result) > 0) {
                $pasien = mysqli_fetch_assoc($result);

                // Ekstrak data untuk kejelasan
                $nama = $pasien['nama'];
                $umur = $pasien['umur'];
                $konsumsi = $pasien['konsumsi'];
            }
        } else {
            $message = "Error saat mengambil data: " . mysqli_error($db);
            exit();
        }

        mysqli_stmt_close($stmt);
    } else {
        $message = "Error saat mempersiapkan pernyataan: " . mysqli_error($db);
        exit();
    }
} else {
    $message = "ID pasien tidak valid. Parameter pasien_id tidak ditemukan dalam URL.";
    exit();
}

// Proses data formulir pembaruan
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $namaBaru = $_POST['nama'];
    $umurBaru = $_POST['umur'];
    $konsumsiBaru = $_POST['konsumsi'];

    // Menggunakan prepared statement untuk update data
    $update_query = "UPDATE pasien SET nama = ?, umur = ?, konsumsi = ? WHERE id = ?";
    $update_stmt = mysqli_prepare($db, $update_query);

    if ($update_stmt) {
        mysqli_stmt_bind_param($update_stmt, "sssi", $namaBaru, $umurBaru, $konsumsiBaru, $pasien_id);
        mysqli_stmt_execute($update_stmt);

        mysqli_stmt_close($update_stmt);

        $message = "Data berhasil diperbarui.";
        header("location: home.php");
        exit();
    } else {
        $message = "Error saat mempersiapkan pernyataan update: " . mysqli_error($db);
        exit();
    }
}
?>

<div class="container text-left">
    <a href="home.php" class="btn btn-dark mt-3">Kembali</a>
</div>

<h1 class="text-center">Update Detail Survei</h1>

<div class="container">
    <!-- Menampilkan pesan kesalahan atau sukses -->
    <?php if ($message): ?>
        <div class="alert alert-info" role="alert">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <form action="" method="post" enctype="multipart/form-data" class="" >
        <div class="form-group " > 
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $nama ?>">
        </div>

        <div class="form-group">
            <label for="umur">Judul Survei</label>
            <input type="text" name="umur" class="form-control" value="<?php echo $umur ?>">
        </div>

        <div class="form-group">
            <label for="konsumsi" class="form-label">Keterangan</label>
            <textarea type="comments" name="konsumsi" class="form-control" required></textarea>
        </div>


        <div class="form-group mt-5">
            <input type="submit" name="update" class="btn btn-primary mt-2" value="Perbarui">
        </div>
    </form>
</div>

<!-- Footer -->
<?php include "../footer.php" ?>