<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hanoi Aptech - Trường Đào Tạo Lập Trình Viên Quốc Tế</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Css/style.css">
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
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
</body>
</html>