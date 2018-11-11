<?php
include "../../ketnoicsdl/ketnoi.php";
include "../../ketnoicsdl/thuvien.php";

$mamon = "HH";
$madethi = "Exam01";
$socaude = 5;
$socautb = 5;
$socaukho = 5;

function laycauhoitudong($mamon,$socaude,$socautb,$socaukho){
    if ($mamon != 0) {
        $rscaude = [];
        $sql_caude = "SELECT * FROM `tvcauhoi` WHERE `tvcauhoi`.mamon = $mamon 
        ORDER BY RAND() LIMIT $socaude";
    }

}