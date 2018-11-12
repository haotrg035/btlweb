toolbar = $('<div style="padding:5px 10px;"></div>').appendTo('body');
let addbtn = $('<a style="margin-right:6px">Tạo Đề Thi</a>').appendTo(toolbar);
addbtn.linkbutton({
    iconCls:'icon-add',
    onClick:()=>{taoDeThi();},
});

// let editbtn = $('<a style="margin-right:6px">Sửa Khoa</a>').appendTo(toolbar);
// editbtn.linkbutton({
//     iconCls:'icon-edit',
//     onClick:()=>{editKhoa();},
// });
// let delbtn = $('<a style="margin-right:6px">Xóa Khoa</a>').appendTo(toolbar);
// delbtn.linkbutton({
//     iconCls:'icon-cancel',
//     onClick:()=>{delKhoa();},
// });
// let reloadbtn = $('<a style="margin-right:6px">Tải Lại</a>').appendTo(toolbar);
// reloadbtn.linkbutton({
//     iconCls:'icon-reload',
//     onClick:()=>{reload('dg-taodethi');},
// });
// let searchinp = $('<input>"').appendTo(toolbar);
// searchinp.searchbox({
//     width:230,
//     prompt:'Tìm ...',
//     searcher: (value,name) => {khoa_seach(value);}
// });
$('#dg-taodethi').datagrid({
    url:'../model/load_tvdethi.php',
    title:'Tạo Đề Thi',
    fitColumns:true,
    rownumbers:true,
    singleSelect:true,
    pagination:true,
    striped:true,
    loadMsg:'Đang load dữ liệu',
    emptyMsg:'Không có gì để hiển thị',
    columns:[[
        {field:'mabodethi',title:'<b>Mã Bộ Đề Thi</b>',align:'center',width:50},
        {field:'madethi',title:'<b>Mã Đề Thi</b>',align:'left',width:50},
        {field:'macauhoidethi',title:'<b>Mã Bộ Câu Hỏi</b>',align:'left',width:50}
    ]],
    toolbar:toolbar
});//Hiện nhiều thông tin hơn nếu có tg
$('#mamon').combobox({
    onChange:(nval,oval)=>{
        $('#madethi').combobox({
            url:'../model/taidulieucomboboxdethi.php?mamon='+nval,
        });
    }
});
