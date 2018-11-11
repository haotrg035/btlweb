<?php 
include "../../ketnoicsdl/ketnoi.php";
function checkTrung_MaKhoa($makhoa){
	include "../../ketnoicsdl/ketnoi.php";
	$sql="SELECT `makhoa` FROM `khoa` WHERE `makhoa` ='$makhoa'";
	$stmt=$conn->query($sql);
	if(mysqli_num_rows($stmt) > 0){
		return true;
	}
	else{ 
		return false;
	}
}
if(isset($_POST["thamso"]["makhoa"]) and isset($_POST["thamso"]["tenkhoa"])){
	$makhoa=$_POST["thamso"]["makhoa"];
	$tenkhoa=$_POST["thamso"]["tenkhoa"];
	if(checkTrung_MaKhoa($makhoa)){
		echo "Mã khoa đã tồn tại vui lòng kiểm tra lại";
	}
	else{
		$sql="INSERT INTO `khoa`(`makhoa`, `tenkhoa`) VALUES ('$makhoa','$tenkhoa')";
		$stmt=$conn->query($sql);
		if($stmt){
			echo "Thêm thành công";
		}
		else{
			echo "Có lỗi xảy ra vui lòng kiểm tra lại";
		}
	}
	
}
else{
	echo "thêm không thành công";
}
?>