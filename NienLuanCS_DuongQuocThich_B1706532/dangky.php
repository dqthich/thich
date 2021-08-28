<?php
 
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['kh_tendangnhap'])){
        die('');
    }
     $conn =mysqli_connect("localhost","root","","quanlydulich") or die (mysqli_connect_error());
           
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file dangky.html
	
	$t = "select * from khachhang";
	$result= mysqli_query($conn,$t) or die (mysqli_error($conn));
    $rows = mysqli_num_rows($result);
    $ma = 'MSKH'.$rows.'';
	
    $tendangnhap   = addslashes($_POST['kh_tendangnhap']);
    $diachi   = addslashes($_POST['kh_diachi']);
	$sdt     = addslashes($_POST['kh_dienthoai']);
	$matkhau   = addslashes($_POST['kh_matkhau']);
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$tendangnhap || !$sdt || !$diachi || !$matkhau)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
        // Mã khóa mật khẩu
       // $matkhau = md5($matkhau);
          
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
	$m = "SELECT SoDienThoai FROM khachhang WHERE SoDienThoai='".$sdt."'";
	$query = mysqli_query($conn,$m) or die (mysqli_error($conn));
    if (mysqli_num_rows($query) > 0) {
        echo "<script>alert('Số điện thoại này đã có người sử dụng !');
        window.location='dangky.html';
        </script>";
       // header("location: dangky.html");
       // echo "Số điện thoại này đã có người dùng. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Lưu thông tin thành viên vào bảng
	
    $add =  "INSERT into khachhang VALUES('".$ma."','".$tendangnhap."','".$diachi."','".$sdt."','".$matkhau."')";
        
    $result= mysqli_query($conn,$add) or die (mysqli_error($conn));
    
                             
    //Thông báo quá trình lưu
    if ($add)
            echo "<script>alert('Bạn đã đăng ký tài khoản thành công !');
            window.location='index.php';
            </script>";
         //header("location: index.php");
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.html'>Thử lại</a>";
	
?>