<?php 
include "../../ketnoicsdl/ketnoi.php";
function kiemtratrungmand($mand){
	include "../../ketnoicsdl/ketnoi.php";
	$sql="SELECT `mand` FROM `nguoidung` WHERE `mand` ='$mand'";
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
	$mandcu=$_POST["thamso"]["mandcu"];
	if(kiemtratrungmand($mand)and $mand !=$mandcu){
		echo "Mã người dùng đã tồn tại vui lòng kiểm tra lại";
	}
	else{
		
		$sql="UPDATE `nguoidung` SET `mand`='$mand',`tennd`='$tennd',`gioitinh`='$gioitinh',`makhoa`='$makhoa' WHERE mand ='$mandcu'";
		if($conn->query($sql)){
			echo "Sửa thành công";
		}
		else{
			echo "Có lỗi xảy ra vui lòng kiểm tra lại" .mysqli_error($conn);
		}
	}
	
}
else{
	echo "Sửa không thành công";
}
?>