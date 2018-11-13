<?php
    include "../../ketnoicsdl/ketnoi.php";
    include "../../ketnoicsdl/thuvien.php";

    if (isset($_GET['mamon'])) {
        $mamon = $_GET['mamon'];
        $rs = array();
        // $rs = travemang("SELECT COUNT(*) FROM `tvcauhoi`
        // WHERE `tvcauhoi`.`mamon`='$mamon' AND `tvcauhoi`.`strdokho`='Dễ'");
        $rs = $conn->query("SELECT COUNT(*) FROM `tvcauhoi`
        WHERE `tvcauhoi`.`mamon`='$mamon' AND `tvcauhoi`.`strdokho`='Dễ'");	
        $row['socaude'] = mysqli_fetch_row($rs)[0];
        $rs = $conn->query("SELECT COUNT(*) FROM `tvcauhoi`
        WHERE `tvcauhoi`.`mamon`='$mamon' AND `tvcauhoi`.`strdokho`='Trung Bình'");	
        $row['socautb'] = mysqli_fetch_row($rs)[0];
        $rs = $conn->query("SELECT COUNT(*) FROM `tvcauhoi`
        WHERE `tvcauhoi`.`mamon`='$mamon' AND `tvcauhoi`.`strdokho`='Khó'");	
        $row['socaukho'] = mysqli_fetch_row($rs)[0];
        echo (json_encode($row));
    }