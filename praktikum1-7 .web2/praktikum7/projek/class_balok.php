<?php
class Balok
{
    public $panjang;
    public $tinggi;
    public $lebar;

    function __construct($p, $l, $t)
    {
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }
    function hitungVolume()
    {
        return $this->panjang * $this->lebar * $this->tinggi;
    }
    function hitungLuasSisi()
    {
        $luasDepanBelakang = $this->panjang * $this->tinggi;
        $luasSampingKiriKanan = $this->lebar * $this->tinggi;
        $luasAtasBawah = $this->panjang * $this->lebar;

        return $luasDepanBelakang + $luasSampingKiriKanan + $luasAtasBawah;
    }
}

$balok = new Balok(15, 10, 5);
echo "Volume Balok: " . $balok->hitungVolume();
echo "<br>";
echo "Luas Sisi Balok: " . $balok->hitungLuasSisi();