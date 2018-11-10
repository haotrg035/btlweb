<?php include "../../header/header.php" ?>

    <script type="text/javascript" src="../js/ajax_nguoidung.js"></script>
    <div style="width: 1200px; margin:auto;"><br>
        <table id="dg-khnh" class="easyui-datagrid" title="Thông Tin Câu Hỏi" style="width:1200px;height:500px; text-align: center;" data-options="
            url: '../model/taidulieucauhoi.php',
            fitColumns:true,
            toolbar:'#tb-khnh',
            rownumbers:true,
            singleSelect:true,
            pagination:true">
            <thead>
                <tr>
                    <th data-options="field:'macauhoi', align:'center',width:115" ><b>Mã Câu Hỏi</b></th>
                    <th data-options="field:'noidung', align:'center',width:220"><b>Nội Dung</b></th>
                    <th data-options="field:'dokho', align:'center',width:130"><b>Độ Khó</b></th>
                    <th data-options="field:'mamon', align:'center',width:80"><b>Môn Học</b></th>
                </tr>    
            </thead>       
        </table>

    <!--Toolbar của datagrid nguoidung-->
    <div id="tb-khnh" style="padding:2px 5px;">
      <a  onclick="themkhoa()" class="easyui-linkbutton" data-options=" iconCls:'icon-add'">Thêm</a> 
      <a  onclick="suakhoa()" class="easyui-linkbutton" data-options=" iconCls:'icon-edit'">Sửa</a>
      <a  onclick="xoakhoa()" class="easyui-linkbutton" data-options=" iconCls:'icon-cancel'">Xoá</a>
      <a  onclick="tailai()" class="easyui-linkbutton" data-options=" iconCls:'icon-reload'">Tải lại</a>
      <input type="text" id="texb-khnh-search" class="easyui-textbox" prompt="Nhập mã khoa, tên khoa" style="width: 200px;" data-options="onChange:function(val1,val2){ $('#dg-khnh').datagrid('load',{timkiem:val1})}">
      <a  onclick="xemgv()" class="easyui-linkbutton" data-options=" iconCls:'icon-search'">Tạo câu hỏi</a>
    </div>
    </div>

    <!--Dialog thêm-->
   <div id="khoa-dlg" class="easyui-dialog" title="Thêm khoa" style="width:400px;height:fit-content;padding:10px 20px"
        closed="true" buttons="#them-buttons">
    <form id="khoa-fm" method="post">
        <div class="fitem">
            <div class="fitem">
                <input name="macauhoi" class="easyui-textbox" label="Mã Câu Hỏi:" labelPosition="top" style="width:100%; float: left;" id="macauhoi">
            </div>
            <div class="fitem">
                <input name="noidung" class="easyui-textbox" label="Nội Dung" labelPosition="top"  style="width:100%" id="noidung">
            </div>
            <div class="fitem">
                <select id="dokho" class="easyui-combobox" name="dokho" label=" Độ Khó" labelPosition="top" style="width:100%;">
                    <option value="Dễ">Dễ</option>
                    <option value="Trung Bình">Trung Bình</option>
                     <option value="Khó">Khó</option>
                     <option value="THách thức">THách thức</option>
            </select>
            </div>
            <div class="fitem">
            <input id="mamon" class="easyui-combobox" name="mamon" style="width:100%;" data-options="
                    url:'../model/taidulieucomboboxnguoidung.php',
                    valueField: 'mamon',
                    textField: 'tenmon',
                    label: 'Mã môn:',
                    labelPosition: 'top'
                    ">
        </div>
                       
        
    </div>  
<!--Dialog tao cau hoi-->

<!--Dialog tao cau hoi-->
   <div id="them-buttons">
    <a href="javascript:void(0)" class="easyui-linkbutton" id="tk" iconCls="icon-ok">Đồng ý</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" id="sk" iconCls="icon-save">Sửa</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="javascript:$('#khoa-dlg').dialog('close')" iconCls="icon-cancel">Thoát</a>
</div>
<br>

