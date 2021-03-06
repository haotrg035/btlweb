function setMaCH(){
	mamon = $('#mamon').combobox('getValue');
	$('#macauhoi').textbox('setValue','CH'+mamon);
}
//thêm một khoa mới
function addCauHoi(){
	$('#macauhoi').textbox('enable');
	$('#mamon').textbox('enable');
	$('#dlg-cauhoi').dialog({
		title:'Thêm Câu Hỏi',
		buttons:[{
			text:'Thêm',
			iconCls:'icon-ok',
			handler:function(){
				_macauhoi=$("#macauhoi").textbox("getValue");
				_dokho=$("#dokho").textbox("getValue");
				_noidung=$("#noidung").textbox("getValue");
				_mamon=$("#mamon").combobox("getValue");

				let bien ={macauhoi:_macauhoi,dokho:_dokho,noidung:_noidung,mamon:_mamon};
				sendajax("../model/add.php",bien,"dg-cauhoi");
				$("#dlg-cauhoi").dialog("close");
			}
		},{
			text:'Close',
			iconCls:'icon-cancel',
			handler:function(){
				$('#dlg-cauhoi').dialog('close');
			}
		}]
	});
	$("#dlg-cauhoi").dialog("open");
}

// sửa thông tin của một khoa
function editCauHoi(){
	let _row = $("#dg-cauhoi").datagrid("getSelected");
	if(_row){
		let _macauhoicu=_row.macauhoi;
		$("#cauhoi-fm").form("load",_row);
		$('#macauhoi').textbox('setValue',_macauhoicu);
		$('#macauhoi').textbox('disable');
		$('#mamon').textbox('disable');
		$('#dlg-cauhoi').dialog({
			title:'Sửa Thông Tin Câu Hỏi',
			buttons:[{
				text:'Lưu',
				iconCls:'icon-ok',
				handler:function(){
					_macauhoi=$("#macauhoi").textbox("getValue");
					_dokho=$("#dokho").textbox("getValue");
					_noidung=$("#noidung").textbox("getValue");
					_mamon=$("#mamon").combobox("getValue");

					let bien ={macauhoicu:_macauhoicu,macauhoi:_macauhoi,dokho:_dokho,noidung:_noidung,mamon:_mamon};
					sendajax("../model/edit.php",bien,"dg-cauhoi");
					$("#dlg-cauhoi").dialog("close");
				}
			},{
				text:'Close',
				iconCls:'icon-cancel',
				handler:function(){
					$('#dlg-cauhoi').dialog('close');
				}
			}]
		});
		$("#dlg-cauhoi").dialog("open");
	}
	else{
		thongbao("Vui lòng chọn Câu hỏi!");
	}
}
// xóa một câu hỏi đã tồn tại
function delCauHoi(){
	let _row = $("#dg-cauhoi").datagrid("getSelected");
	if(_row){
		let bien ={macauhoi:_row.macauhoi};
		xoadulieuajax("../model/delete.php",bien,"dg-cauhoi","Bạn đang xóa một Câu Hỏi, bạn chắc chứ?");
	}
	else{
		thongbao("Hãy chọn câu hỏi cần xóa");
	}
}
//Tìm kiếm theo từ khóa.
function cauhoi_seach(keyword) {
	timkiem('dg-cauhoi',keyword);
}