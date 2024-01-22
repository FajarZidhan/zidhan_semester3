<?php
// Sertakan file koneksi ke database di sini
require "admin/input_data/db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari formulir
    $nama_makanan = $_POST['nama_makanan'];
    $kalori = $_POST['kalori'];

    // Lakukan validasi atau proses lain sesuai kebutuhan

    // Pastikan $koneksi telah didefinisikan di dalam config.php
    // Simpan data ke dalam tabel makanan
    $query = "INSERT INTO makanan (nama_makanan, kalori) VALUES ('$nama_makanan', $kalori)";
    
    $result = mysqli_query($db, $query);

    if ($result) {
        echo "Data makanan berhasil disimpan.";
    } else {
        echo "Gagal menyimpan data makanan: " . mysqli_error($koneksi);
    }
} else {
    echo "Metode permintaan tidak valid.";
}
?>