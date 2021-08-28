<?php session_start(); 
 //<a href="trangchu.php">HOME</a>
if (isset($_SESSION['HoTenNV'])){
    unset($_SESSION['HoTenNV']); // xóa session login
}
	header("location: admin.php");
?>
