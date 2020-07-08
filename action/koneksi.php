<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "lapas";

$koneksi = mysqli_connect($server, $username, $password, $database);

if(!$koneksi) {
 die("Koneksi nama Database sobat ga ditemukan tuh  : ".mysqli_connect_error());
}
?>