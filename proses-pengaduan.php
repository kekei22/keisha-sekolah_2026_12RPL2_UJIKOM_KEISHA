<?php

$nis  =$_POST['nis'];
$kategori =$_POST['kategori'];
$lokasi =$_POST['lokasi'];
$keterangan =$_POST['keterangan'];




$koneksi = mysqli_connect("localhost","root","","dbsekolah_2026_12rpl2_ujikom_keisha");

// mysqli_query($koneksi, "INSERT INTO `input_aspirasi` (`id_pelaporan`, `nis`, `id_kategori`, `lokasi`, `keterangan`, `status`, `feedback`) VALUES (NULL, '$nis', '$kategori', '$lokasi', '$keterangan', 'proses','')");
mysqli_query($koneksi, "INSERT INTO `input_aspirasi`(`nis`, `id_kategori`, `lokasi`, `keterangan`, `status`, `feedback`) VALUES ('001','111','kelas','bocor','proses','baik akan segera diperbaiki')");


