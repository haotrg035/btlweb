//thêm một khoa mới
function addKhoa(){
	$('#dlg-khoa').dialog({
		title:'Thêm Khoa',
		buttons:[{
			text:'Thêm',
			iconCls:'icon-ok',
			handler:function(){
				_makhoa=$("#makhoa").textbox("getValue");
				_tenkhoa=$("#tenkhoa").textbox("getValue");
				let bien ={makhoa:_makhoa,tenkhoa:_tenkhoa};
				sendajax("../model/add.php",bien,"dg-khoa");
				$("#dlg-khoa").dialog("close");
			}
		},{
			text:'Close',
			iconCls:'icon-cancel',
			handler:function(){
				$('#dlg-khoa').dialog('close');
			}
		}]
	});
	$("#dlg-khoa").dialog("open");
}

// sửa thông tin của một khoa
function editKhoa(){
	let _row = $("#dg-khoa").datagrid("getSelected");
	if(_row){
		let _makhoa=_row.makhoa;
		$("#khoa-fm").form("load",_row);
		$('#dlg-khoa').dialog({
			title:'Sửa Thông Tin Khoa',
			buttons:[{
				text:'Lưu',
				iconCls:'icon-ok',
				handler:function(){
					_makhoa=$("#makhoa").textbox("getValue");
					_tenkhoa=$("#tenkhoa").textbox("getValue");
					let bien ={makhoacu:_row.makhoa,makhoa:_makhoa,tenkhoa:_tenkhoa};
					sendajax("../model/edit.php",bien,"dg-khoa");
					$("#dlg-khoa").dialog("close");
				}
			},{
				text:'Close',
				iconCls:'icon-cancel',
				handler:function(){
					$('#dlg-khoa').dialog('close');
				}
			}]
		});
		$("#dlg-khoa").dialog("open");
	}
	else{
		thongbao("Vui lòng chọn khoa!");
	}
}
// xóa một khoa đã tồn tại
function delKhoa(){
	let _row = $("#dg-khoa").datagrid("getSelected");
	if(_row){
		let bien ={makhoa:_row.makhoa};
		xoadulieuajax("../model/delete.php",bien,"dg-khoa","Bạn đang xóa một Khoa, bạn chắc chứ?");
	}
	else{
		thongbao("Hãy chọn khoa cần xóa");
	}
}
//Tìm kiếm theo từ khóa.
function khoa_seach(keyword) {
	timkiem('dg-khoa',keyword);
}