<?php


$nis =$_POST['nis'];
$username =$_POST['username'];
$password =$_POST['password'];
$kelas =$_POST['kelas'];

$koneksi = mysqli_connect("localhost","root","","dbsekolah_2026_12rpl2_ujikom_keisha");

mysqli_query($koneksi, "INSERT INTO `user`(`username`, `password`, `role`, `nis`, `kelas`) VALUES ('$username','$password','siswa','$nis','$nis'));