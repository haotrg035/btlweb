<?php 
include "../../ketnoicsdl/ketnoi.php";
function checkTrung_MaCauHoi($macauhoi){
	include "../../ketnoicsdl/ketnoi.php";
	$sql="SELECT `macauhoi` FROM `tvcauhoi` WHERE `macauhoi` ='$macauhoi'";
	$stmt=$conn->query($sql);
	if(mysqli_num_rows($stmt) > 0){
		return true;
	}
	else{ 
		return false;
	}
}
if(isset($_POST["thamso"]["macauhoi"]) and isset($_POST["thamso"]["noidung"])){
	$macauhoi=$_POST["thamso"]["macauhoi"];
	$intdokho=$_POST["thamso"]["dokho"];
	$strdokho = "Dễ";
	if ($intdokho == 2) {
		$strdokho = "Trung Bình";
	} elseif ($intdokho == 3) {
		$strdokho = "Khó";
	}
	$noidung=$_POST["thamso"]["noidung"];
	$mamon=$_POST["thamso"]["mamon"];
	if(checkTrung_MaCauHoi($macauhoi)){
		echo "Câu hỏi đã tồn tại vui lòng kiểm tra lại";
	}
	else{
		$sql="INSERT INTO `tvcauhoi`(`macauhoi`,`mamon`,`intdokho`,`strdokho`,`noidung`)
		VALUES ('$macauhoi','$mamon',$intdokho,'$strdokho','$noidung')";
		$stmt=$conn->query($sql);
		if($stmt){
			echo "Thêm thành công";
		}
		else{
			echo "Có lỗi xảy ra vui lòng kiểm tra lại" .mysqli_error($conn);
		}
	}
}
else{
	echo "thêm không thành công" .mysqli_error($conn);
}
?>