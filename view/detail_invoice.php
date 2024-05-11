<?php
if(isset($madonhang) && $show_order_one){
?>
    
    <div class="frame_all">
        <div class="mrb_48">
            <h1 class="font-recursive weight-relugar mrb_38">HÓA ĐƠN CHI TIẾT</h1>
            <div>
                <p class="p1 mrb_25">Thời gian lập hóa đơn: <?= $show_order_one['ngay_tao'] ?> </p>
                <p class="p1">Mã hóa đơn: <?= $show_order_one['ma_donhang'] ?></p>
            </div>
        </div>
        <div class="mrb_48">
            <h2 class="font-recursive weight-relugar mrb_38">Thông tin của bạn</h2>
            <div>
                <p class="p1 mrb_25">Họ tên: <?= $show_order_one['ho_ten'] ?></p>
                <p class="p1 mrb_25">Email: <?= $show_order_one['email'] ?></p>
                <p class="p1 mrb_25">Địa chỉ: <?= $show_order_one['dia_chi'] ?></p>
                <p class="p1 mrb_25">Số điện thoại: <?= $show_order_one['number_phone'] ?></p>
                <p class="p1 mrb_25">Phương thức thành toán: <?= $show_order_one['phuong_thuc_thanh_toan'] ?></p>
                <?php
                if(isset($show_order_one['yeu_cau_huy_donhang']) && !empty($show_order_one['yeu_cau_huy_donhang'])){
                ?>
                <p class="p1 mrb_25">Yêu cầu hủy đơn hàng: <?= $show_order_one['yeu_cau_huy_donhang'] ?></p>
                <?php
                }
                ?>
                <p class="p1 mrb_25">Trạng thái: <?= $show_order_one['trang_thai'] ?></p>
                <p class="p1 mrb_25">Ghi chú đơn hàng: <?= $show_order_one['ghi_chu_donhang'] ?></p>
            </div>
        </div>
        <div class="mrb_48">
            <h2 class="font-recursive weight-relugar">Sản phẩm đã đặt</h2>
            <div class="dis_col mrt_20">
                <table style="border-collapse: collapse; width: 100%;">
                    <thead>
                        <tr>
                            <th style="width: 45%;">Thông tin sản phẩm</th>
                            <th>Thông số</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($thongtinsanpham as $tt) :
                        ?>
                            <tr>
                                <td>
                                    <div class="flex">
                                        <img height="86" width="86" src="assets/images/<?= $thongtinsanpham[$i][1] ?>" alt="">
                                        <p class="p4 name_prd"><?= $thongtinsanpham[$i][2] ?></p>
                                    </div>
                                </td>
                                <td><?= $thongtinsanpham[$i][3] ?> - <?= $thongtinsanpham[$i][4] ?></td>
                                <td><?= $thongtinsanpham[$i][5] ?></td>
                                <td><?= $thongtinsanpham[$i][6] ?></td>
                            </tr>
                        <?php
                            $i++;
                        endforeach;
                        ?>
                    </tbody>
                </table>
                <div class="frame_total">
                    <h4 class="weight-medium">Tổng tiền: <?php echo number_format($show_order_one['tong_tien'], 0, '.', '.'); ?> VND</h4>
                </div>
            </div>
            <div class="frame_bt_src">
                <a href="?mod=page&act=home" class="bt-all bt-boder-yellow bt-big weight-relugar wth_196">Trang Chủ</a>
                <?php
                if(isset($_SESSION['user'])){
                ?>
                <a href="?mod=page&act=thongtin" style="text-align: center;" class="bt-all bt-yellow bt-big weight-relugar wth_196">Thông tin cá nhân</a>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="frame_ft">
            <div class="dis-ju pd_64">
                <div class="frame_ava_ft">
                    <div class="mrb_20 flex">
                        <div class="frame_img_ft">
                            <img src="assets/img/logo.png" class="img_logo" alt="">
                        </div>
                        <div class="mrl_24">
                            <h2 class="weight-medium font-recursive">Super Wow</h2>
                        </div>
                    </div>
                    <div>
                        <h3 class="weight-medium">công ty bán áo mưa</h3>
                    </div>
                </div>
                <div class="frame_intro_ft">
                    <p class="p4 mrb_20">666-3/4, hẻm cụt, quận cam, tphcm</p>
                    <p class="p4 mrb_20">khongbietemaillagiluon@ superwow.com</p>
                    <p class="p4">06666666666</p>
                </div>
            </div>
        </div>
    </div>
<?php
}
else{
    echo "<div style='margin: 20px 0; text-align: center; width: 100%;'><h1>Trang này không tồn tại!</h1></div>";
}
?>