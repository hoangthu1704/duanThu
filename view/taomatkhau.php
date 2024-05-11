<form action="" method="post">
        <section class="dangki">
            <div style="margin: 0 120px;
    padding: 0;">
                <div class="section-dangki">
                    
                    <div class="sd-logo">
                        <img src="assets/images/logosw_dacatnen 1.png" width="40" height="40" alt="">
                        <div class="h2">Tạo mật khẩu mới</div>
                    </div>
                    <div class="sd-mota h6">Hãy thiết lập mật khẩu mới để đảm bảo an toàn cho tài khoản của bạn!</div>
                    <div class="form-group">
                        <label for="newpass" class="h6">Nhập mật khẩu mới</label>
                        <input type="password" name="newpass" id="newpass" class="form-control form-sm" placeholder="Vui lòng nhập mật khẩu mới">
                        <!-- <span style="color: red;"></span> -->
                    </div>
                    <div class="form-group">
                        <label for="repass" class="h6">Nhập lại mật khẩu</label>
                        <input type="password" name="repass" id="repass" class="form-control form-sm" placeholder="Vui lòng nhập lại mật khẩu">
                        <!-- <span style="color: red;"></span> -->
                    </div>
                    <div class="form-group baoloi">
                    <?php if(isset($thongbao_taolaimatkhau)) echo $thongbao_taolaimatkhau;?>
                    </div>
                    <button type="submit" id="submit-repass" name="submit-repass" class="btn btn-danger h5">Xác nhận</button>
                </div>
            </div>
        </section>
    </form>