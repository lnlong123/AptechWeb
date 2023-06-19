<?php
    include("../config/db.php");
    include("template/header.php");
    session_start();
    if(!isset($_SESSION['login'])){
        header('location:login.php');
      }
      ?>
<?php	
    $sql_tt = "SELECT * FROM tintuc where id_tt = '$_GET[id]'";
	$query_tt = mysqli_query($conn, $sql_tt); 
	$kq_tt = mysqli_fetch_assoc($query_tt);
?>      
<div class="container">
<div class="h3 text-center mb-4">Sửa bài viết</div>
    <form method="POST" action="">
    <div class="form-group row mb-4">
        <label class="col-sm-2 col-form-label">Tiêu đề</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="txttieude" value="<?php echo $kq_tt['TieuDe']  ?>" required>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label class="col-sm-2 col-form-label">Tóm Tắt</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="txttomtat" value="<?php echo $kq_tt['TomTat']  ?>" required>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label class="col-sm-2 col-form-label">Hình ảnh</label>
        <div class="col-sm-10">
        <input type="file" value="<?php echo $kq_tt['hinhanh']  ?>" name="fileha" multiple></div>
    </div>
    <div class="form-group row mb-4">
        <label class="col-sm-2 col-form-label">Nội dung</label>
        <div class="col-sm-10">
        <textarea name="txtnoidung" rows="4" cols="129" required value="<?php echo $kq_tt['noidung']  ?>"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 ">
        <button type="submit" class="btn btn-primary" name="btnSua">Sửa</button>
        </div>
    </div>
    </form>
</div>
            <?php
                if(isset($_POST['btnSua'])){
                    $TieuDe  = $_POST['txttieude'];
                    $TomTat    = $_POST['txttomtat'];
                    $Hinhanh     = $_POST['fileha'];
                    $Ngay = date("Y-m-d");
                    $Noidung     = $_POST['txtnoidung'];
                    $id_cansua = $_GET['id'];  
                    $sql = "UPDATE tintuc SET TieuDe='$TieuDe', Tomtat='$TomTat', hinhanh='$Hinhanh', ngaydang='$Ngay', noidung='$Noidung' WHERE id_tt='$id_cansua' ";
                    if(mysqli_query($conn,$sql)){
                        header('Location: posts-management.php');
                    }
                    }

                    ?>
   