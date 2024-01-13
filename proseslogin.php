<?php
$koneksi = mysqli_connect("localhost", "root", "", "registrasi");


$Username= $_POST["username"];
$Password = $_POST["password"];
$Submit = $_POST["submit"];

$query1 = "INSERT INTO loggin VALUES ('Username','Password','Submit')";
mysqli_query($koneksi, $query1);
?>