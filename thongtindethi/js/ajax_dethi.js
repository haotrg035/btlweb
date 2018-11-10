// thêm thông tin người dùng
function themdethi(){
	$("#themdethi").show();
	$("#suadethi").hide();
	$("#thongtindethi-dlg").dialog("open");
	$("#themdethi").click(function(){
		$mand=$("#mand").combobox("getValue");
		$madethi=$("#madethi").textbox("getValue");
		$mamon=$("#mamon").combobox("getValue");
		$tieude=$("#tieude").textbox("getValue");
		$ghichu=$("#ghichu").textbox("getValue");
		var bien ={madethi:$madethi,mamon:$mamon,mand:$mand,tieude:$tieude,ghichu:$ghichu};
		sendajax("../model/them.php",bien,"dg-khnh");
		$("#thongtindethi-dlg").dialog("close");
	})
}
// sửa thông tin đề thi
function suadethi(){
	$("#themdethi").hide();
	$("#suadethi").show();
	$("#xoadethi").hide();
	var row = $("#dg-khnh").datagrid("getSelected");
	if(row){
		$madethi=row.madethi;
		$("#madethi-fm").form("load",row);
		$("#thongtindethi-dlg").dialog("open");
		$("#suadethi").click(function(){
		$madethi=$("#madethi").textbox("getValue");
		$mand=$("#mand").combobox("getValue");
		$mamon=$("#mamon").combobox("getValue");
		$tieude=$("#tieude").textbox("getValue");
		$ghichu=$("#ghichu").textbox("getValue");

		var bien ={madethicu:row.madethi,madethi:$madethi,mamon:$mamon,mand:$mand,tieude:$tieude,ghichu:$ghichu};
		sendajax("../model/sua.php",bien,"dg-khnh");
		$("#thongtindethi-dlg").dialog("close");
	})
	}
	else{
		thongbao("Vui lòng chọn đề thi");
	}
}
//xóa người dùng
function xoadethi(){
	var row = $("#dg-khnh").datagrid("getSelected");
	if(row){
		var bien ={madethi:row.madethi};
		xoadulieuajax("../model/xoa.php",bien,"dg-khnh","Bạn có muốn xóa đề thi này không ?");
	}
	else{
		thongbao("Vui lòng chọn đề thi cần xóa");
	}
}
//tải lại datagrid
function tailai()
{
         $('#dg-khnh').datagrid('reload'); 
}
