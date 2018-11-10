<?php
include "../../ketnoicsdl/ketnoi.php";
if(isset($_POST["thamso"]["mamon"])){
	$mamon=$_POST["thamso"]["mamon"];
	$sql="DELETE FROM `monhoc` WHERE monhoc.mamon='$mamon'";
	if($conn->query($sql)){
			echo "Xóa thành công";
	}
	else{
		echo "Có lỗi xảy ra vui lòng kiểm tra lại" .mysqli_error($conn);
	}
}
else{
	echo " Xóa không thành công";
}

?>