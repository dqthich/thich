<?php
session_start();
	if(!isset($_SESSION['HoTenKH'])){
		echo"<script>
			alert('Bạn cần phải đăng nhập!');
			window.location='dangnhap.html';
		</script>";

		//header("Location: dangnhap.html");

	}
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đặt hàng
if (isset($_POST['mua'])) 
{
    //Kết nối tới database
	$conn =mysqli_connect("localhost","root","","quanlydulich") ;//or die (mysqli_connect_error());
	
	$matou = $_POST['matour'];
    $ngaybd = $_POST['ngaydi'];
    $ngaykt = $_POST['ngayve'];
    $slnl = $_POST['sl_nl'];
	$slte = $_POST['sl_te'];
	
	$t = "select * from dattour";
	$resul= mysqli_query($conn,$t);// or die (mysqli_error($conn));
	$maso = mysqli_num_rows($resul);
	$ma = 'Tour'.$maso.'';
	$sql= "select * from khachhang where HoTenKH ='".$_SESSION['HoTenKH']."'";
	
	$result= mysqli_query($conn,$sql) or die(mysql_error());
	$KH = mysqli_fetch_array(mysqli_query($conn, $sql));
	
		$add1 =  "INSERT into dattour(Masotour,Matour,MSKH,NgayBD,NgayKT,SL_NL,SL_TE) 
					VALUES('".$ma."','".$matou."','".$KH['MSKH']."','".$ngaybd."','".$ngaykt."',".$slnl.",".$slte.")";
		$result1 = mysqli_query($conn,$add1) or die(mysqli_error());

	
	
	//Lưu thông tin thành viên vào bảng
	/*
	$m ="select * from khachhang where HoTenKH ='".$_SESSION['HoTenKH']."'";
	$result= mysqli_query($conn,$m) or die(mysql_error());
	$KH = mysqli_fetch_array(mysqli_query($conn, $m));
	
	
    $matou = $_POST['matour'];
    $ngaybd = $_POST['ngaydi'];
    $ngaykt = $_POST['ngayve'];
    $slnl = $_POST['sl_nl'];
    $slte = $_POST['sl_te'];
    $ma = 1 ;
		do{
			
			$add1 =  "INSERT into dattour(Manv,Matour,MSKH,NgayBD,NgayKT,SL_NL,SL_TE) VALUES('".$ma."','".$matou."','".$KH['MSKH']."','".$ngaybd."','".$ngaykt."','".$ngaykt."','".$slnl."','".$slte."')";
			$result= mysqli_query($conn,$add1); //or die (mysqli_error($conn));
			
			
			
		}while(!$result);
	*/
			
    //Thông báo quá trình lưu
    if ($result && $result1 ){
		// header("location: index.php");
		 echo "<script>alert('Bạn đã đặt tour thành công');
		 window.location='index.php';
		 </script>";
	}else
        echo "Có lỗi xảy ra trong quá trình đặt hàng. <a href='mua.php'>Thử lại</a>";
}
?>