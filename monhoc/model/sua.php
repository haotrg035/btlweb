<?php 
include "../../ketnoicsdl/ketnoi.php";
function kiemtratrungmamh($mamh){
	include "../../ketnoicsdl/ketnoi.php";
	$sql="select mamon from monhoc where mamon ='$mamh'";
	$thucthi=$conn->query($sql);
	if(mysqli_num_rows($thucthi)>0){
		return true;
	}
	else{ 
		return false;
	}
}
if(isset($_POST["thamso"]["mamon"])){
	$mamon=$_POST["thamso"]["mamon"];
	$tenmon=$_POST["thamso"]["tenmon"];
	$ghichu=$_POST["thamso"]["ghichu"];
	$mamoncu=$_POST["thamso"]["mamoncu"];
	$makhoa=$_POST["thamso"]["makhoa"];
	if(kiemtratrungmamh($mamon) and $mamon !=$mamoncu){
		echo "Mã môn đã tồn tại vui lòng kiểm tra lại";
	}
	else{
		$sql="UPDATE `monhoc` SET `mamon`='$mamon',`tenmon`='$tenmon',`ghichu`='$ghichu',`makhoa`='$makhoa' WHERE mamon ='$mamoncu'";
		if($conn->query($sql)){
			echo "Sửa thành công";
		}
		else{
			echo "Có lỗi xảy ra vui lòng kiểm tra lại: ".mysqli_error($conn);
		}
	}
	
}
else{
	echo "sửa không thành công";
}
?>