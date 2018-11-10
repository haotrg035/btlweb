<?php 
include "../../ketnoicsdl/ketnoi.php";
function kiemtratrungmakhoa($mak){
	include "../../ketnoicsdl/ketnoi.php";
	$sql="select macauhoi from ttcauhoi where macauhoi ='$mak'";
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
	if(kiemtratrungmakhoa($macauhoi)){
		echo "Mã khoa đã tồn tại vui lòng kiểm tra lại";
	}
	else{
		$sql="INSERT INTO `ttcauhoi`(`macauhoi`, `noidung`, `dokho`, `mamon`) VALUES ('$macauhoi','$noidung','$dokho','$mamon')";
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
<?php 
// include "../../ketnoicsdl/ketnoi.php";
// function kiemtratrungmand($mnd){
// 	include "../../ketnoicsdl/ketnoi.php";
// 	$sql="SELECT * from ttcauhoi WHERE `macauhoi` ='$mnd'";
// 	$thucthi=$conn->query($sql);
// 	if(mysqli_num_rows($thucthi)>0){

// 		return true;
// 	}
// 	else{ 
// 		return false;
// 	}
// }
// if(isset($_POST["thamso"]["macauhoi"]) and isset($_POST["thamso"]["noidung"])){
// 	$macauhoi=$_POST["thamso"]["macauhoi"];
// 	$noidung=$_POST["thamso"]["noidung"];
// 	$dokho=$_POST["thamso"]["dokho"];
// 	$mamon=$_POST["thamso"]["mamon"];
// 	// $sdt=$_POST["thamso"]["sdt"];
// 	// $email=$_POST["thamso"]["email"];
// 	// $gioitinh=$_POST["thamso"]["gioitinh"];
// 	// $makhoa=$_POST["thamso"]["makhoa"];

// 	if(kiemtratrungmand($macauhoi)){
// 		echo "Mã câu hỏi đã tồn tại vui lòng kiểm tra lại";
// 	}
// 	else{
// 		$sql="INSERT INTO `ttcauhoi`(`macauhoi`, `noidung`, `dokho`, `mamon`) VALUES ('$macauhoi','$noidung','$dokho','$mamon')";
// 		$thucthi=$conn->query($sql);
// 		if($thucthi){
// 			echo "Thêm thành công";
// 		}
// 		else{
// 			echo "Có lỗi xảy ra vui lòng kiểm tra lại";
// 		}
// 	}
	
// }
// else{
// 	echo "thêm không thành công";
// }
?>