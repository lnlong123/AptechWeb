<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header('location:login.php');
      }
    include("../config/db.php");
    include("template/header.php");
?>
<?php	
    $sql_tt = "SELECT * FROM khach where id = '$_GET[id]'";
	$query_tt = mysqli_query($conn, $sql_tt); 
	$kq_tt = mysqli_fetch_assoc($query_tt);
?>
<div class="h3 text-center mb-4">Sửa tài khoản</div>
<div class="container">
    <form method="POST" action="">
    <div class="form-group row my-4">
        <label class="col-sm-2 col-form-label">Tên khách hàng</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="txtname" value="<?php echo $kq_tt['ten']  ?>" required>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label class="col-sm-2 col-form-label">Số điện thoại</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="txtSDT" value ="<?php echo $kq_tt['sdt']  ?>" required>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" name="txtemail" value ="<?php echo $kq_tt['email']  ?>" required>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label class="col-sm-2 col-form-label">Địa chỉ</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="txtdiachi" value ="<?php echo $kq_tt['diachi']  ?>" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 ">
        <button type="submit" class="btn btn-primary" name="btnchange">Sửa</button>
        </div>
    </div>
    </form>
</div>
                <?php
                if(isset($_POST['btnchange'])){
                    $Name  = $_POST['txtname'];
                    $SDT    = $_POST['txtSDT'];
                    $email    = $_POST['txtemail'];
                    $diachi    = $_POST['txtdiachi'];
                    $id_cansua = $_GET['id'];  
                    $sql = "UPDATE khach SET ten='$Name', sdt='$SDT', email='$email', diachi='$diachi' WHERE id='$id_cansua'";
                    if(mysqli_query($conn,$sql)){
                        header('Location: ctm-management.php');
                    }
                    }
                    ?>
   