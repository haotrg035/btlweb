<?php include "../../header/header.php";
include "../../header/menu.php" ?>

<script type="text/javascript" src="../js/dapan.js"></script>
<br>
<!-- Datagrid của môn học-->
<div style="width: 1200px; margin: auto;">
 <!--   <h2>Thông tin đáp án</h2>
    <p>nút trên toolbar của DataGrid.</p> -->
   <table id="dg-khnh" class="easyui-datagrid" title="Quản lý môn học " style="width:1200px;height:500px;"
        data-options="
        url: '../model/taidulieudapan.php',
        fitColumns:true,
        toolbar:'#tb-khnh',
        rownumbers:true,
        singleSelect:true,
        pagination:true">
    <thead>
        <tr>
            <th data-options="field:'madapan', align:'center',width:120" ><b>Mã đáp án</b></th>
            <th data-options="field:'macauhoi', align:'lefly',width:320"><b>Mã câu hỏi</b></th>
            <th data-options="field:'macaudung', align:'lefly',width:320"><b>Mã câu đúng</b></th>
            <th data-options="field:'noidung', align:'lefly',width:320"><b>Nội Dung</b></th>
        </tr>        
    </thead>   
</table>
    <!--Toolbar của datagrid môn học-->
    <div id="tb-khnh" style="padding:2px 5px;">
      <a  onclick="themdapan()" class="easyui-linkbutton" data-options=" iconCls:'icon-add'">Thêm</a> 
      <a  onclick="suadapan()" class="easyui-linkbutton" data-options=" iconCls:'icon-edit'">Sửa</a>
      <a  onclick="xoadapan()" class="easyui-linkbutton" data-options=" iconCls:'icon-cancel'">Xoá</a>
      <a  onclick="tailai()" class="easyui-linkbutton" data-options=" iconCls:'icon-reload'">Tải lại</a>
      <input type="text" id="texb-khnh-search" class="easyui-textbox" prompt="Tìm mã đáp án, mã câu hỏi" style="width: 200px;" data-options="onChange:function(val1,val2){ $('#dg-khnh').datagrid('load',{timkiem:val1})}">
    </div>
</div>
<!-- dialog thêm đáp án -->
<div id="dapan" class="easyui-dialog" title="thông tin đáp án" style="width: 400px;height: fit-content;padding: 10px 20px" closed="true" buttons="#them-buttons">
  <form id="dapan" method="post">
    <div class="fitem">
      <input name="madapan" class="easyui-textbox" label="mã đáp án" labelPosition="top" required="true" style="width: 262px" id="madapan">
    </div>
    <div class="fitem">
      <input name="macauhoi" class="easyui-textbox" label="mã câu hỏi" labelPosition="top" required="true" style="width: 262px" id="macauhoi">
    </div>
    <div class="fitem">
      <input name="macaudung" class="easyui-textbox" label="mã câu đúng" labelPosition="top" required="true" style="width: 262px" id="macaudung">
    </div>
    <div class="fitem">
      <input name="noidung" class="easyui-textbox" label="nội dung" labelPosition="top" required="true" style="width: 262px" id="noidung">
    </div>
  </form>
</div>
<!-- button them đáp án -->
<div id="them-buttons">
    <a href="javascript:void(0)" class="easyui-linkbutton" id="themda" iconCls="icon-ok">Đồng ý</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" id="suada" iconCls="icon-save">Sửa</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" id="xoada" iconCls="icon-cancel">Xoá</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="javascript:$('#dapan').dialog('close')" iconCls="icon-cancel">Thoát</a>
</div>
<br>
<?php
 include "../../footer/footer.php"
?>