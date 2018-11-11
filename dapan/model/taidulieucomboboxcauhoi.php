<?php
	/*Load dữ liệu vào combobox in jquery easyui*/
	include "../../ketnoicsdl/ketnoi.php";
	$rs = $conn->query("SELECT `macauhoi`,CONCAT_WS(' - ',`macauhoi`,`noidung`) AS `textcauhoi` FROM `tvcauhoi` WHERE 1 ");
	$items = array();
	while($row = mysqli_fetch_object($rs)){
		array_push($items, $row);
	}
	echo json_encode($items);
    
?>