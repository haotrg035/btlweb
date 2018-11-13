<?php include "../../header/header.php";
include "../../header/menu.php" ?>
<script type="text/javascript" src="../js/ajax_cauhoi.js"></script>
<br>
<!-- Datagrid của khoa-->

<div style="width: 1200px; height:400px;margin: auto;">
    <table id="dg-cauhoi" style="height: 400px"></table>
</div>
<!--Dialog tiện ích khoa-->
<div id="dlg-cauhoi" class="easyui-dialog" title="Thêm Câu Hỏi" style="width:400px;height:auto;padding:20px"
closed="true" buttons="#btns-dlg-cauhoi">
    <form id="cauhoi-fm" method="post">
        <div class="fitem">
            <input id="mamon" name="mamon" class="easyui-combobox" label="Môn học:" labelPosition="top" style="width:100%; float: left;" data-options="
                url:'../model/taidulieucomboboxmonhoc.php',
                valueField: 'mamon',
                textField: 'tenmon',
                label: 'Môn Học:',
                labelPosition: 'top',
                onChange:()=>setMaCH()
                ">
        </div>
        <div class="fitem">
            <input name="macauhoi" id="macauhoi" class="easyui-textbox" label="Mã Câu Hỏi:" labelPosition="top" 
            required="true" style="width:100%">
        </div>

        <div class="fitem">
            <select id="dokho" name="dokho" class="easyui-combobox" label="Độ Khó:" labelPosition="top" style="width:100%;">
                <option value="1">Dễ</option>
                <option value="2">Trung Bình</option>
                <option value="3">Khó</option>
            </select>
        </div>
        <div class="fitem">
            <input id="noidung" name="noidung" class="easyui-textbox" label="Nội Dung:" labelPosition="top"
            required="true" style="width:100%">
        </div>
    </form>
</div>  
<div id="btns-dlg-cauhoi"></div>
<script src="../js/page_format.js"></script>
<?php include "../../footer/footer.php" ?>






