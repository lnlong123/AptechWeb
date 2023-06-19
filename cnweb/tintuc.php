<?php include('header.php')?>
<div class="container mt-5 pt-5">
  <div class="row">
    <div class="col-sm-8">
    <?php
        $id_hienthi = $_GET['id'];
        $sql = "SELECT * FROM danhmuc INNER JOIN tintuc ON danhmuc.id = tintuc.id_danhmuc WHERE id_danhmuc=$id_hienthi";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
        ?>
        <div class="card mb-3 border-light">
            <div class="row g-0">
                <div class="col-md-5 my-auto">
                    <img src="images/<?php echo $row['hinhanh'] ?>" class="img-fluid" alt="...">
                </div>
                <div class="col-md-7 ps-5">
                    <div class="card-body">
                        <a href="" class="text-decoration-none text-uppercase fs-6"><?php echo $row['TenDM']?></a>
                        <h5 class="card-title my-3">
                          <a href ="baiviet.php?id='<?php echo $row['id_tt']?>'" class="text-decoration-none text-black fw-bold"><?php echo $row['TieuDe'] ?></a>
                        </h5>    
                        <p class="card-text"><?php echo $row['TomTat']?></p>
                        <div class="font-cmt row" >
                          <div class=" col-7 text-start">
                            <i class="bi bi-chat-square">COMMENTS OFF</i>
                          </div>
                          <div class="col-5 text-start">
                            <p class="text-end"><?php echo $row['ngaydang'] ?></p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
          }
        ?>
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only"></span>
              </a>
            </li>
            <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
            <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
            <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only"></span>
              </a>
            </li>
          </ul>
        </nav>
    </div>
    <?php include('r-bar.php')?>
  </div>
</div>
<?php include('footer.php');?>