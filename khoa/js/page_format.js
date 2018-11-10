toolbar = $('<div style="padding:5px 10px;"></div>').appendTo('body');
let addbtn = $('<a style="margin-right:6px">Thêm Khoa</a>').appendTo(toolbar);
addbtn.linkbutton({
    iconCls:'icon-add',
    onClick:()=>{addKhoa();},
});
let editbtn = $('<a style="margin-right:6px">Sửa Khoa</a>').appendTo(toolbar);
editbtn.linkbutton({
    iconCls:'icon-edit',
    onClick:()=>{editKhoa();},
});
let delbtn = $('<a style="margin-right:6px">Xóa Khoa</a>').appendTo(toolbar);
delbtn.linkbutton({
    iconCls:'icon-cancel',
    onClick:()=>{delKhoa();},
});
let reloadbtn = $('<a style="margin-right:6px">Tải Lại</a>').appendTo(toolbar);
reloadbtn.linkbutton({
    iconCls:'icon-reload',
    onClick:()=>{reload('dg-khoa');},
});
let searchinp = $('<input>"').appendTo(toolbar);
searchinp.searchbox({
    width:230,
    prompt:'Tìm theo mã khoa hoặc tên khoa',
    searcher: (value,name) => {khoa_seach(value);}
});
$('#dg-khoa').datagrid({
    url:'../model/load_khoa.php',
    title:'Quản Lý Khoa',
    fitColumns:true,
    rownumbers:true,
    singleSelect:true,
    pagination:true,
    striped:true,
    loadMsg:'Đang load dữ liệu',
    emptyMsg:'Không có gì để hiển thị',
    columns:[[
        {field:'makhoa',title:'<b>Mã Khoa</b>',align:'center',width:50},
        {field:'tenkhoa',title:'<b>Tên Khoa</b>',align:'left',width:300}
    ]],
    toolbar:toolbar
});
