<?php
    require '../functions.php';

    $type = $_GET['type'];
    $id = $_GET['id'];

    if ($type && $id && is_numeric($id)) {
        if ($type === 'user') {
            $result = deleteUser($id);
            $redirect = 'user.php';
            $successMsg = 'User deleted successfully';
            $failedMsg = 'User failed to delete';
        } elseif ($type === 'gallery') {
            $result = deleteGallery($id);
            $redirect = 'galleries.php';
            $successMsg = 'Image deleted successfully';
            $failedMsg = 'Image failed to delete';
        } else {
            echo "<script>
                    alert('Invalid type specified.');
                    document.location.href = 'index.php'; // Redirect ke halaman utama
                </script>";
        }

        if ($result > 0) {
            echo "<script>
                    alert('$successMsg');
                    document.location.href = '$redirect';
                </script>";
        } else {
            echo "<script>
                    alert('$failedMsg');
                    document.location.href = '$redirect';
                </script>";
        } 
    }
?>