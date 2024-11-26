<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "contoh";

$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    print "koneksi gagal";
}


?>