<?php
    require '../functions.php';

    $type = $_GET['type'];
    $id = $_GET['id'];

    if ($type && $id && is_numeric($id)) {
        if ($type === 'user') {
            $result = deleteUser($id);
            $redirect = 'user.php';
            $successMsg = 'Berhasil menghapus User';
            $failedMsg = 'Gagal menghapus User';
        } elseif ($type === 'gallery') {
            $result = deleteGallery($id);
            $redirect = 'galleries.php';
            $successMsg = 'Berhasil menghapus gambar';
            $failedMsg = 'Gagal menghapus gambar';
        } elseif ($type === 'msg'){
            $result = deleteMsg($id);
            $redirect = 'messages.php';
            $successMsg = 'Berhasil menghapus pesan';
            $failedMsg = 'Gagal menghapus pesan';
        } else {
            echo "<script>
                    alert('Invalid type specified.');
                    document.location.href = 'index.php';
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