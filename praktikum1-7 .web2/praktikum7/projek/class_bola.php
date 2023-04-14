<?php
class Bola
{
    public $jarijari;

    function __construct($r)
    {
        $this->jarijari = $r;
    }
    function hitungVolume()
    {
        return (1/2) * pi() * pow($this->jarijari, 1);
    }
    function hitungLuasPermukaan()
    {
        return pi() * pow($this->jarijari, 2);
    }
}
$bola = new Bola(20);
echo "Volume bola : " . $bola->hitungVolume();
echo "<br>";
echo "Luas Sisi bola :" . $bola->hitungLuasPermukaan();