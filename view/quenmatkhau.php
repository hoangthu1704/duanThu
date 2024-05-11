<form action="" method="post">
    <section class="dangnhap">
        <div style="margin: 0 120px;
padding: 0;">
            <div class="section-dangnhap">
                <div>
                    <h1><?php if(isset($thongbao_quenmatkhau)) echo $thongbao_quenmatkhau;?></h1>
                </div>
                <div class="sd-logo">
                    <img src="assets/images/logosw_dacatnen 1.png" width="40" height="40" alt="">
                    <div class="h2">Quên mật khẩu</div>
                </div>
                <div class="sd-mota h6">Điền email gắn với tài khoản của bạn để nhận mã xác thực</div>
                <div class="form-group">
                    <label for="email" class="h6">Email</label>
                    <input type="email" name="nhapemail" id="email" class="form-control form-sm" placeholder="Vui lòng nhập Email">
                    <!-- <span style="color: red;"></span> -->
                </div>

                <button type="submit" name="tieptuc" class="btn btn-danger h5">Tiếp tục</button>
                <div class="khucduoi">
                    <a href="?mod=page&act=dangnhap"><div class="sd-quaylaidangnhap p2-regular-16 ">Quay lại đăng nhập</div></a>
                    <a href="?mod=page&act=dangki"><div class="sd-dangki p2-regular-16 ">Đăng kí?</div></a>
                </div>
                
            </div>
        </div>
    </section>
</form>