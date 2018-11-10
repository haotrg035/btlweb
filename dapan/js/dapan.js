// thêm thông tin môn học
function themdapan(){
	$("#themda").show();
	$("#suada").hide();
	$("#xoada").hide();
	$("#thoat").hide();
	$("#dapan").dialog("open");
	$("#themda").click(function(){
		$madapan=$("#madapan").textbox("getValue");
		$macauhoi=$("#macauhoi").textbox("getValue");
		$macaudung=$("#macaudung").textbox("getValue");
		$noidung=$("#noidung").textbox("getValue");
		var bien ={madapan:$madapan,macauhoi:$macauhoi,macaudung:$macaudung,noidung:$noidung};
		sendajax("../model/them.php",bien,"dg-khnh");
		$("#dapan").dialog("close");
	})
}
// sửa thông tin môn học
function suadapan(){
	$("#themda").hide();
	$("#suada").show();
	$("#xoada").hide();
	$("#thoat").hide();
	var row = $("#dg-khnh").datagrid("getSelected");
	if(row){
		$madapan=row.madapan;
		$("#dapan").form("load",row);
		$("#dapan").dialog("open");
		$("#suada").click(function(){
		$madapan=$("#madapan").textbox("getValue");
		$macauhoi=$("#macauhoi").textbox("getValue");
		$macaudung=$("#macaudung").textbox("getValue");
		$noidung=$("#noidung").textbox("getValue");
		var bien ={madapancu:row.madapan,madapan:$madapan,macauhoi:$macauhoi,macaudung:$macaudung,noidung:$noidung};
		sendajax("../model/sua.php",bien,"dg-khnh");
		$("#dapan").dialog("close");
	})
	}
	else{
		thongbao("Vui lòng chọn đáp án");
	}
}
//xóa môn học
function xoadapan(){
	var row = $("#dg-khnh").datagrid("getSelected");
	if(row){
		var bien ={madapan:row.madapan};
		xoadulieuajax("../model/xoa.php",bien,"dg-khnh","Bạn có muốn xóa môn học này không ?");
	}
	else{
		thongbao("Vui lòng chọn đáp án cần xóa");
	}
}
//tải lại datagrid
function tailai()
{
         $('#dg-khnh').datagrid('reload'); 
}
