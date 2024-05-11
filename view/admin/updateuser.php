<div class="sma-right">
    <div class="sma-r-top">
        <div class="sma-rt-left">
            <div class="sma-rt-l-title h3">Cập Nhật Người Dùng</div>
            <div class="sma-rt-l-content h5" style="color: var(--black-03)">
                Cập Nhật Một Người Dùng
            </div>
        </div>
    </div>
    <div class="sma-r-bot">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="" class="h6">Tài Khoản</label>
                <input type="text" name="user_name" id="" class="form-control form-lg" placeholder="Nhập Tài Khoản" value="<?= $show_user['UserName'] ?>">
            </div>
            <div class="form-group">
                <label for="" class="h6">Số Điện Thoại</label>
                <input type="tel" name="user_mobile" id="" class="form-control form-lg" placeholder="Nhập Số Điện Thoại" <?= $show_user['MobileNumber'] ?>>
            </div>
            <div class="form-group">
                <label for="" class="h6">Email</label>
                <input type="email" name="user_email" id="" class="form-control form-lg" placeholder="Nhập Email" <?= $show_user['Email'] ?>>
            </div>
            <div class="form-group m-0 mt-16">
                <label for="" class="h6">Vai Trò</label>
                <div class="select-input p2-regular-18">
                    <button class="select-input-button" type="button">
                        <span class="select-input-button-value p2-regular-18"><?= $show_user['VaiTro'] === 1 ? "Quản Lý" : "Khách Hàng" ?></span>
                        <span class="select-input-button-arrow"></span>
                    </button>
                    <ul class="select-input-dropdown">
                        <li>
                            <input type="search" name="user_role" id="" placeholder="Vui Lòng Nhập Từ Tìm Kiếm">
                        </li>
                        <li>
                            <input type="radio" name="" id="" value=0>
                            <label class="default" for="">Chọn Vai Trò</label>
                        </li>
                        <li>
                            <input type="radio" name="" id="" value=1>
                            <label for="">Quản Lý</label>
                        </li>
                        <li>
                            <input type="radio" name="" id="" value=0>
                            <label for="">Khách Hàng</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="form-group mt-16">
                <label for="" class="h6">Mật Khẩu</label>
                <input type="password" name="user_password" id="" class="form-control form-lg" placeholder="Nhập Mật Khẩu" value="<?= $show_user['MatKhau'] ?>">
            </div>
            <div class="form-group mt-16">
                <label for="" class="h6">Tình Trạng</label>
                <div class="select-input p2-regular-18">
                    <button class="select-input-button" type="button">
                        <span class="select-input-button-value p2-regular-18"><?= $show_user['Status'] === 1 ? "Có Hiệu Lực" : "Không Có Hiệu Lực" ?></span>
                        <span class="select-input-button-arrow"></span>
                    </button>
                    <ul class="select-input-dropdown">
                        <li>
                            <input type="search" name="user_status" id="" placeholder="Vui Lòng Nhập Từ Tìm Kiếm">
                        </li>
                        <li>
                            <input type="radio" name="" id="" value=1>
                            <label class="default" for="">Chọn Tình Trạng</label>
                        </li>
                        <li>
                            <input type="radio" name="" id="" value=1>
                            <label for="">Có Hiệu Lực</label>
                        </li>
                        <li>
                            <input type="radio" name="" id="" value=0>
                            <label for="">Không Có Hiệu Lực</label>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="sma-rb-item form-group-img m-0">
                <label for="insert-img">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.4 22.5C2.41875 22.5 0 19.4766 0 15.75C0 12.8062 1.5075 10.3031 3.6075 9.37969C3.60375 9.25313 3.6 9.12656 3.6 9C3.6 4.85625 6.285 1.5 9.6 1.5C11.8238 1.5 13.7625 3.00937 14.8013 5.25937C15.3713 4.78125 16.0613 4.5 16.8 4.5C18.7875 4.5 20.4 6.51562 20.4 9C20.4 9.57187 20.3137 10.1156 20.16 10.6219C22.35 11.175 24 13.5984 24 16.5C24 19.8141 21.8513 22.5 19.2 22.5H5.4ZM8.3625 12.3281C8.01 12.7688 8.01 13.4812 8.3625 13.9172C8.715 14.3531 9.285 14.3578 9.63375 13.9172L11.0963 12.0891V18.375C11.0963 18.9984 11.4975 19.5 11.9963 19.5C12.495 19.5 12.8963 18.9984 12.8963 18.375V12.0891L14.3588 13.9172C14.7113 14.3578 15.2812 14.3578 15.63 13.9172C15.9788 13.4766 15.9825 12.7641 15.63 12.3281L12.63 8.57812C12.2775 8.1375 11.7075 8.1375 11.3588 8.57812L8.35875 12.3281H8.3625Z" fill="#E5E91D" />
                    </svg>

                    <div class="sma-rb-i-title">
                        Thả Hoặc Kéo Một Tệp Để Tải Lên
                    </div>
                </label>
                <input type="file" id="insert-img" name="user_image" />
            </div>
            <div class="sma-r-end">
                <button type="submit" name="update_user" class="btn btn-primary btn-lg">Cập Nhật Người Dùng</button>
                <button type="submit" name="cancel" class="btn btn-outline-primary btn-lg">Hủy Cập Nhật</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</section>