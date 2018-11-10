<?php
include "../../ketnoicsdl/ketnoi.php";
if(isset($_POST["thamso"]["macauhoi"])){
	$macauhoi=$_POST["thamso"]["macauhoi"];
	$sql="DELETE FROM `ttcauhoi` WHERE ttcauhoi.macauhoi='$macauhoi'";
	$thucthi=$conn->query($sql);
	if($thucthi){
			echo "Xóa thành công";
	}
	else{
		echo "Có lỗi xảy ra vui lòng kiểm tra lại";
	}
	
}
else{
	echo " Xóa không thành công";
}

?>