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
        <p class="new5">
        <nav class=" navbar-light bg-light new5">
          <form class="form-inline" action="timkiem.php" method="post">
            <input class="form-control mr-sm-2" style="width: 530px;" name= "search" type="search" placeholder="Bạn muốn đi đâu ?" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 bg-primary new6"  type="submit" name="btn_tk">Tìm kiếm</button>
          </form>
        </nav>
        </P >
      </div>
    </div>
  </div>
  <div class= "container-fluid new">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary " >
           <//img src="assets/img/marketing/logo1.PNG" class="img-fluid" style="width: 300px; height:50px;" />
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active new1">
                    <a class="nav-link" href="index.php">TRANG CHỦ<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item new1">
                    <a class="nav-link" href="#">GIỚi THIỆU</a>
                </li>
                <li class="nav-item new1">
                    <a class="nav-link" href="#">VI VU THẾ GIỚi</a>
                </li>
                <li class="nav-item new1 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      KHÁM PHÁ VIỆT NAM
                    </a>
                    <div class="dropdown-menu drop" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item " href="mienbac.php">Tour miền Bắc</a>
                      <a class="dropdown-item " href="mientrung.php">Tour miền Trung</a>
                      <a class="dropdown-item " href="miennam.php">Tour miền Nam</a>
                      
                    </div>
                  </li>

                <li class="nav-item new1">
                    <a class="nav-link" href="#">DỊCH VỤ</a>
                </li>

                <li class="nav-item new1">
                    <a class="nav-link" href="https://www.facebook.com/tc.thich/">LIÊN HỆ</a>
                </li>

                <li class="nav-item dropdown new2" style="width:120px;">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user" aria-hidden="true"></i>
                          <?php session_start(); ?>
                          <?php 
                            if (isset($_SESSION['HoTenKH']) && $_SESSION['HoTenKH']){
                              echo ''.$_SESSION['HoTenKH']."<br/>";
                            }
                            else{
                              echo 'Vui lòng đăng nhập?';
                            }
                            ?>
                    </a>
                    <div class="dropdown-menu drop " aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="dangnhap.html"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Đăng nhập</a>
                      <a class="dropdown-item" href="dangky.html"><i class="fa fa-address-card" aria-hidden="true"></i>&nbsp;Đăng ký</a>
                      
                      <a class="dropdown-item" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Đăng xuất</a>
                    </div>
                </li>
                
            </ul>

        </nav>
</div>

  
    <br />

  



    

    <div class="container">
        <div class="row">
            <div class="col-md-8">
              <?php
                  $m = $_GET['item'];
                  $conn =mysqli_connect("localhost","root","","quanlydulich") or die (mysqli_connect_error());

                  $sql= "select * from tour where Matour='".$m."'";
                  $result= mysqli_query($conn,$sql) or die(mysql_error());
              
                  while($row=mysqli_fetch_array($result)){

                      
                      
                      echo "<h5 class='card-title' style ='color:  #007bff; font-size: 30px; font-family: 'Times New Roman', Times, serif ;'> Giới thiệu về ".$row["Tentour"]."</h5>";
                      echo "<img src='".$row["Hinh"]."' style ='height: 380px; width: 720px;' class='card-img-top img-fluid ' alt='...'/>";
                      echo "<p>'".$row["MotaTour"]."'</p>";
                      
                  }

                      
                  
                  
              ?>
              <?php
                  $m = $_GET['item'];
                  $conn =mysqli_connect("localhost","root","","quanlydulich") or die (mysqli_connect_error());

                  $sql= "select * from hinhanh where Matour='".$m."'";
                  $result= mysqli_query($conn,$sql) or die(mysql_error());
              
                  while($row=mysqli_fetch_array($result)){

                      
                      
                     
                    echo "<img src='".$row["hinh"]."' style ='height: 250px; width: 350px;' class='card-img-top img-fluid ' alt='...'/>";
                    echo "<img src='".$row["hinh1"]."' style ='height: 250px; width: 350px;' class='card-img-top img-fluid ' alt='...'/>";
                    echo "<img src='".$row["hinh2"]."' style ='height: 250px; width: 350px;' class='card-img-top img-fluid ' alt='...'/>";
                    echo "<img src='".$row["hinh"]."' style ='height: 250px; width: 350px;' class='card-img-top img-fluid ' alt='...'/>";
                    echo "<p style='color:#007bff; font-style: italic; font-weight: bold;'>Một số địa điểm đẹp mà chúng ta có thể đến để tham quan !!</p>";
                  }
              ?>
           
            </div>
            
            <div class="col-md-4">
              <br/>
              <?php
                  $m = $_GET['item'];
                  $conn =mysqli_connect("localhost","root","","quanlydulich") or die (mysqli_connect_error());

                  $sql= "select * from tour where Matour='".$m."'";
                  $result= mysqli_query($conn,$sql) or die(mysql_error());
              
                  while($row=mysqli_fetch_array($result)){

                      echo "<div  class='card float-left' style='width: 360px;'>";
                        echo "<form method = 'POST' action='dattour.php' onsubmit='return thongbao()'  >";
                          
                          echo "<h3 style ='color:  #007bff;text-align: center; font-size: 25px; font-family: 'Times New Roman', Times, serif ;' >ĐĂNG KÝ DU LỊCH</h3>";
                          echo "<img src='".$row["Hinh"]."' style ='height: 280px;text-align: center; width: 360px;' class='card-img-top img-fluid img-thumbnail' alt='...'/>";
                          echo "<div class='card-body'>";
                                echo "<h5 class='card-title'>".$row["Tentour"]."</h5>";
                                echo "<h6 class='card-text'>Giá: ".number_format($row["Giatour"])." VND</h6>";
                                echo "<h6 class='card-text' style='display: none;'>Mã tour: <input type = 'text' name='matour' value='".$m."'/></h6>";
                                echo "<input class='form-control' type='text' required placeholder='Địa chỉ' name='kh_diachi'/>"; echo"<br/>";
                                echo "<input class='form-control' type='number' min ='0' max='20'step='1' required placeholder='Số lượng người lớn' name='sl_nl'/>";echo"<br/>";
                                echo "<input class='form-control' type='number' min ='0' max='20'step='1' required placeholder='Số lượng trẻ em' name='sl_te'/>";
                                echo"<td>Ngày đi</td>";
                                echo "<input class='form-control' type='date' required placeholder='Ngày đi' name='ngaydi'/>";
                                echo"<td>Ngày về</td>";
                                echo "<input class='form-control' type='date' required placeholder='Ngày về' name='ngayve'/>";echo"<br/>";
                                echo "<input class='form-control' type='tel' required placeholder='Số điện thoại' name='sdt'/>";echo"<br/>";
                                
                                echo "<p style='text-align: center;'><input type ='submit' style='text-align: center;' name= 'mua' value ='ĐẶT TOUR'class='btn btn-primary timkiem'/></p>";
                          echo "</div>";
                         
                         
                        echo "</form>";
                      echo "</div>";
                      
                  }

                    
                
                
            ?>
            </div>
        </div>
    </div><br/>

    <script>
    function thongbao(){
     // alert("Bạn đã đặt tour thành công !!");
    }


    </script>
    




    

    <h2 style="color:rgb(75, 163, 235);text-align:center;">BLOG-THÔNG TIN DU LỊCH</h2></br>
    <div class="container-fluid" style="width:80%;">
      <div class="row">
        <div class="col-md-3">
          <div class="" style="width: 18rem;">
            <img  src="assets/img/product/phuquoc.jpg"class="card-img-top rounded-circle img-fluid" style="width:250px;height:250px"alt="Card image cap">
            <div class="card-body">
            <a href="https://zingnews.vn/top-10-dia-diem-du-lich-hap-dan-nhat-viet-nam-post444953.html"target="_blank" class="card-text">TOP NHỮNG ĐIỂM DU LỊCH TUYỆT VỜI</a>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="" style="width: 18rem;">
            <img class="card-img-top rounded-circle img-fluid" src="assets/img/product/danh1.jpg"style="width:250px;height:250px" alt="Card image cap">
            <div class="card-body">
            <a href="https://www.youtube.com/watch?v=V_8XElPZa7o"target="_blank" class="card-text">CHÙM CA KHÚC NGHE LÀ MUỐN ĐI</a>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="" style="width: 18rem;">
            <img class="card-img-top rounded-circle img-fluid" src="assets/img/product/di.jpg"style="width:250px;height:250px" alt="Card image cap">
            <div class="card-body">
              <a  href="https://www.tudiendanhngon.vn/danhngon/ds/strcats/970/sw/d" target="_blank" class="card-text">DANH NGÔN DU LỊCH TRUYỀN CẢM HỨNG</a>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="" style="width: 18rem;">
            <img class="card-img-top rounded-circle img-fluid" src="assets/img/product/sach1.jpg"style="width:250px;height:250px" alt="Card image cap">
            <div class="card-body">
            <a href="https://vnwriter.net/top-10/sach-hay-ve-du-lich.html"target="_blank" class="card-text">TOP NHỮNG QUYỂN SÁCH HAY VỀ DU LỊCH</a>
              
            </div>
          </div>
        </div>

      </div>
    </div>
    

            
           
    






    
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