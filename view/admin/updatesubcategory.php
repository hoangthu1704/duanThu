<div class="sma-right">
    <div class="sma-r-top">
        <div class="sma-rt-left">
            <div class="sma-rt-l-title h3">Cập Nhật Danh Mục Phụ</div>
        </div>
    </div>
    <div class="sma-r-bot">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="" class="h6">Danh Mục</label>
                <div class="select-input p2-regular-18">
                    <?php $cat_by_id = getCatelogyById($show_subCat_id['MaDanhMuc']) ?>
                    <button class="select-input-button" type="button">
                        <span class="select-input-button-value p2-regular-18"><?= $cat_by_id['TenDanhMuc'] ?></span>
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
                <input type="text" name="subcat_name" id="" class="form-control form-lg" placeholder="Nhập Tên Danh Mục Phụ" value="<?= $show_subCat_id['TenDanhMuc'] ?>">
            </div>
            <div class="sma-rb-item form-floating m-0 mt-16">
                <label for="floatingTextarea2" style="position: relative; padding: 0" class="h6">Mô Tả</label>
                <textarea name="subcat_description" class="form-control" placeholder="Nhập Mô Tả Danh Mục" id="floatingTextarea2" style="height: 150px"><?= $show_subCat_id['Description'] ?></textarea>
            </div>
            <div class="sma-r-end">
                <button type="submit" name="update_subCategory" class="btn btn-primary btn-lg">Cập Nhật Danh Mục Phụ</button>
                <button type="submit" name="cancel" class="btn btn-outline-primary btn-lg">Hủy Cập Nhật</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</section>