function setMaDA() {
	macauhoi = $('#them_macauhoi').combobox('getValue');
	$('#madadung').textbox('setValue',
		'DAD' + macauhoi
	);
	$('#madasai1').textbox('setValue',
		'DAS1' + macauhoi
	);
	$('#madasai2').textbox('setValue',
		'DAS2' + macauhoi
	);
	$('#madasai3').textbox('setValue',
		'DAS3' + macauhoi
	);
}

function addDapAn(){
	$('#dlg-themdapan').dialog({
		title:'Thêm Đáp Án',
		buttons:[{
			text:'Thêm',
			iconCls:'icon-ok',
			handler:function(){
				_macauhoi=$("#them_macauhoi").combobox("getValue");
				_madapandung=$('#madadung').textbox('getValue');
				_noidung_dadung=$("#noidung_dadung").textbox("getValue");

				_madasai1=$('#madasai1').textbox('getValue');
				_noidung_dasai1=$('#noidung_dasai1').textbox('getValue');

				_madasai2=$('#madasai2').textbox('getValue');
				_noidung_dasai2=$('#noidung_dasai2').textbox('getValue');

				_madasai3=$('#madasai3').textbox('getValue');
				_noidung_dasai3=$('#noidung_dasai3').textbox('getValue');

				let bien ={macauhoi:_macauhoi,
					madapandung:_madapandung,
					noidung_dadung:_noidung_dadung,
					madasai1:_madasai1,
					noidung_dasai1:_noidung_dasai1,
					madasai2:_madasai2,
					noidung_dasai2:_noidung_dasai2,
					madasai3:_madasai3,
					noidung_dasai3:_noidung_dasai3};

				sendajax("../model/add.php",bien,"dg-dapan");
				$("#dlg-themdapan").dialog("close");
			}
		},{
			text:'Close',
			iconCls:'icon-cancel',
			handler:function(){
				$('#dlg-themdapan').dialog('close');
			}
		}]
	});
	$("#dlg-themdapan").dialog("open");
}

// sửa thông tin của một đáp án
function editDapAn(){
	let _row = $("#dg-dapan").datagrid("getSelected");
	if(_row){
		let _makhoa=_row.makhoa;
		$("#dapan-fm").form("load",_row);
		$('#dlg-dapan').dialog({
			title:'Sửa Thông Tin Đáp Án',
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
		thongbao("Vui lòng chọn Đáp Án!");
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