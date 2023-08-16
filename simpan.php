<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nama_pemesan       = $_POST['nama_pemesan'];
$no_hp              = $_POST['no_hp'];
$email              = $_POST['email'];
$nama_tamu          = $_POST['nama_tamu'];
$cekin              = $_POST['cekin'];
$cekout             = $_POST['cekout'];
$jumlah             = $_POST['jumlah'];
$room_tipe          = $_POST['room_tipe'];
//queri SQL untuk insert data
$query=("INSERT INTO pemesanan SET nama_pemesan='$nama_pemesan', nomor_hp='$no_hp', email='$email', nama_tamu = '$nama_tamu',
check_in = '$cekin', check_out ='$cekout',jumlah_kamar='$jumlah', tipe_kamar='$room_tipe'");
mysqli_query($koneksi, $query);
//mengalihkan ke halaman index.php
header("location:index.php")
?>