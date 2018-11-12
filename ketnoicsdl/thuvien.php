<?php
/**
 * thư viện php cho bài tập lớn web.
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
    function hienthicauhoi($cauhoi,$dapan,$tieude,$temonhoc){
        $j = 1;
        $html = '<table style="width:100%;margin-bottom:50px">
                        <tr  style="width:100%">
                            <td style="text-align:center; width:50%">
                                <h3>BỘ GIÁO DỤC <br>
                                    <span style="font-weight:normal">TRƯỜNG ĐH KỸ THUẬT CÔNG NGHỆ CẦN THƠ <br></span>
                                    <div style="width:50%;height:1px;border-bottom:2px dashed black;margin:10px auto"></div>
                                </h3>
                            </td>
                            <td style="text-align:center">
                                <h3>' .$tieude .' <br>
                                    MÔN : '.$temonhoc
                                .'</h3>
                            </td>
                        </tr>
                    </table> 
                    <h2> </h2>';
        foreach ($cauhoi as $key => $value) {
            $html .= '
            <table border="1" style="border-collapsse: collapse; width:100%;">
                <tr>
                    <td width = "100%" colspan="2" style="padding: 5px;">'
                        .'<b style="color:slateblue">'."Câu $j:</b> " .$value["noidungcauhoi"]
                    .'?</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <ol type="A" style="Width: 100%; postion:relative;">';
                            $dapantemp=$dapan[$value['macauhoi']];
                            shuffle($dapantemp);
                            for ($i=0; $i < 4; $i++) {
                                
                                $html = $html .'<li style="float:left;width:45%;padding: 5px 10px;">' .$dapantemp[$i] .'</li>';
                            }
                        $html = $html .'</ol>
                    </td>
                </tr>
            </table>';

    $j++;   }
    return $html;
    }
?>
<?php
    function traodoicauhoi($mang,$dapan){
        shuffle($mang);
        shuffle($dapan);
    }
?>
