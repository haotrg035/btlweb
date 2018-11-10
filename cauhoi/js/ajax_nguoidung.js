function themkhoa(){
	$("#tk").show();
	$("#sk").hide();
	$("#khoa-dlg").dialog("open");
	$("#tk").click(function(){
		$macauhoi=$("#macauhoi").textbox("getValue");
		$noidung=$("#noidung").textbox("getValue");
		$dokho=$("#dokho").textbox("getValue");
		$mamon=$("#mamon").combobox("getValue");
		var bien ={macauhoi:$macauhoi,noidung:$noidung,dokho:$dokho,mamon:$mamon};
		sendajax("../model/them.php",bien,"dg-khnh");
		$("#khoa-dlg").dialog("close");
	})
}

// sửa thông tin khoa
function suakhoa(){
	$("#tk").hide();
	$("#sk").show();
	var row = $("#dg-khnh").datagrid("getSelected");
	if(row){
		$macauhoi=row.macauhoi;
		$("#khoa-fm").form("load",row);
		$("#khoa-dlg").dialog("open");
		$("#sk").click(function(){
		$macauhoi=$("#macauhoi").textbox("getValue");
		$noidung=$("#noidung").textbox("getValue");
		$dokho=$("#dokho").textbox("getValue");
		$mamon=$("#mamon").combobox("getValue");
		var bien ={mandcu:row.macauhoi,macauhoi:$macauhoi,noidung:$noidung,dokho:$dokho,mamon:$mamon};
		sendajax("../model/sua.php",bien,"dg-khnh");
		$("#khoa-dlg").dialog("close");
	})
	}
	else{
		thongbao("Vui lòng chọn khoa");
	}
}
// xóa khoa
function xoakhoa(){
	var row = $("#dg-khnh").datagrid("getSelected");
	if(row){
		var bien ={macauhoi:row.macauhoi};
		xoadulieuajax("../model/xoa.php",bien,"dg-khnh","Bạn có muốn xóa môn học này không ?");
	}
	else{
		thongbao("Vui lòng chọn môn học cần xóa");
	}
}

//tải lại
function tailai()
{
         $("#dg-khnh").datagrid("reload"); 
}
// thêm thông tin người dùng
// function themnguoidung(){
// 	$("#themnd").show();
// 	$("#suathongtinnd").hide();
// 	$("#nguoidung-dlg").dialog("open");
// 	$("#themnd").click(function(){
// 		$macauhoi=$("#macauhoi").textbox("getValue");
// 		$noidung=$("#noidung").textbox("getValue");
// 		$dokho=$("#dokho").textbox("getValue");
// 		// $sdt=$("#sdt").textbox("getValue");
// 		// $email=$("#email").textbox("getValue");
// 		// $gioitinh=$("#gioitinh").textbox("getValue");
// 		$mamon=$("#mamon").combobox("getValue");
// 		// $makhoa=$("#makhoa").combobox("getValue");
// 		var bien ={macauhoi:$macauhoi,noidung:$noidung,dokho:$dokho,mamon:$mamon};
// 		sendajax("../model/them.php",bien,"dg-khnh");
// 		$("#nguoidung-dlg").dialog("close");
// 	})
// }
// // sửa thông tin người dùng
// function suattnd(){
// 	$("#themnd").hide();
// 	$("#suathongtinnd").show();
// 	var row = $("#dg-khnh").datagrid("getSelected");
// 	if(row){
// 		$macauhoi=row.macauhoi;
// 		$("#nguoidung-fm").form("load",row);
// 		$("#nguoidung-dlg").dialog("open");
// 		$("#sk").click(function(){
// 		$macauhoi=$("#macauhoi").textbox("getValue");
// 		$noidung=$("#noidung").textbox("getValue");
// 		$dokho=$("#dokho").textbox("getValue");
// 		$monhoc=$("#monhoc").combobox("getValue");
// 		var bien ={mandcu:row.id_cauhoi,id_cauhoi:$id_cauhoi,noidung:$noidung,dokho:$dokho,id_monhoc:$id_monhoc};
// 		sendajax("../model/sua.php",bien,"dg-khnh");
// 		$("#nguoidung-dlg").dialog("close");
// 	})
// 	}
// 	else{
// 		thongbao("Vui lòng chọn khoa");
// 	}
// }
// // xóa khoa
// function xoanguoidung(){
// 	var row = $("#dg-khnh").datagrid("getSelected");
// 	if(row){
// 		var bien ={macauhoi:row.macauhoi};
// 		xoadulieuajax("../model/delete.php",bien,"dg-khnh","Bạn có muốn xóa môn học này không ?");
// 	xoadulieuajax("../model/xoa.php",bien,"dg-khnh","Bạn có muốn xóa người dùng này không ?");
// 	}
// 	else{
// 		thongbao("Vui lòng chọn người dùng cần xóa");
// 	}
// }

// // function suattnd(){
// // 	$("#themnd").hide();
// // 	$("#suathongtinnd").show();
// // 	var row = $("#dg-khnh").datagrid("getSelected");
// // 	if(row){
// // 		$id_cauhoi=row.id_cauhoi;
// // 		$("#nguoidung-fm").form("load",row);
// // 		$("#nguoidung-dlg").dialog("open");
// // 		$("#suathongtinnd").click(function(){
// // 		$id_cauhoi=$("#id_cauhoi").textbox("getValue");
// // 		$noidung=$("#noidung").textbox("getValue");
// // 		$dokho=$("#dokho").textbox("getValue");
// // 		$id_monhoc=$("#id_monhoc").combobox("getValue");
// // 		var bien ={mandcu:row.id_cauhoi,id_cauhoi:$id_cauhoi,noidung:$noidung,dokho:$dokho,id_monhoc:$id_monhoc};
// // 		sendajax("../model/sua.php",bien,"dg-khnh");
// // 		$("#nguoidung-dlg").dialog("close");
// // 	})
// // 	}
// // 	else{
// // 		thongbao("Vui lòng chọn người dùng");
// // 	}
// // }
// //xóa người dùng

// //tải lại datagrid
// function tailai()
// {
//          $('#dg-khnh').datagrid('reload'); 
// }
