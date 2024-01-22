<?php
include "../header.php";
session_start();

if (isset($_GET['delete'])) {
    $id = mysqli_real_escape_string($db, $_GET['delete']);
    if (!is_numeric($id)) {
        // Handle invalid ID (non-numeric)
        exit();
    }

    // SQL query to delete data from pasien table where pasien = $id
    $query = "DELETE FROM pasien WHERE id = {$id}";
    $delete_query = mysqli_query($db, $query);

    if ($delete_query) {
        // Sukses
        $_SESSION['success_message'] = "Data berhasil dihapus.";
        echo '<script>window.location.href = "home.php";</script>';
        exit();
    } else {
        // Gagal
        $_SESSION['error_message'] = "Error deleting record: " . mysqli_error($db);
        echo "Error: " . $_SESSION['error_message'];
        error_log($_SESSION['error_message']);
        exit();
    }
}

if (isset($_SESSION['show_delete_modal']) && $_SESSION['show_delete_modal']) {
    unset($_SESSION['show_delete_modal']);
?>
    <!-- HTML Modal dan script JavaScript -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Confirmation Modal</title>
        <!-- Link to Bootstrap Icons via CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css">
    </head>
    <body>
        <!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content text-center">
                    <div class="modal-body">
                        <h1 class="mt-4"><i class="fas fa-trash-alt text-danger fa-3x"></i></h1>
                        <h2 class="mb-4"><b>DELETE</b></h2>
                        <p>Yakin data akan dihapus?</p>
                    </div>
                    <div class="modal-footer justify-content-center border-0">
                        <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Batal</button>
                        <button type="button" id="confirmDeleteButton" class="btn btn-danger btn-block">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Include Bootstrap JS before your custom script -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function () {
                $('.delete-btn').on('click', function (e) {
                    e.preventDefault();
                    var id = $(this).data('id');
                    $('#deleteModal').modal('show');

                    $('#confirmDeleteButton').on('click', function () {
                        window.location.href = 'konfirmasi.php?delete=' + id;
                    });
                });
            });
        </script>
    </body>
    </html>
<?php
    exit();
}

include "footer.php";
?>
