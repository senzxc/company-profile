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
?>