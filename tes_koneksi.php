<?php

$koneksi = new mysqli("localhost", "root", "", "akademik_db");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
echo "Koneksi berhasil!";
?>