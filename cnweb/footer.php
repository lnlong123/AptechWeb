<div class="main-8 ">
	<div class="container">
	<h3 class="text-center">ĐỐI TÁC CỦA HANOI APTECH </h3>
	<div id="carouselExampleSlidesOnly" class="carousel slide my-5 mx-4" data-bs-ride="carousel">
    <div class="carousel-inner ">
        <div class="carousel-item active">
    <!--Grid row--> 
            <div class="row">
                <div class= "col-md-3 ">
                    <img src="images/ncc.png" class="w-50" alt="...">
                </div>
                <div class="col-md-3">
                    <img src="images/logo-misa.svg" class="w-50 pt-3" alt="...">
                </div>
                <div class="col-md-3">
                    <img src="images/Middlesex-University-Logo_s-1-1-600x400-1.jpg" class="w-50 " alt="...">
                </div>
                <div class="col-md-3">
                    <img src="images/unnamed.png" class="w-100 h-30 pt-4" alt="...">
                </div>
            </div>
        </div>
        <div class="carousel-item h-100">
            <div class="row">
                <div class="col-md-3">
                    <img src="images/logo.png" class="w-50" alt="...">
                </div>
                <div class="col-md-3">
                    <img src="images/Samsung_Logo.jpg" class="w-50 pt-3" alt="...">
                </div>
                <div class="col-md-3">
                    <img src="images/logo-vt.png" class="w-30 pt-4" alt="...">
                </div>
                <div class="col-md-3">
                    <img src="images/logo-1.png" class="w-45 pt-3" alt="...">
                </div>
            </div>
        </div>
    </div>
	</div>
	</div>
</div>
<footer class="footer1 text-center ">
  <!-- Grid container -->
  <div class="container p-4 text-white">
    <!--Grid row--> 
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-4 col-md-6 mt-5 text-lg-start">
        <h5 class="text-uppercase display-9 mb-4">Khóa học sắp khai giảng</h5>
        <ul class="list-unstyled">
          <li class="mb-4">
            <a href="#" class="text-white text-decoration-none">Lập trình viên Quốc Tế</a>
          </li>
          <li class="mb-4">
            <a href="#" class="text-white text-decoration-none">Lập trình Web với PHP</a>
          </li>
          <li>
            <a href="#" class="text-white text-decoration-none">Khóa học Lập trình Java</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-4 col-md-6 my-5 mb-md-0 text-lg-start">
        <h5 class="text-uppercase mb-4">Liên hệ</h5>

        <ul class="list-unstyled ">
          <li>
            <p class="text-white pb-2">Tầng 1, Tòa nhà C5, Đại học Thủy Lợi, 175 Tây Sơn, Trung Liệt, Đống Đa, Hà Nội</p>
          </li>
          <li>
            <p class="text-white pb-2">Tel: (024) 3563 7511</p>
          </li>
          <li>
            <p class="text-white pb-2">Hotline: 038 2020 858</p>
          </li>
          <li>
            <p class="text-white">Mail: info@aptech.vn</p>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-4 col-md-6 mt-4 mb-md-0 ">
        <h5 class="text-uppercase text-start my-4">Đăng kí tư vấn</h5>
        <form method="POST" action="">
              <div class="mb-3">    
                <input type="name" class="form-control mb-4" placeholder="Họ và Tên" name="txtten" required>  
              </div>
              <div class="mb-3"> 
                <input type="tel" class="form-control mb-4" placeholder="Số Điện Thoại" name="txtSDT" required>
              </div>
              <div class="mb-3"> 
                <input type="email" class="form-control mb-4 " placeholder="Email" name="txtemail" required>
              </div>
              <div class="mb-3"> 
                <input type="address" class="form-control" placeholder="Địa Chỉ" name="txtdiachi" required>
              </div>
              <button type="submit" class=" btn-success btn-outline-warning" name="btn_dk">ĐĂNG KÝ</button>
        </form>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->
</footer> 
<?php
      if(isset($_POST['btn_dk'])){
        $Ten  = $_POST['txtten'];
        $SDT    = $_POST['txtSDT'];
        $email    = $_POST['txtemail'];
        $diachi    = $_POST['txtdiachi'];
        $sql = "INSERT INTO khach(ten, sdt, email, diachi)
                VALUES ('$Ten','$SDT ','$email ',' $diachi')";
          if(mysqli_query($conn,$sql)){
			 
          }
      }
    ?>