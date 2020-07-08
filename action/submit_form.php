<?php

include 'koneksi.php';

$data['nmr_registrasi'] = $_POST['no_registrasi'];
$data['nama_lengkap'] = $_POST['nama_lengkap'];
$data['nik'] = $_POST['nik'];
$data['jenis_kelamin'] = $_POST['jenis_kelamin'];
$data['tempat_lahir'] = $_POST['tempat_lahir'];
$data['tanggal_lahir'] =  date('Y-m-d', strtotime($_POST['tanggal_lahir']));
$data['alamat'] = $_POST['alamat'];
$data['no_telp'] = $_POST['no_telp'];
$data['nama_binaan'] = $_POST['nama_binaan'];
$data['binaan'] = $_POST['binaan'];
$data['kasus'] = $_POST['kasus'];
$data['shift'] = $_POST['shift'];
$data['hub_binaan'] = $_POST['hub_binaan'];
$data['tanggal_kunjungan'] =  date('Y-m-d', strtotime($_POST['tanggal_kunjungan']));

$query = "INSERT INTO tbl_datang (nmr_reg, nama, nik, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat, no_telp, nama_binaan, bin_binaan, kasus, shift, hub_binaan, jadwal_kunjungan) VALUES ('".$data['nmr_registrasi']."', '".$data['nama_lengkap']."', '".$data['nik']."', '".$data['jenis_kelamin']."', '".$data['tempat_lahir']."', '".$data['tanggal_lahir']."', '".$data['alamat']."', '".$data['no_telp']."', '".$data['nama_binaan']."', '".$data['binaan']."', '".$data['kasus']."', '".$data['shift']."', '".$data['hub_binaan']."', '".$data['tanggal_kunjungan']."')";
$insert = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
if($insert){
    header("Location:../success.php?reg=".$data['nmr_registrasi']);
}else{
    echo "Gagal";
}

?>