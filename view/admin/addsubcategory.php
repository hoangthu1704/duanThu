<div class="sma-right">
    <div class="sma-r-top">
        <div class="sma-rt-left">
            <div class="sma-rt-l-title h3">Thêm Danh Mục Phụ</div>
            <div class="sma-rt-l-content h5" style="color: var(--black-03)">
                Tạo Một Danh Mục Phụ Mới
            </div>
        </div>
    </div>
    <div class="sma-r-bot">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="" class="h6">Danh Mục</label>
                <div class="select-input p2-regular-18">
                    <button class="select-input-button" type="button">
                        <span class="select-input-button-value p2-regular-18">Chọn Danh Mục</span>
                        <span class="select-input-button-arrow"></span>
                    </button>
                    <ul class="select-input-dropdown">
                        <li>
                            <input type="search" name="subcat_catelogy" value="1" id="" placeholder="Vui Lòng Nhập Từ Tìm Kiếm">
                        </li>
                        <li>
                            <input type="radio" name="" id="phu">
                            <label class="default" for="phu">Chọn Danh Mục</label>
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
            <div class="form-group">
                <label for="" class="h6">Tên Danh Mục Phụ</label>
                <input type="text" name="subcat_name" id="" class="form-control form-lg" placeholder="Nhập Tên Danh Mục Phụ">
            </div>
            <div class="sma-rb-item form-floating m-0 mt-16">
                <label for="floatingTextarea2" style="position: relative; padding: 0" class="h6">Mô Tả</label>
                <textarea name="subcat_description" class="form-control" placeholder="Nhập Mô Tả Danh Mục" id="floatingTextarea2" style="height: 150px"></textarea>
            </div>
            <div class="sma-r-end">
                <button type="submit" name="add_subCategory" class="btn btn-primary btn-lg">Tạo Danh Mục Phụ</button>
                <button type="submit" name="cancel" class="btn btn-outline-primary btn-lg">Hủy Tạo</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</section>