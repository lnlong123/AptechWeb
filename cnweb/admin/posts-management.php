<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header('location:login.php');
      }
    include("../config/db.php");
    include("template/header.php");
?>
<div class="mb-3 ms-3">
  <a href="add-posts.php" class="btn btn-success">Thêm bài viết</a>
</div>
<table class="table mx-4">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tiêu đề </th>
      <th scope="col">Tóm tắt</th>
      <th scope="col">Hỉnh ảnh </th>
      <th scope="col">Danh mục </th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
      <?php
        $sql = "SELECT * FROM tintuc INNER JOIN danhmuc ON tintuc.id_danhmuc=danhmuc.id";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $i=1;
            while($row = mysqli_fetch_assoc($result)){
        ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $row['TieuDe']; ?> </td>
      <td><?php echo $row['TomTat']; ?></td>
      <td><?php echo $row['hinhanh']; ?></td>
      <td><?php echo $row['TenDM']; ?></td>
      <td><a href="change-post.php?id=<?php echo $row['id_tt']; ?>">Sửa</a></td>
      <td><a href="delete-post.php?id=<?php echo $row['id_tt']; ?>">Xóa</a></td>
    </tr>
    <?php
		$i++;
        }
    }
    ?>
  </tbody>
</table>
<?php include('template/footer.php')?>