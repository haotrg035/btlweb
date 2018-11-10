<?php
	/*Load dữ liệu vào combobox */
	include "../../ketnoicsdl/ketnoi.php";
	$rs = $conn->query("SELECT monhoc.mamon, monhoc.tenmon FROM `monhoc`");
	$items = array();
	while($row = mysqli_fetch_object($rs)){
		array_push($items, $row);
	}
	//$result["rows"] = $items;
	echo json_encode($items);
    
 
?>