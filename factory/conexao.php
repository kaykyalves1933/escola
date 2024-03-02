<?php
    $server = "localhost";
    $user = "root";
    $password = "Relac*1933";
    $dbbanco = "bdtutoria";

    $conn = mysqli_connect($server, $user, $password, $dbbanco);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>