<?php include "../../header/header.php";
include "../../header/menu.php" ?>
<script type="text/javascript" src="../js/ajax_dapan.js"></script>
<br>
<!-- Datagrid của khoa-->

<div style="width: 1200px; margin: auto;">
    <table id="dg-dapan" style="height: 400px"></table>
</div>
<!--Dialog tiện ích khoa-->
<div id="dlg-dapan" class="easyui-dialog" title="Thêm Đáp Án" style="width:400px;height:auto;padding:20px"
closed="true" buttons="#btns-dlg-dapan">
    <form id="dapan-fm" method="post">
        <div class="fitem">
            <input id="macauhoi" name="macauhoi" class="easyui-combobox" label="Môn học:" labelPosition="top" style="width:100%; float: left;" data-options="
                 url:'../model/taidulieucomboboxcauhoi.php',
                valueField: 'macauhoi',
                textField: 'textcauhoi',
                label: 'Câu Hỏi:',
                labelPosition: 'top'
                ">
        </div>
        <div class="fitem">
            <input name="madapan" id="madapan" class="easyui-textbox" label="Mã Đáp Án:" labelPosition="top" 
            required="true" style="width:100%">
        </div>
        <div class="fitem">
            <select id="loaicau" name="loaicau" class="easyui-combobox" label="Loại Câu:" labelPosition="top" style="width:100%;">
                <option value="Sai">Sai</option>
                <option value="Đúng">Đúng</option>
            </select>
        </div>
        <div class="fitem">
            <input id="noidung" name="noidung" class="easyui-textbox" label="Nội Dung:" labelPosition="top"
            required="true" style="width:100%">
        </div>
    </form>
</div>  
<div id="btns-dlg-dapan"></div>
<script src="../js/page_format.js"></script>
<?php include "../../footer/footer.php" ?>






