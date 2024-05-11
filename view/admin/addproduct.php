<div class="sma-right">
    <div class="sma-r-top">
        <div class="sma-rt-left">
            <div class="sma-rt-l-title h3">Thêm Sản Phẩm</div>
            <div class="sma-rt-l-content h5" style="color: var(--black-03)">
                Tạo Một Sản Phẩm Mới
            </div>
        </div>
    </div>
    <div class="sma-r-bot">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="" class="h6">Tên Sản Phẩm</label>
                <input type="text" name="prod_name" id="" class="form-control form-lg" placeholder="Nhập Tên Sản Phẩm">
            </div>
            <div class="form-group">
                <label for="" class="h6">Danh Mục</label>
                <div class="select-input p2-regular-18">
                    <button class="select-input-button" type="button">
                        <span class="select-input-button-value p2-regular-18">Chọn Danh Mục</span>
                        <span class="select-input-button-arrow"></span>
                    </button>
                    <ul class="select-input-dropdown">
                        <li>
                            <input type="search" name="prod_catelogy" value="1" id="" placeholder="Vui Lòng Nhập Từ Tìm Kiếm">
                        </li>
                        <li>
                            <input type="radio" name="" id="">
                            <label class="default" for="">Chọn Danh Mục</label>
                        </li>
                        <?php foreach ($show_cats as $cat) : ?>
                            <li>
                                <input type="radio" name="" id="" value="<?= $cat['id_danhmuc'] ?>">
                                <label for=""><?= $cat['TenDanhMuc'] ?></label>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="form-group" style="display: none;">
                <label for="" class="h6">Danh Mục Phụ</label>
                <div class="select-input p2-regular-18">
                    <button class="select-input-button" type="button">
                        <span class="select-input-button-value p2-regular-18">Chọn Danh Mục Phụ</span>
                        <span class="select-input-button-arrow"></span>
                    </button>
                    <ul class="select-input-dropdown">
                        <li>
                            <input type="search" name="prod_sub_catelogy" value="1" id="" placeholder="Vui Lòng Nhập Từ Tìm Kiếm">
                        </li>
                        <li>
                            <input type="radio" name="" id="phu">
                            <label class="default" for="phu">Chọn Danh Mục Phụ</label>
                        </li>
                        <?php foreach ($show_subcats as $subcat) : ?>
                            <li>
                                <input type="radio" name="" id="" value="<?= $subcat['id_danhmucnho'] ?>">
                                <label for=""><?= $subcat['TenDanhMuc'] ?></label>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="form-group" style="display: none;">
                <label for="" class="h6">Đơn Vị</label>
                <div class="select-input p2-regular-18">
                    <button class="select-input-button" type="button">
                        <span class="select-input-button-value p2-regular-18">Chọn Đơn Vị</span>
                        <span class="select-input-button-arrow"></span>
                    </button>
                    <ul class="select-input-dropdown">
                        <li>
                            <input type="search" name="prod_unit" value="Chiếc" id="" placeholder="Vui Lòng Nhập Từ Tìm Kiếm">
                        </li>
                        <li>
                            <input type="radio" name="" id="phu">
                            <label class="default" for="phu">Chọn Đơn Vị</label>
                        </li>
                        <li>
                            <input type="radio" name="" id="phu" value="Chiếc">
                            <label for="phu">Chiếc</label>
                        </li>
                        <li>
                            <input type="radio" name="" id="vinh" value="Đôi">
                            <label for="vinh">Đôi</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="form-group m-0" style="display: none;">
                <label for="" class="h6">Số Lượng Nhỏ Nhất</label>
                <input type="text" name="prod_minQty" id="" class="form-control form-lg" placeholder="Nhập Số Lượng Nhỏ Nhất">
            </div>
            <div class="form-group">
                <label for="" class="h6">Số Lượng</label>
                <input type="text" name="prod_qty" id="" class="form-control form-lg" placeholder="Nhập Số Lượng">
            </div>
            <div class="form-group">
                <label for="" class="h6">Giá</label>
                <input type="text" name="prod_price" id="" class="form-control form-lg" placeholder="Nhập Giá">
            </div>
            <div class="form-group" style="display: none;">
                <label for="" class="h6">Thuế</label>
                <div class="select-input p2-regular-18">
                    <button class="select-input-button" type="button">
                        <span class="select-input-button-value p2-regular-18">Chọn Thuế</span>
                        <span class="select-input-button-arrow"></span>
                    </button>
                    <ul class="select-input-dropdown">
                        <li>
                            <input type="search" name="prod_tax" value="10" id="" placeholder="Vui Lòng Nhập Từ Tìm Kiếm">
                        </li>
                        <li>
                            <input type="radio" name="" id="">
                            <label class="default" for="">Chọn Thuế</label>
                        </li>
                        <li>
                            <input type="radio" name="" id="" value="10">
                            <label for="">10%</label>
                        </li>
                        <li>
                            <input type="radio" name="" id="" value="15">
                            <label for="">15%</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sma-rb-item form-floating m-0">
                <label for="floatingTextarea2" style="position: relative; padding: 0" class="h6">Mô Tả</label>
                <textarea name="prod_description" class="form-control" placeholder="Nhập Mô Tả Sản Phẩm" id="floatingTextarea2" style="height: 150px"></textarea>
            </div>

            <div class="form-group" style="display: none;">
                <label for="" class="h6">Loại Giảm Giá</label>
                <div class="select-input p2-regular-18">
                    <button class="select-input-button" type="button">
                        <span class="select-input-button-value p2-regular-18">Chọn Loại Giảm Giá</span>
                        <span class="select-input-button-arrow"></span>
                    </button>
                    <ul class="select-input-dropdown">
                        <li>
                            <input type="search" name="prod_discount_type" id="" placeholder="Vui Lòng Nhập Từ Tìm Kiếm">
                        </li>
                        <li>
                            <input type="radio" name="" id="">
                            <label class="default" for="">Chọn Loại Giảm Giá</label>
                        </li>
                        <li>
                            <input type="radio" name="" id="" value="Phần Trăm">
                            <label for="">Phần Trăm</label>
                        </li>
                        <li>
                            <input type="radio" name="" id="" value="Giá Trị">
                            <label for="">Giá Trị</label>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="form-group" style="display: none;">
                <label for="" class="h6">Tình Trạng</label>
                <div class="select-input p2-regular-18">
                    <button class="select-input-button" type="button">
                        <span class="select-input-button-value p2-regular-18">Chọn Tình Trạng</span>
                        <span class="select-input-button-arrow"></span>
                    </button>
                    <ul class="select-input-dropdown">
                        <li>
                            <input type="search" name="prod_status" value="Bản Phát Thảo" id="" placeholder="Vui Lòng Nhập Từ Tìm Kiếm">
                        </li>
                        <li>
                            <input type="radio" name="" id="">
                            <label class="default" for="">Chọn Tình Trạng</label>
                        </li>
                        <li>
                            <input type="radio" name="" id="" value="Công Khai">
                            <label for="">Công Khai</label>
                        </li>
                        <li>
                            <input type="radio" name="" id="" value="Bản Phát Thảo">
                            <label for="">Bản Phát Thảo</label>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="h6">Nổi Bật</label>
                <div class="select-input p2-regular-18">
                    <button class="select-input-button" type="button">
                        <span class="select-input-button-value p2-regular-18">Chọn Nổi Bật</span>
                        <span class="select-input-button-arrow"></span>
                    </button>
                    <ul class="select-input-dropdown">
                        <li>
                            <input type="search" name="prod_featured" value="0" id="" placeholder="Vui Lòng Nhập Từ Tìm Kiếm">
                        </li>
                        <li>
                            <input type="radio" name="" id="">
                            <label class="default" for="">Chọn Nổi Bật</label>
                        </li>
                        <li>
                            <input type="radio" name="" id="" value="1">
                            <label for="">Có</label>
                        </li>
                        <li>
                            <input type="radio" name="" id="" value="0">
                            <label for="">Không</label>
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
                <input type="file" id="insert-img" name="prod_image" />
            </div>
            <div class="sma-r-end">
                <button type="submit" name="add_product" class="btn btn-primary btn-lg">Tạo Sản Phẩm</button>
                <button type="submit" name="cancel" class="btn btn-outline-primary btn-lg">Hủy Tạo</button>
                <div>
                    <h1><?php if(!empty($thongbaothemsanpham)) echo $thongbaothemsanpham;?></h1>
                </div>
            </div>
            
        </form>
    </div>
</div>
</div>
</div>
</section>