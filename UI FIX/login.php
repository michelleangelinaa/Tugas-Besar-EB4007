<?php

session_start();
require "koneksiDB.php";

$koneksiDB = mysqli_connect("localhost", "root", "", "websitepuskemas");

if (!$koneksiDB)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

$username = $_POST["username"];
$password = hash("sha256", $_POST["password"]);

$sql = mysqli_query($koneksiDB, "INSERT INTO loginpasien (username, password)
        VALUES ('".$username."', '".$password."')");

?>