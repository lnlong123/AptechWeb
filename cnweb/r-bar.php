<div class="col-sm-1"></div>
        <div class="col-sm-3 pt-4">
            <div class="mb-5">
                <h5 class="fs-6 fw-bold">| Đăng kí nhận tư vấn</5>
                <form action="" method="POST">
                    <input type="text" class="form-control mt-3" name="txtten" placeholder="Họ và tên" required>
                    <input type="text" class="form-control" name="txtSDT" placeholder="Số điện thoại" required>
                    <input type="email" class="form-control" name="txtemail" placeholder="Email" required>
                    <input type="text" class="form-control" name="txtdiachi" placeholder="Địa chỉ" required>
                    <button type="submit" class="btn btn-success" name="btn_dk">Gửi đăng kí</button>
                </form>
            </div>
            <div class="mb-5">
                <h5 class="fs-6 fw-bold" >| Lập Trình Viên Quốc Tế ADSE</h5>
				<a href="LTVQuocte.php">
                <img src="images/anh1.png" class="w-100 pt-3" alt="" >
				</a>
            </div>
            <div class="mb-5">
                <h5 class="fs-6 fw-bold">| Quản trị mạng quốc tế</h5>
                <img src="images/Qtmang.jpg" class="w-100 pt-3" alt="">
            </div>
            <div class="mb-5">
                <h5 class="fs-6 fw-bold">| Lập Trình Viên Quốc Tế ADSE</5>
                <img src="images/ltjava.jpg" class="w-100 pt-3" alt="">
            </div>
            <div class="mb-5">
                <h5 class="fs-6 fw-bold">| Lập trình php</h5>
                <img src="images/ltphp.jpg" class="w-100 pt-3" alt="">
            </div>
            <div class="mb-5">
                <h5 class="fs-6 fw-bold">| Lập trình .NET</h5>
                <img src="images/ltnet.jpg" class="w-100 pt-3" alt="">
            </div>
            <div class="mb-5">
                <div>
                    <h5 class="fs-6 fw-bold pb-3">| Bài Viết Mới</h5>
                </div>
                <?php
                    $sql = "SELECT * FROM tintuc ORDER BY ngaydang DESC LIMIT 6";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                        while ($row= mysqli_fetch_array($result)){
                            ?>
                            <div class="py-2 border-top ">
                                <a href="baiviet.php?id=<?php echo $row['id_tt'] ?>" class="text-decoration-none text-dark fs-6"><?php echo $row['TieuDe'] ?></a>
                                <span><?php echo $row['ngaydang']?></span>
                            </div>
                    <?php     
                        }
                    }
                ?>
            </div>
        </div>