// thêm thông tin môn học
function themmonhoc(){
	$("#themmh").show();
	$("#suamh").hide();
	$("#xoamh").hide();
	$("#thoat").hide();
	$("#monhoc-dlg").dialog("open");
	$("#themmh").click(function(){
		$mamon=$("#mamon").textbox("getValue");
		$tenmon=$("#tenmon").textbox("getValue");
		$ghichu=$("#ghichu").textbox("getValue");
		$makhoa=$("#makhoa").textbox("getValue");
		var bien ={mamon:$mamon,makhoa:$makhoa,tenmon:$tenmon,ghichu:$ghichu};
		sendajax("../model/them.php",bien,"dg-khnh");
		$("#monhoc-dlg").dialog("close");
	})
}
// sửa thông tin môn học
function suamonhoc(){
	$("#themmh").hide();
	$("#suamh").show();
	$("#xoamh").hide();
	$("#thoat").hide();
	var row = $("#dg-khnh").datagrid("getSelected");
	if(row){
		$mamon=row.mamon;
		$("#monhoc-fm").form("load",row);
		$("#monhoc-dlg").dialog("open");
		$("#suamh").click(function(){
		$mamon=$("#mamon").textbox("getValue");
		$tenmon=$("#tenmon").textbox("getValue");
		$ghichu=$("#ghichu").textbox("getValue");
		$makhoa=$("#makhoa").textbox("getValue");
		var bien ={mamoncu:row.mamon,mamon:$mamon,tenmon:$tenmon,ghichu:$ghichu,makhoa:$makhoa};
		sendajax("../model/sua.php",bien,"dg-khnh");
		$("#monhoc-dlg").dialog("close");
	})
	}
	else{
		thongbao("Vui lòng chọn môn học");
	}
}
//xóa môn học
function xoamonhoc(){
	var row = $("#dg-khnh").datagrid("getSelected");
	if(row){
		var bien ={mamon:row.mamon};
		xoadulieuajax("../model/xoa.php",bien,"dg-khnh","Bạn có muốn xóa môn học này không ?");
	}
	else{
		thongbao("Vui lòng chọn môn học cần xóa");
	}
}
//tải lại datagrid
function tailai()
{
         $('#dg-khnh').datagrid('reload'); 
}
