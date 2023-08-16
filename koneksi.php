<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "db_penginapan";

$koneksi = mysqli_connect("localhost","root","","db_penginapan");

//cek koneksi
if (mysqli_connect_errno()) {
    echo "koneksi database gagal: ". mysqli_connect_error();
}


    ?>