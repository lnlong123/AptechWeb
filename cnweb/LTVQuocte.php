<!doctype html>
<html lang="en">
  <head>
    <title>Hanoi Aptech- Trường Đào Tạo Lập Trình Viên Quốc Tế</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/LTVQuocte.css">
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

    <div class="background">
       <img src="images/anh1.png" alt=""class="img-responsive">
    </div>

    <div class="main">
      <div class=" main-1">
        <div class="container">
          <h3 class="box2_main-1">GIỚI THIỆU KHÓA HỌC</h3>
          <div class="box1_main-1">
            <ul>
              <li>
                <p>ADSE (Advanced Diploma in Software Engineering) là chương trình đào tạo tay nghề toàn diện, chuẩn bị người học sẵn sàng cho thị trường IT hôm nay.</p>
              </li>
              <li>
                <p>Khóa học xây dựng nền tảng vững chắc cho người học về toàn bộ các khái niệm liên quan đến phát triển phần mềm và các thông tin chuyên sâu về công nghệ toàn cầu.</p>
              </li>
              <li>
                <p>Khóa học đào tạo về Responsive website development, Database management, Application programming, Mobile & Cloud Computing và nhiều nội dung nữa.</p>
              </li>
              <li>
                <p>Người học sẽ được thực hành trực tiếp trong các đồ án trải dài trong chương trình học.</p>
              </li>
              <li>
                <p>Aptech là đối tác uy tín của NCC Education, Anh quốc, cấp bằng Diploma (L5DC) cho phép học viên học tiếp lên chương trình Cử Nhân tại các đại học đối tác tại Anh, Úc và Ireland.</p>
              </li>
            </ul>
          </div>
  
          <div class="box1_main-1">
            <img src="images/anh4.jpg" alt="" class="img-responsive" >
          </div>
        </div>
      </div>

      <div class=" main-2">
        <div class="container">
          <div class="box1_main-2">
            <h4 class="text-center text-white">TIẾP SỨC TÀI NĂNG - VƯỢT QUA COVID</h4>
            <h3 class="text-center text-white">_____________</h3>
            <p class="text-center text-white">Đăng ký nhận tư vấn chi tiết về chương trình ưu đãi!</p>
            <h2 class="text-center text-white">HỌC BỔNG 20.000.000 VNĐ</h2>
            
            <form method="POST">
              <div class="mb-3">    
                <input type="text" class="form-control" placeholder="Họ và Tên" name="txtten" required>  
              </div>
              <div class="mb-3"> 
                <input type="text" class="form-control" placeholder="Số Điện Thoại" name="txtSDT" required>
              </div>
              <div class="mb-3"> 
                <input type="email" class="form-control" placeholder="Email" name="txtemail" required>
              </div>
              <div class="mb-3"> 
                <input type="text" class="form-control" placeholder="Địa Chỉ" name="txtdiachi" required>
              </div>
              <button type="submit" class="btn btn-success btn-outline-warning" name="btn_dk">ĐĂNG KÝ TƯ VẤN</button>
            </form>
          </div>
  
          <div class="box1_main-2">
            <img src="images/anh5.png" alt="" class="img-responsive" >
          </div>
        </div>
      </div>

      <div class=" main-3 container">
        <h2 class="text-center">ĐỐI TƯỢNG THAM GIA KHÓA HỌC</h2>
        <h5 class="text-center text-warning"> ___________________________</h5>
        
        <div class="box_main-3">
          <div class="box-1">
            <img src="images/picture1.jpeg" alt="Picture1" class="img-responsive" >
          </div>
          <div class="box-2">
            <h6 class="text-center">Học sinh tốt nghiệp THPT, có đam mê công nghệ & yêu thích lập trình.</h6>
          </div>
        </div>

        <div class="box_main-3">
          <div class="box-1">
            <img src="images/picture2.jpg" alt="Picture2" class="img-responsive" >
          </div>
          <div class="box-2">
            <h6 class="text-center">Sinh viên các trường Đại học hoặc Cao đẳng ở nhiều ngành nghề.</h6>
          </div>
        </div>

        <div class="box_main-3">
          <div class="box-1">
            <img src="images/picture3.jpg" alt="Picture3" class="img-responsive" >
          </div>
          <div class="box-2">
            <h6 class="text-center">Người đang làm việc trong lĩnh vực CNTT có nhu cầu cập nhật công nghệ.</h6>
          </div>
        </div>
      </div>

      <div class="main-4">
        <div class="container">
          <p class=" fs-2 text-center text-white">LỢI ÍCH CỦA KHÓA HỌC</p>
          <div class="box1_main-4">
            <div class="box2_main-4-img">
              <img src="images/icon-medal.png" alt="icon-medal" class="img-responsive">
            </div>
            <div class="box2_main-4-desc text-white">
              <p class="fs-5">BẰNG LẬP TRÌNH QUỐC TẾ</p>
              <p>Nhận bằng Lập trình viên Quốc tế chuẩn Aptech Ấn Độ có giá trị trên 40 quốc gia.</p>
            </div>
          </div>
          <div class="box1_main-4">
            <div class="box2_main-4-img">
              <img src="images/icon-diploma.png" alt="icon-diploma" class="img-responsive">
            </div>
            <div class="box2_main-4-desc text-white">
              <p class="fs-5">HỖ TRỢ KIẾN THỨC</p>
              <p>Học viên được tham gia dự thính học bù, ôn tập tại các lớp hoàn toàn miễn phí.</p>
            </div>
          </div>
          <div class="box1_main-4">
            <div class="box2_main-4-img">
              <img src="images/icon-educate.png" alt="icon-educate" class="img-responsive">
            </div>
            <div class="box2_main-4-desc text-white">
              <p class="fs-5">PHƯƠNG PHÁP ĐÀO TẠO TIẾN TIẾN</p>
              <p>Tập trung thực hành, làm dự án. Giờ học linh hoạt, sĩ số lớp đảm bảo 24ng/lớp.</p>
            </div>
          </div>
          <div class="box1_main-4">
            <div class="box2_main-4-img">
              <img src="images/icon-cooperate.png" alt="icon-cooperate" class="img-responsive">
            </div>
            <div class="box2_main-4-desc text-white">
              <p class="fs-5">CAM KẾT 100% CÓ VIỆC LÀM</p>
              <p>100% học viên được giới thiệu việc làm tại các doanh nghiệp lớn về CNTT.</p>
            </div>
          </div>
          <div class="box1_main-4">
            <div class="box2_main-4-img">
              <img src="images/icon-curriculum.ico" alt="icon-curriculum" class="img-responsive">
            </div>
            <div class="box2_main-4-desc text-white">
              <p class="fs-5">LÀM DỰ ÁN THỰC TẾ</p>
              <p>Học viên được tham gia các dự án thực tế tại các doang nghiệp theo đúng ngành nghề và năng lực.</p>
            </div>
          </div>
          <div class="box1_main-4">
            <div class="box2_main-4-img">
              <img src="images/icon-quality.png" alt="icon-quality" class="img-responsive">
            </div>
            <div class="box2_main-4-desc text-white">
              <p class="fs-5">CHƯƠNG TRÌNH HỌC TOÀN DIỆN</p>
              <p>Chương trình học chuẩn Quốc Tế. Cập nhật công nghệ mới, trang bị tiếng Anh chuyên ngành.</p>
            </div>
          </div>
          <div class="box2_main-4 d-grid col-3 mx-auto">
            <button type="submit" class="btn btn-success btn-outline-warning">ĐĂNG KÝ NHẬN TƯ VẤN</button>
          </div>
        </div>
      </div>

      <div class="main-5">
        <h2 class=" text-center">CHƯƠNG TRÌNH HỌC ADSE MỚI NHẤT 2021</h2>
        <h4 class=" text-center">Chương trình gồm 4 kỳ - 2 năm học</h4>
      </div>
      
      <div class=" main-6 ">
        <div class="container">
              <div class="box1_main-6">
                  <h5>HỌC KỲ 1</h5>
                  <p class="bi-bookmark-check ">  HTML5, CSS, and Javascript</p>
                  <p class="bi-bookmark-check ">  AngularJS (AngularJS 1.7.x & Angular 9)</p>
                  <p class="bi-bookmark-check ">  eProject-Website Development</p>
                  <p class="bi-bookmark-check ">  Data Management with SQL Server 2019</p>
                  <p class="bi-bookmark-check ">  Database Design and Development (Core)</p>
                  <p class="bi-bookmark-check ">  Logic Building and Elementary Programming</p>
                  <p class="bi-bookmark-check ">  PHP Development with Laravel Framework (PHP 7.3.0 & Laravel FW)</p>
                  <p class="bi-bookmark-check ">  eProject PHP</p>
                  <div class="accordion-item">
                    <p class="accordion-header" >
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1"  >
                        Mục tiêu khóa học
                      </button>
                    </p>
                    <div id="collapseOne1"   >
                      <div class="accordion-body">
                        <li>Sử dụng programming để xây dựng chương trình bằng ngôn ngữ C</li>
                        <li>Sử dụng HTML5/CSS3/JavaScript và jQuery để lập trình các trang
                          web hoặc ứng dụng tương tác và nhanh nhạy</li>
                        <li>Mở rộng thêm kiến thức HTML trong ứng dụng với nền tảng lập trình AngularJS</li>
                        <li>Phát triển website tương tác cao bằng HTML5, CSS, JavaScript và AngularJS</li>
                        <li>Phát triển các ứng dụng web từ cơ bản đến nâng cao bằng PHP</li>
                        <li>Thiết kế cơ sở dữ liệu và xây dựng quy trình mượt hơn – nhanh hơn và an toàn hơn</li>
                        <li>Sàng lọc dữ liệu thô vào các bảng dữ liệu gọn gàng trong SQL Server
                          và thực hiện các thao tác dữ liệu nâng cao</li>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="box1_main-6">
                <img src="images/anh8.jpg" alt="" class="img-responsive" >
            </div>
         </div>
      </div>

      <div class=" main-7 ">
        <div class="container">
             
              <div class="box1_main-6">
                  <img src="images/anh9.png" alt="" class="img-responsive" >
              </div>
              <div class="box1_main-6">
                  <h5>HỌC KỲ 2</h5>
                  <p class="bi-bookmark-check ">  Markup Language & JSON</p>
                  <p class="bi-bookmark-check ">  Java Programming - I</p>
                  <p class="bi-bookmark-check ">  Java Programming - II</p>
                  <p class="bi-bookmark-check ">  Information Systems Analysis (Core)</p>
                  <p class="bi-bookmark-check ">  Project-Java Application Development</p>
                  <p class="bi-bookmark-check ">  Application Programming with C# (Microsoft Visual Studio 2019)</p>
                  <p class="bi-bookmark-check ">  Professional Issues in IT (Elective)</p>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" >
                        Mục tiêu khóa học
                      </button>
                    </p>
                    <div id="collapseOne2" >
                      <div class="accordion-body">
                        <li>Sử dụng XML & JSON để dự trữ và trao đổi dữ liệu</li>
                        <li>Phát triển các phần mềm hướng đối tượng bằng Java; sử dụng code từ Oracle và các tài liệu mã nguồn để viết code chuyên nghiệp</li>
                        <li>Sử dụng các chức năng cơ bản và API của Java để thiết kế các ứng dụng hướng đối tượng.</li>
                        <li>Hiểu các đặc tính của các hệ thống thông tin cùng với những quy trình và công cụ để phát triển các hệ thống ứng dụng máy tính.</li>
                        <li>Lập trình một phần mềm thật sử dụng công nghệ Java
                          Phát triển các ứng dụng hướng đối tượng từ cơ bản đến nâng câo, bằng C#</li>
                        <li>Phát triển tác phong chuyên nghiệp và tinh thần trách nhiệm, nắm vững đạo đức nghề nghiệp lập trình.</li> 
                      </div>
                    </div>
                  </div>
              </div>
         </div>
      </div>

      <div class=" main-8 ">
        <div class="container">
              <div class="box1_main-6">
                  <h5>HỌC KỲ 3</h5>
                  <p class="bi-bookmark-check ">  Essentials of NodeJS</p>
                  <p class="bi-bookmark-check ">  Web Development using ASP.NET MVC</p>
                  <p class="bi-bookmark-check ">  Network Security and Cryptography (Core)</p>
                  <p class="bi-bookmark-check ">  Developing Microsoft Azure and Web Services</p>
                  <p class="bi-bookmark-check ">  Emerging Job Areas-SMAC</p>
                  <p class="bi-bookmark-check ">  eProject -.NET Web Application Development</p>
                  <p class="bi-bookmark-check ">  Agile Development (Elective)</p>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3" >
                        Học phí khóa học
                      </button>
                    </p>
                    <div id="collapseOne3" >
                      <div class="accordion-body">
                        <li>Lập trình, kiểm tra và triển khai các ứng dụng web với Node.js</li>
                        <li>Lập trình các phần mềm GUI desktop bằng C# cho Windows bằng controls, data binding, và ClickOnce deployment.</li>
                        <li>Lập trình các ứng dụng web áp dụng server-side programming
                          với ASP.NET MVC</li>
                        <li>Bảo mật mạng lưới và truyền dữ liệu qua mạng không dây</li>
                        <li>Phát triển ứng dụng cho doanh nghiệp, các dịch vụ web bằng
                          công nghệ .NET với nền tảng Microsoft Azure</li>
                        <li>Hiểu về điện toán đám mây, các mô hình cloud delivery và tìm
                          hiểu nhiều nền tảng đám mây khác nhau trên thị trường</li>
                        <li> Lập trình một phần mềm thực với .NET</li>
                        <li>Ứng dụng một phần mềm sử dụng phương pháp Agile</li>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="box1_main-6">
                <img src="images/anh10.png" alt="" class="img-responsive" >
              </div>
         </div>
      </div>
      <div class=" main-9 ">
        <div class="container">
             
              <div class="box1_main-6">
                  <img src="images/anh7.png" alt="" class="img-responsive" >
              </div>
              <div class="box1_main-6">
                  <h5>HỌC KỲ 4</h5>
                  <p class="bi-bookmark-check ">  Web Component Development using Java</p>
                  <p class="bi-bookmark-check ">  Integrating Applications with Spring Framework</p>
                  <p class="bi-bookmark-check ">  Enterprise Application Development in Java EE</p>
                  <p class="bi-bookmark-check ">  Creating Services for the Web</p>
                  <p class="bi-bookmark-check ">  Project-Java Enterprise Application Development</p>
                  <p class="bi-bookmark-check ">  Introduction to Dart Programming</p>
                  <p class="bi-bookmark-check ">  Application Development Using Flutter and Dart</p>
                  <p class="bi-bookmark-check ">  Computing Project (Core)</p>
                  <div class="accordion-item">
                    <p class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne4" >
                        Mục tiêu khóa học
                      </button>
                    </p>
                    <div id="collapseOne4" >
                      <div class="accordion-body">
                        <li>Lập trình các ứng dụng web phù hợp với mọi Java EE application server, sử dụng JSP và Servlet</li>
                        <li>Phát triển các ứng dụng web nâng cao với Spring framework</li>
                        <li>Phát triển các ứng dụng doanh nghiệp với EJB</li>
                        <li>Sử dụng các dịch vụ Web trong Java Web Applications</li>
                        <li>Lập trình một phần mềm thật, bằng Java EE</li>
                        <li>Học lập trình các ứng dụng Flutter bằng ngôn ngữ lập trình Dart</li>
                        <li>Sử dụng Flutter framework và ngôn ngữ Dart để lập trình các ứng
                          dụng mobile đa nền tảng</li>
                        <li>Lập trình một ứng dụng web thật, sử dụng nhiều công nghệ kết hợp.</li>
                      </div>
                    </div>
                  </div>
              </div>
         </div>
      </div>

      <div class="main-10">
        <div class="container">
        <h3 class="text-center pb-4 text-white">ĐIỂM VƯỢT TRỘI CỦA KHÓA HỌC</h3>
          <div class="row gx-4 mx-4 img1">
            <div class="col">
              <div class="card">
                <img src="images/anh7.png" class="card-img-top p-1" alt="...">
                <div class="card-body">    
                    <p class="card-text text-center">Điện toán đám mây: Windows Azure và Google AppEngine</p>
                </div>
              </div>
            </div>
            
            <div class="col">
              <div class="card">
                <img src="images/anh8.jpg" class="card-img-top p-1" alt="...">
                <div class="card-body">    
                    <p class="card-text text-center">Lập trình mobile: Windows Phone và Google Android</p>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card">
                <img src="images/anh9.png" class="card-img-top p-1" alt="...">
                <div class="card-body">    
                    <p class="card-text text-center">Cập nhật kiến thức mới nhất về công nghệ Java và .NET</p>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card">
                <img src="images/anh10.png" class="card-img-top p-1" alt="...">
                <div class="card-body">    
                    <p class="card-text text-center">Học viên thực hiện đồ án phần mềm eProject sau mỗi kỳ học</p>
                </div>
              </div>
            </div>
          </div>
          <p class="box1_main-10 fw-bold text-center text-white">Chương trình học Kỹ thuật viên Quốc Tế được triển khai dựa trên mô hình đào tạo hiện đại, đa phương thức AMEDA 
            (Aptech Multi-modal Education Delivery Architecture) chú trọng nâng cao kỹ năng thực hành, định hướng, thực hiện các dự án cuối mỗi học kỳ.</p>
          <div class=" d-grid col-2 mx-auto">
            <button type="submit" class="btn fs-5 fw-bold text-white btn-outline-warning">ĐĂNG KÝ HỌC</button>
          </div>
        </div>
      </div>

      <div class="main-11">
        <div class="background container">
          <h2 class="text-center">HỌC PHÍ</h2>
          <img src="images/anh12.png" alt=""class="img-responsive">
       </div>
      </div>
<?php include('footer.php') ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
   
