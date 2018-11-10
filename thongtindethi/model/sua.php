<?php 
include "../../ketnoicsdl/ketnoi.php";
function kiemtratrungmadethi($madethi){
	include "../../ketnoicsdl/ketnoi.php";
	$sql="SELECT `madethi` FROM `thongtindethi` WHERE `madethi` ='$madethi'";
	$thucthi=$conn->query($sql);
	if(mysqli_num_rows($thucthi)>0){
		return true;
	}

	else{ 
		return false;
	}

}
if(isset($_POST["thamso"]["madethi"])and isset($_POST["thamso"]["tieude"])){
	$madethi=$_POST["thamso"]["madethi"];
	$mand=$_POST["thamso"]["mand"];
	$mamon=$_POST["thamso"]["mamon"];
	$ghichu=$_POST["thamso"]["ghichu"];
	$tieude=$_POST["thamso"]["tieude"];
	$madethicu=$_POST["thamso"]["madethicu"];
	if(kiemtratrungmadethi($madethi) and $madethi !=$madethicu){
		echo "Mã đề thi đã tồn tại vui lòng kiểm tra lại";
	}

	else{
		$sql="UPDATE `thongtindethi` SET `mand`='$mand',`mamon`='$mamon',`madethi`='$madethi',`tieude`='$tieude',`ghichu`='$ghichu' WHERE  madethi ='$madethicu'";
		$thucthi=$conn->query($sql);
		if($thucthi){
			echo "Sửa thành công";
		}
		else{
			echo "Có lỗi xảy ra vui lòng kiểm tra lại" .mysql_error($conn);
		}
	}	
}
else{
	echo "sửa không thành công";
}
?>