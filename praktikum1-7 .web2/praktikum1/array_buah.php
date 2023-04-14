<?php
//.membuat array
$arrayBuah =["Jeruk","Mangga","Pisang","Apel"];
print_r($arrayBuah);
echo "<br>";
var_dump($arrayBuah);
echo "<br>";
foreach($arrayBuah as $Buah){
    echo $Buah ,"<br>";
}
echo "<br>";
echo  $arrayBuah[0];