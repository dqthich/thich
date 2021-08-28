<?php
session_start();
    if(!isset($_SESSION['HoTenNV'])){
        header("Location: dangnhapnv.html");
    }

?>

<html>
<head>
<meta charset ="UTF-8">
</head>
<body>
	<?php
		if(isset($_POST['duyettour'])){
			$conn = mysqli_connect("localhost", "root", "","quanlydulich");
			if(isset($_POST['masotour'])){
				foreach($_POST['masotour'] as $value){
					$x= "Đã xác nhận";
				/*	$ct = "select * from chitietdathang where SoDonDH='".$value."'";
					$ctdh = mysqli_fetch_array(mysqli_query($conn, $ct));
					$hh = "select * from hanghoa where MSHH='".$ctdh['MSHH']."'";
					$hanghoa = mysqli_fetch_array(mysqli_query($conn, $hh));
					
					$soluong=$hanghoa['SoLuongHang'] - $ctdh['SoLuong'];
					$uphh = "update hanghoa set SoLuongHang=".$soluong." where MSHH='".$ctdh['MSHH']."'";
					$uphanghoa = mysqli_query($conn, $uphh);
					*/
					$nv = "select * from nhanvien where HoTenNV='".$_SESSION['HoTenNV']."'";
					$nhanvien = mysqli_fetch_array(mysqli_query($conn, $nv));
					
					$dh ="update dattour set TrangThai='".$x."',Manv='".$nhanvien['Manv']."' where Masotour='".$value."'";
					$updathang = mysqli_query($conn, $dh);
					
					
				}
				header("Location: admin.php");
			}else
				header("Location: admin.php");
			
		}
	?>
</body>

</html>