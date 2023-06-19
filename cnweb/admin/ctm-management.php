<?php 
    session_start();
    if(!isset($_SESSION['login'])){
        header('location:login.php');
      }
  include("template/header.php");
  include("../config/db.php");
?>
<div class="mb-3 ms-3">
  <a href="add-ctm.php" class="btn btn-success">Thêm khách </a>
</div>
<table class="table mx-4">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên khách </th>
      <th scope="col">Số điện thoại</th>
      <th scope="col">Email</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
      <?php
        $sql = "SELECT * FROM khach";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $i=1;
            while($row = mysqli_fetch_assoc($result)){
        ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $row['ten']; ?> </td>
      <td><?php echo $row['sdt']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['diachi']; ?></td>
      <td><a href="change-ctm.php?id=<?php echo $row['id']; ?>">Sửa</a></td>
      <td><a href="delete-ctm.php?id=<?php echo $row['id']; ?>">Xóa</a></td>
    </tr>
    <?php
		$i++;
        }
    }
    ?>
  </tbody>
</table>
<?php include("template/footer.php")?>