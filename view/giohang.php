<form action="" method="post" style="display: flex;
    justify-content: center;">
    <div class="caichung" >
        <div>
            <div style="border: var(--boder-full-gray3); border-radius: 5px 5px 5px 5px; height: 50px; display: grid; align-items: center; box-shadow: 3px 3px var(--gray-3); margin-top: 20px; grid-template-columns: 2fr 1fr 1fr 1fr 1fr 1fr;">
                <h6 style="margin-left:150px ;">Sản phẩm</h6>
                <h6>Tên sản phẩm</h6>
                <h6>Thông số</h6>
                <h6>Đơn giá</h6>
                <h6>Số lượng</h6>
            </div>
            <?php
            if (!isset($_SESSION['user'])) {
                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                    foreach ($show_product_in_cate_ss as $gs) :
                        extract($gs);
                        $timkiem_sanpham = timkiem_sanpham($gs['idsp']);
            ?>
                        <div class="khung_thong_tin_gio_hang">
                            <input name="check_sp_ss[]" class="checkspquabill" value="<?php echo $gs['idsp'] . ' - ' . $gs['chtl'] . ' - ' . $gs['sz'] . ' - ' . $gs['soluong'] . ' - ' . $timkiem_sanpham['HinhAnh'] . ' - ' . $timkiem_sanpham['TenSanPham'] . ' - ' . $gs['tong'] ?>" style="margin-left: 20px;" type="checkbox">
                            <div class="cart-product">
                                <img src="assets/images/<?= $timkiem_sanpham['HinhAnh'] ?>" alt="" class="img-cart">
                            </div>
                            <p4 class="weight-medium" style="text-align: center;"><?= $timkiem_sanpham['TenSanPham'] ?></p4>
                            <p4 class="weight-medium"><?= $gs['sz'] ?> - <?= $gs['chtl'] ?></p4>
                            <p4 class="weight-medium"><?= number_format($gs['tong'],0,'.','.') ?> VND</p4>
                            <div class="soluong">
                                <button type="submit" value="<?php echo $gs['soluong'] .' - '. $gs['idsp'] ?>" name="giamsoluongsp_ss" class="cr_p" style="background: transparent; border: none;"><img src="assets/images/image 20.png" alt=""></button>
                                <h6 style="margin-left: 20px; margin: 15px;"><?= $gs['soluong'] ?></h6>
                                <button type="submit" value="<?= $gs['idsp'] ?>" name="tangsoluongsp_ss" class="cr_p" style="background: transparent; border: none;"><img src="assets/images/image 19.png" alt=""></button>
                            </div>
                            <div>
                                <button type="submit" value="<?= $gs['idsp'] ?>" name="remove_pd_ss" style="outline: none; border:none; background:transparent;"><i><img src="assets/images/image 13.png" alt=""></i></button>
                            </div>
                        </div>
                    <?php
                    endforeach;
                } else {
                    echo "<h1 style='margin: 20px 0px;'>CHƯA CÓ SẢN PHẨM NÀO TRONG GIỎ HÀNG</h1>";
                }
            } else {
                if (!empty($show_product_in_cate)) {
                    foreach ($show_product_in_cate as $gh) :
                        extract($gh);
                    ?>
                        <div class="khung_thong_tin_gio_hang">
                            <input name="check_sp[]" class="checkspquabill" value="<?php echo $SanPham_id . ' - ' . $chatlieu . ' - ' . $kichthuoc . ' - ' . $SoLuong . ' - ' . $HinhAnh . ' - ' . $TenSanPham . ' - ' . $Tong ?>" style="margin-left: 20px;" type="checkbox">
                            <div class="cart-product">
                                <img src="assets/images/<?= $HinhAnh ?>" alt="" class="img-cart">
                            </div>
                            <p4 class="weight-medium" style="text-align: center;"><?= $TenSanPham ?></p4>
                            <p4 class="weight-medium"><?= $kichthuoc ?> - <?= $chatlieu ?></p4>
                            <p4 class="weight-medium"><?= number_format($Tong, 0, '.', '.') ?> VND</p4>
                            <div class="soluong">
                                <button type="submit" value="<?php echo $NguoiDung_id . ' - ' . $SanPham_id?>" name="giamsoluongsp" class="cr_p" style="background: transparent; border: none;"><img src="assets/images/image 20.png" alt=""></button>
                                <h6 style="margin-left: 20px; margin: 15px;"><?= $SoLuong ?></h6>
                                <button type="submit" value="<?php echo $NguoiDung_id . ' - ' . $SanPham_id?>" name="tangsoluongsp" class="cr_p" style="background: transparent; border: none;"><img src="assets/images/image 19.png" alt=""></button>
                            </div>
                            <div>
                                <button type="submit" value="<?php echo $NguoiDung_id . ' - ' . $SanPham_id?>" name="remove_pd" style="outline: none; border:none; background:transparent;"><i><img src="assets/images/image 13.png" alt=""></i></button>
                            </div>
                        </div>
            <?php
                    endforeach;
                } else {
                    echo "<h1 style='margin: 20px 0px;'>CHƯA CÓ SẢN PHẨM NÀO TRONG GIỎ HÀNG</h1>";
                }
            }
            ?>
            <div style="border: var(--boder-full-gray3); width: 480px; height: auto;border-radius:5px 5px 5px 5px;box-shadow: 3px 3px var(--gray-3);margin-top:2%;">
                <h6 style="padding: 5px 5px 5px 5px;">Mã giảm giá</h6>
                <div class="sale">
                    <input style="margin-left: 5%;" name="nhapgiamgia" type="text" class="input-all" placeholder="Nhập mã giảm giá">
                    <button class="bt-all bt-yellow" name="kiemtragiamgia" style="margin-left: 10%;">Kiểm tra</button>
                </div>
                <div style="text-align: center;">
                    <h4><?php if(isset($thongbao_giamgia)) echo $thongbao_giamgia;?></h4>
                </div>
            </div>
        </div>
        <div>
            <div style="border: var(--boder-full-gray3);width:440px; height: auto;border-radius:5px 5px 5px 5px;box-shadow: 3px 3px var(--gray-3);margin-top:20px;">
                <table style="border-collapse: collapse; width: 95%; margin: auto;">
                    <thead>
                        <tr>
                            <th style="width: 50%;">Thông tin sản phẩm</th>
                            <th>Thông số</th>
                        </tr>
                    </thead>
                    <tbody id="bangthongtincheck">
                        <?php
                            if(isset($_SESSION['giamgianhe']) && !empty($_SESSION['giamgianhe'])){
                        ?>
                        <tr>
                            <td>Giảm giá</td>
                            <td><?=number_format($_SESSION['giamgianhe'],0,'.','.')?> VND</td>
                        </tr>
                        <?php
                            }
                        ?>
                        <tr>
                            <td>Tổng tiền</td>
                            <td id="ingiatongtien">0 VND</td>
                        </tr>
                    </tbody>
                </table>
                <button name="thanhtoan" type="submit" class="bt-all bt-yellow" style="margin-left: 33%;margin-top: 10%;margin-bottom: 10%;">Thanh toán</button>
            </div>
        </div>
    </div>
</form>
<div class="clear"></div>
<div class="goiy">
    <h6>Sản phẩm gợi ý</h6>
    <button style="margin-left: auto;margin-right: 5%;" class="bt-all bt-boder-yellow">Xem thêm</button>
</div>
<div class="product">

    <?php
    if((isset($_SESSION['cart']) && !empty($_SESSION['cart'])) || (isset($show_product_in_cate) && !empty($show_product_in_cate))){
    foreach ($show_4_sp_goiy as $foursp):
        extract($foursp);
    ?>
    <div class="card-product card-product-another">
        <img src="assets/images/<?=$HinhAnh?>" alt="" class="card-img">
        <div class="card-product-header">
            <div>
                <h4 class="name_sp_goiy_gh"><?=$TenSanPham?></h4>
            </div>
        </div>
        <div class="card-product-body">
            <div class="card-product-description p1-regular-16"><?=$MoTa?></div>
            <div class="card-product-text" style="color: var(--green-5)">
                <h5><?=number_format($Gia,0,'.','.')?> VND</h5>
            </div>
            <div>
                <a href="?mod=page&act=productDetails&idsp=<?=$id_sanpham?>" class="bt-all bt-yellow" style="margin-left: 25%;">Xem chi tiết</a>
            </div>
        </div>
    </div>
    <?php endforeach; }?>
</div>
<script src="assets/js/giohang.js?v=<?=time()?>"></script>