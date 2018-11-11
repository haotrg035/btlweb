<?php
include "../../ketnoicsdl/thuvien.php";

$mamon = "HH";
$madethi = "Exam01";
$socaude = 1;
$socautb = 1;
$socaukho = 1;


$cauhoi = laycauhoitravemang($mamon,$socaude,$socautb,$socaukho);
$dapan = laylistdapan($cauhoi);
// print_r($dapan);
// foreach ($cauhoi as $key => $value) {
//     echo print_r($value) ."<br>";
// }
// echo "<hr>";
// foreach ($dapan as $key => $value) {
//     echo print_r($value) ."<br>";
// }
// echo print_r($dapan);
hienthicauhoi($cauhoi,$dapan);