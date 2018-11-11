<?php include "../../header/header.php";
include "../../header/menu.php" ?>
<script type="text/javascript" src="../js/ajax_khoa.js"></script>
<br>
<!-- Datagrid của khoa-->

<div style="width: 1200px; margin: auto;">
    <table id="dg-khoa"></table>
</div>
<!--Dialog tiện ích khoa-->
<div id="dlg-khoa" class="easyui-dialog" title="Thêm khoa" style="width:auto;height:auto;padding:20px"
closed="true" buttons="#btns-dlg-khoa">
    <form id="khoa-fm" method="post">
        <div class="fitem">
            <input name="makhoa" class="easyui-textbox" label="Mã Khoa:" labelPosition="top" 
            required="true" style="width:260px" id="makhoa">
        </div>
        <div class="fitem">
            <input name="tenkhoa" class="easyui-textbox" label="Tên Khoa:" labelPosition="top"
            required="true" style="width:260px" id="tenkhoa">
        </div>
    </form>
</div>  
<div id="btns-dlg-khoa"></div>
<script src="../js/page_format.js"></script>
<?php include "../../footer/footer.php" ?>






