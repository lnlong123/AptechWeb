<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header('location:login.php');
      }
    include("../config/db.php");
    include("template/header.php");
?>
<div class="h3 text-center mb-4">Thêm khách </div>
<div class="container">
    <form method="POST" action="">
    <div class="form-group row my-4">
        <label class="col-sm-2 col-form-label">Tên khách </label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="txtname" placeholder="Nhập tên khách  " required>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label class="col-sm-2 col-form-label">Số điện thoại</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="txtSDT" placeholder="Nhập số điện thoại khách  " required>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" name="txtemail" placeholder="Nhập email khách  " required>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label class="col-sm-2 col-form-label">Địa chỉ</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="txtdiachi" placeholder="Nhập địa chỉ khách " required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 ">
        <button type="submit" class="btn btn-primary" name="btnADD">Thêm</button>
        </div>
    </div>
    </form>
</div>
                <?php
                if(isset($_POST['btnADD'])){
                    $Ten  = $_POST['txtname'];
                    $SDT    = $_POST['txtSDT'];
                    $email    = $_POST['txtemail'];
                    $diachi    = $_POST['txtdiachi'];
                    $sql = "INSERT INTO khach(ten, sdt, email, diachi)
                    VALUES ('$Ten','$SDT ','$email ',' $diachi')";
                    if(mysqli_query($conn,$sql)){
                        header('Location: ctm-management.php');
                    }
                    }
                    ?>
   