
    <form action="" method="post">
        <section class="dangnhap">
            <div style="margin: 0 120px;
    padding: 0;">
                <div class="section-dangnhap">
                    <div class="sd-logo">
                        <img src="assets/images/logosw_dacatnen 1.png" width="40" height="40" alt="">
                        <div class="h2">Đăng nhập</div>
                    </div>
                    <div class="sd-mota h6">Chào mừng quay trở lại, hãy điền thông tin của bạn!</div>
                    <div class="form-group">
                        <label for="" class="h6">Email</label>
                        <input type="email" name="email" id="" class="form-control form-sm" placeholder="Vui Long Nhap Email">
                    </div>
                    <div class="form-group">
                        <label for="" class="h6">Mật khẩu</label>
                        <input type="password" name="pass" id="" class="form-control form-sm" placeholder="Vui Long Nhap Mat Khau">
                    </div>

                    <div class="form-group baoloi">
                        <?php if(isset($thongbao)){echo $thongbao;} ?>
                    </div>

                    <div  class="sd-quenmk p2-regular-16 ">
                        <a href="?mod=page&act=dangki">Đăng kí</a>
                        <a href="?mod=page&act=quenmatkhau">Quên mật khẩu? </a>
                    </div>
                    <button type="submit" class="btn btn-danger h5" name="btn_login">Đăng nhập</button>
                    <?php
                    // if(!isset($_GET['code'])){
                    ?>
                    <a href="<?=$client->createAuthUrl()?>" class="btn btn-danger btn-icon h5">
                        <svg width="24" height="26" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_677_5817)">
                                <path d="M24 12.9536C24 19.9127 19.2344 24.8651 12.1967 24.8651C5.44918 24.8651 0 19.4159 0 12.6684C0 5.92086 5.44918 0.47168 12.1967 0.47168C15.482 0.47168 18.2459 1.6766 20.3754 3.66348L17.0557 6.85529C12.7131 2.66512 4.63771 5.81266 4.63771 12.6684C4.63771 16.9225 8.03607 20.37 12.1967 20.37C17.0262 20.37 18.8361 16.9077 19.1213 15.1127H12.1967V10.9176H23.8082C23.9213 11.5422 24 12.1422 24 12.9536Z" fill="black" />
                            </g>
                            <defs>
                                <clipPath id="clip0_677_5817">
                                    <rect width="24" height="25.1803" fill="white" transform="translate(0 0.078125)" />
                                </clipPath>
                            </defs>
                        </svg>
                        Đăng nhập với Google
                    </a>
                    <?php // } ?>
                    <!-- <button type="submit" class="btn btn-danger btn-icon h5">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_677_5853)">
                                <path d="M24 12.0781C24 5.45 18.6281 0.078125 12 0.078125C5.37188 0.078125 0 5.45 0 12.0781C0 17.7031 3.87656 22.4281 9.10312 23.7266V15.7438H6.62812V12.0781H9.10312V10.4984C9.10312 6.41563 10.95 4.52188 14.9625 4.52188C15.7219 4.52188 17.0344 4.67187 17.5734 4.82187V8.14062C17.2922 8.1125 16.8 8.09375 16.1859 8.09375C14.2172 8.09375 13.4578 8.83906 13.4578 10.775V12.0781H17.3766L16.7016 15.7438H13.4531V23.9891C19.3969 23.2719 24 18.2141 24 12.0781Z" fill="black" />
                            </g>
                            <defs>
                                <clipPath id="clip0_677_5853">
                                    <rect width="24" height="24" fill="white" transform="translate(0 0.078125)" />
                                </clipPath>
                            </defs>
                        </svg>
                        Đăng nhập với Facebook
                    </button> -->
                </div>
            </div>
        </section>
    </form>