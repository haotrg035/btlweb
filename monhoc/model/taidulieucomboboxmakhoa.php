<?php
	/*Load dữ liệu vào combobox */
	include "../../ketnoicsdl/ketnoi.php";
	$rs = $conn->query("SELECT khoa.makhoa, khoa.tenkhoa FROM `khoa`");
	$items = array();
	while($row = mysqli_fetch_object($rs)){
		array_push($items, $row);
	}
	echo json_encode($items);
?>