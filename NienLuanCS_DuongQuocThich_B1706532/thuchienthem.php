<?php

//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đặt hàng
if (isset($_POST['them'])) 
{
    //Kết nối tới database
	$conn =mysqli_connect("localhost","root","","quanlydulich") ;//or die (mysqli_connect_error());
	
	$ma = $_POST['matou'];
	$ten = $_POST['tentou'];
	$gia = $_POST['giatou'];
	$manv = $_POST['manv'];
	$man = $_POST['man'];
    $hinh = $_FILES['file']['name'];
    $hinh1 = "assets/img/product/".$hinh;
    $hinh2 = $_FILES['file']['tmp_name'];
    $mota = $_POST['mota'];
	move_uploaded_file($hinh2,$hinh1);
		$add1 =  "INSERT into tour(Matour,Tentour,Giatour,Manv,Mamien,Hinh,MotaTour)
					VALUES('".$ma."','".$ten."','".$gia."','".$manv."','".$man."','".$hinh1."','".$mota."')";
		$result1 = mysqli_query($conn,$add1) or die(mysqli_error());

	
	
	
			
    //Thông báo quá trình lưu
    if ($result1 ){
		 header("location: admin.php");
		 echo "Bạn đã đặt tour thành công !!";
	}else
        echo "Có lỗi xảy ra trong quá trình đặt hàng. <a href='mua.php'>Thử lại</a>";
}
?>