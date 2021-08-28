<?php
 
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['nv_tendangnhap'])){
        die('');
    }
     $conn =mysqli_connect("localhost","root","","quanlydulich") or die (mysqli_connect_error());
           
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file dangky.html
	
	$t = "select * from nhanvien";
	$result= mysqli_query($conn,$t) or die (mysqli_error($conn));
    $rows = mysqli_num_rows($result);
    $r = $rows +3 ;
    $ma = 'nv'.$r.'';
	
    $tendangnhap   = addslashes($_POST['nv_tendangnhap']);
    $diachi   = addslashes($_POST['nv_diachi']);
    $sdt     = addslashes($_POST['nv_dienthoai']);
    $chucvu     = addslashes($_POST['nv_cv']);
	$matkhau   = addslashes($_POST['nv_matkhau']);
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$tendangnhap || !$sdt || !$diachi || !$matkhau || !$chucvu)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
        // Mã khóa mật khẩu
       // $matkhau = md5($matkhau);
          
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
	$m = "SELECT SoDienThoai FROM nhanvien WHERE SoDienThoai='".$sdt."'";
	$query = mysqli_query($conn,$m) or die (mysqli_error($conn));
    if (mysqli_num_rows($query) > 0) {
        echo "<script>alert('Số điện thoại này đã có người sử dụng !');
            window.location='dangkynv.html';
        </script>";
       // header("location: dangkynv.html");
       // echo "Số điện thoại này đã có người dùng. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Lưu thông tin thành viên vào bảng
	
    $add =  "INSERT into nhanvien VALUES('".$ma."','".$tendangnhap."','".$chucvu."','".$diachi."','".$sdt."','".$matkhau."')";
        
    $result= mysqli_query($conn,$add) or die (mysqli_error($conn));
    
    
	
                          
    //Thông báo quá trình lưu
    if ($add)
            echo "<script>alert('Bạn đã đăng ký thành công!');
            window.location='admin.php';
            </script>";
       //  header("location: admin.php");
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.html'>Thử lại</a>";
	
?>