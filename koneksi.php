<?php

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'db_rumah_sakit';

$db = mysqli_connect($server, $user, $password, $database);

if (!$db) {
    die("Tidak berhasil terhubung dengan database" . mysqli_connect_error());
}
