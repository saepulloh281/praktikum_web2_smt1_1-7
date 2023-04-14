<?php
$profileArray = [
    "nama" => "Saepulloh ",
    "kelas" => "TI 11"
];
echo $profileArray ["nama"] . "<br>";
echo $profileArray ["kelas"];

echo " ---";

$profileMultiArray = [
    ["nama"=> "Saepulloh",
    "semester"=> 2],
    [
        "nama"=> "Rafli ",
        "semester"=> 4
    ],
    ["nama"=>"daffa ",
    "semester"=> "5"]
];
foreach($profileMultiArray as $profile){
    echo $profile ['nama'] . "<br>";
    echo $profile ['semester'] ."<br>";
}