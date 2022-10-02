<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_dokter = $_POST['id_dokter'];
$nama_dokter = $_POST['nama_dokter'];
$jekel = $_POST['jekel'];
$keahlian = $_POST['keahlian'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
mysqli_query($db,"insert into dokter values('$id_dokter','$nama_dokter','$jekel','$keahlian','$alamat')");
 
// mengalihkan halaman kembali ke index.php
header("location:dokter.php");
