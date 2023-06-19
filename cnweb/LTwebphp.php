<!doctype html>
<html lang="en">
  <head>
    <title>Hanoi Aptech- Trường Đào Tạo Lập Trình Viên Quốc Tế</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css/LTwebphp.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  </head>
  <body>
  <?php include('config/db.php')?>
<header class="">
      <nav class="navbar fixed-top navbar-expand-md navbar-light bg-white">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <img src="images/Aptech Logo.png" alt="Aptech Logo" class="img-responsive">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-6 ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">TRANG CHỦ</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  APTECH-HANOI
                </a>
                <ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
                  <?php
                      $sql = "SELECT * FROM danhmuc WHERE id_cha = 1";
                      $result = mysqli_query($conn,$sql);
                      if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <li><a class="dropdown-item text-uppercase fw-bold" href="baiviet.php?id=<?php echo $row['id']?>"><?php echo $row['TenDM']?></a></li>
                    <?php
                        }
                      }
                    ?>
                </ul>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  CHƯƠNG TRÌNH ĐÀO TẠO
                </a>
                <ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item fw-bold" href="LTVQuocte.php">LẬP TRÌNH VIÊN QUỐC TẾ</a></li>
                  <li><a class="dropdown-item fw-bold" href="LTwebphp.php">LẬP TRÌNH WEB VỚI PHP</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="baiviet.php?id=54">LIÊN THÔNG</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  TIN TỨC
                </a>
                <ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
                  <?php
                    $sql = "SELECT * FROM danhmuc WHERE id_cha = 3";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                      while($row = mysqli_fetch_assoc($result)){
                  ?>
                  <li><a class="dropdown-item text-uppercase fw-bold" href="tintuc.php?id=<?php echo $row['id']?>"><?php echo $row['TenDM']?></a></li>
                  <?php
                      }
                    }
                  ?>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  TUYỂN DỤNG
                </a>
                <ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
                  <?php
                      $sql = "SELECT * FROM danhmuc WHERE id_cha = 4";
                      $result = mysqli_query($conn,$sql);
                      if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <li><a class="dropdown-item text-uppercase fw-bold" href="tintuc.php?id=<?php echo $row['id']?>"><?php echo $row['TenDM']?></a></li>
                    <?php
                        }
                      }
                    ?>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <a class="text-decoration-none text-dark fw-bold" href="admin/login.php">Đăng nhập</a>
    </nav>
</header>

    <div class="background pt-5 ">
        <img src="images/anh3.png" alt=""class="img-responsive">
     </div>

    <div class="main">
        <div class=" main-1">
          <div class="container">
                <div class="box1_main-1">
                    <img src="images/anh6.jpg" alt="" class="img-responsive" >
                </div>
                <div class="box1_main-1">
                    <p>Khóa học có tên tiếng Anh là Information Technology Technician (viết tắt là ITT). 
                        Đây là chương trình đào tạo của Aptech, nội dung được chuyển ngữ sang Tiếng Việt.</p>
                    <p>Chương trình được xây dựng dựa trên các tri thức Công nghệ Thông tin mới nhất với sự khảo sát 
                        nhu cầu của trên 600 công ty phần mềm nổi tiếng và được cập nhật hàng năm cho phù hợp với sự 
                        phát triển của Công nghệ Thông tin nhằm cung cấp đội ngũ Kỹ Thuật Viên Công nghệ Thông Tin có 
                        chuyên môn tốt, có khả năng làm việc trong môi trường chuyên nghiệp và am hiểu công nghệ mới.</p>
                    <p>Chương trình cung cấp cho người học các kiến thức nền tảng về máy tính, lập trình, cơ sở dữ liệu,
                         thiết kế và xây dựng trang website bằng ngôn ngữ PHP.</p>
                    <p>Ngoài kiến thức chuyên môn, học viên còn được bổ sung các kiến thức để phát triển kỹ năng cá nhân,
                         kỹ năng làm việc nhóm và năng lực quản lý dự án.</p>
                </div>
            </div>
        </div>


          <div class="main-3">
            <div class="container">
            <h3 class="text-center pb-4 text-white">VỊ TRÍ CÔNG VIỆC SAU KHÓA HỌC</h3>
              <div class="row gx-4 mx-4 img1">
                <div class="col">
                  <div class="card">
                    <img src="images/anh7.png" class="card-img-top p-1" alt="...">
                    <div class="card-body">    
                        <p class="card-text text-center">Thiết kế & lập trình website hiện đại với nhiều ngôn ngữ lập trình</p>
                    </div>
                  </div>
                </div>
                
                <div class="col">
                  <div class="card">
                    <img src="images/anh8.jpg" class="card-img-top p-1" alt="...">
                    <div class="card-body">    
                        <p class="card-text text-center">Phân tích, thiết kế & lập trình cơ sở dữ liệu</p>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card">
                    <img src="images/anh9.png" class="card-img-top p-1" alt="...">
                    <div class="card-body">    
                        <p class="card-text text-center">Xây dựng, phát triển các tính năng mới đáp ứng nhu cầu người dùng</p>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card">
                    <img src="images/anh10.png" class="card-img-top p-1" alt="...">
                    <div class="card-body">    
                        <p class="card-text text-center">Quản lý và tăng hiệu suất hoạt động của website</p>
                    </div>
                  </div>
                </div>
              </div>
              <p class="box1_main-3 fw-bold text-center text-white">Chương trình học Kỹ thuật viên Quốc Tế được triển khai dựa trên mô hình đào tạo hiện đại, đa phương thức AMEDA 
                (Aptech Multi-modal Education Delivery Architecture) chú trọng nâng cao kỹ năng thực hành, định hướng, thực hiện các dự án cuối mỗi học kỳ.</p>
              <div class=" d-grid col-2 mx-auto">
                <button type="submit" class="btn fs-5 fw-bold text-white btn-outline-warning">ĐĂNG KÝ HỌC</button>
              </div>
            </div>
          </div>

          <div class=" main-4 container">
            <h2 class="text-center">ĐỐI TƯỢNG THAM GIA KHÓA HỌC</h2>
            <div class="box_main-4">
              <div class="box-1">
                <img src="images/picture1.jpeg" alt="Picture1" class="img-responsive" >
              </div>
              <div class="box-2">
                <h6 class="text-center">Sinh viên ngành CNTT hoặc yêu thích lập trình tại các trường đại học, cao đẳng.</h6>
              </div>
            </div>
    
            <div class="box_main-4">
              <div class="box-1">
                <img src="images/picture2.jpg" alt="Picture2" class="img-responsive" >
              </div>
              <div class="box-2">
                <h6 class="text-center">Làm việc tại các doanh nghiệp, muốn bổ sung kiến thức & kỹ năng phục vụ công việc.</h6>
              </div>
            </div>
    
            <div class="box_main-4">
              <div class="box-1">
                <img src="images/picture3.jpg" alt="Picture3" class="img-responsive" >
              </div>
              <div class="box-2">
                <h6 class="text-center">Chưa có kiến thức về lập trình cũng có thể tham gia khóa học.</h6>
              </div>
            </div>
          </div>
          
          <div class=" main-5">
            <div class="container">
              <div class="box1_main-5">
                <h4 class="text-center text-warning">KHÓA HỌC LẬP TRÌNH WEB VỚI PHP</h4>
                <h5 class="text-center text-white">LẬP TRÌNH CHẤT - THÀNH CÔNG THẬT</h5>

                <form method="POST">
                  <div class="mb-3">    
                    <input type="text" class="form-control" name="txtten" placeholder="Họ và Tên">  
                  </div>
                  <div class="mb-3"> 
                    <input type="text" class="form-control" name="txtSDT" placeholder="Số Điện Thoại">
                  </div>
                  <div class="mb-3"> 
                    <input type="email" class="form-control" name="txtemail" placeholder="Email">
                  </div>
                  <div class="mb-3"> 
                    <input type="text" class="form-control" name="txtdiachi" placeholder="Địa Chỉ">
                  </div>
                  <button type="submit" class="btn btn-success btn-outline-warning" name="btn_dk">ĐĂNG KÝ </button>
                </form>
              </div>
      
              <div class="box1_main-5">
                <p class="bi-bookmark text-white">  Thời lượng: 6 tháng</p>
                <p class="bi-bookmark text-white">  Khai giảng dự kiến: Tháng 9/2021</p>
                <p class="bi-bookmark text-white">  Có nhiều khung giờ phù hợp với mọi nhu cầu của học viên</p>
                <ul>
                  <p class="bi-clock text-white text">  Giờ buổi sáng: học từ 8h đến 12h</p>
                  <p class="bi-clock text-white text">  Giờ buổi chiều: học từ 13h30 đến 17h30</p>
                  <p class="bi-clock text-white text">  Giờ buổi tối: học từ 17h30 đến 19h30 hoặc từ 19h30 đến 21h30</p>
                </ul>
                <p class="bi-bookmark text-white">  Địa chỉ: Tầng 1, Tòa nhà C5, Đại học Thủy Lợi, 175 Tây Sơn, Trung Liệt, Đống Đa, Hà Nội</p>
                <p class="bi-bookmark text-white">  Đăng ký trực tuyến vào form dưới đây hoặc gọi điện đến hotline 0382.020.858 hoặc 0243.563.7511 để được tư vấn trực tiếp</p>
              </div>
            </div>
          </div>
          <div class=" main-6">
            <div class="container">
                  <h3 class="text-center">NỘI DUNG KHÓA HỌC</h3>
                  <div class="box1_main-6">
                      <img src="images/anh11.png" alt="" class="img-responsive" >
                  </div>
                  <div class="box1_main-6">
                      <p>1. HTML5, CSS, and Javascript</p>
                      <p>2. AngularJS (AngularJS 1.7.x & Angular 9)</p>
                      <p>3. Data Management with SQL Server 2019</p>
                      <p>4. Database Design and Development (Core)</p>
                      <p>5. Logic Building and Elementary Programming</p>
                      <p>6. PHP Development with Laravel Framework (PHP 7.3.0 & Laravel FW)</p>
                      <p>7. Thực hiện đồ án cuối kỳ</p>
                      <div class="accordion-item">
                        <p class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Học phí khóa học
                          </button>
                        </p>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <li>Học sinh: 13.600.000 VNĐ</li>
                            <li>Sinh viên: 12.750.000 VNĐ</li>
                            <li>Người đi làm: 17.000.000 VNĐ</li>
                          </div>
                        </div>
                      </div>
                  </div>
             </div>
          </div>
<?php include('footer.php')?>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>