<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_dokter = $_POST['id_dokter'];
$nama_dokter = $_POST['nama_dokter'];
$jekel = $_POST['jekel'];
$keahlian = $_POST['keahlian'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($db,"update dokter set nama_dokter='$nama_dokter', jekel='$jekel', keahlian='$keahlian', alamat='$alamat' where id_dokter='$id_dokter'");
 
// mengalihkan halaman kembali ke index.php
header("location:dokter.php");
