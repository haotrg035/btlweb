//thêm một khoa mới
function taoDeThi(){
	$('#dlg-taodethi').dialog({
		title:'Thêm Khoa',
		buttons:[{
			text:'Thêm',
			iconCls:'icon-ok',
			handler:function(){
				_mamon=$("#mamon").combobox("getValue");
				_madethi=$("#madethi").combobox("getValue");
				_socaude=$("#socaude").textbox("getValue");
				_socautb=$("#socautb").textbox("getValue");
				_socaukho=$("#socaukho").textbox("getValue");
				let bien ={mamon:_mamon,madethi:_madethi,socaude:_socaude,socautb:_socautb,socaukho:_socaukho};
				sendajax("../model/add.php",bien,"dg-taodethi");
				$("#dlg-taodethi").dialog("close");
			}
		},{
			text:'Close',
			iconCls:'icon-cancel',
			handler:function(){
				$('#dlg-taodethi').dialog('close');
			}
		}]
	});
	$("#dlg-taodethi").dialog("open");
}

// sửa thông tin của một khoa
function editKhoa(){
	let _row = $("#dg-taodethi").datagrid("getSelected");
	if(_row){
		let _makhoa=_row.makhoa;
		$("#taodethi-fm").form("load",_row);
		$('#dlg-taodethi').dialog({
			title:'Sửa Thông Tin Khoa',
			buttons:[{
				text:'Lưu',
				iconCls:'icon-ok',
				handler:function(){
					_makhoa=$("#makhoa").textbox("getValue");
					_tenkhoa=$("#tenkhoa").textbox("getValue");
					let bien ={makhoacu:_row.makhoa,makhoa:_makhoa,tenkhoa:_tenkhoa};
					sendajax("../model/edit.php",bien,"dg-taodethi");
					$("#dlg-taodethi").dialog("close");
				}
			},{
				text:'Close',
				iconCls:'icon-cancel',
				handler:function(){
					$('#dlg-taodethi').dialog('close');
				}
			}]
		});
		$("#dlg-taodethi").dialog("open");
	}
	else{
		thongbao("Vui lòng chọn khoa!");
	}
}
// xóa một khoa đã tồn tại
function delKhoa(){
	let _row = $("#dg-taodethi").datagrid("getSelected");
	if(_row){
		let bien ={makhoa:_row.makhoa};
		xoadulieuajax("../model/delete.php",bien,"dg-taodethi","Bạn đang xóa một Khoa, bạn chắc chứ?");
	}
	else{
		thongbao("Hãy chọn khoa cần xóa");
	}
}
//Tìm kiếm theo từ khóa.
function khoa_seach(keyword) {
	timkiem('dg-taodethi',keyword);
}