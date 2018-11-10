toolbar = $('<div style="padding:5px 10px;"></div>').appendTo('body');
let addbtn = $('<a style="margin-right:6px">Thêm Câu Hỏi</a>').appendTo(toolbar);
addbtn.linkbutton({
    iconCls:'icon-add',
    onClick:()=>{addCauHoi();},
});
let editbtn = $('<a style="margin-right:6px">Sửa Câu Hỏi</a>').appendTo(toolbar);
editbtn.linkbutton({
    iconCls:'icon-edit',
    onClick:()=>{editCauHoi();},
});
let delbtn = $('<a style="margin-right:6px">Xóa Câu Hỏi</a>').appendTo(toolbar);
delbtn.linkbutton({
    iconCls:'icon-cancel',
    onClick:()=>{delCauHoi();},
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
$('#dg-cauhoi').datagrid({
    url:'../model/load_cauhoi.php',
    title:'Thư Viện Câu Hỏi',
    fitColumns:true,
    rownumbers:true,
    singleSelect:true,
    pagination:true,
    striped:true,
    loadMsg:'Đang load dữ liệu',
    emptyMsg:'Không có gì để hiển thị',
    columns:[[
        {field:'macauhoi',title:'<b>Mã Câu Hỏi</b>',align:'center',width:50},
        {field:'mamon',title:'<b>Mã Môn Học</b>',align:'center',width:50},
        {field:'dokho',title:'<b>Độ Khó</b>',align:'center',width:20},
        {field:'noidung',title:'<b>Nội Dung</b>',align:'left',width:300}
    ]],
    toolbar:toolbar
});
