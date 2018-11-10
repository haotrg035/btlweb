<?php
include "../../ketnoicsdl/ketnoi.php";
if(isset($_POST["thamso"]["madapan"])){
	$madapan=$_POST["thamso"]["madapan"];
	$sql="DELETE FROM `dapan` WHERE dapan.madapan='$madapan'";
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