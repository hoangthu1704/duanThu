<div class="sma-right">
    <div class="sma-r-top">
        <div class="sma-rt-left">
            <div class="sma-rt-l-title h3">Thêm Mã Giảm Giá</div>
            <div class="sma-rt-l-content h5" style="color: var(--black-03)">
                Tạo Một Thêm Mã Giảm Giá Mới
            </div>
        </div>
    </div>
    <div class="sma-r-bot">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="" class="h6">Tên Mã Giảm Giá</label>
                <input type="text" name="TenMaGiamGia" id="" class="form-control form-lg" placeholder="Nhập Tên Mã Giảm Giá">
            </div>
            <div class="form-group">
                <label for="" class="h6">Loại Giảm Giá</label>
                <div class="select-input p2-regular-18">
                    <button class="select-input-button" type="button">
                        <span class="select-input-button-value p2-regular-18">Chọn Loại Giảm Giá</span>
                        <span class="select-input-button-arrow"></span>
                    </button>
                    <ul class="select-input-dropdown">
                        <li>
                            <input type="search" name="LoaiGiamGia" id="" placeholder="Vui Lòng Nhập Từ Tìm Kiếm">
                        </li>
                        <li>
                            <input type="radio" name="" id="">
                            <label class="default" for="">Chọn Loại Giảm Giá</label>
                        </li>
                        <li>
                            <input type="radio" name="" id="" value="0">
                            <label for="">Phần Trăm</label>
                        </li>
                        <li>
                            <input type="radio" name="" id="" value="1">
                            <label for="">Giá Trị</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="form-group mt-16 m-0">
                <label for="" class="h6">Giá Trị</label>
                <input type="number" name="GiaTri" id="" class="form-control form-lg" placeholder="Nhập Giá Trị Mã Giảm Giá">
            </div>
            <div class="form-group mt-16">
                <label for="" class="h6">Số Lượng</label>
                <input type="number" name="SoLuong" id="" class="form-control form-lg" placeholder="Nhập Số Lượng Mã Giảm Giá">
            </div>
            <div class="form-group m-0 mt-16">
                <label for="" class="h6">Trạng Thái</label>
                <div class="select-input p2-regular-18">
                    <button class="select-input-button" type="button">
                        <span class="select-input-button-value p2-regular-18">Chọn Trạng Thái</span>
                        <span class="select-input-button-arrow"></span>
                    </button>
                    <ul class="select-input-dropdown">
                        <li>
                            <input type="search" name="TrangThai" id="" placeholder="Vui Lòng Nhập Từ Tìm Kiếm">
                        </li>
                        <li>
                            <input type="radio" name="" id="">
                            <label class="default" for="">Chọn Trạng Thái</label>
                        </li>
                        <li>
                            <input type="radio" name="" id="" value="1">
                            <label for="">Có Hiệu Lực</label>
                        </li>
                        <li>
                            <input type="radio" name="" id="" value="0">
                            <label for="">Không Có Hiệu Lực</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sma-r-end">
                <button type="submit" name="add_discount" class="btn btn-primary btn-lg">Tạo Mã Giảm Giá</button>
                <button type="submit" name="cancel" class="btn btn-outline-primary btn-lg">Hủy Tạo</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</section>