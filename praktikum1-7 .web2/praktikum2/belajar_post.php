<?php
$nama_mahasiswa = $_POST['Nama'];
$Jenis_Kelamin = $_POST['JenisKelamin'];
$mata_kuliah = $_POST ['MataKuliah'];
$nomor_telepon = $_POST['nomor_telepon'];
$prodi = $_POST['Prodi'];

echo "<h1>Hasil Pendaftaraan Mahasiswa</h1><br>";
echo "Nama : ". $nama_mahasiswa . "<br>";
echo "jenis kelamin : " . $Jenis_Kelamin . "<br>";
echo "Mata Kuliah : " . $mata_kuliah . "<br>";
echo "nomor telepon : " .$nomor_telepon ."<br>";
echo "prodi : " .$prodi . "<br>";


