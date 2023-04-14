<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <h1>Form Pendaftaraan Mahasiswa STT NF</h1>
    <form action="belajar_post.php"method="POST">
        <!-- tipe teks -->
    <label for="">Nama Mahasiswa</label><br>
    <input type="text" name="Nama"><br><br>
    <!-- tipe radio -->
    <label for=""> Jenis Kelamin</label><br><br>
    <input type="radio" name="JenisKelamin" value="laki-laki" >
    <label for=""> Laki -Laki</label>
    <input type="radio" name="JenisKelamin" value="Perempuan" >
    <label for=""> Perempuan</label><br><br>
    <!-- tipe chekbox -->
    <label for="">Mata Kuliah</label><br>
    <input type="checkbox" name="MataKuliah" value="Basis Data">
    <label for="">Basis Data</label><br>
    <label for=""></label><br>
    <input type="checkbox" name="MataKuliah" value="Bahasa Inggris">
    <label for="">Bahasa Inggris</label><br>
    <!-- tipe number -->
    <label for="">Nomor Telepon</label><br>
    <input type="number" name="nomor_telepon"><br><br>
    <!-- selec -->
    <label for="Prodi">Prodi</label><br>
    <select name="Prodi" >
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Bisnis Digital">Bisnis Digital</option>
    </select><br><br>
    <!-- button -->
    <button type="submit">Kirim</button>
    <button type="button">Contoh</button>
    <button type="reset">reset</button>
    
    </form>
</body>
</html>