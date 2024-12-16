<?php
    session_start();
    require 'functions.php';

    if (isset($_SESSION["login"])) {
        if ($_SESSION["role"] === 'admin-master') {
            header("Location: admin/index.php");
        } else {
            header("Location: admin/staff/index.php");
        }
        exit;
    }

    if (isset($_POST["login"])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if (password_verify($password, $row["password"])) {
                $_SESSION["login"] = true;
                $_SESSION["name"] = $_POST['username'];
                $_SESSION["profile"] = "../assets/uploads/" . $row['img_profile'];
                $_SESSION["profile2"] = "../../assets/uploads/" . $row['img_profile'];
                $_SESSION["role"] = $row['role'];

                if ($row["role"] === 'admin-master') {
                    header("Location: admin/index.php");
                } else {
                    header("Location: admin/staff/index.php");
                }
                exit;
            }
            $error = true;
        }
        $error = true;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="login">
        <section>
            <h1>Login</h1>

            <form action="" method="POST">
                <?php if (isset($error)) : ?>
                    <p class="error">Username / Password salah.</p>
                <?php endif; ?>

                <label for="Username">Username : </label>
                <input type="text" name="username" id="Username" placeholder="Ketikkan Username Anda">

                <label for="Password">Password : </label>
                <input type="password" name="password" id="Password" placeholder="Ketikkan Password Anda">

                <button type="submit" name="login">Login</button>
            </form>

            <a href="index.php">&#129104; &nbsp; Kembali</a>
        </section>
    </main>
</body>
</html>