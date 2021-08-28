<html>
<head>
	<meta charset="UTF-8">
	
</head>
<body>
<?php
	if(isset($_POST['capnhat1'])){
		//if($_POST['mt']!="" && $_POST['tt']!="" && $_POST['mn']!="" && $_POST['gia']!=""){
            $mat = $_POST['mt'];
            $tent = $_POST['tt'];
            $giat = $_POST['gia'];
            $ma = $_POST['man'];
			$conn = mysqli_connect("localhost", "root", "","quanlydulich");
			//$tou ="select * from tour where Matour='".$_POST['mt']."' and Tentour = '".$_POST['tt']."' ";
			//$kt =mysqli_query($conn, $tou);
			//$hanghoa = mysqli_num_rows($kt);
			//$kthh =mysqli_fetch_array($kt);
		//if($hanghoa < 2){
	
				$nv1 = "update tour set Tentour='".$_POST['tt']."' where Matour ='".$mat."'";
				$nv2= "update tour set Mamien ='".$_POST['man']."' where Matour ='".$mat."'";
				$nv3= "update tour set Giatour=".$giat." where Matour ='".$mat."'";
			
				$upnhan1 = mysqli_query($conn, $nv1);
				$upnhan2 = mysqli_query($conn, $nv2);
				$upnhan3 = mysqli_query($conn, $nv3);
				if($upnhan1 && $upnhan2 && $upnhan3){
					echo "<script>alert('Bạn đã cập nhật tour thành công !');
						window.location='thongtin.php';
						</script>";
                    //header("location: thongtin.php");
				//	echo "Bạn đã cập nhật thành công.<a href='thongtin.php'>click</a> vào để xem";
				}else
				echo "<script>alert('Bạn đã cập nhật tour thất bại !');
				window.location='thongtin.php';
				</script>";
					//header("location: thongtin.php");
					//echo "Thất bại.<a href='thongtin.php'>click</a> vào để quay về";
		//	}else
		//		echo "Thất bại.Do tồn tại.<a href='thongtin.php'>Click</a> vào để quay về";
		//}else
		//	echo "Thất bại. Do chưa điền đầy đủ thông tin.<a href='thongtin.php'>Click vào để quay về</a> ";
			
	}else
		echo "Hãy chọn tour cần cập nhật.<a href='thongtin.php'>Click vào để quay về</a> ";
?>
</body>
</html>