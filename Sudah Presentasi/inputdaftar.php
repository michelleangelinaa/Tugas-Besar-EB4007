<?php
require "koneksiDB.php";

$koneksiDB = mysqli_connect("localhost", "root", "", "websitepuskemas");

$username = $_SESSION['username'];
$sql1 = "SELECT * FROM akunpasien WHERE username = '$username'";

$result = mysqli_query($koneksiDB,$sql1);
$row=mysqli_fetch_array($result);

$rekam_medis = "SELECT rekam_medis FROM akunpasien WHERE username = '$username'";
$nama_lengkap = "SELECT nama_lengkap FROM akunpasien WHERE username = '$username'";
$nik = "SELECT nik FROM akunpasien WHERE username = '$username'";
$tanggal_lahir = "SELECT tanggal_lahir FROM akunpasien WHERE username = '$username'";
$bpjs = "SELECT bpjs FROM akunpasien WHERE username = '$username'";
$poli_dituju = $_POST["poli_dituju"];
$dokter_dituju = $_POST["dokter_dituju"];
$tanggal_pemeriksaan = $_POST["tanggal_pemeriksaan"];
$waktu_pemeriksaan = $_POST["waktu_pemeriksaan"];
$keluhan_pasien = $_POST["keluhan_pasien"];

$sql = mysqli_query($koneksiDB, "INSERT INTO daftarulang (rekam_medis, nama_lengkap, nik, tanggal_lahir, bpjs, poli_dituju, dokter_dituju, tanggal_pemeriksaan, waktu_pemeriksaan, keluhan_pasien)
    VALUES ('".$rekam_medis."', '".$nama_lengkap."', '".$nik."', '".$tanggal_lahir."', '".$bpjs."', '".$poli_dituju."', '".$dokter_dituju."', '".$tanggal_pemeriksaan."', '".$waktu_pemeriksaan."', '".$keluhan_pasien."')");

echo "Pendaftaran Anda telah berhasil";
 ?>