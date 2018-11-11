<?php
    $sql_layhonhop = "SELECT `tvcauhoi`.`noidung` AS `noidungcauhoi`,
    `tvcauhoi`.`dokho`, `dapan`.`noidung` AS `noidungdapan`,
    `dapan`.`loaicau`
    FROM `tvcauhoi` JOIN `dapan` ON `tvcauhoi`.`macauhoi` = `dapan`.`macauhoi`";
    $sql_loaddethi = "";