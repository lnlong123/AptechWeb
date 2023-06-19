<?php include('header.php');
?>
<div class="container mt-5 pt-5">
    <ul></ul>
    <div class="row">
        <div class="col-sm-8">
        <?php
            $id_tintuc = $_GET['id'];
            $sql = "SELECT * FROM danhmuc INNER JOIN tintuc ON danhmuc.id = tintuc.id_danhmuc WHERE id_tt=$id_tintuc";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                $row= mysqli_fetch_array($result)
                    ?>
                    <div class="">
                        <i class="bi bi-clock"> <?php echo $row['ngaydang']?></i> -
                        <i class="bi bi-folder"><?php echo $row['TenDM']?></i>
                    </div>
                    <p><?php echo $row['noidung']?></p>

            <?php     
        
            }
            ?>
         </div>
        <?php include('r-bar.php')?>
    </div>
</div>
<?php include('footer.php')?>

        