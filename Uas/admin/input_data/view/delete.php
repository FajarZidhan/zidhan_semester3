<?php
include "../header.php";

if (isset($_GET['delete'])) {
    $id = filter_var($_GET['delete'], FILTER_VALIDATE_INT);

    if ($id !== false && $id !== null) {
        $query = "DELETE FROM pasien WHERE id = ?";
        $stmt = mysqli_prepare($db, $query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "i", $id);
            $result = mysqli_stmt_execute($stmt);

            if ($result) {
                
            header("location: home.php");
                exit();
            } else {
                error_log($error_message);
                exit();
            }

           
        }
    }
}

include "../UAS/footer.php";
?>
