<?php
$ns1 = ['id'=>1,'nim'=>'01101','nama'=>'Saepulloh','uts'=>90,'uas'=>93,'tugas'=>85];
$ns2 = ['id'=>2,'nim'=>'01121','nama'=>'Anggraeni','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','nama'=>'Anggara','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','nama'=>'Indriyani','uts'=>90,'uas'=>91,'tugas'=>82];
$ns5 = ['id'=>5,'nim'=>'01144','nama'=>'Rina','uts'=>94,'uas'=>93,'tugas'=>92];
$ns6 = ['id'=>6,'nim'=>'01128','nama'=>'Aal','uts'=>74,'uas'=>83,'tugas'=>72];
$ns7 = ['id'=>7,'nim'=>'01147','nama'=>'Tiara','uts'=>90,'uas'=>92,'tugas'=>92];
$ns8 = ['id'=>8,'nim'=>'01140','nama'=>'Putri','uts'=>84,'uas'=>90,'tugas'=>82];
$ns9 = ['id'=>9,'nim'=>'01155','nama'=>'Arifin','uts'=>72,'uas'=>82,'tugas'=>93];
$ns10 = ['id'=>10,'nim'=>'01174','nama'=>'Rifka','uts'=>95,'uas'=>93,'tugas'=>90];
$ns11= ['id'=>11,'nim'=>'01190','nama'=>'Rafli','uts'=>80,'uas'=>90,'tugas'=>90];
$ns12 = ['id'=>12,'nim'=>'01164','nama'=>'Lindiyani','uts'=>90,'uas'=>90,'tugas'=>90];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4,$ns5,$ns6,$ns7,$ns8,$ns9,$ns10,$ns11,$ns12];

?>
<h3>Daftar Nilai Siswa  </h3>
 <table  border="1" width="50%" >

 <thead>
 <tr >
 <th>No</th><th>NIM</th><th>NAMA</th><th>UTS</th>
 <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $nomor = 1;
 foreach($ar_nilai as $ns){
 echo '<tr><td>'.$nomor.'</td>';
 echo '<td>'.$ns['nim'].'</td>';
 echo '<td>'.$ns['nama'].'</td>';
 echo '<td>'.$ns['uts'].'</td>';
 echo '<td>'.$ns['uas'].'</td>';
 echo '<td>'.$ns['tugas'].'</td>';
 
 $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
 echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
 echo '<tr/>';
 $nomor++;
 }
 ?>
 </tbody>
 </table>
