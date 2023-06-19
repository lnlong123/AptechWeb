<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header('location:login.php');
      }
    include("../config/db.php");
    include("template/header.php");
?>
<?php	
    $sql_tt = "SELECT * FROM nguoidung where id = '$_GET[id]'";
	$query_tt = mysqli_query($conn, $sql_tt); 
	$kq_tt = mysqli_fetch_assoc($query_tt);
?>
<div class="h3 text-center mb-4">Sửa tài khoản</div>
<div class="container">
    <form method="POST" action="">
    <div class="form-group row my-4">
        <label class="col-sm-2 col-form-label">Tên cán bộ</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="txtusername" value="<?php echo $kq_tt['username']  ?>" required>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label class="col-sm-2 col-form-label">Mật khẩu</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="txtpasswd" value ="<?php echo $kq_tt['passwd']  ?>" required>
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
                    $userName  = $_POST['txtusername'];
                    $passwd    = $_POST['txtpasswd'];
                    $id_cansua = $_GET['id'];  
                    $sql = "UPDATE nguoidung SET username='$userName', passwd='$passwd' Where id='$id_cansua'";
                    if(mysqli_query($conn,$sql)){
                        header('Location: index.php');
                    }
                    }
                    ?>
   