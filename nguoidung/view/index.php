<?php include "../../header/header.php"?>
<?php include "../../header/menu.php" ?>

    <script type="text/javascript" src="../js/ajax_nguoidung.js"></script>
    <div style="width: 1200px; margin:auto;"><br>
        <table id="dg-khnh" class="easyui-datagrid" title="Giảng Viên" style="width:1200px;height:500px; text-align: center;" data-options="
            url: '../model/taidulieunguoidung.php',
            fitColumns:true,
            toolbar:'#tb-khnh',
            rownumbers:true,
            singleSelect:true,
            pagination:true">
            <thead>
                <tr>
                    <th data-options="field:'mand', align:'center',width:115" ><b>Mã giảng viên</b></th>
                    <th data-options="field:'tennd', align:'center',width:220"><b>Tên giảng viên</b></th>
                    <th data-options="field:'gioitinh', align:'center',width:130"><b>Giới tính</b></th>
                    <th data-options="field:'makhoa', align:'center',width:80"><b>Mã khoa</b></th>
                </tr>    
            </thead>       
        </table>
    <!--Toolbar của datagrid nguoidung-->
    <div id="tb-khnh" style="padding:2px 5px;">
        <a onclick="themnguoidung()" class="easyui-linkbutton" data-options="iconCls:'icon-add'">Thêm</a> 
        <a onclick="suattnd()" class="easyui-linkbutton" data-options="iconCls:'icon-edit'">Sửa</a>
        <a onclick="xoanguoidung()" class="easyui-linkbutton" data-options="iconCls:'icon-save'">Xóa</a>
        <a onclick="tailai()" class="easyui-linkbutton" data-options="iconCls:'icon-reload'">Tải lại</a>
        
        </div>
    </div>

    <!--Dialog thêm-->
    <div id="nguoidung-dlg" class="easyui-dialog" title="Thông Tin Người Dùng" style="width:400px;height:fit-content;padding:10px 20px;"
        closed="true" buttons="#them-buttons">
        <form id="nguoidung-fm" method="post">
            <div class="fitem">
                <input name="mand" class="easyui-textbox" label="Mã người dùng:" labelPosition="top" style="width:100%; float: left;" id="mand">
            </div>
            <div class="fitem">
                <input name="tennd" class="easyui-textbox" label="Tên người dùng:" labelPosition="top"  style="width:100%" id="tennd">
            </div>
            <div class="fitem">
            <select id="gioitinh" class="easyui-combobox" name="gioitinh" label="Giới tính:" labelPosition="top" style="width:100%;">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
            </select>
            </div>
            <!-- <div class="fitem">
                <input name="makhoa" class="easyui-textbox" label="Mã bộ môn:" labelPosition="top" style="width:100%" id="makhoa">
            </div> -->

            <div class="fitem">
            <input id="makhoa" class="easyui-combobox" name="makhoa" style="width:100%;" data-options="
                    url:'../model/taidulieucomboboxnguoidung.php',
                    valueField: 'makhoa',
                    textField: 'tenkhoa',
                    label: 'Tên khoa:',
                    labelPosition: 'top'
                    ">
        </div>


            
        </form>
    </div>  

    <div id="them-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton" id="themnd" iconCls="icon-ok">Đồng ý</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" id="suathongtinnd" iconCls="icon-save">Sửa</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" id="thoat" onclick="javascript:$('#nguoidung-dlg').dialog('close')" iconCls="icon-cancel">Thoát</a>
    </div>
</body>
</html>
<?php include "../../footer/footer.php" ?>