<?php
    require 'functions.php';

    if (isset($_POST['submit'])) {
        if (contact($_POST) > 0) {
            echo "<script>
                    alert('Berhasil mengirim Pesan.');
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
    <title>Contact</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main class="contact">
        <section class="left">
            <h1>Butuh Bantuan?</h1>
            <h1>Silahkan Hubungi Tim</h1>
            <h2>FORD</h2>
        </section>

        <section class="right">
            <h1>KONTAK KAMI</h1>

            <form action="" method="POST">
                <div class="form-group name">
                    <label for="Nama">Nama</label>
                    <input type="text" name="name" id="Nama" placeholder="Ketikkan Nama Anda">
                </div>

                <div class="form-group email">
                    <label for="Email">Email</label>
                    <input type="text" name="email" id="Email" placeholder="Ketikkan Email Anda">
                </div>

                <div class="form-group msg">
                    <label for="Pesan">Pesan</label>
                    <textarea name="message" id="Pesan" placeholder="Ketikkan Pesan Anda"></textarea>
                </div>

                <div class="form-btn">
                    <button type="reset" class="delete">Hapus</button>
                    <button type="submit" name="submit" class="submit">Kirim</button>
                </div>
            </form>

            <a href="index.php">&#129104; &nbsp; Kembali</a>
        </section>
    </main>
</body>
</html>