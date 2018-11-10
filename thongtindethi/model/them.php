<?php 
include "../../ketnoicsdl/ketnoi.php";
function kiemtratrungmadethi($mad){
	include "../../ketnoicsdl/ketnoi.php";
	$sql="SELECT * FROM `thongtindethi` WHERE `madethi` ='$mad'";
	$thucthi=$conn->query($sql);
	if(mysqli_num_rows($thucthi)>0){
		return true;
	}
	else{ 
		return false;
	}
}
if(isset($_POST["thamso"]["madethi"])){
	$madethi=$_POST["thamso"]["madethi"];
	$mand=$_POST["thamso"]["mand"];
	$mamon=$_POST["thamso"]["mamon"];
	$tieude=$_POST["thamso"]["tieude"];
	$ghichu=$_POST["thamso"]["ghichu"];

	if(kiemtratrungmadethi($madethi)){
		echo "Mã đề thi đã tồn tại vui lòng kiểm tra lại";
	}
	else{
		$sql="INSERT INTO `thongtindethi`(`mand`, `mamon`, `madethi`, `tieude`, `ghichu`) VALUES ('$mand','$mamon','$madethi','$tieude','$ghichu')";
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
	echo "Thêm không thành công";
}
?>