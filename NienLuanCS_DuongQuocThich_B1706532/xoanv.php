<?php
        $m = $_GET['item'];
        $conn = mysqli_connect("localhost", "root", "","quanlydulich");
        $sql = "DELETE FROM nhanvien WHERE Manv='".$m."'";
        if (mysqli_query($conn, $sql)) {
            echo"<script>
                alert('Bạn đã xóa nhân viên thành công!');
                window.location='thongtinnv.php';
            </script>";
            //echo "Bạn đã xóa thành công.<a href='thongtinnv.php'>click</a> vào để xem";
        } else {
            echo"<script>
                alert('Bạn đã xóa nhân viên thất bại!');
                window.location='thongtinnv.php';
            </script>";
           // echo "Bạn đã xóa thất bại.<a href='thongtinnv.php'>click</a> để thử lại";
        }
       
?>