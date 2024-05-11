<form action="" method="post">
<div class="big_frame">

    <!-- --------------tiêu đề-------------- -->
    <div class="frame_title">
        <div class="title">
            <button type="button" class="btn btn-primary">Đơn hàng</button>
        </div>
    </div>
    <!-- ------------------------------------ -->

    <div class="frame_body">
        <!-- ------------cột bên trái----------- -->
        <div class="frame_left">
            <div class="content_cate">
                <!-- <a href="?mod=page&act=thongtin">
                    <p class="p2-regular-18">Thông tin</p>
                </a> -->
                <a href="?mod=page&act=donhang">
                    <p class="p2-regular-18">Đơn hàng</p>
                </a>
                <!-- <a href="?mod=page&act=editthongtin">
                    <p class="p2-regular-18">Sửa thông tin</p>
                </a> -->
                <!-- <a href="?mod=page&act=donhanghuy">
                    <p class="p2-regular-18">Đơn hàng đã hủy</p>
                </a> -->
                <a href="?mod=page&act=donhang&trangthai=huydon">
                    <p class="p2-regular-18">Đơn hàng đã hủy</p>
                </a>
            </div>
        </div>
        <!-- ------------------------------------------ -->

        <!-- ------------cột bên phải----------- -->
        
        <div class="frame_right">
            <!-- nếu biến hienthanhyeucai == true sẽ hiển thị form này, còn false thì ngược lại -->
            <?php if(isset($hienthanhyeucai) && $hienthanhyeucai){?>
                <div style="display: flex;">
                    <input type="text" name="noidunghuydon" placeholder="Vì sao bạn muốn hủy đơn hàng......." style="width: 300px; outline: none" class="form-control">
                    <button type="submit" name="guiyeucauhuydon" style="margin-left: 20px;" class="btn btn-outline-primary">gửi yêu cầu</button>
                </div>
            <?php } ?>
            <h1><?php if(isset($thongbao_huydon)) echo $thongbao_huydon; ?></h1>
            
            <div class="content_right">
                <div class="title_dm">
                        <table style="border-collapse: collapse; width: 100%;">
                            <thead>
                                <tr>
                                    <th style="width: 10%;">Mã hàng hóa</th>
                                    <th style="width: 25%;">Thông tin sản phẩm</th>
                                    <th style="width: 5%;">Thông tin khách hàng</th>
                                    <th style="text-align: center; width: 12%;">Yêu cầu đơn hàng</th>
                                    <th>Trạng thái</th>
                                    <th>tổng tiền đơn hàng</th>
                                    <th style="width: 10%;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // kiểm tra nếu có user sẽ thực thi các lệnh sau
                                if (isset($_SESSION['user'])) {
                                    if ($kiemtradonhanguser) {
                                        // biến P dùng để điếm có bao nhiêu sản phẩm có trong đơn hàng
                                        $p = 0;
                                        // biến O dùng để hiển thị từng loại giá trị của sản phẩm đó
                                        // vd: các số 0 1 2 trước chữ Array đó chính là chữ O
                                        // Array
                                        // (
                                        //     [0] => Array
                                        //         (
                                        //             [0] => ten_sp
                                        //             [1] => gia_sp
                                        //         )
                                        //     [1] => Array
                                        //         (
                                        //             [0] => ten_sp
                                        //             [1] => gia_sp
                                        //         )
                                        //     [2] => Array
                                        //         (
                                        //             [0] => ten_sp
                                        //             [1] => gia_sp
                                        //         )
                                        // )
                                        $o = 0;
                                        // dùng vòng lặp để hiển thị ra các đơn hàng
                                        foreach ($kiemtradonhanguser as $kth) :
                                ?>
                                            <tr>
                                                <td>
                                                    <p style="margin-bottom: 10px;"><?= $kth['ma_donhang'] ?></p>
                                                    <p><?= $kth['ngay_tao'] ?></p>
                                                </td>
                                                <td>
                                                <!-- <div class="product-info-container"> -->
                                                    <?php
                                                    // biến O sẽ được cộng 1 sau mỗi vòng lặp này
                                                    // count($mangstart[$p]) dùng để đếm có bao nhiêu sản phẩm trong một đơn hàng đó 
                                                    // biến P tăng lên 1 sau khi sau khi chạy xong đơn hàng thứ nhất
                                                    // từ đó dùng vòng lặp O để hiển thị thông tin
                                                    // vd: $thongtinsanpham_donhang_user[0][1] : là hình ảnh
                                                    for ($u = 0; $u < count($mangstart[$p]); $u++) {
                                                    ?>
                                                        <div style="display: flex; flex-direction: column;">
                                                            <img height="80px" width="80px" src="assets/images/<?= $thongtinsanpham_donhang_user[$o][1] ?>" alt="">
                                                            <p class="product-info-container" style=""><?php echo $thongtinsanpham_donhang_user[$o][2] . ' - ' . $thongtinsanpham_donhang_user[$o][3] . ' - ' . $thongtinsanpham_donhang_user[$o][4] . ' - ' . 'số lượng (' . $thongtinsanpham_donhang_user[$o][5] . ') - ' . number_format($thongtinsanpham_donhang_user[$o][6],0,'.','.') . ' VND'?></p>
                                                        </div>
                                                    <?php
                                                    // biến O cộng 1
                                                        $o++;
                                                    }
                                                    ?>
                                                    <!-- </div> -->
                                                </td>
                                                <td style="padding-left: 10px; padding-right: 10px;">
                                                    <p>Họ tên: <?= $kth['ho_ten'] ?></p>
                                                    <p>Địa chỉ: <?= $kth['dia_chi'] ?></p>
                                                    <p>Sdt: <?= $kth['number_phone'] ?></p>
                                                    <p>Email: <?= $kth['email'] ?></p>
                                                </td>
                                                <td>
                                                    <p><?= $kth['ghi_chu_donhang'] ?></p>
                                                </td>
                                                <td>
                                                    <p><?= $kth['trang_thai'] ?></p>
                                                </td>
                                                <td style="text-align: center;"><?= number_format($kth['tong_tien'], 0, '.', '.') ?> VND</td>
                                                <td>
                                                    <div style="display: flex; flex-direction:column;">
                                                        <a href="?mod=page&act=detail_invoice&madonhang=<?= $kth['ma_donhang'] ?>" class="btn btn-outline-primary" style="margin-bottom: 5px;">Chi Tiết</a>
                                                        <?php
                                                        // nếu cột yeu_cau_huy_donhang có giá trị thì nút hủy đơn sẽ biến mất và ngược lại
                                                        if(empty($kth['yeu_cau_huy_donhang'])){
                                                        ?>
                                                            <button type="submit" name='yeucauhuydon' value="<?= $kth['id_donhang'] ?>" class="btn btn-danger">Hủy Đơn</button>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </td>
                                            </tr>
                                <?php
                                            $p++;
                                        endforeach;
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        
                </div>
                <h1 style='margin: 20px 0;'><?php if (isset($thongbao_donhang)) echo $thongbao_donhang; ?></h1>
            </div>
        </div>
        <!-- ------------------------------------------ -->
    </div>
</div>
</form>
<script src="assets/js/global.js"></script>