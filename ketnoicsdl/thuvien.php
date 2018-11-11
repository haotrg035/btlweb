<?php
/**
 * thu vien php
 *
 * @author haotrg035
 */
include_once 'ketnoi.php';
    function travemang($sql){
        global $conn;
        $rs = $conn->query($sql);
        $rows = [];
        if($rs) {
		    while ($row = mysqli_fetch_array($rs)) {
			    $rows[] = $row;
            }
            return $rows;
        }else echo "Query Fail: ".mysqli_error($conn);
    }
    //lấy 4 đáp án của một câu hỏi
    function laydapantheomacauhoi($macauhoi){
        global $conn;
        $sql = "SELECT * FROM `dapan` WHERE `dapan`.`macauhoi`='$macauhoi'";
        return travemang($sql);
    }
    //dùng vòng lặp để lấy hết đáp án của một mảng câu hỏi
    function laylistdapan($mangcauhoi){
        $rs = [];
        foreach ($mangcauhoi as $keycauhoi => $rowcauhoi) {
            $macauhoi = $rowcauhoi['macauhoi'];
            $dapan=laydapantheomacauhoi($macauhoi);
            
            $rs["$macauhoi"] = array();

            foreach ($dapan as $keydapan => $rowdapan) {
                array_push($rs["$macauhoi"],$rowdapan['noidung']);
            }
        }
        return $rs;
    }
    function laycauhoitravemang($mamon,$socaude,$socautb,$socaukho){
        global $conn;
        $rs = [];
        if ($socaude != 0) {
            $sql = "SELECT `tvcauhoi`.`intdokho` AS `dokho`,`tvcauhoi`.`macauhoi`,`tvcauhoi`.`noidung` AS `noidungcauhoi`
            FROM `tvcauhoi` WHERE `tvcauhoi`.mamon = '$mamon' AND `tvcauhoi`.`intdokho` = 1
            ORDER BY RAND() LIMIT $socaude";
            $rs=array_merge($rs,travemang($sql));
        }
        if ($socaude != 0) {
            $sql = "SELECT `tvcauhoi`.`intdokho` AS `dokho`,`tvcauhoi`.`macauhoi`,`tvcauhoi`.`noidung` AS `noidungcauhoi`
            FROM `tvcauhoi` WHERE `tvcauhoi`.mamon = '$mamon' AND `tvcauhoi`.`intdokho` = 2
            ORDER BY RAND() LIMIT $socaude";
            $rs=array_merge($rs,travemang($sql));
        }
        if ($socaude != 0) {
            $sql = "SELECT `tvcauhoi`.`intdokho` AS `dokho`,`tvcauhoi`.`macauhoi`,`tvcauhoi`.`noidung` AS `noidungcauhoi`
            FROM `tvcauhoi` WHERE `tvcauhoi`.mamon = '$mamon' AND `tvcauhoi`.`intdokho` = 3
            ORDER BY RAND() LIMIT $socaude";
            $rs=array_merge($rs,travemang($sql));
        }
       return $rs;
    }
?>
<?php
//hiển thị câu hỏi + đáp án theo câu hỏi ra dạng bảng
    function hienthicauhoi($cauhoi,$dapan){
        $j = 1;;
        foreach ($cauhoi as $key => $value) { ?>
            <table border="1" style="border-collapsse: collapse;">
                <tr>
                    <td width = "300" colspan="2">
                        <?php echo "Câu $j: " .$value["noidungcauhoi"] ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ol type="A" style="Width: 800px; postion:relative">
                            <?php 
                                for ($i=0; $i < 4; $i++) { ?>
                                    <li style="float:left;width:45%;"><?php echo $dapan[$value['macauhoi']][$i]; ?></li>
                                <?php }?>
                        </ol>
                    </td>
                </tr>
            </table>
        <?php
    $j++;   }
    }
?>
<?php
    function traodoicauhoi($mang){
        shuffle($mang);
        hienthicauhoi($mang);
    }
?>
