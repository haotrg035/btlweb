<?php 
    session_start();
    if (isset($_GET['dangxuat']) && $_GET['dangxuat'] =='true') {
        if (isset($_SESSION['username'])) {
            unset($_SESSION['username']);
        }
    }
    if (isset($_SESSION['username'])) {
        header('location:./index.php');
    }
    if (isset($_POST['submit'])) {
        if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin123') {
            $_SESSION['username'] = $_POST['username'];
            header('location:./index.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/loginstyle.css">
    <title>Ứng Dụng Tạo Đề Thi</title>
</head>
<body>
    <div id="wrapper">
        <header> <h1>Ứng Dụng Xây Dựng Đề Thi</h1></header>
        <div id="content">
           <div id="loginform-wrapper">
               <form id="loginform" action="#" method="POST">
                   <h2>Đăng Nhập</h2>
                   <input type="text" id="username" name="username" placeholder="Nhập tên tài khoản">
                   <input type="password" name="password" id="password" placeholder="Nhập Password">
                   <input id="dangnhapbtn" name="submit" type="submit" value="Đăng Nhập">
               </form>
           </div>
        </div>
    </div>
</body>
</html>