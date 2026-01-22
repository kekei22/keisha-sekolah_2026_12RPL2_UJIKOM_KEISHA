<?php

$koneksi = mysqli_connect("localhost","root","","dbsekolah_2026_12rpl2_ujikom_keisha");

mysqli_query($koneksi, "INSERT INTO `input_aspirasi` (`id_pelaporan`, `nis`, `id_kategori`, `lokasi`, `ket`, `status`, `feedback`) VALUES (NULL, '003', '444', 'kelas', 'atap bocor', 'proses', '')");