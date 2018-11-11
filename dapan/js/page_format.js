toolbar = $('<div style="padding:5px 10px;"></div>').appendTo('body');
let addbtn = $('<a style="margin-right:6px">Thêm Đáp Án</a>').appendTo(toolbar);
addbtn.linkbutton({
    iconCls:'icon-add',
    onClick:()=>{addDapAn();},
});
let editbtn = $('<a style="margin-right:6px">Sửa Đáp Án</a>').appendTo(toolbar);
editbtn.linkbutton({
    iconCls:'icon-edit',
    onClick:()=>{editDapAn();},
});
let delbtn = $('<a style="margin-right:6px">Xóa Đáp Án</a>').appendTo(toolbar);
delbtn.linkbutton({
    iconCls:'icon-cancel',
    onClick:()=>{delDapAn();},
});
let reloadbtn = $('<a style="margin-right:6px">Tải Lại</a>').appendTo(toolbar);
reloadbtn.linkbutton({
    iconCls:'icon-reload',
    onClick:()=>{reload('dg-cauhoi');},
});
let searchinp = $('<input>"').appendTo(toolbar);
searchinp.searchbox({
    width:230,
    prompt:'Tìm câu hỏi',
    searcher: (value,name) => {cauhoi_seach(value);}
});
$('#dg-dapan').datagrid({
    url:'../model/load_dapan.php',
    title:'Quản Lý Đáp Án',
    fitColumns:true,
    rownumbers:true,
    singleSelect:true,
    pagination:true,
    striped:true,
    loadMsg:'Đang load dữ liệu',
    emptyMsg:'Không có gì để hiển thị',
    columns:[[
        {field:'madapan',title:'<b>Mã Đáp Án</b>',align:'center',width:50},
        {field:'macauhoi',title:'<b>Mã Câu Hỏi</b>',align:'center',width:50},
        {field:'loaicau',title:'<b>Loại Câu</b>',align:'center',width:50},
        {field:'noidung',title:'<b>Nội Dung</b>',align:'left',width:300}
    ]],
    toolbar:toolbar
});
