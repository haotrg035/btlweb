<div id="main-menu" style="margin-top: 10px;">
            <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/btlweb/" id="menu-trangchu-item" title=""></a>
            <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/btlweb/khoa/view" id="menu-khoa-item" title=""></a>      
            <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/btlweb/monhoc/view" id="menu-monhoc-item" title=""></a>      
            <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/btlweb/nguoidung/view" id="menu-nguoidung-item" title=""></a>
            <div style="margin: 10px;">
            </div>
            <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/btlweb/taodethi/view" id="menu-taodethi-item" title=""></a>      
            <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/btlweb/thongtindethi/view" id="menu-thongtindethi-item" title=""></a>      
            <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/btlweb/thongtinmonhoc/view" id="menu-thongtinmonhoc-item" title=""></a>      
            <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/btlweb/thuviencauhoi/view" id="menu-thuviencauhoi-item" title=""></a>
            <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/btlweb/dapan/view" id="menu-dapan-item" title=""></a>      
        </div>
 
        </ul>
	</div>
    <script>
        $('#menu-trangchu-item').linkbutton({
            text:'<span style="font-size:25px;padding:10px;font-weight:bold">Trang Chủ</span>',
            iconCls:'myiconhome',
        });
        $('#menu-khoa-item').linkbutton({
            text:'<span style="font-size:25px;padding:10px;font-weight:bold">Khoa</span>',
            iconCls:'icon-list',
        });
        $('#menu-monhoc-item').linkbutton({
            text:'<span style="font-size:25px;padding:10px;font-weight:bold">Môn Học</span>',
            iconCls:'myiconbook',
        });
        $('#menu-nguoidung-item').linkbutton({
            text:'<span style="font-size:25px;padding:10px;font-weight:bold">Giảng Viên</span>',
            iconCls:'myiconuser',
        });
        $('#menu-taodethi-item').linkbutton({
            text:'<span style="font-size:25px;padding:10px;font-weight:bold">Tạo Đề Thi</span>',
            iconCls:'icon-list',
        });
        $('#menu-thongtindethi-item').linkbutton({
            text:'<span style="font-size:25px;padding:10px;font-weight:bold">Thông Tin Đề</span>',
            iconCls:'icon-list',
        });
        $('#menu-thuviencauhoi-item').linkbutton({
            text:'<span style="font-size:25px;padding:10px;font-weight:bold">Thư Viện Câu Hỏi</span>',
            iconCls:'icon-list',
        });
        $('#menu-dapan-item').linkbutton({
            text:'<span style="font-size:25px;padding:10px;font-weight:bold">Đáp Án</span>',
            iconCls:'myiconbook',
        });
</script>