<?php
    require '../functions.php';

    if (isset($_POST["regis"])) {
        if (registrasi($_POST) > 0) {
            echo "<script>
                alert('Berhasil mendaftar.');
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
            <h1>Registrasi</h1>

            <form action="" method="POST" enctype="multipart/form-data">
                <?php if (isset($error)) : ?>
                    <p class="error">Username / Password salah.</p>
                <?php endif; ?>

                <label for="Username">Username : </label>
                <input type="text" name="username" id="Username" placeholder="Ketikkan Username Anda">

                <label for="Password">Password : </label>
                <input type="text" name="password" id="Password" placeholder="Ketikkan Password Anda">

                <label for="Password2">Konfirmasi Password : </label>
                <input type="text" name="password2" id="Password2" placeholder="Konfirmasi Password Anda">

                <!-- <label for="profile-label">Foto Profil : </label> -->
                <label for="ProfilePicture" class="img-profile" id="profile-label">Foto Profil :</label>
                <input type="file" name="img_profile" id="ProfilePicture" accept="image/*">

                <button type="submit" name="regis">Daftar</button>
            </form>

            <a href="user.php">&#129104; &nbsp; Kembali</a>
        </section>
    </main>
</body>
</html>