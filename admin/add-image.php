<?php
    require '../functions.php';

    if (isset($_POST["addimg"])) {
        if (add_img($_POST) > 0) {
            echo "<script>
                alert('Berhasil menambahkan gambar.');
            </script>";
        } else {
            echo mysqli_error($conn);
        }
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main class="login">
        <section>
            <h1>Tambahkan Gambar</h1>

            <form action="" method="POST" enctype="multipart/form-data">
                <label for="Description">Deskripsi : </label>
                <input type="text" name="description" id="Description" placeholder="Ketikkan deskripsi gambar" required>

                <label for="imageChoose">Gambar : </label>
                <input type="file" name="img" id="imageChoose" accept="image/*">

                <button type="submit" name="addimg">Tambahkan</button>
            </form>

            <a href="galleries.php">&#129104; &nbsp; Kembali</a>
        </section>
    </main>
</body>
</html>