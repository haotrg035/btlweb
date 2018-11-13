<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		header('Location:./login.php');
	}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<title>Ứng Dụng Tạo Đề Thi</title>
</head>
<body>
	<div id="wrapper">
		<header id="header">
			<img src="img/header.jpg" width="1200px" alt="">
		</header><!-- /header -->
		<div id="mini-header">
			<span  id="username">Xin Chào, <i style="color:lightgray"><?php echo $_SESSION['username']; ?></i></span><a id="dangxuatbtn" href="./login.php?dangxuat=true">Đăng Xuất</a>
		</div>
		
		<div id="home-menu">
			<div class="item-wrapper">
				<a class="home-menu-item" href="taodethi/view/index.php" title="" style="">
					<img src="img/new_file_icon.png" width="150px" height="150px alt="Tạo Đề Thi">
					<div class="menu-item-name">Tạo Đề Thi</div>
				</a>
			</div>
			<div class="item-wrapper">
				<a class="home-menu-item" href="thongtindethi/view/index.php" title="" style="">
					<img src="img/folder_icon.png" width="150px" height="150px alt="Thông Tin Đề Thi">
					<div class="menu-item-name">Thông Tin Đề Thi</div>
				</a> 
			</div>
			<div class="item-wrapper">
				<a class="home-menu-item" href="thuviencauhoi/view/index.php" title="" style="">
					<img src="img/green_folder_icon.png" width="150px" height="150px alt="Thư Viện Câu Hỏi">
					<div class="menu-item-name">Thư Viện Câu Hỏi</div>
				</a> 
			</div>
			<div class="item-wrapper">
				<a class="home-menu-item" href="dapan/view/index.php" title="" style="">
					<img src="img/file_ok_icon.png" width="150px" height="150px alt="Đáp Án">
					<div class="menu-item-name">Thư Viện Đáp Án</div>
				</a>
			</div>
			<br>
			<div class="item-wrapper">
				<a class="home-menu-item" href="nguoidung/view/index.php" title="" style="">
					<img src="img/icon-user.png" width="150px" height="150px alt="người dùng">
					<div class="menu-item-name">Giảng Viên</div>
				</a>	
			</div>	
			<div class="item-wrapper">			
				<a class="home-menu-item" href="khoa/view/index.php" title="" style="">
					<img src="img/icon-home.png" width="150px" height="150px" alt="Khoa">
					<div class="menu-item-name">Khoa</div>
				</a>
			</div>
			<div class="item-wrapper">
				<a class="home-menu-item" href="monhoc/view/index.php" title="" style="">
					<img src="img/icon-book.png" width="150px" height="150px alt="Môn Học">
					<div class="menu-item-name">Môn Học</div>
				</a>
			</div>
		</div>
	<footer>
		<img src="img/footer.jpg" width="1200px" alt="">
	</footer>
	</body>
	</html>