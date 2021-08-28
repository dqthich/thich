<?php
session_start();
	if(!isset($_SESSION['HoTenNV'])){
		header("Location: dangnhapnv.html");

    }
?>    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <!-- Font awesome -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css" type="text/css">
    <!-- Custom css - Các file css do chúng ta tự viết -->
    <link rel="stylesheet" href="assets/css/app.css" type="text/css">
    <style>
      
    </style>
</head>

<body>
  <div class= "container-fluid new">
    <div class="row">
      <div class="col-md-5 logo">
      <img src="assets/img/marketing/logo4.PNG"  class="img-fluid" style="width: 170px;height: 170px;" />

      </div>
      <div class="col-md-7">
        <p class="new3">
        
        <i class="fa fa-volume-control-phone " style="color:  #007bff; font-size:20px;"aria-hidden="true"></i> <span style="color:#007bff ">Hotline:</span> <a href="#" style="color: black;">(024) 72 699 9966</a>
        </p><br/>
        <p  class="new4">
        <marquee scrollamount = "8"; direction ="left">
        Số 52 333N/6 Tổ 6 khu vực 5 đường Nguyễn Văn Linh phường An Khánh quận Ninh Kiều thành phố Cần Thơ  </marquee> 
        </p>
        
      </div>
    </div>
  </div>
  <div class= "container-fluid new">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark " >
           <//img src="assets/img/marketing/logo1.PNG" class="img-fluid" style="width: 300px; height:50px;" />
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active new1">
                    <a class="nav-link" href="admin.php">ADMIN<span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item dropdown new5 ">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Quản lý tour
                  </a>
                  <div class="dropdown-menu drop">
                    <a class="dropdown-item" href="thongtin.php">Thông tin tour</a>
                    <a class="dropdown-item" href="hanghoa.php">Thêm tour mới</a>
                    
                  </div>
                </li>

                <li class="nav-item dropdown new1 ">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Quản lý nhân viên
                  </a>
                  <div class="dropdown-menu drop">
                    <a class="dropdown-item" href="thongtinnv.php">Thông tin nhân viên</a>
                    
                    
                  </div>
                </li>
                <li class="nav-item new1">
                    <a class="nav-link" href="xacnhan.php">Xác nhận tour</a>
                </li>

                <li class="nav-item dropdown new2" style="width:120px;">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user" aria-hidden="true"></i> 
                         
                          <?php 
                            if (isset($_SESSION['HoTenNV']) && $_SESSION['HoTenNV']){
                              echo ''.$_SESSION['HoTenNV']."<br/>";
                            }
                            else{
                              echo 'Vui lòng đăng nhập?';
                            }
                            ?>
                    </a>
                    <div class="dropdown-menu drop " aria-labelledby="navbarDropdown">
                      
                      <a class="dropdown-item" href="dangxuatnv.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Đăng xuất</a>
                    </div>
                </li>
                
               
                
            </ul>

        </nav>
</div>

  
    <br />


    

   
    
            
<div class="container">
<h2 style="color:rgb(75, 163, 235);text-align:center;">THÊM TOUR MỚI</h2>
<div class="row">

    
 
  
        <?php
    
                $conn =mysqli_connect("localhost","root","","quanlydulich") or die (mysqli_connect_error());           
                    
                  $sql= "select * from nhanvien";
                  $sql1= "select * from mien";
                  $result= mysqli_query($conn,$sql) or die(mysql_error());
                  $result1= mysqli_query($conn,$sql1) or die(mysql_error());

                 // $KH = mysqli_fetch_array(mysqli_query($conn, $sql));

                  /* while( $row1=mysqli_fetch_array($result) ){
                  //  $row2=mysqli_fetch_array($result1);

                    $manv = $row1['Manv'];
                    $hoten = $row1['HoTenNV'];
                    $ma = ''.$manv.''.$hoten.'';
                   }*/
                    echo "<div  class='card float-left' style='width: 1150px;'>";
                      echo "<form method = 'POST' action='thuchienthem.php' onsubmit='return thongbao()' enctype='multipart/form-data' >";
                        
                        echo "<h3 style ='color:  #007bff;text-align: center; font-size: 25px; font-family: 'Times New Roman', Times, serif ;' >NHẬP THÔNG TIN TOUR</h3>";
                        echo "<div class='card-body'>";

                              echo "<input class='form-control' type='text' required placeholder='Mã tour' name='matou'/>"; echo"<br/>";
                              echo "<input class='form-control' type='text' required placeholder='Tên tour' name='tentou'/>"; echo"<br/>";
                              echo "<input class='form-control' type='text' required placeholder='Giá tour' name='giatou'/>";echo"<br/>";
                              echo "<h5>Nhân viên </h5>";
                              echo "<select  class='form-control' name='manv'>";
                                    
                              while( $row1=mysqli_fetch_array($result) ){
                                $manv = $row1['Manv'];
                                $hoten = $row1['HoTenNV'];
                                $ma = ''.$manv.'  '.$hoten.'';
                                echo "<lable><option value='".$manv."'>".$ma."</option></lable>";
                              }
                          echo "</select>";echo"<br/>";


                           /*   while( $row1=mysqli_fetch_array($result) ){
              
                                  $manv = $row1['Manv'];
                                  $hoten = $row1['HoTenNV'];
                                  $ma = ''.$manv.'  '.$hoten.'';
                                 
                                echo"<lable><input  type='radio' name='manv' id='manv1' value='".$manv."' />".$ma." </lable><br/>";
                              }*/



                              
                            //  echo "<h5 class='form-control'>Mã miền </h5>";
                           /*   while( $row2=mysqli_fetch_array($result1) ){
              
                                  $man = $row2['Mamien'];
                                  $ten = $row2['Tenmien'];
                                  $ma1 = ''.$man.'  '.$ten.'';
                                 
                                echo"<lable><input  type='radio' name='man' id='manv1' value='".$man."' />".$ma1." </lable><br/>";
                              }*/

                              
                              echo "<h5>Miền </h5>";
                              
                             
                                echo "<select  class='form-control' name='man'>";
                                    
                                    while( $row2=mysqli_fetch_array($result1) ){
                                      $man = $row2['Mamien'];
                                      $ten = $row2['Tenmien'];
                                      $ma1 = ''.$man.'  '.$ten.'';
                                      echo "<lable><option value='".$man."'>".$ten."</option></lable>";
                                    }
                                echo "</select>";echo"<br/>";
                              

                              echo "<h5>Chọn hình </h5>";
                              echo "<input type='file' required placeholder='Hình' name='file'/>"; echo"<br/>";echo"<br/>";
                              echo "<h5>Mô tả tour <textarea class='form-control' rows='15' cols='50' name='mota'></textarea></h5>";echo"<br/>";
                            
                             // <input type="file" name="fileUpload" value="">

                              
                              echo "<p style='text-align: center;'><input type ='submit' style='text-align: center;' name= 'them' value ='Thêm tour'class='btn btn-primary timkiem'/></p>";
                        echo "</div>";
                       
                       
                      echo "</form>";
                    echo "</div>";
                  

		?>
  </div>
  
</div>

<br/>






<script>
      function thongbao(){
        alert("Bạn đã thêm tour tour thành công !!");
      }
  
  
    </script>

    

   
    

            
           
    






    
    <!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

<div style="background-color: #6351ce;">
  <div class="container">

    <!-- Grid row-->
    <div class="row py-4 d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
        <h6 class="mb-0" style="color: white; font-family: Time New Roman; font-size: 20px; text-shadow: 20%;">Hãy liên hệ với chúng tôi </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-6 col-lg-7 text-center text-md-right lienhe">

        <!-- Facebook -->
        <a href="#"class="fb-ic">
        <i class="fa fa-facebook-square" aria-hidden="true"></i>
        </a>&nbsp;
        <!-- Twitter -->
        <a href="#" class="tw-ic">
        <i class="fa fa-twitter-square" aria-hidden="true"></i>
        </a>&nbsp;
        <!-- Google +-->
        <a href="#" class="gplus-ic">
        <i class="fa fa-google-plus" aria-hidden="true"></i>
        </a>&nbsp;
        <!--Linkedin -->
        <a  href="#" class="li-ic">
        <i class="fa fa-linkedin" aria-hidden="true"></i>
        </a>&nbsp;
        <!--Instagram-->
        <a  href="#" class="ins-ic">
        <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
</div>

<!-- Footer Links -->
<div class="container text-center text-md-left mt-5">

  <!-- Grid row -->
  <div class="row mt-3">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

      <!-- Content -->
      <h6 class="text-uppercase font-weight-bold">WEBTRAVEL-GIẢI PHÁP BÁN TOUR DỄ DÀNG</h6>
                <p class="footer">
                    <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Nguyễn Văn Linh-An Khánh-Ninh Kiều-Cần Thơ</a><br />
                    <a href="#"><i class="fa fa-phone-square" aria-hidden="true"> </i>&nbsp;Liên hê: 0855663797</a><br />
                    <a href="#"><i class="fa fa-envelope" aria-hidden="true"> </i>&nbsp;quocthich12345@gmail.com</a><br />
                    
                </p>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">VỀ CHÚNG TÔI</h6>
    
                    <p  class="footer">
                        <a href="#">Đối tác đồng hành</a><br />
                        <a href="#">Phong cách QT TRAVEL</a><br />
                        <a href="#">Blog</a><br />
                        <a href="#">Tuyển dụng</a><br />
                        <a href="#">Chính sách bảo mật</a><br />
                        <a href="#">Bảo hiểm du lịch</a>


                    </p>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">GÓC KHÁCH HÀNG</h6>
      <p  class="footer">
        <a href="#">Chính sách đặt tour</a> <br />
        <a href="#">Chính sách bảo mật</a><br />
        <a href="#">Ý kiến khách hàng</a><br />
        <a href="#">Phiếu góp ý</a>

        </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">THANH TOÁN</h6>
      <p  class="footer">
      <a href="#"><i class="fa fa-cc-visa" aria-hidden="true"></i> Thẻ visa</a><br/>
      
      <a href="#"><i class="fa fa-cc-jcb" aria-hidden="true"></i> Thẻ jcb</a><br/>
      
      <a href="#"><i class="fa fa-cc-mastercard" aria-hidden="true"></i> Master card</a><br/>
      
      <a href="#"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Credit card</a><br/>
      <a href="#"><i class="fa fa-money" aria-hidden="true"></i> Thanh toán tiền mặt</a>
    </p>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->

<!-- Copyright -->

</footer>
<!-- Footer -->


 <!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

<!-- Footer Elements -->
<div class="container-liquid" >

  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-lg-2 col-md-12 mb-4">

      <!--Image-->
      <div class="view overlay z-depth-1-half">
        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="img-fluid"
          alt="">
        <a href="">
          <div class="mask rgba-white-light"></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-2 col-md-6 mb-4">

      <!--Image-->
      <div class="view overlay z-depth-1-half">
        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(78).jpg" class="img-fluid"
          alt="">
        <a href="">
          <div class="mask rgba-white-light"></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-2 col-md-6 mb-4">

      <!--Image-->
      <div class="view overlay z-depth-1-half">
        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(79).jpg" class="img-fluid"
          alt="">
        <a href="">
          <div class="mask rgba-white-light"></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-2 col-md-12 mb-4">

      <!--Image-->
      <div class="view overlay z-depth-1-half">
        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(81).jpg" class="img-fluid"
          alt="">
        <a href="">
          <div class="mask rgba-white-light"></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-2 col-md-6 mb-4">

      <!--Image-->
      <div class="view overlay z-depth-1-half">
        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(82).jpg" class="img-fluid"
          alt="">
        <a href="">
          <div class="mask rgba-white-light"></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-2 col-md-6 mb-4">

      <!--Image-->
      <div class="view overlay z-depth-1-half">
        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(84).jpg" class="img-fluid"
          alt="">
        <a href="">
          <div class="mask rgba-white-light"></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->

</div>
<!-- Footer Elements -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://mdbootstrap.com/"> QTTravel.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->









    <!-- Liên kết Jquery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Liên kết PopperJS -->
    <script src="vendor/popperjs/popper.min.js"></script>
    <!-- Liên kết Bootstrap -->
    <script src="vendor/bootstrap/js/bootstrap.js"></script>
    <!-- Custom script - Các file js do mình tự viết -->
    <script src="assets/js/app.js"></script>


</body>

</html>