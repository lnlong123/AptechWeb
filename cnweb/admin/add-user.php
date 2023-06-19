<?php
    include("../config/db.php");
    include("template/header.php");
    session_start();
    if(!isset($_SESSION['login'])){
        header('location:login.php');
      }
?>
<div class="h3 text-center mb-4">Thêm tài khoản</div>
<div class="container">
    <form method="POST" action="">
    <div class="form-group row my-4">
        <label class="col-sm-2 col-form-label">Tên cán bộ</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="txtusername" placeholder="Nhập tên tài khoản" required>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label class="col-sm-2 col-form-label">Mật khẩu</label>
        <div class="col-sm-10">
        <input type="password" class="form-control" name="txtpasswd" placeholder="Nhập mật khẩu" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 ">
        <button type="submit" class="btn btn-primary" name="btnAddUser">Thêm</button>
        </div>
    </div>
    </form>
</div>
            <!-- <?php
                if(isset($_POST['btnAddUser'])){
                    $userName  = $_POST['txtusername'];
                    $passwd    = $_POST['txtpasswd'];
                    $sql = "INSERT INTO nguoidung(username, passwd)
                            VALUES ('$userName','$passwd ')";
                    if(mysqli_query($conn,$sql)){
                        header('Location: index.php');
                    }
                    }
                    ?> -->