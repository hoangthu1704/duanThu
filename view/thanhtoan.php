<form action="" method="post">
    <div class="caichung">
        <div class="left">
            <div style="border: var(--boder-full-gray3);width:700px; border-radius:5px 5px 5px 5px; height: auto;align-items: center;box-shadow: 3px 3px var(--gray-3);">
                <h5 style="padding: 20px 20px 20px 20px;">Địa chỉ giao hàng</h5>
                <hr style="margin-left: 20px;">
                <div class="thongtin">
                    <h6 style="padding: 5px 5px 5px 5px;">Họ và tên người nhận</h6>
                    <div>
                        <input name="hoten" value="<?php if (isset($_SESSION['user'])) echo $_SESSION['user']['UserName']; ?>" style="margin-left: 10px;" type="text" class="input-all" placeholder="nhập họ và tên">
                    </div>
                </div>
                <div class="thongtin">
                    <h6 style="padding: 5px 5px 5px 5px;">Email</h6>
                    <div>
                        <input name="email" value="<?php if (isset($_SESSION['user'])) echo $_SESSION['user']['Email']; ?>" style="margin-left: 10px;" type="email" class="input-all" placeholder="Nhập Email">
                    </div>
                </div>
                <div class="thongtin">
                    <h6 style="padding: 5px 5px 5px 5px;">Số điện thoại</h6>
                    <div>
                        <input name="numphone" value="<?php if (isset($_SESSION['user'])) echo $_SESSION['user']['MobileNumber']; ?>" style="margin-left: 10px;" type="number" class="input-all" placeholder="Nhập số điện thoại gồm 10 số">
                    </div>
                    <!-- <p class="p5" style="color: var(--red-5);margin-left: var(--pg-38);">Nhập sai số điện thoại</p> -->
                </div>
                <div class="thongtin">
                    <h6 style="padding: 5px 5px 5px 5px;">Địa chỉ nhận hàng</h6>
                    <div>
                        <input name="address" style="margin-left: 10px;" type="text" class="input-all" placeholder="Nhập địa chỉ giao hàng">
                    </div>
                </div>
                <div class="thongtin">
                    <h6 style="padding: 5px 5px 5px 5px;">Ghi chú đơn hàng</h6>
                    <div>
                        <input name="noteorder" style="margin-left: 10px;" type="text" class="input-all" placeholder="Nhập ghi chú">
                    </div>
                </div>
            </div>
            <div class="pttt" style="border: var(--boder-full-gray3);border-radius:5px 5px 5px 5px; height: auto;align-items: center;box-shadow: 3px 3px var(--gray-3);">
                <h5 style="padding: 20px 20px 20px 20px;">Phương thức thanh toán</h5>
                <hr style="margin-left: 20px;">
                <div class="hanhdong">
                    <input type="radio" value="Ví Momo" name="ptthanhtoan">
                    <p class="p2" style="margin-left: 10%;">Ví Momo</p>
                </div>
                <!-- <div class="hanhdong">
                    <input type="radio" value="ATM/Internet Banking" name="ptthanhtoan">
                    <p class="p2" style="margin-left: 10%;">ATM/Internet Banking</p>
                </div>
                <div class="hanhdong">
                    <input type="radio" value="Visa/Master card" name="ptthanhtoan">
                    <p class="p2" style="margin-left: 10%;">Visa/Master card</p>
                </div> -->
                <div class="hanhdong">
                    <input type="radio" value="Thanh toán bằng tiền mặt khi nhận hàng" name="ptthanhtoan">
                    <p class="p2" style="margin-left: 10%;">Thanh toán bằng tiền mặt khi nhận hàng</p>
                </div>
            </div>
            <!-- <div style="border: var(--boder-full-gray3); width:700px;border-radius:5px 5px 5px 5px; height: auto;align-items: center;box-shadow: 3px 3px var(--gray-3);margin-top: 20px;">
                <div class="credit">
                    <h6 style="padding: 5px 5px 5px 5px;">Họ và tên</h6>
                    <h6 style="padding: 5px 5px 5px 5px; margin-left: 210px;">Ngày hết hạn</h6>
                </div>
                <div class="credit-text">
                    <input style="margin-left: 10px;" type="text" class="input-all" placeholder="nhập họ và tên">
                    <input style="margin-left: 50px;" type="text" class="input-all" placeholder="09/25">
                </div>
                <div class="credit">
                    <h6 style="padding: 5px 5px 5px 5px;">Số thẻ</h6>
                    <h6 style="padding: 5px 5px 5px 5px; margin-left: 240px;">CVV</h6>
                </div>
                <div class="credit-text">
                    <input style="margin-left: 10px;" type="text" class="input-all" placeholder="9898 9898 9898 9898">
                    <input style="margin-left: 50px;" type="text" class="input-all" placeholder="***">
                </div>
                <button class="bt-all bt-yellow" style="margin-left: 250px;margin-top: 30px;margin-bottom: 30px">Kiểm tra</button>
            </div> -->
        </div>
    </div>
    <div class="right">
        <div style="border: var(--boder-full-gray3);width:700px; height: auto;border-radius:5px 5px 5px 5px;box-shadow: 3px 3px var(--gray-3);">
            <div class="total">
                <h5 style="margin-top: 20px;margin-bottom: 20px;">Kiểm tra đơn hàng</h5>

                <?php
                if (!empty($_SESSION['thanhtoan'])) {
                    $tongtientt = 0;
                    foreach ($_SESSION['thanhtoan'] as $tt) :
                ?>
                        <hr class="ngang">
                        <div class="check" style="margin-top: 20px;">
                            <img class="image-check" src="assets/images/<?= $tt['ha'] ?>" alt="">
                            <h6><?= $tt['ten'] ?></h6>
                            <h6><?= $tt['sz'] ?> - <?= $tt['chl'] ?></h6>
                            <h6 style="width: 30px;">x<?= $tt['sl'] ?></h6>
                            <h6><?php echo number_format($tt['gia'], 0, '.', '.') ?></h6>
                        </div>
                <?php
                        $tongtientt += $tt['gia'];
                    endforeach;
                } else {
                    echo "chưa có sẳn phẩm nào thanh toán";
                }
                ?>

                <hr class="ngang">
                <div class="check" style="margin-top: 20px;">
                    <h6 style="width: 200px;">Tổng sản phẩm</h6>
                    <h6 style="margin-left: auto;"><?php if(!empty($_SESSION['thanhtoan'])) echo number_format($tongtientt, 0, '.', '.') . ' VND';else{echo 0;} ?></h6>
                </div>
                <hr class="ngang">
                <?php
                    if(isset($_SESSION['giamgianhe']) && !empty($_SESSION['giamgianhe'])){
                ?>
                <div class="check" style="margin-top: 20px;">
                    <h6 style="width: 200px;">Giảm giá</h6>
                    <h6 style="margin-left: auto;"><?=number_format($_SESSION['giamgianhe'],0,'.','.')?> VND</h6>
                </div>
                <hr class="ngang">
                <?php
                    }
                ?>
                <div class="check" style="margin-top: 20px;">
                    <h6 style="width: 200px;">Tổng đơn hàng</h6>
                    <h6 style="margin-left: auto;"><?php 
                                                        if(isset($_SESSION['giamgianhe']) && !empty($_SESSION['giamgianhe']) && !empty($_SESSION['thanhtoan'])){
                                                            $tongtiencanthanhtoan = $tongtientt - $_SESSION['giamgianhe'];
                                                        }else if(!empty($_SESSION['thanhtoan'])){
                                                            $tongtiencanthanhtoan = $tongtientt;
                                                        }
                                                        if (!empty($_SESSION['thanhtoan'])){
                                                            if($tongtiencanthanhtoan < 1){
                                                                echo 0 . ' VND';
                                                            }else{
                                                                echo number_format($tongtiencanthanhtoan, 0, '.', '.') . ' VND';
                                                            }
                                                        }else{
                                                            echo 0;
                                                        }
                                                             
                                                    ?></h6>
                </div>
                <div style="text-align: center;">
                    <?php if(isset($thongbao_thanhtoan)) echo $thongbao_thanhtoan;?>
                </div>
                <input type="hidden" value="<?php if($tongtiencanthanhtoan < 1){echo 0;}else{ echo $tongtiencanthanhtoan;} ?>" name="tongtien">
                <button type="submit" name="xacnhan" class="bt-all bt-yellow" style="margin-left: 33%;margin-top: 5%;margin-bottom: 10%;">Xác nhận thanh toán</button>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    </div>
</form>