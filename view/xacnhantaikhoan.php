    <form action="" method="post">
        <section class="dangnhap">
            <div style="margin: 0 120px;
    padding: 0;">
                <div class="section-dangnhap">
                    <div>
                        <h1><?php if(isset($thongbao_xacnhanma)) echo $thongbao_xacnhanma;?></h1>
                    </div>
                    <div class="sd-logo">
                        <img src="assets/images/logosw_dacatnen 1.png" width="40" height="40" alt="">
                        <div class="h2">Xác nhận tài khoản</div>
                    </div>
                    <div class="sd-mota h6">Điền mã xác thực đã nhận từ email</div>
                    <div class="form-group">
                        <label for="" class="h6">Nhập mã xác thực</label>
                        <input type="text" name="nhapmaxacthuc" id="" class="form-control form-sm" placeholder="Vui Long Nhap Ma Xac Thuc">
                    </div>
                    <?php
                    if(isset($_SESSION['email_xacnhan']) && !empty($_SESSION['email_xacnhan']) && isset($_SESSION['maxacthuc_thoigian']) && !empty($_SESSION['maxacthuc_thoigian'])){
                    ?>
                    <div style="display: flex;">
                        <h4 id="thoigianconlai">thời gian còn lại: </h4><h4 id="timexacthu"></h4>
                    </div>
                    <?php }?>
                    <button type="submit" name="xacnhantaikhoan" class="btn btn-danger h5">Xác nhận</button>
                    <button type="submit" name="guilaimaxacthuc" class="btn btn-danger h5">Chưa nhận được mã?</button>
                </div>
            </div>
        </section>
    </form>
    <script>
        window.onload = setInterval(clock,1000);
        var dattg = 60;
        function clock()
            {
                if(dattg <= 1){
                    document.getElementById("thoigianconlai").innerHTML = '';
                    document.getElementById("timexacthu").innerHTML = 'Đã hết thời gian. Xin vui lòng xác nhận lại!';
                }else{
                    document.getElementById("timexacthu").innerHTML = ' ' + dattg;
                    dattg--;
                }
            
            }
    </script>