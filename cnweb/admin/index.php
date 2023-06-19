<?php 
    session_start();
    if(!isset($_SESSION['login'])){
        header('location:login.php');
      }
  include("template/header.php");
?>
    <?php include("../config/db.php");
    ?>
<div class="mb-3 ms-3">
  <a href="add-user.php" class="btn btn-success">Thêm tài khoản</a>
</div>
<table class="table mx-4">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên tài khoản</th>
      <th scope="col">Mật khẩu</th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
      <?php
        $sql = "SELECT * FROM nguoidung";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $i=1;
            while($row = mysqli_fetch_assoc($result)){
        ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $row['username']; ?> </td>
      <td><?php echo $row['passwd']; ?></td>
      <td><a href="change-user.php?id=<?php echo $row['id']; ?>">Sửa</a></td>
      <td><a href="delete-user.php?id=<?php echo $row['id']; ?>">Xóa</a></td>
    </tr>
    <?php
		$i++;
        }
    }
    ?>
  </tbody>
</table>
<?php include("template/footer.php");  
?>
