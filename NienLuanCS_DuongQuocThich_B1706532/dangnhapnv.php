<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (isset($_POST['kt_nv'])) 
{
    //Kết nối tới database
    $conn =mysqli_connect("localhost","root","","quanlydulich") or die (mysqli_connect_error());
     
    //Lấy dữ liệu nhập vào
    $ten = addslashes($_POST['user_nv']);
    $matkhau = addslashes($_POST['pw_nv']);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$ten || !$matkhau) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    // mã hóa pasword
    //$matkhau= md5($matkhau);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $k = "SELECT HoTenNV FROM nhanvien WHERE HoTenNV='".$ten."'";
	$query = mysqli_query($conn,$k) or die (mysqli_error($conn));
    if (mysqli_num_rows($query) == 0) {
        echo "Đã tồn tại tên đăng nhập này. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
	/*
	
	
     */
    //Lấy mật khẩu trong database ra
	$h = "SELECT Pass FROM nhanvien where Pass ='".$matkhau."'";
	$q = mysqli_query($conn,$h) or die (mysqli_error($conn));
    $row = mysqli_fetch_array($q);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($matkhau != $row['Pass']) {
        echo"<script>
            alert('Sai tên tài khoản hoặc mật khẩu!!');
            window.location='dangnhapnv.html';
        </script>";
     //   echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lưu tên đăng nhập
    $_SESSION['HoTenNV'] = $ten;
		header("location: admin.php");
    //echo "Xin chào " . $ten . ". Bạn đã đăng nhập thành công. <a href='trangchu.php'>Về trang chủ</a>";
   // die();
}
