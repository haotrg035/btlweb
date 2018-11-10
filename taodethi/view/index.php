<?php include "../../header/header.php" ?>
<?php include "../../header/menu.php" ?>
<script type="text/javascript" src="../js/ajax_monhoc.js"></script>
<br>
<!-- Datagrid của môn học-->
<div style="width: 1200px; margin: 0 auto;">  

   <table id="dg-khnh" class="easyui-datagrid" title="Quản lý môn học " style="width:1200px;height:500px;"
        data-options="
        url: '../model/taidulieumonhoc.php',
        fitColumns:true,
        toolbar:'#tb-khnh',
        rownumbers:true,
        singleSelect:true,
        pagination:true">
    <thead>
        <tr>
            <th data-options="field:'mamon', align:'center',width:120" ><b>Mã môn học</b></th>
            <th data-options="field:'tenmon', align:'lefly',width:320"><b>Tên môn học</b></th>
            <th data-options="field:'ghichu', align:'lefly',width:320"><b>Ghi chú</b></th>
        </tr>        
    </thead>   
</table>
    <!--Toolbar của datagrid môn học-->
    <div id="tb-khnh" style="padding:2px 5px;">
      <a  onclick="themmonhoc()" class="easyui-linkbutton" data-options=" iconCls:'icon-add'">Thêm</a> 
      <a  onclick="suamonhoc()" class="easyui-linkbutton" data-options=" iconCls:'icon-edit'">Sửa</a>
      <a  onclick="xoamonhoc()" class="easyui-linkbutton" data-options=" iconCls:'icon-cancel'">Xoá</a>
      <a  onclick="tailai()" class="easyui-linkbutton" data-options=" iconCls:'icon-reload'">Tải lại</a>
      <input type="text" id="texb-khnh-search" class="easyui-textbox" prompt="Tìm mã môn học, tên môn học" style="width: 200px;" data-options="onChange:function(val1,val2){ $('#dg-khnh').datagrid('load',{timkiem:val1})}">
    </div>
</div>

<!--Dialog thêm môn-->
<div id="monhoc-dlg" class="easyui-dialog" title="Thông tin môn học" style="width:400px;height:fit-content;padding:10px 20px"
        closed="true" buttons="#them-buttons">
    <form id="monhoc-fm" method="post">
        <div class="fitem">
           
            <input name="tenmon" class="easyui-textbox" label="Tên môn:" labelPosition="top" required="true" style="width:262px" id="tenmon">
        </div>
        <div class="fitem">
            
            <input name="mamon" class="easyui-textbox" label="Mã môn:" labelPosition="top" 
            required="true" style="width:262px" id="mamon">
        </div>
        <div class="fitem"> 
            <input name="ghichu" class="easyui-textbox" label="Ghi chú:" labelPosition="top" style="width:262px" id="ghichu">
        </div>
    </form>
</div>  

<!--buttons thêm môn học-->
<div id="them-buttons">
    <a href="javascript:void(0)" class="easyui-linkbutton" id="themmh" iconCls="icon-ok">Đồng ý</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" id="suamh" iconCls="icon-save">Sửa</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" id="xoamh" iconCls="icon-cancel">Xoá</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="javascript:$('#monhoc-dlg').dialog('close')" iconCls="icon-cancel">Thoát</a>
</div>
<br>
<?php
 include "../../footer/footer.php"
?>







































<!-- <?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Thiết lập mảng lưu lỗi => Mặc định rỗng
    $error = array();
    if (empty($_POST['pay'])) {
        $error['pay'] = "Bạn cần chọn hình thức thanh toán";
    } else {
        $pay = $_POST['pay'];
    }
    // Kiểm tra có lỗi hay không
    if (empty($error)) {
        echo $pay;
        // Xử lý dữ liệu khi không gặp lỗi nhập liệu
    }
}
    ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Nhận dữ liệu từ Drop-Down List | Hocweb123</title>
    </head>
    <body>
        <h1>Nhận dữ liệu từ Drop-Down List</h1>
        <form action="" method="POST">
            <label for="">Hình thức thanh toán</label><br/>
            <select name="pay">
                <option value="">--Chọn--</option>
                <option <?php if (isset($pay) && $pay == 'cod') echo "selected=\"selected\"";  ?> value="cod" >Thanh toán tại nhà</option>
                <option <?php if (isset($pay) && $pay == 'banking') echo "selected=\"selected\"";  ?> value="banking">Thanh toán qua Thẻ tín dụng</option>
            </select><br/><br/>
            <span style="color: red;"><?php if (isset($error['pay'])) echo $error['pay']; ?></span> <br/>
            <input type="submit" name="sm_order" value="Gửi thông tin">
        </form>
    </body>
</html
 -->