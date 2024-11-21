<?php
    $conn = mysqli_connect("localhost", "root", "", "db_company");

    function contact($data) {
        global $conn;

        $name = $data["name"];
        $email = $data["email"];
        $message = $data["message"];

        mysqli_query($conn, "INSERT INTO contact VALUES('', '$name', '$email', '$message')");

        return mysqli_affected_rows($conn);
    }
    
    function registrasi($data) {
        global $conn;

        $username = strtolower(stripslashes($data['username']));
        $password =  mysqli_real_escape_string($conn ,$data['password']);
        $password2 = mysqli_real_escape_string($conn ,$data['password2']);

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

        $password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password', NOW())");

        return mysqli_affected_rows($conn);
    }
?>