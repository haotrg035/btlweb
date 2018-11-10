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
if(isset($_POST["thamso"]["mamon"]) and isset($_POST["thamso"]["tenmon"])){
	$mamon=$_POST["thamso"]["mamon"];
	$tenmon=$_POST["thamso"]["tenmon"];
	$ghichu=$_POST["thamso"]["ghichu"];
	$makhoa=$_POST["thamso"]["makhoa"];
	if(kiemtratrungmamh($mamon)){
		echo "Mã môn đã tồn tại vui lòng kiểm tra lại";
	}
	else{
		$sql="INSERT INTO `monhoc`(`mamon`, `tenmon`, `ghichu`,`makhoa`) VALUES ('$mamon','$tenmon','$ghichu','$makhoa')";
		$thucthi=$conn->query($sql);
		if($thucthi){
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