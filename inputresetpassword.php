<?php
    require "koneksiDB.php";

    $koneksiDB = mysqli_connect("localhost", "root", "", "websitepuskemas");

    $username = $_POST["username"];
    $password = hash("sha256", $_POST["password"]);

    $sql = mysqli_query($koneksiDB, "UPDATE akunpasien SET password='$password' WHERE username='$username'");

    echo "Password berhasil diganti";
?>