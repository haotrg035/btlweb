<?php include "../../header/header.php";
include "../../header/menu.php" ?>
<script type="text/javascript" src="../js/ajax_taodethi.js"></script>
<br>
<!-- Datagrid của khoa-->

<div style="width: 1200px; margin: auto;">
    <table id="dg-taodethi" style=" height:400px;"></table>
</div>
<!--Dialog tiện ích Đề Thi-->
<div id="dlg-taodethi" class="easyui-dialog" title="Thư Viện Đề Thi" style="width:350px;height:auto;padding:20px"
closed="true" buttons="#btns-dlg-taodethi">
    <form id="taodethi-fm" method="post">
        <div class="fitem">
            <input required="required" id="mamon" name="mamon" class="easyui-combobox" label="Môn Học:" labelPosition="top" style="width:100%; float: left;" data-options="
                url:'../model/taidulieucomboboxmonhoc.php',
                valueField: 'mamon',
                textField: 'tenmon',
                label: 'Môn Học:',
                labelPosition: 'top'
                ">
        </div>
        <div class="fitem">
            <input required="required" id="madethi" name="madethi" class="easyui-combobox" label="Đề Thi" labelPosition="top" style="width:100%; float: left;" data-options="
                url:'../model/taidulieucomboboxdethi.php',
                valueField: 'madethi',
                textField: 'tieude',
                label: 'Đề Thi:',
                labelPosition: 'top'
                ">
        </div>
        <div class="fitem">
            <div>&nbsp;</div>
            <div class="fitem" style="text-align:center !important;font-weight:bold;font-size:18px">Độ Khó</div>
            <div class="fitem" style="padding: 0px 0px 0px 0px!important;">
                <label for="socaude">Dễ <span id="lbl_de"></span>:</label>
                <input id="socaude" name="socaude" class="easyui-numberspinner" style="width:100%;"
                data-options="min:0,max:100,editable:true">
                <div>&nbsp;</div>
                <label for="socaude">Trung Bình <span id="lbl_tb"></span>:</label>
                <input id="socautb" name="socautb" class="easyui-numberspinner" style="width:100%;"  data-options="min:0,max:100,editable:true">
                <div>&nbsp;</div>
                <label for="socaude">Khó <span id="lbl_kho"></span>:</label>
                <input id="socaukho" name="socaukho" class="easyui-numberspinner" style="width:100%;" data-options="min:0,max:100,editable:true">
            </div>
        </div>
        
    </form>
</div>  
<div id="btns-dlg-taodethi"></div>
<script src="../js/page_format.js"></script>
<?php include "../../footer/footer.php" ?>