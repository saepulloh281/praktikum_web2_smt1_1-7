<?php
$arrayBuah =["Jeruk","Mangga","Pisang","Apel"];
//.mengurutkan nilai suatu array
sort ($arrayBuah);
//.menghapus nilai yang paling akhir
array_pop($arrayBuah);
//. Menghapus keeluruhan isi variabel
//.bisa juga menghapus spesifik nilay array tertentu
unset ($arrayBuah[1]);
//. untuk menambahkan nilai array paling belakang
array_push($arrayBuah,"Durian");
//. menghapus nilai array yang paling depan /awal
array_shift ($arrayBuah);
//.menambahkan nilai array di paling terakhir
array_unshift ($arrayBuah,"semangka","Buah Naga");
//.mengubah spesifik nilai array tertentu
$arrayBuah[0] = "Manggis";
foreach($arrayBuah as $buah){
    echo $buah ,"<br>";}


