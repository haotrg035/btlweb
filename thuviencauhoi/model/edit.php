
<?php 
include "../../ketnoicsdl/ketnoi.php";
function KTTrung_MaCauHoi($macauhoi){
	include "../../ketnoicsdl/ketnoi.php";
	$sql="SELECT `macauhoi` FROM `tvcauhoi` WHERE `macauhoi` ='$macauhoi'";
	$thucthi=$conn->query($sql);
	if(mysqli_num_rows($thucthi)>0){
		return true;
	}
	else{ 
		return false;
	}
}
if(isset($_POST["thamso"]["macauhoi"]) and isset($_POST["thamso"]["noidung"])){
	$macauhoicu=$_POST["thamso"]["macauhoicu"];
	$macauhoi=$_POST["thamso"]["macauhoi"];
	$dokho=$_POST["thamso"]["dokho"];
	$noidung=$_POST["thamso"]["noidung"];
	$mamon=$_POST["thamso"]["mamon"];
	if(KTTrung_MaCauHoi($macauhoi) and $macauhoi !=$macauhoicu){
		echo "Mã câu hỏi đã tồn tại vui lòng kiểm tra lại";
	}
	else{
		$sql="UPDATE `tvcauhoi` SET `mamon`='$mamon',`dokho`='$dokho',`noidung`='$noidung' WHERE macauhoi='$macauhoicu'";
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