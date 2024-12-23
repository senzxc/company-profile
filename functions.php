<?php
    $conn = mysqli_connect("localhost", "root", "", "db_company");

    function contact($data) {
        global $conn;

        $name = htmlspecialchars($data["name"]);
        $email = htmlspecialchars($data["email"]);
        $message = htmlspecialchars($data["message"]);

        // Ambil ID terakhir dari tabel
        $result = mysqli_query($conn, "SELECT id_contact FROM contact ORDER BY id_contact DESC LIMIT 1");
        $row = mysqli_fetch_assoc($result);
        $lastId = isset($row['id_contact']) ? intval($row['id_contact']) : 0; // Default ke 0 jika tabel kosong
        $newId = $lastId + 1;

        mysqli_query($conn, "INSERT INTO contact VALUES('$newId', '$name', '$email', '$message', NOW())");

        return mysqli_affected_rows($conn);
    }
    
    function registrasi($data) {
        global $conn;

        $username = strtolower(stripslashes($data['username']));
        $password =  mysqli_real_escape_string($conn ,$data['password']);
        $password2 = mysqli_real_escape_string($conn ,$data['password2']);
        $role = 'staff';

        $result = mysqli_query($conn, "SELECT username FROM  user WHERE username = '$username'");

        if (mysqli_fetch_all($result)) {
            echo "<script>
                    alert('username already exist!');
                </script>";
                return false; 
        }

        if ($password !== $password2) {
            echo "<script>
                    alert('konfirmasi tak sesuai');
                </script>";
                return false;
        }

        $img = uploadProfile();
        if (!$img) {
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        // Ambil ID terakhir dari tabel
        $result = mysqli_query($conn, "SELECT id_user FROM user ORDER BY id_user DESC LIMIT 1");
        $row = mysqli_fetch_assoc($result);
        $lastId = isset($row['id_user']) ? intval($row['id_user']) : 0; // Default ke 0 jika tabel kosong
        $newId = $lastId + 1;

        mysqli_query($conn, "INSERT INTO user VALUES ('$newId', '$username', '$password', NOW(), '$img', '$role')");

        return mysqli_affected_rows($conn);
    }

    function uploadProfile() {
        $fileName = $_FILES['img']['name'];
        $fileSize = $_FILES['img']['size'];
        $tmpName = $_FILES['img']['tmp_name'];

        $validImgExtension = ['jpg', 'jpeg', 'png'];
        $imgExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        if (!in_array($imgExtension, $validImgExtension)) {
            echo "<script>
                    alert('File yang diunggah bukan gambar!');
                </script>";
                return false;
        }

        if ($fileSize > 2000000) {
            echo "<script>
                    alert('Ukuran file terlalu besar!');
                </script>";
                return false;
        }

        $newFileName = uniqid() . '.' . $imgExtension;

        move_uploaded_file($tmpName, '../assets/uploads/' . $newFileName);

        return $newFileName;
    }

    function uploadProfile2() {
        $fileName = $_FILES['img']['name'];
        $fileSize = $_FILES['img']['size'];
        $tmpName = $_FILES['img']['tmp_name'];

        $validImgExtension = ['jpg', 'jpeg', 'png'];
        $imgExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        if (!in_array($imgExtension, $validImgExtension)) {
            echo "<script>
                    alert('File yang diunggah bukan gambar!');
                </script>";
                return false;
        }

        if ($fileSize > 2000000) {
            echo "<script>
                    alert('Ukuran file terlalu besar!');
                </script>";
                return false;
        }

        $newFileName = uniqid() . '.' . $imgExtension;

        move_uploaded_file($tmpName, '../../assets/uploads/' . $newFileName);

        return $newFileName;
    }

    function deleteUser($id_user) {
        global $conn;

        mysqli_query($conn, "DELETE FROM user WHERE id_user = $id_user");
        return mysqli_affected_rows($conn);

    }

    function deleteGallery($id_gallery) {
        global $conn;

        mysqli_query($conn, "DELETE FROM gallery WHERE id_gallery = $id_gallery");
        return mysqli_affected_rows($conn);
    }

    function deleteMsg($id_contact) {
        global $conn;

        mysqli_query($conn, "DELETE FROM contact WHERE id_contact = $id_contact");
        return mysqli_affected_rows($conn);
    }

    function add_img($data) {
        global $conn;

        $desc = $data['description'];
        $addedBy = $_SESSION['name'];

        $img = uploadProfile();
        if (!$img) {
            return false;
        } 

        // Ambil ID terakhir dari tabel
        $result = mysqli_query($conn, "SELECT id_gallery FROM gallery ORDER BY id_gallery DESC LIMIT 1");
        $row = mysqli_fetch_assoc($result);
        $lastId = isset($row['id_gallery']) ? intval($row['id_gallery']) : 0; // Default ke 0 jika tabel kosong
        $newId = $lastId + 1;

        mysqli_query($conn, "INSERT INTO gallery VALUES ('$newId', '$img', NOW(), '$desc', '$addedBy')");
        return mysqli_affected_rows($conn);
    }

    function add_img2($data) {
        global $conn;

        $desc = $data['description'];
        $addedBy = $_SESSION['name'];

        $img = uploadProfile2();
        if (!$img) {
            return false;
        } 

        // Ambil ID terakhir dari tabel
        $result = mysqli_query($conn, "SELECT id_gallery FROM gallery ORDER BY id_gallery DESC LIMIT 1");
        $row = mysqli_fetch_assoc($result);
        $lastId = isset($row['id_gallery']) ? intval($row['id_gallery']) : 0; // Default ke 0 jika tabel kosong
        $newId = $lastId + 1;

        mysqli_query($conn, "INSERT INTO gallery VALUES ('$newId', '$img', NOW(), '$desc', '$addedBy')");
        return mysqli_affected_rows($conn);
    }
?>