<html>
<head>
	<meta charset="UTF-8">
	
</head>
<body>
<?php
	if(isset($_POST['capnhatnv'])){
		//if($_POST['mt']!="" && $_POST['tt']!="" && $_POST['mn']!="" && $_POST['gia']!=""){
            $mat = $_POST['mnv'];
            $tent = $_POST['tnv'];
            $cvnv = $_POST['macv'];
            $dcn = $_POST['diachi'];
            $sdt = $_POST['sdtnv'];
            $pass= $_POST['passnv'];
			$conn = mysqli_connect("localhost", "root", "","quanlydulich");
			//$tou ="select * from tour where Matour='".$_POST['mt']."' and Tentour = '".$_POST['tt']."' ";
			//$kt =mysqli_query($conn, $tou);
			//$hanghoa = mysqli_num_rows($kt);
			//$kthh =mysqli_fetch_array($kt);
		//if($hanghoa < 2){
	
				$nv1 = "update nhanvien set HoTenNV='".$_POST['tnv']."' where Manv ='".$mat."'";
				$nv2= "update nhanvien set Macv ='".$_POST['macv']."' where Manv ='".$mat."'";
				$nv3= "update nhanvien set DiaChi ='".$_POST['diachi']."' where Manv ='".$mat."'";
				$nv4= "update nhanvien set SoDienThoai =".$sdt." where Manv ='".$mat."'";
				$nv5= "update nhanvien set Pass = ".$pass." where Manv ='".$mat."'";
				
				$upnhan1 = mysqli_query($conn, $nv1);
				$upnhan2 = mysqli_query($conn, $nv2);
				$upnhan3 = mysqli_query($conn, $nv3);
				$upnhan4 = mysqli_query($conn, $nv4);
				$upnhan5 = mysqli_query($conn, $nv5);
				if($upnhan1 && $upnhan2 && $upnhan3 && $upnhan4 && $upnhan5){
					echo "<script>alert('Bạn đã cập nhật nhân viên thành công!!');
						window.location='thongtinnv.php';
						</script>";
                  //  header("location: thongtinnv.php");
				//	echo "Bạn đã cập nhật thành công.<a href='thongtin.php'>click</a> vào để xem";
				}else
				echo "<script>alert('Bạn đã cập nhật nhân viên thất bại !');
				window.location='thongtinnv.php';
				</script>";
                   // header("location: thongtinnv.php");
					//echo ".<a href='thongtinnv.php'>click</a> vào để quay về";
		//	}else
		//		echo "Thất bại.Do tồn tại.<a href='thongtin.php'>Click</a> vào để quay về";
		//}else
		//	echo "Thất bại. Do chưa điền đầy đủ thông tin.<a href='thongtin.php'>Click vào để quay về</a> ";
			
	}else
		echo "Hãy chọn nhân viên cần cập nhật.<a href='thongtinnv.php'>Click vào để quay về</a> ";
?>
</body>
</html>