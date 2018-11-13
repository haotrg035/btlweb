<?php include "../../header/header.php";
include "../../header/menu.php" ?>
<script type="text/javascript" src="../js/ajax_dapan.js"></script>
<br>
<!-- Datagrid của đáp án-->

<div style="width: 1200px; margin: auto;">
    <table id="dg-dapan" style="height: 400px"></table>
</div>
<!--Dialog tiện ích đáp án-->
<div id="dlg-dapan" class="easyui-dialog" title="" style="width:600px;height:auto;padding:20px"
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
<!--Dialog tiện ích đáp án 2 dùng để thêm nhiều đáp án-->
<div id="dlg-themdapan" class="easyui-dialog" title="Thêm Đáp Án" style="width:600px;height:auto;padding:20px"
closed="true" buttons="#btns-dlg-dapan">
    <form id="dapan-fm" method="post">
        <div class="fitem">
            <input required="true" id="them_macauhoi" name="them_macauhoi" class="easyui-combobox" label="Môn học:" labelPosition="top" style="width:100%; float: left;" data-options="
                 url:'../model/taidulieucomboboxcauhoi.php',
                valueField: 'macauhoi',
                textField: 'textcauhoi',
                label: 'Câu Hỏi:',
                labelPosition: 'top',
                onChange:()=>{
                    setMaDA();
                }
                ">
        </div>
        <table style="width:100%;" cellpadding="">
            <tr>
                <td style="padding: 10px 0px">
                    <label style="color:blue">Đáp Án <b>Đúng</b></label>
                    <div class="fitem">
                        <input name="madadung" disabled="true" id="madadung" class="easyui-textbox" label="Mã Đáp Án:" labelPosition="left" 
                        required="true" style="width:100%">
                    </div>
                    <div class="fitem">
                        <input id="noidung_dadung" name="noidung_dadung" class="easyui-textbox" label="Nội Dung:" labelPosition="left" required="true" 
                        style="width:100%">
                    </div>
                </td>
                <td>
                    <label style="color:tomato">Đáp Án <b>Sai</b>:</label>
                    <div class="fitem">
                        <input name="madasai1" disabled="true" id="madasai1" class="easyui-textbox" label="Mã Đáp Án:" labelPosition="left" 
                        required="true" style="width:100%">
                    </div>
                    <div class="fitem">
                        <input id="noidung_dasai1" name="noidung_dasai1" class="easyui-textbox" label="Nội Dung:" labelPosition="left"
                        required="true" style="width:270px">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label style="color:tomato">Đáp Án <b>Sai</b>:</label>
                    <div class="fitem">
                        <input name="madasai2" disabled="true" id="madasai2" class="easyui-textbox" label="Mã Đáp Án:" labelPosition="left" 
                        required="true" style="width:100%">
                    </div>
                    <div class="fitem">
                        <input id="noidung_dasai2" name="noidung_dasai2" class="easyui-textbox" label="Nội Dung:" labelPosition="left"
                        required="true" style="width:100%">
                    </div>
                </td>
                <td>
                    <label style="color:tomato">Đáp Án <b>Sai</b>:</label>
                    <div class="fitem">
                        <input name="madasai3" disabled="true" id="madasai3" class="easyui-textbox" label="Mã Đáp Án:" labelPosition="left" 
                        required="true" style="width:100%">
                    </div>
                    <div class="fitem">
                        <input id="noidung_dasai3" name="noidung_dasai3" class="easyui-textbox" label="Nội Dung:" labelPosition="left"
                        required="true" style="width:100%">
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div> 
<div id="btns-dlg-dapan"></div>
<script src="../js/page_format.js"></script>
<?php include "../../footer/footer.php" ?>






