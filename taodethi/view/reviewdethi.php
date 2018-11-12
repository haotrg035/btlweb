<?php
// if (empty($_GET['confirm'])) die('Bad Request!');
include "../../ketnoicsdl/ketnoi.php";
include "../../ketnoicsdl/thuvien.php";
$cauhoi = laycauhoitravemang($_GET['mamon'],$_GET['socaude'],$_GET['socautb'],$_GET['socaukho']);
$dapan = laylistdapan($cauhoi);
$contentdethi = hienthicauhoi($cauhoi,$dapan,$_GET['tieude'],$_GET['tenmonhoc']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../../css/easyui.css">
	<link rel="stylesheet" type="text/css" href="../../css/icon.css">
    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.easyui.min.js"></script>
	<title>Document</title>
</head>
<body>
<div style="width:100%; position:relative;">
	<div style="position: fixed; top:20px; left:90%">
		<button id="btn-SaveDeThi" style="width:100px;height:30px;font-size:16px">
		<b>Lưu</b></button>
	</div>
	<div id="contentdethi" style="width:800px; margin:auto;border:1px solid lightgray;padding: 0px 10px 10px 10px;">
		<?php echo $contentdethi; ?>
	</div>
</div>
<script>
	$('#btn-SaveDeThi').linkbutton({
		iconCls:'icon-save',
		onClick:()=>{
			_contentdethi = encodeURI($('#contentdethi').html());
			var downloadForm = document.createElement("form");
			// downloadForm.target = "Map";
			downloadForm.method = "POST"; // or "post" if appropriate
			downloadForm.action = "../model/downloaddethi.php";

			var mapInput = document.createElement("input");
			mapInput.type = "text";
			mapInput.name = "contentdethi";
			mapInput.value = _contentdethi;
			downloadForm.appendChild(mapInput);

			document.body.appendChild(downloadForm);

			map = window.open("", "_blank");

		if (map) {
			downloadForm.submit();
		} else {
			alert('You must allow popups for this map to work.');
		}
		}
	});
</script>
</body>
</html>