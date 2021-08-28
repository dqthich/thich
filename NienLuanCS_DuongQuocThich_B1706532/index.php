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
                      
                      <a class="dropdown-item" href="dangxuat.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Đăng xuất</a>
                    </div>
                </li>
                
            </ul>

        </nav>
</div>

  
    <div class="container-fluid">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/slider/banner1.jpg" class="d-block w-100 img_home img-fluid"
                        style="height:600px">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: yellow;">ĐẾN VỚI QT TRAVEL</h1>
                        <p style="font-size: 20px;">Để chúng tôi dẫn lối bạn khám phá những nơi tuyệt vời nhất</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slider/banner2.jpg" class="d-block w-100 img_home img-fluid"
                        style="height:600px">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="color:yellow">ĐẾN VỚI QT TRAVEL</h1>
                        <p style="font-size: 20px;">Để chúng tôi dẫn lối bạn khám phá những nơi tuyệt vời nhất</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slider/banner3.jpg" class="d-block w-100 img_home img-fluid"
                        style="height:600px">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="color:yellow">ĐẾN VỚI QT TRAVEL</h1>
                        <p style="font-size: 20px;">Để chúng tôi dẫn lối bạn khám phá những nơi tuyệt vời nhất</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    <div class=container>
        <div class="row icon mt-2">
            <div class="col-md-4">
                <img src="assets/img/icon/icon1.png" class="img-fluid img-thumbnail" style="width:80px;height: 70px;" />
                <h3 style="color:rgb(75, 163, 235)">TẬN TÂM VỚI KHÁCH HÀNG</h3>
                Chúng tôi luôn tâm niệm phải tận tâm chăm sóc khách hàng từ những việc nhỏ nhất.
            </div>
            <div class="col-md-4">
                <img src="assets/img/icon/icon2.png" class="img-fluid img-thumbnail" style="width:80px;height: 70px;" />
                <h3 style="color:rgb(75, 163, 235)">ĐẢM BẢO MỨC GIÁ TỐT NHẤT</h3>
                Giá tour và dịch vụ cung cấp đến quý khách luôn là mức giá ưu đãi hấp dẫn nhất.
            </div>
            <div class="col-md-4">
                <img src="assets/img/icon/icon3.png" class="img-fluid img-thumbnail" style="width:70px;height: 70px;" />
                <h3 style="color:rgb(75, 163, 235)">HỖ TRỢ TẬN TÌNH KHÁCH HÀNG 24/7</h3>
                Chúng tôi luôn sẵn sàng phục vụ quý khách trước, sau và trong chuyến đi.
            </div>
        </div>
    </div><br />
    <div class="container">
        <img src="assets/img/slider/visa-newzealand-online.jpg" class="img-fluid"
            style=" text-align: center; width:1200px; height:600px;" />
    </div><br />
    <br />
    <h2 style="color:rgb(75, 163, 235);text-align:center;">CÁC TOUR KHUYẾN MÃi</h2>
    <div class=container-fluid style="text-align:center;width:81%;height:400px;">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <?php
	                $conn =mysqli_connect("localhost","root","","quanlydulich") or die (mysqli_connect_error());

	                 $sql= "select * from tour where Mamien='m3'";
	                $result= mysqli_query($conn,$sql) or die(mysql_error());
                    $i=1;
                    while($row=mysqli_fetch_array($result)){
                       if($i > 4) break;
                        echo "<div class='card float-left' style='width: 300px;' >";
                        
                            echo "<img src='".$row["Hinh"]."' style ='height: 200px; width: 300px;' class='card-img-top img-fluid img-thumbnail' alt='...'/>";
                            echo "<div class='card-body'>";
                                echo "<h5 class='card-title'>".$row["Tentour"]."</h5>";
                                echo "<strike>1.500.000 VND</strike>";
                                echo "<h6 class='card-text'>Giá: ".number_format($row["Giatour"])." VND</h6>";
                                echo "<a href='chitiet.php?item=$row[Matour]' class='btn btn-primary timkiem' >Xem chi tiết</a>";
                            echo "</div>";
                        
                        echo "</div>";
                        $i++;
                    }
                    
                ?>
    </div>
    <div class="carousel-item">
    <?php
	                $conn =mysqli_connect("localhost","root","","quanlydulich") or die (mysqli_connect_error());

	                 $sql= "select * from tour where Mamien='m2'";
	                $result= mysqli_query($conn,$sql) or die(mysql_error());
                    $i=1;
                    while($row=mysqli_fetch_array($result)){
                       if($i > 4) break;
                        echo "<div class='card float-left' style='width: 300px;' >";
                        
                            echo "<img src='".$row["Hinh"]."' style ='height: 200px; width: 300px;' class='card-img-top img-fluid img-thumbnail' alt='...'/>";
                            echo "<div class='card-body'>";
                                echo "<h5 class='card-title'>".$row["Tentour"]."</h5>";
                                echo "<strike>1.400.000 VND</strike>";
                                echo "<h6 class='card-text'>Giá: ".number_format($row["Giatour"])." VND</h6>";
                                echo "<a href='chitiet.php?item=$row[Matour]' class='btn btn-primary timkiem' >Xem chi tiết</a>";
                            echo "</div>";
                        
                        echo "</div>";
                        $i++;
                    }
                    
                ?>
    </div>
    <div class="carousel-item">
    <?php
	                $conn =mysqli_connect("localhost","root","","quanlydulich") or die (mysqli_connect_error());

	                 $sql= "select * from tour where Mamien='m1'";
	                $result= mysqli_query($conn,$sql) or die(mysql_error());
                    $i=1;
                    while($row=mysqli_fetch_array($result)){
                        if($i > 4) break;
                        echo "<div class='card float-left' style='width: 300px;' >";
                        
                            echo "<img src='".$row["Hinh"]."' style ='height: 200px; width: 300px;' class='card-img-top img-fluid img-thumbnail' alt='...'/>";
                            echo "<div class='card-body'>";
                                echo "<h5 class='card-title'>".$row["Tentour"]."</h5>";
                                echo "<strike>1.350.000 VND</strike>";
                                echo "<h6 class='card-text'>Giá: ".number_format($row["Giatour"])." VND</h6>";
                                echo "<a href='chitiet.php?item=$row[Matour]' class='btn btn-primary timkiem' >Xem chi tiết</a>";
                            echo "</div>";
                        
                        echo "</div>";
                        $i++;
                    }
                    
                ?>
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    

            
           
    </div>

    <div class="container">
        <div class="row">
            <div class="col-7">
                <h3 style="color:rgb(75, 163, 235)">CHÀO MỪNG QUÝ KHÁCH ĐẾN VỚI QT TRAVEL</h3>
                Trong xu thế hội nhập Quốc tế, du khách được thư giãn, nghỉ ngơi, tìm hiểu và khám phá những điều mới lạ
                để trau dồi thêm tri thức, để cuộc sống thêm phong phú và để quay lại say mê với công việc hơn đang ngày
                càng trở thành nhu cầu thiết yếu.<br /><br />

                Với đội ngũ nhân viên trẻ tuổi, sáng tạo, sự “tận tâm”, yêu nghề và tôn trọng quyền lợi của khách hàng
                chính là kim chỉ nam cho mọi hành động của chúng tôi với khao khát đưa thương hiệu QT TRAVEL đến gần hơn
                với Quý khách hàng trong nước và quốc tế.<br /><br />

                Slogan “Singing in Vietnam, Singing around the world” - chúng tôi hy vọng mỗi chuyến đi của Quý khách
                với QT TRAVEL đều là những bản nhạc hay, những kỷ niệm đẹp khó quên.
                ​
            </div>
            <div class="col-5">
                <iframe width="445" height="280" src="https://www.youtube.com/embed/V-1Hd6NowTw" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>


    </div><br /><br />
    <h2 style="color:rgb(75, 163, 235);text-align:center;">NÀO MÌNH CÙNG KHÁM PHÁ</h2>
    <p class="mien">
        <a href="mienbac.php">Tour Miền Bắc</a>&nbsp;&nbsp;&nbsp;<a href="mientrung.php">Tour Miền Trung</a>&nbsp;&nbsp;&nbsp;<a href="miennam.php">Tour Miền Nam</a>
    <p>
    <div class="container "style="text-align:center;">
        <div class="row">
            <div class="col-12-md">
                <?php
	                $conn =mysqli_connect("localhost","root","","quanlydulich") or die (mysqli_connect_error());

	                 $sql= "select * from tour where Mamien='m1'";
	                $result= mysqli_query($conn,$sql) or die(mysql_error());
                    $i=1;
                    while($row=mysqli_fetch_array($result)){
                        if($i > 3) break;
                        
                        echo "<div class='card float-left' style='width: 380px;' >";
                        
                            echo "<img src='".$row["Hinh"]."' style ='height: 280px; width: 380px;' class='card-img-top img-fluid img-thumbnail' alt='...'/>";
                            echo "<div class='card-body'>";
                                echo "<h5 class='card-title'>".$row["Tentour"]."</h5>";
                                echo "<h6 class='card-text'>Giá: ".number_format($row["Giatour"])." VND</h6>";
                                echo "<a href='chitiet.php?item=$row[Matour]' class='btn btn-primary timkiem' >Xem chi tiết</a>";
                            echo "</div>";
                        
                        echo "</div>";
                       
                        $i++;
                    }
                    
                ?>
                
            </div>
        </div>
    </div>

    <div class="container"style="text-align:center;">
        <div class="row">
            <div class="col-12-md">
                <?php
	                $conn =mysqli_connect("localhost","root","","quanlydulich") or die (mysqli_connect_error());

	                 $sql= "select * from tour where Mamien='m2'";
	                $result= mysqli_query($conn,$sql) or die(mysql_error());
                    $i=1;
                    while($row=mysqli_fetch_array($result)){
                        if($i > 3) break;
                        echo "<div class='card float-left' style='width: 380px;' >";
                        
                            echo "<img src='".$row["Hinh"]."' style ='height: 280px; width: 380px;' class='card-img-top img-fluid img-thumbnail' alt='...'/>";
                            echo "<div class='card-body'>";
                                echo "<h5 class='card-title'>".$row["Tentour"]."</h5>";
                                echo "<h6 class='card-text'>Giá: ".number_format($row["Giatour"])." VND</h6>";
                                echo "<a href='chitiet.php?item=$row[Matour]' class='btn btn-primary timkiem' >Xem chi tiết</a>";
                            echo "</div>";
                       
                        echo "</div>";
                        $i++;
                    }
                    
                ?>
                
            </div>
        </div>
    </div>
    <div class="container"style="text-align:center;">
        <div class="row">
            <div class="col-12-md">
                <?php
	                $conn =mysqli_connect("localhost","root","","quanlydulich") or die (mysqli_connect_error());

	                 $sql= "select * from tour where Mamien='m3'";
	                $result= mysqli_query($conn,$sql) or die(mysql_error());
                    $i=1;
                    while($row=mysqli_fetch_array($result)){
                        if($i > 3) break;
                        echo "<div class='card float-left' style='width: 380px;' >";
                        
                            echo "<img src='".$row["Hinh"]."' style ='height: 280px; width: 380px;' class='card-img-top img-fluid img-thumbnail' alt='...'/>";
                            echo "<div class='card-body'>";
                                echo "<h5 class='card-title'>".$row["Tentour"]."</h5>";
                                echo "<h6 class='card-text'>Giá: ".number_format($row["Giatour"])." VND</h6>";
                                echo "<a href='chitiet.php?item=$row[Matour]' class='btn btn-primary timkiem' >Xem chi tiết</a>";
                            echo "</div>";
                        
                        echo "</div>";
                        $i++;
                    }
                    
                ?>
                
            </div>
        </div>
    </div>
    <br/><br/>

    

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