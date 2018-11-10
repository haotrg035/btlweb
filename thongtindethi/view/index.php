<?php include "../../header/header.php" ?>
<?php include "../../header/menu.php" ?>

    <script type="text/javascript" src="../js/ajax_dethi.js"></script>
    <div style="width: 1200px; margin:auto;"><br>
        <table id="dg-khnh" class="easyui-datagrid" title="Thông Tin Đề Thi" style="width:1200px;height:500px; text-align: center;" data-options="
            url: '../model/taidulieudethi.php',
            fitColumns:true,
            toolbar:'#tb-khnh',
            rownumbers:true,
            singleSelect:true,
            pagination:true">
            <thead>
                <tr>
                    <th data-options="field:'tennd', align:'center',width:115" ><b>Tên Người Dùng</b></th>
                    <th data-options="field:'madethi', align:'center',width:115" ><b>Mã Đề Thi</b></th>
                    <th data-options="field:'tenmon', align:'center',width:115" ><b>Môn Học</b></th>
                    <th data-options="field:'tieude', align:'center',width:220"><b>Tiêu Đề</b></th>
                    <th data-options="field:'ghichu', align:'center',width:130"><b>Ghi Chú</b></th>
                </tr>    
            </thead>       
        </table>

    <!--Toolbar của datagrid nguoidung-->
    <div id="tb-khnh" style="padding:2px 5px;">
        <a onclick="themdethi()" class="easyui-linkbutton" data-options="iconCls:'icon-add'">Thêm</a> 
        <a onclick="suadethi()" class="easyui-linkbutton" data-options="iconCls:'icon-edit'">Sửa</a>
        <a onclick="xoadethi()" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Xóa</a>
        <a onclick="tailai()" class="easyui-linkbutton" data-options="iconCls:'icon-reload'">Tải lại</a>
        <input type="text" id="texb-khnh-search" class="easyui-textbox" prompt="Mã đề thi, tiêu " style="width: 200px;" data-options="onChange:function(val1,val2){ $('#dg-khnh').datagrid('load',{timkiem:val1})}">
        </div>
    </div>

    <!--Dialog thêm-->
    <div id="thongtindethi-dlg" class="easyui-dialog" title="Thông Tin Đề Thi" style="width:400px;height:fit-content;padding:10px 20px;"
        closed="true" buttons="#them-buttons">
        <form id="madethi-fm" method="post">
            <div class="fitem">
                <input name="madethi" class="easyui-textbox" label="Mã đề thi:" labelPosition="top" style="width:100%; float: left;" id="madethi">

            </div>
            <div class="fitem">
                <input id="mand" name="mand" class="easyui-combobox" label="Người Dùng:" labelPosition="top" style="width:100%; float: left;" data-options="
                    url:'../model/taidulieucomboboxnguoidung.php',
                    valueField: 'mand',
                    textField: 'tennd',
                    label: 'Tên người dùng:',
                    labelPosition: 'top'
                    ">
            </div>
            <div class="fitem">
                <input id="mamon" name="mamon" class="easyui-combobox" label="Môn học:" labelPosition="top" style="width:100%; float: left;" data-options="
                     url:'../model/taidulieucomboboxmonhoc.php',
                    valueField: 'mamon',
                    textField: 'tenmon',
                    label: 'Môn Học:',
                    labelPosition: 'top'
                    ">
            </div>
            <div class="fitem">
                <input name="tieude" class="easyui-textbox" label="Tiêu Đề:" labelPosition="top"  style="width:100%" id="tieude">
            </div>
            <div class="fitem">
                <input name="ghichu" class="easyui-textbox" label="Ghi Chú:" labelPosition="top"  style="width:100%" id="ghichu">
            </div>
                        
        </form>
    </div>  

    <div id="them-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton" id="themdethi" iconCls="icon-ok">Đồng ý</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" id="suadethi" iconCls="icon-save">Sửa</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" id="thoat" onclick="javascript:$('#thongtindethi-dlg').dialog('close')" iconCls="icon-cancel">Thoát</a>
    </div>
</body>
</html>
<?php include "../../footer/footer.php" ?>