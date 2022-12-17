<?php
    $conn = mysqli_connect("localhost", "root", "", "absen_daftar");
    // Check connection
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>