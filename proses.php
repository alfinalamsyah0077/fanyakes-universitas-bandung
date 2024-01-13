<?php
date_default_timezone_set("Asia/Bangkok");
?>




<?php 

// REGISTRASI
$koneksi = mysqli_connect("localhost", "root", "", "registrasi");

$NO_RM = $_POST["norm"];
$NIK = $_POST["nik"];
$Nama = $_POST["nama"];
$Tempat_Lahir = $_POST["tempat"];
$Tanggal_Lahir = $_POST["tanggal_lahir"];
$Umur = $_POST["umur"];
$Jenis_Kelamin = $_POST["kelamin"];
$Agama= $_POST["agama"];
$Suku = $_POST["suku"];
$Bahasa_Yang_dikuasai= $_POST["Bahasa"];
$Alamat_Lengkap = $_POST["Alamat"];
$RT = $_POST["rt"];
$RW = $_POST["rw"];
$Kelurahan = $_POST["Kelurahan/Desa"];
$Kecamatan = $_POST["Kecamatan"];
$Kabupaten = $_POST["Kabupaten/Kota"];
$Kode_Pos = $_POST["Kode_Pos"];
$Provinsi = $_POST["Provinsi"];
$Negara = $_POST["Negara"];
$No_telpon_rumah = $_POST["No_Telepon_Rumah"];
$No_telpon_pasien = $_POST["Nomor_Telepon_Pasien"];
$Pendidikan = $_POST["Pendidikan"];
$Pekerjaan = $_POST["Pekerjaan"];
$Status_perkawinan = $_POST["Status"];
$Cara_pembayaran = $_POST["Pembayaran"];
$Asuransi_kesehatan = $_POST["Asuransi"];
$Cara_masuk = $_POST["cara_masuk"];
$Unit_pelayanan = $_POST["unit"];
$Poli_umum = $_POST["umum"];
$Poli_gigi = $_POST["gigi"];
$Poli_saraf = $_POST["saraf"];
$Poli_THT = $_POST["THT"];
$Poli_kulit = $_POST["kulit"];
$Poli_anak = $_POST["anak"];
$Poli_mata = $_POST["mata"];
$Poli_Penyakit_dalam = $_POST["dalam"];
$Poli_Obgyn= $_POST["obgyn"];
$Poli_bedah= $_POST["bedah"];
$submit = $_POST["submit"];


$query1 = "INSERT INTO resgitrasi VALUES ('$NO_RM', 
'$NIK', '$Nama', '$Tempat_Lahir', '$Tanggal_Lahir', '$Umur', '$Jenis_Kelamin', 
'$Agama', '$Suku', '$Bahasa_Yang_dikuasai', '$Alamat_Lengkap', '$RT', '$RW','$Kelurahan', 
'$Kecamatan', '$Kabupaten','$Kode_Pos', '$Provinsi', '$Negara', '$No_telpon_rumah', '$No_telpon_pasien', '$Pendidikan', '$Pekerjaan', '$Status_perkawinan', '$Cara_pembayaran', '$Asuransi_kesehatan', '$Cara_masuk', 
'$Unit_pelayanan', '$Poli_umum','$Poli_gigi','$Poli_saraf', '$Poli_THT','$Poli_kulit','$Poli_anak','$Poli_mata','$Poli_Penyakit_dalam','$Poli_Obgyn','$Poli_bedah', '$submit')";

mysqli_query($koneksi, $query1);

?>