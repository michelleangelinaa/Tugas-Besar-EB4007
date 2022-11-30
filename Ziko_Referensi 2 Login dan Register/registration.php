<?php
session_start();
header('location:loginandregister.php');
$connection=mysqli_connect('localhost','root','websitepuskemas');
//$connection=mysqli_connect('localhost','root','write your password here')

mysqli_select_db($connection,'loginandregistrationform');

$nama_lengkap = $_POST["nama_lengkap"];
$nik = $_POST["nik"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$usia = $_POST["usia"];
$tempat_tinggal = $_POST["tempat_tinggal"];
$bpjs = $_POST["bpjs"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$golongan_darah = $_POST["golongan_darah"];
$pekerjaan = $_POST["pekerjaan"];
$nomor_telepon = $_POST["nomor_telepon"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = hash("sha256", $_POST["password"]);

$select="select * from akunpasien where email_id='$email'";
$result=mysqli_query($connection,$select);
$num=mysqli_num_rows($result);
if($num==1)
{
    echo" user already exists";
}
else
{
    $reg="insert into akunpasien (nama_lengkap, nik, tanggal_lahir, usia, tempat_tinggal, bpjs, jenis_kelamin, golongan_darah, pekerjaan, nomor_telepon, email, username, password) VALUES ('".$nama_lengkap."', '".$nik."', '".$tanggal_lahir."', '".$usia."', '".$tempat_tinggal."', '".$bpjs."', '".$jenis_kelamin."', '".$golongan_darah."', '".$pekerjaan."', '".$nomor_telepon."', '".$email."', '".$username."', '".$password."')");
    mysqli_query($connection,$reg);
}
?>