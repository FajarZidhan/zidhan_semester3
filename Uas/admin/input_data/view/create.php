<!-- Header -->
<?php include "../header.php";
session_start()?>
<?php

// Pastikan Anda sudah terhubung ke database sebelumnya

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $nama = $_POST["nama"];
    $umur = $_POST["umur"];
    $konsumsi = $_POST["konsumsi"];
    // Proses penyisipan data ke dalam tabel
    $koneksi = mysqli_connect($servername, $username, $password, $dbname);

    if (!$koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    $query = "INSERT INTO pasien (nama, umur, konsumsi) VALUES ('$nama', $umur, '$konsumsi')";

    // ...
if (mysqli_query($koneksi, $query)) {
    $massage = "Data tersimpan";

} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
// ...


    mysqli_close($koneksi);
}
?>



<div class="container text-left">
<a href="home.php" class="btn btn-warning mt-3">Kembali
</a>
</div>
<div>
<div class="container col-md-6 ">

    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
        <legend>Formulir Data Pasien</legend>
        <p><?= $massage?></p>
        <div class="form-group">
            <label for="nama" class="for-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="umur" class="for-label">umur</label>
            <input type="number" name="umur" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="konsumsi" class="form-label">Riwayat Penyakit</label>
            <input type="text" name="konsumsi" class="form-control" required>
        </div>

     

        <div class="form-group">
        <input type="submit" name="create" class="btn 
        btn-primary mt-2" value="Submit">
        </div>
        </fieldset>
    </form>
</div>
</div>


<!-- a BACK button to go to the home page -->


<!-- Footer -->
<?php include "../footer.php" ?>

 <?php 
// if(!$nama){
//     return false ; 
// }

// function upload(){
//     $namafile = $_FILES['nama']['name'];
//     $ukuranfile = $_FILES['nama']['size'];
//     $error = $_FILES['nama']['error'];
//     $tmpName = $_FILES['nama']['tmp_name'];
//     if ($error === 4){
//         echo "<script>
//         alert('pilih gambar dulu!
//         </script>";
//         return false;
//     }
// }

// $extensiGambarValid = ['jpq','png','jpeg'];
// $extensiGambar = explode('.', $namafile);
// $extensiGambar = strtolower(end( $extensiGambar));
// if (in_array($extensiGambar,$extensiGambarValid)){
//     echo "<script>
//     alert('yang anda upload bukan gambar!')
//     </script>";
//     return false;

// }

///lolos
// move_uploaded_file($tmpName, 'images');


// 

?>
