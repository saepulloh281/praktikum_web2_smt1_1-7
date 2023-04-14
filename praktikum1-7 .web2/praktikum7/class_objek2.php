<?php
class kendaraan 
{
    public $nama, $warna, $merk;

    public function berjalan()
    {
        return "$this->nama bisa jalan";
    }

    public function tambahKecepatan()
    {
        return "$this->nama bisa menambah kecepatan";
    }

    public function getKendaraan()
    {
        echo "nama : $this->nama <br>
              warna : $this->warna <br>
              merk : $this->merk";
    }
}
$objekKendaraan = new kendaraan;
$objekKendaraan->nama = "Hijet 1000";
$objekKendaraan->nama = "Merah";
$objekKendaraan->nama = "Daihatsu";
echo $objekKendaraan->berjalan();
echo "<br>";
echo $objekKendaraan->tambahKecepatan();
echo "<br>";
echo $objekKendaraan->getKendaraan();