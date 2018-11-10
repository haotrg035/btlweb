<?php
include "../../ketnoicsdl/ketnoi.php";
if(isset($_POST["thamso"]["madethi"])){
	$madethi=$_POST["thamso"]["madethi"];
	$sql="DELETE FROM `thongtindethi` WHERE thongtindethi.madethi='$madethi'";
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