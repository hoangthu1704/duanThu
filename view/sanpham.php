<!-- <body> -->
<section class="sanpham">
    <div style="margin-top: 48px;" class="container_sanpham">
        <div class="big_frame">
            <div class="frame_left">
                <!-- ---------------------------khung chọn mức giá----------------------- -->
                <div class="frame_checkbox">
                    <div class="title h3" style="text-transform:uppercase;">loại sản phẩm</div>
                    <div class="content">
                        <form method="post" class="padding-12px-1px" action="">
                            <?php
                            foreach ($show_cac_danh_muc as $loai) :
                                extract($loai);
                            ?>
                                <div class="checkbox-group">
                                    <input type="radio" name="loaisp" value="<?= $id_danhmuc ?>" class="form-radio submit_loaisp" id="">
                                    <div class="radio-content p1-regular-24 "><?= $TenDanhMuc ?></div>
                                </div>
                            <?php
                            endforeach;
                            ?>
                        </form>
                    </div>
                </div>
                <!-- -------------------------------------------------- -->

                <!-- ---------------------------khung tuổi vàng----------------------- -->
                <div class="frame_checkbox">
                    <div class="title h3" style="text-transform:uppercase;">giá sản phẩm</div>
                    <div class="content">
                        <form method="post" class="padding-12px-1px" action="">
                            <?php
                            // dùng vòng lặp để in ra giá min và giá max
                            $j = 1;
                            for ($i = 0; $i < 6; $i++) {
                                // hàm round dùng để làm tròn 2 đầu giá trị
                                // sau đó in ra màng hình
                                // biến J sẽ đi trước biến I để có thể lấy ra giá trị lớn hơn
                                $gianho = round($giadaduocchia * $i);
                                $gialon = round($giadaduocchia * $j);
                            ?>
                                <div class="checkbox-group">
                                    <input type="radio" value="<?= $gianho ?> - <?= $gialon ?>" name="lc_gia_sp" class="form-radio submit_giasp" id="">
                                    <div class="radio-content p1-regular-24 "><?= number_format($gianho, 0, '.', '.') ?> - <?= number_format($gialon, 0, '.', '.') ?> VND</div>
                                </div>
                            <?php
                                $j++;
                            }
                            ?>
                        </form>
                    </div>
                </div>
                <!-- -------------------------------------------------- -->
            </div>

            <div class="frame_right">
                <div class="toolbar_filter">
                    <div style="font-size: 24px;">TRANG SỨC</div>
                    <!-- <div class="icon_filter">
                        <div class="sapxep">
                            <div class="flexx_al p1-regular-24">
                                <i class="fa-solid fa-arrow-down-wide-short"></i>
                                <h4 style="margin: 0; margin-left:10px;">SẮP XẾP:</h4>
                            </div>
                        </div>
                        <div class="flexx_al drop_down">
                            <form action="?mod=page&act=sanpham" method="post" multiple="true" class="flexx">
                                <select class="custom_sl_op" class="p1-regular-20" name="sap_xep">
                                    <option value="">Mặc định</option>
                                    <option value="giagiam">Giá tăng dần</option>
                                    <option value="giatang">Giá giảm dần</option>
                                </select>
                                <button type="submit" name="loc" class="bt_lc">Lọc sản phẩm</button>
                            </form>
                        </div>
                    </div> -->
                </div>

                <div class="product_frame">
                    <div class="products">
                        <?php 
                        // trường hợp có sản phẩm phù hợp với các yêu cầu lọc thì sẽ hiển trị ra màng hình
                        if(!empty($show_sp_timkiem)){
                        foreach ($show_sp_timkiem as $sp) : ?>
                        
                            <div class="frame_pd_sp">
                                <img src="assets/images/<?= $sp['HinhAnh'] ?>" alt="" class="card-img">
                                <div class="card-product-header">
                                    <div class="card-product-title h6">
                                        <?= $sp['TenSanPham'] ?>
                                    </div>
                                </div>
                                <div class="card-product-body">
                                    <div class="card-product-text h4">
                                        <?= number_format($sp['Gia'],0,'.','.') ?> VND
                                    </div>
                                    <div class="buynow_addcart">
                                        <div class="addcart">
                                            <a href="?mod=page&act=productDetails&idsp=<?= $sp['id_sanpham'] ?>">
                                                <button type="button" class="btn btn-outline-primary btn-icon" style="padding: 10px 30px;">
                                                    Xem Chi TiếT
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php 
                        endforeach; 
                        }
                        // nếu không có sản phẩm nào phù hợp với yêu cầu lọc sẽ hiển thị ra thông báo
                        else{
                            
                        ?>
                    </div>
                    <?php
                        echo '<h1>Không tìm thấy sản phẩm hợp lệ</h1>';
                    }
                    ?>
                </div>
                <div class="frame_nx_tab">
                    <ul class="pagination">
                        <?php
                        // nút này sẽ hiển thị khi page trên url lớn 1
                        if ($page > 1) {
                            $luitrang = $page - 1;
                        ?>
                            <a href="?mod=page&act=sanpham&page=<?= $luitrang ?><?=$tham_tinh?>" class="page-item icon-left">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_580_6313)">
                                        <path d="M0.503209 11.0184C-0.166434 11.6043 -0.166434 12.5559 0.503209 13.1418L9.07464 20.6418C9.74428 21.2277 10.8318 21.2277 11.5014 20.6418C12.1711 20.0559 12.1711 19.1043 11.5014 18.5184L5.84964 13.5777H22.2854C23.2336 13.5777 23.9996 12.9074 23.9996 12.0777C23.9996 11.248 23.2336 10.5777 22.2854 10.5777H5.85499L11.4961 5.63711C12.1657 5.05117 12.1657 4.09961 11.4961 3.51367C10.8264 2.92773 9.73892 2.92773 9.06928 3.51367L0.497852 11.0137L0.503209 11.0184Z" fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_580_6313">
                                            <rect width="24" height="24" fill="white" transform="translate(0 0.078125)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <?php
                        }
                        // nút này sẽ hiển thị khi page trên url lớn 2
                        if($page > 2){
                        ?>
                            <a href="javascript:void(0)" class="page-item icon-right sophantrang">
                                ...
                            </a>
                        <?php
                        }
                        // dùng vòng lặp để hiển thị ra tất cả các nút
                        for ($i = 1; $i <= $lamtronsotrang; $i++) {
                            // nếu biến i khác với url page sẽ thực thi các lệnh sau
                            if ($i != $page) {
                                // hạn chế số nút được hiển thị ra màng hình, gần với giá trị page trên url
                                // vd: page = 2 thì số nút sẽ hiển thị là 1 3 
                                if ($i > $page - 2 && $i < $page + 2) {
                            ?>
                                <a href="?mod=page&act=sanpham&page=<?= $i ?><?=$tham_tinh?>" class="page-item icon-right sophantrang" value="icon-right">
                                    <?= $i ?>
                                </a>
                            <?php
                                }
                            }
                            // nếu biến i bằng với url page thì nút sẽ được tô xanh lên
                            else {
                            ?>
                                <a href="?mod=page&act=sanpham&page=<?= $i ?><?=$tham_tinh?>" style="background-color: var(--green-04);" class="page-item icon-right sophantrang" value="icon-right">
                                    <?= $i ?>
                                </a>
                            <?php
                            }
                        }
                        // nút này sẽ được hiển thị khi page nhỏ hơn tổng số trang -1
                        if($page < $lamtronsotrang - 1){
                        ?>
                            <a href="javascript:void(0)" class="page-item icon-right sophantrang">
                                ...
                            </a>
                        <?php
                        }
                        // nút này sẽ được hiển thị khi page nhỏ hơn tổng số trang 
                        // vd: tổng số trang bằng 3 thì page từ 1 đến 2 sẽ hiển thị ra
                        if ($page < $lamtronsotrang) {
                            $trangtiep = $page + 1;
                            ?>
                            <a href="?mod=page&act=sanpham&page=<?= $trangtiep ?><?=$tham_tinh?>" class="page-item icon-right">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.4964 13.059C24.1661 12.473 24.1661 11.5215 23.4964 10.9355L14.925 3.43555C14.2554 2.84961 13.1679 2.84961 12.4982 3.43555C11.8286 4.02148 11.8286 4.97305 12.4982 5.55898L18.15 10.4996H1.71429C0.766071 10.4996 0 11.1699 0 11.9996C0 12.8293 0.766071 13.4996 1.71429 13.4996H18.1446L12.5036 18.4402C11.8339 19.0262 11.8339 19.9777 12.5036 20.5637C13.1732 21.1496 14.2607 21.1496 14.9304 20.5637L23.5018 13.0637L23.4964 13.059Z" fill="#028C35" />
                                </svg>
                            </a>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
</section>
<script>
    <?php include_once 'assets/js/submit_radio.php'; ?>
</script>