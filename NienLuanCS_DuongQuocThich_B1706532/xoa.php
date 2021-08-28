<?php
		$m = $_GET['item'];
		$conn = mysqli_connect("localhost", "root", "","quanlydulich");
        $sql = "DELETE FROM tour WHERE Matour='".$m."'";
        if (mysqli_query($conn, $sql)) {
            echo"<script>
                alert('Bạn đã xóa tour thành công!');
                window.location='thongtin.php';
            </script>";
           // echo "Bạn đã xóa thành công.<a href='thongtin.php'>click</a> vào để xem";
        } else {
            echo"<script>
            alert('Bạn đã xóa tour thất bại!');
            window.location='thongtin.php';
        </script>";
           // echo "Bạn đã xóa thất bại.<a href='thongtin.php'>click</a> để thử lại";
        }
       
?>