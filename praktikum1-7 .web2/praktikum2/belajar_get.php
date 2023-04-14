<?php
$nama_mahasiswa = $_GET['Nama'];
$Jenis_Kelamin = $_GET['JenisKelamin'];
$mata_kuliah = $_GET ['MataKuliah'];
$nomor_telepon = $_GET['nomor_telepon'];
$prodi = $_GET['Prodi'];

echo "<h1>Hasil Pendaftaraan Mahasiswa</h1><br>";
echo "Nama : ". $nama_mahasiswa . "<br>";
echo "jenis kelamin : " . $Jenis_Kelamin . "<br>";
echo "Mata Kuliah : " . $mata_kuliah . "<br>";
echo "nomor telepon : " .$nomor_telepon ."<br>";
echo "prodi : " .$prodi . "<br>";


