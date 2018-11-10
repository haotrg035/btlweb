<?php 
include "../../ketnoicsdl/ketnoi.php";
function kiemtratrungmada($mada){
	include "../../ketnoicsdl/ketnoi.php";
	$sql="select madapan from dapan where madapan ='$mada'";
	$thucthi=$conn->query($sql);
	if(mysqli_num_rows($thucthi)>0){
		return true;
	}
	else{ 
		return false;
	}
}
if(isset($_POST["thamso"]["madapan"]) and isset($_POST["thamso"]["macauhoi"])){
	$madapan=$_POST["thamso"]["madapan"];
	$macauhoi=$_POST["thamso"]["macauhoi"];
	$macaudung=$_POST["thamso"]["macaudung"];
	$noidung=$_POST["thamso"]["noidung"];
	if(kiemtratrungmada($madapan)){
		echo "Mã đáp án đã tồn tại vui lòng kiểm tra lại";
	}
	else{
		$sql="INSERT INTO `dapan`(`madapan`, `macauhoi`, `macaudung`,`noidung`) VALUES ('$madapan','$macauhoi','$macaudung','$noidung')";
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