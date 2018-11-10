<?php 
include "../../ketnoicsdl/ketnoi.php";
function kiemtratrungmand($mand){
	include "../../ketnoicsdl/ketnoi.php";
	$sql="select macauhoi from ttcauhoi where macauhoi ='$mand'";
	$thucthi=$conn->query($sql);
	if(mysqli_num_rows($thucthi)>0){
		return true;
	}
	else{ 
		return false;
	}
}
if(isset($_POST["thamso"]["macauhoi"]) and isset($_POST["thamso"]["noidung"])){
	$macauhoi=$_POST["thamso"]["macauhoi"];
	$noidung=$_POST["thamso"]["noidung"];
	$dokho=$_POST["thamso"]["dokho"];
	$mamon=$_POST["thamso"]["mamon"];
	$mandcu=$_POST["thamso"]["mandcu"];
	if(kiemtratrungmand($macauhoi)and $macauhoi !=$mandcu){
		echo "Mã câu hỏi đã tồn tại vui lòng kiểm tra lại";
	}
	else{
		
		$sql="UPDATE `ttcauhoi` SET `macauhoi`='$macauhoi',`noidung`='$noidung',`dokho`='$dokho',`mamon`='$mamon' WHERE macauhoi ='$mandcu'";
		$thucthi=$conn->query($sql);
		if($thucthi){
			echo "Sửa thành công";
		}
		else{
			echo "Có lỗi xảy ra vui lòng kiểm tra lại";
		}
	}
	
}
else{
	echo "Sửa không thành công";
}
?>