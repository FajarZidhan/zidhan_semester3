<?php
include "../db.php"; // Include your database connection file
require_once "fpdf182/fpdf.php"; // Adjust the path based on your project structure

if (isset($_GET['pasien_id'])) {
    $pasien_id = $_GET['pasien_id'];

    $query = "SELECT * FROM pasien WHERE id = ?";
    $stmt = mysqli_prepare($db, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $pasien_id);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            $pasien = mysqli_fetch_assoc($result);

            // Create a PDF file using FPDF
            $pdf = new FPDF();
            $pdf->AddPage();
            $pdf->SetFont('Arial', 'B', 14);
            $pdf->Cell(40, 10, 'Nama', 1);
            $pdf->Cell(40, 10, 'Umur', 1);
            $pdf->Cell(80, 10, 'Keterangan', 1);
            $pdf->Ln();
            $pdf->Cell(40, 10, $pasien['nama'], 1);
            $pdf->Cell(40, 10, $pasien['umur'], 1);
            $pdf->Cell(80, 10, $pasien['konsumsi'], 1);

            // Output PDF
            $filename = "pasien_data_" . $pasien_id . ".pdf";
            $pdf->Output($filename, 'D');
        } else {
            echo "Query failed: " . mysqli_error($db);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Prepared statement failed.";
    }

    mysqli_close($db);
} else {
    echo "Pasien ID tidak valid.";
}
?>
