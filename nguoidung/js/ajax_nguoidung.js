// thêm thông tin người dùng
function themnguoidung(){
	$("#themnd").show();
	$("#suathongtinnd").hide();
	$("#nguoidung-dlg").dialog("open");
	$("#themnd").click(function(){
		$mand=$("#mand").textbox("getValue");
		$tennd=$("#tennd").textbox("getValue");
		$gioitinh=$("#gioitinh").combobox("getValue");
		$makhoa=$("#makhoa").textbox("getValue");
		var bien ={mand:$mand,tennd:$tennd,gioitinh:$gioitinh,makhoa:$makhoa};
		sendajax("../model/them.php",bien,"dg-khnh");
		$("#nguoidung-dlg").dialog("close");
	})
}

// sửa thông tin người dùng
function suattnd(){
	$("#themnd").hide();
	$("#suathongtinnd").show();
	$("#xoanguoidung").hide();
	var row = $("#dg-khnh").datagrid("getSelected");
	if(row){
		$mand=row.mand;
		$("#nguoidung-fm").form("load",row);
		$("#nguoidung-dlg").dialog("open");
		$("#suathongtinnd").click(function(){
		$mand=$("#mand").textbox("getValue");
		$tennd=$("#tennd").textbox("getValue");
		$gioitinh=$("#gioitinh").combobox("getValue");
		$makhoa=$("#makhoa").textbox("getValue");
		var bien ={mandcu:row.mand,mand:$mand,tennd:$tennd,gioitinh:$gioitinh,makhoa:$makhoa};
		sendajax("../model/sua.php",bien,"dg-khnh");
		$("#nguoidung-dlg").dialog("close");
	})
	}
	else{
		thongbao("Vui lòng chọn người dùng");
	}
}
//xóa người dùng
function xoanguoidung(){
	var row = $("#dg-khnh").datagrid("getSelected");
	if(row){
		var bien ={mand:row.mand};
		xoadulieuajax("../model/xoa.php",bien,"dg-khnh","Bạn có muốn xóa người dùng này không ?");
	}
	else{
		thongbao("Vui lòng chọn người dùng cần xóa");
	}
}
//tải lại datagrid
function tailai()
{
         $('#dg-khnh').datagrid('reload'); 
}
