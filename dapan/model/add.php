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
if(isset($_POST["thamso"]["madapandung"]) and isset($_POST["thamso"]["macauhoi"])){
	$macauhoi=$_POST["thamso"]["macauhoi"];
	$madapandung=$_POST["thamso"]["madapandung"];
	$noidung_dadung = $_POST['thamso']['noidung_dadung'];
	$madasai1=$_POST["thamso"]["madasai1"];
	$noidung_dasai1 = $_POST['thamso']['noidung_dasai1'];
	$madasai2=$_POST["thamso"]["madasai2"];
	$noidung_dasai2 = $_POST['thamso']['noidung_dasai2'];
	$madasai3=$_POST["thamso"]["madasai3"];
	$noidung_dasai3 = $_POST['thamso']['noidung_dasai3'];

	if(kiemtratrungmada($madapandung) || kiemtratrungmada($madasai1) || kiemtratrungmada($madasai2) || kiemtratrungmada($madasai3)){
		echo "Mã đáp án đã tồn tại vui lòng kiểm tra lại";
	}
	else{
		$sql="INSERT INTO `dapan`(`madapan`, `macauhoi`, `loaicau`,`noidung`)
		VALUES	('$madapandung','$macauhoi','Đúng','$noidung_dadung'),
				('$madasai1','$macauhoi','Sai','$noidung_dasai1'),
				('$madasai2','$macauhoi','Sai','$noidung_dasai2'),
				('$madasai3','$macauhoi','Sai','$noidung_dasai3')
		";
		$thucthi=$conn->query($sql);
		if($thucthi){
			echo "Thêm thành công";
		}
		else{
			echo "Có lỗi xảy ra vui lòng kiểm tra lại" .mysqli_error($conn);
		}
	}
	
}
else{
	echo "thêm không thành công";
}
?>