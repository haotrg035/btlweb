<?php 
include "../../ketnoicsdl/ketnoi.php";
function kiemtratrungmand($mnd){
	include "../../ketnoicsdl/ketnoi.php";
	$sql="SELECT * from nguoidung WHERE `mand` ='$mnd'";
	$thucthi=$conn->query($sql);
	if(mysqli_num_rows($thucthi)>0){

		return true;
	}
	else{ 
		return false;
	}
}
if(isset($_POST["thamso"]["mand"]) and isset($_POST["thamso"]["tennd"])){
	$mand=$_POST["thamso"]["mand"];
	$tennd=$_POST["thamso"]["tennd"];
	$gioitinh=$_POST["thamso"]["gioitinh"];
	$makhoa=$_POST["thamso"]["makhoa"];
	if(kiemtratrungmand($mand)){
		echo "Mã người dùng đã tồn tại vui lòng kiểm tra lại";
	}
	else{
		$sql="INSERT INTO `nguoidung`(`mand`, `tennd`, `gioitinh`, `makhoa`) VALUES ('$mand','$tennd','$gioitinh','$makhoa')";
		if($conn->query($sql)){
			echo "Thêm thành công";
		}
		else{
			echo "Có lỗi xảy ra vui lòng kiểm tra lại" .mysqli_error($conn);
		}
	}
	
}
else{
	echo "thêm không thành công";
}
?>