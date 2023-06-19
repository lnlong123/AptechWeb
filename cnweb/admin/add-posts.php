<?php
    include("../config/db.php");
    include("template/header.php");
    session_start();
    if(!isset($_SESSION['login'])){
        header('location:login.php');
      }
      ?>
<div class="container">
<div class="h3 text-center mb-4">Thêm bài viết</div>
    <form method="POST" action="">
    <div class="form-group row mb-4">
        <label class="col-sm-2 col-form-label">Tiêu đề</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="txttieude" placeholder="Nhập vào tên " required>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label class="col-sm-2 col-form-label">Tóm Tắt</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="txttomtat" placeholder="Nhập tóm tắt" required>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label class="col-sm-2 col-form-label">Hình ảnh</label>
        <div class="col-sm-10">
        <input type="file" name="fileha" multiple></div>
    </div>
    <div class="form-group row mb-4">
        <label class="col-sm-2 col-form-label">Nội dung</label>
        <div class="col-sm-10">
        <textarea name="txtnoidung" rows="4" cols="129" required></textarea>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label class="col-sm-2 col-form-label">Tên danh mục</label>
        <div class="col-sm-10">
        <select class="form-control" name="sldanhmuc">  
        <?php 
        $sql = "SELECT * FROM danhmuc WHERE id_cha IS NOT NULL";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
        ?> 
            <option value="<?php echo $row['id']; ?>"><?php echo $row['TenDM']; ?></option>
        <?php
        }
    }
    ?>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 ">
        <button type="submit" class="btn btn-primary" name="btnThem">Thêm</button>
        </div>
    </div>
    </form>
</div>
            <?php
                if(isset($_POST['btnThem'])){
                    $TieuDe  = $_POST['txttieude'];
                    $TomTat    = $_POST['txttomtat'];
                    $Hinhanh     = $_POST['fileha'];
                    $Ngay = date("Y-m-d");
                    $Noidung     = $_POST['txtnoidung'];
                    $Danhmuc     = $_POST['sldanhmuc'];
                    $sql = "INSERT INTO tintuc (TieuDe, TomTat, hinhanh, ngaydang, id_danhmuc, noidung)
                            VALUES ('$TieuDe','$TomTat ','$Hinhanh ','$Ngay','$Danhmuc','$Noidung')";
                    if(mysqli_query($conn,$sql)){
                        echo "Thành công";
                    }
					else
					{
						echo "Thất bại";
					}
				}

             ?>
			 
			 
   