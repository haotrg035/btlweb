function addDapAn(){
	$('#dlg-dapan').dialog({
		title:'Thêm Câu Hỏi',
		buttons:[{
			text:'Thêm',
			iconCls:'icon-ok',
			handler:function(){
				_madapan=$("#madapan").textbox("getValue");
				_macauhoi=$("#macauhoi").combobox("getValue");
				_loaicau=$("#loaicau").combobox("getValue");
				_noidung=$("#noidung").textbox("getValue");

				let bien ={madapan:_madapan,macauhoi:_macauhoi,loaicau:_loaicau,noidung:_noidung};
				sendajax("../model/add.php",bien,"dg-dapan");
				$("#dlg-dapan").dialog("close");
			}
		},{
			text:'Close',
			iconCls:'icon-cancel',
			handler:function(){
				$('#dlg-dapan').dialog('close');
			}
		}]
	});
	$("#dlg-dapan").dialog("open");
}

// sửa thông tin của một đáp án
function editDapAn(){
	let _row = $("#dg-dapan").datagrid("getSelected");
	if(_row){
		let _makhoa=_row.makhoa;
		$("#dapan-fm").form("load",_row);
		$('#dlg-dapan').dialog({
			title:'Sửa Thông Tin Câu Hỏi',
			buttons:[{
				text:'Lưu',
				iconCls:'icon-ok',
				handler:function(){
					_madapan=$("#madapan").textbox("getValue");
					_macauhoi=$("#macauhoi").combobox("getValue");
					_loaicau=$("#loaicau").combobox	("getValue");
					_noidung=$("#noidung").textbox("getValue");
					_madapancu=_row.madapan;

					let bien ={madapancu:_madapancu,madapan:_madapan,macauhoi:_macauhoi,loaicau:_loaicau,noidung:_noidung};
					sendajax("../model/edit.php",bien,"dg-dapan");
					$("#dlg-dapan").dialog("close");
				}
			},{
				text:'Close',
				iconCls:'icon-cancel',
				handler:function(){
					$('#dlg-dapan').dialog('close');
				}
			}]
		});
		$("#dlg-dapan").dialog("open");
	}
	else{
		thongbao("Vui lòng chọn Câu hỏi!");
	}
}
// xóa một câu hỏi đã tồn tại
function delDapAn(){
	let _row = $("#dg-dapan").datagrid("getSelected");
	if(_row){
		let bien ={madapan:_row.madapan};
		xoadulieuajax("../model/delete.php",bien,"dg-dapan","Bạn đang xóa một Câu Hỏi, bạn chắc chứ?");
	}
	else{
		thongbao("Hãy chọn câu hỏi cần xóa");
	}
}
//Tìm kiếm theo từ khóa.
function cauhoi_seach(keyword) {
	timkiem('dg-dapan',keyword);
}