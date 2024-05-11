<div class="sma-right">
    <div class="sma-r-top">
        <div class="sma-rt-left">
            <div class="sma-rt-l-title h3">Hồ Sơ</div>
            <div class="sma-rt-l-content h5" style="color: var(--black-03)">
                Hồ Sơ Người Dùng
            </div>
        </div>
    </div>
    <div class="sma-r-bot">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="sma-rb-heading"></div>
            <div class="sma-rb-start">
                <div class="sma-rb-s-left">
                    <div class="sma-rb-sl-image">
                        <img src="assets/images/product-01.png" width="200" height="200" alt="">
                    </div>
                    <div class="sma-rb-sl-text">
                        <div class="sma-rb-sl-t-title h3">PuuGoo</div>
                        <div class="sma-rb-sl-t-content h5" style="color: var(--black-03)">Tải Ảnh Của Bạn Lên Và Chi Tiết </div>
                    </div>
                </div>
                <div class="sma-rb-s-right">
                    <div class="btn-main">
                        <button type="submit" name="profile_user" class="btn btn-primary btn-lg">Lưu Lại</button>
                        <button type="submit" name="cancel" class="btn btn-outline-primary btn-lg ml-16">Hủy Lại</button>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="h4">Tên</label>
                <input type="text" name="user_fname" id="" class="form-control form-lg" placeholder="Nhập Tên" value="<?= $show_user['FirstName'] ?>">
            </div>
            <div class="form-group m-0 ml-16">
                <label for="" class="h4">Họ</label>
                <input type="text" name="user_lname" id="" class="form-control form-lg" placeholder="Nhập Họ" value="<?= $show_user['LastName'] ?>">
            </div>
            <div class=" form-group m-0">
                <label for="" class="h4">Email</label>
                <input type="email" name="user_email" id="" class="form-control form-lg" placeholder="Nhập Email" value="<?= $show_user['Email'] ?>">
            </div>
            <div class=" form-group m-0 ml-16">
                <label for="" class="h4">Số Điện Thoại</label>
                <input type="tel" name="user_phone" id="" class="form-control form-lg" placeholder="Nhập Số Điện Thoại" value="<?= $show_user['MobileNumber'] ?>">
            </div>
            <div class=" form-group m-0">
                <label for="" class="h4">Username</label>
                <input type="text" name="username" id="" class="form-control form-lg" placeholder="Nhập Username" readonly value="<?= $show_user['UserName'] ?>">
            </div>
            <div class=" form-group m-0 ml-16">
                <label for="" class="h4">Mật Khẩu</label>
                <input type="password" name="user_password" id="" class="form-control form-lg" placeholder="Nhập Mật Khẩu" value="<?= $show_user['MatKhau'] ?>">
            </div>
            <div class=" sma-r-end">
                <button type="submit" name="profile_user" class="btn btn-primary btn-lg">Lưu Lại</button>
                <button type="submit" name="cancel" class="btn btn-outline-primary btn-lg ml-16">Hủy Lại</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</section>