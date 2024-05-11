<form action="" method="post" id="form">
        <section class="dangki">
            <div style="margin: 0 120px;
    padding: 0;">
                <div class="section-dangki">
                    <div>
                        <h1><?php if(isset($thongbao_dangki)) echo $thongbao_dangki;?></h1>
                    </div>
                    <div class="sd-logo">
                        <img src="assets/images/logosw_dacatnen 1.png" width="40" height="40" alt="">
                        <div class="h2">Đăng kí</div>
                    </div>
                    <div class="sd-mota h6">Chào mừng bạn đến với chúng tôi, hãy cho tôi biết thông tin của bạn!</div>

                    <div class="form-group">
                        <label for="" class="h6">Username</label>
                        <input type="text" name="UserName" id="" class="form-control form-sm" placeholder="Vui Long Nhap Username">
                    </div>
                    
                    <div class="form-group">
                        <label for="" class="h6">Email</label>
                        <input type="email" name="Email" id="" class="form-control form-sm" placeholder="Vui Long Nhap Email">
                    </div>
                    
                    <div class="form-group">
                        <label for="" class="h6">Mật khẩu</label>
                        <input type="password" name="MatKhau" id="pass" class="form-control form-sm" placeholder="Vui Long Nhap Mat Khau">
                    </div>
                    <div class="form-group">
                        <label for="" class="h6">Mật khẩu mới</label>
                        <input type="password" name="Repass" id="" class="form-control form-sm" placeholder="Vui Long Nhap Lai Mat Khau">
                    </div>
                    <div class="form-group baoloi">
                        <?php if (isset($thongbao)) {echo $thongbao;} ?>
                    </div>
                    <span id="passError" class="error"></span>
                    <!-- <div class="form-group baoloi">
                        <a href="?mod=page&act=dangnhap">Đăng nhập</a>
                    </div> -->
                    <button type="submit" class="btn btn-danger h5" name="btn-signup"  onclick="return changorm(this)">Đăng Kí</button>
                </div>
            </div>
        </section>
    </form>
    <!-- <script>
        function changorm(e){
            var company = document.getElementById('pass').value;
            var companyError = document.getElementById('passError');
            if(company.length < 8){
                companyError.textContent = 'Vui lòng nhập mật khẩu từ 8 ';
                event.preventDefault();
            }else if(company.length > 10){
                companyError.textContent = 'Vui lòng nhập mật 10 kí tự';
                event.preventDefault();
            }else{
                companyError.textContent = 'hợp lê';
            }
        }
    </script> -->