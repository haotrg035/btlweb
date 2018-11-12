<?php
	/*Load dữ liệu vào combobox */
	include "../../ketnoicsdl/ketnoi.php";
	$sql = "SELECT `madethi`, CONCAT_WS(' - ',`madethi`,`tieude`) AS `tieude` FROM `thongtindethi`";
	if (!empty($_GET['mamon'])) {
		$sql = $sql ." WHERE `mamon` = '{$_GET['mamon']}'";
	}
	$rs = $conn->query($sql);
	$items = array();
	while($row = mysqli_fetch_object($rs)){
		array_push($items, $row);
	}
	echo json_encode($items);
?>