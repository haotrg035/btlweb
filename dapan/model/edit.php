<?php 
include "../../ketnoicsdl/ketnoi.php";
function kiemtratrungmada($mada){
	include "../../ketnoicsdl/ketnoi.php";
	$sql="SELECT `madapan` FROM `dapan` WHERE `madapan` ='$mada'";
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
	$loaicau=$_POST["thamso"]["loaicau"];
	$noidung=$_POST["thamso"]["noidung"];
	$madapancu=$_POST["thamso"]["madapancu"];
	if(kiemtratrungmada($madapan) and $madapan !=$madapancu){
		echo "Mã đáp án đã tồn tại vui lòng kiểm tra lại";
	}
	else{
		$sql="UPDATE `dapan` SET `madapan`='$madapan',`macauhoi`='$macauhoi',`loaicau`='$loaicau',`noidung`='$noidung' WHERE `madapan` ='$madapancu'";
		$thucthi=$conn->query($sql);
		if($thucthi){
			echo "Sửa thành công";
		}
		else{
			echo "Có lỗi xảy ra vui lòng kiểm tra lại" .mysqli_error($conn);
		}
	}
	
}
else{
	echo "sửa không thành công";
}
?>