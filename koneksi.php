<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "latihan1";

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
