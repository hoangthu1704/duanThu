
<?php
include_once "smtpemail.php";
$tong_tien = number_format($tongtien, 0, '.', '.');
$logo_sw = 'assets/images/logo.png';

$giadien_donhang = '
                <head>
                <style>
                .frame_all{
                    max-width: 636px; 
                    margin-top: 38px; 
                    margin-left: auto; 
                    margin-right: auto; 
                    color: #3D3D3D;
                }
                .bt-boder-yellow{
                    border: 1px solid #E5E91D;
                    color: #E5E91D;
                    background-color: #FFFFFF;
                }
                .mrb_48{
                    margin-bottom: 48px;
                }
                .font-recursive{
                    font-family: "Recursive", sans-serif;
                    font-optical-sizing: auto;
                }
                .weight-relugar{
                    font-weight: normal;
                }
                .weight-medium{
                    font-weight: 500;
                }
                .mrb_38{
                    margin-bottom: 38px;
                }
                .mrb_20{
                    margin-bottom: 20px;
                }
                .p1{
                    font-size: 24px;
                }
                .mrb_25{
                    margin-bottom: 20px;
                }
                .dis_col{
                    width: 100%
                }
                .mrt_20{
                    margin-top: 20px;
                }
                .flex{
                    display: flex;
                }
                .name_prd{
                    text-align: left; 
                    margin-left: 10px;
                }
                .frame_total{
                    margin-top: 20px;
                }
                .bt-all{
                    cursor: pointer;
                    outline: none;
                    border: none;
                    width: fit-content;
                    border-radius: 5px;
                    padding-left: 16px;
                    padding-right: 16px;
                    font-size: 20px;
                    color: #FFFFFF;
                    box-shadow: rgba(100, 100, 111, 0.2) 4px 4px 2px 1px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    /* màu button thêm vào css riêng của trang đó, vì trang này là css tổng nên không được thêm màu vào */
                }
                .bt-all:active{
                    box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
                }
                .bt-boder-yellow{
                    border: 1px solid #E5E91D;
                    color: #E5E91D;
                    background-color: white;
                }
                .bt-yellow{
                    background-color: #E5E91D;
                }
                .wth_196{
                    width: 196px;
                }
                .frame_ft{
                    background-color: #FDFEDB;
                }
                .frame_ava_ft{
                    margin-right: 110px;
                }
                .frame_img_ft{
                    border-radius: 50%; 
                    width: 86px; height: 86px; 
                    border: 1px solid #E5E91D;
                }
                .img_logo{
                    width: 60px; 
                    padding: 14px;
                }
                .frame_intro_ft{
                    width: 194px;
                }
                .p4{
                    font-size: 16px;
                }
                .mrl_24{
                    margin-left: 24px;
                }
                .dis-ju{
                    display: flex;
                    justify-content: center;
                }
                *{
                    margin: 0;
                    padding: 0;
                    font-family: "Quicksand", sans-serif;
                    font-optical-sizing: auto;
                    color: #3D3D3D;
                }
                h1{
                    font-size: 40px;
                }
                p{
                    font-size: 18px;
                }
                .p5{
                    font-size: 14px;
                }
                h2{
                    font-size: 32px;
                }
                h4{
                    font-size: 24px;
                }
                a{
                    text-decoration: none;
                }
                table, td, th {
                    /* border: 1px solid; */
                    padding-top: 20px;
                    padding-bottom: 20px;
                    border-bottom: 2px solid #B5B4B4;
                    text-align: center;
                }
                .pd_64{
                    padding: 64px 0;
                }

                .frame_bt_src{
                    margin-top: 64px; 
                    margin-bottom: 64px;
                    width: 100%
                }
                </style>
                </head>
                <div class="frame_all">
                <div class="mrb_48">
                    <h1 class="font-recursive weight-relugar mrb_38">HÓA ĐƠN CHI TIẾT</h1>
                    <div>
                        <p class="p1 mrb_25">Thời gian lập hóa đơn: ' . $date . ' </p>
                        <p class="p1">Mã hóa đơn: ' . $numrd . '</p>
                    </div>
                </div>
                <div class="mrb_48">
                    <h2 class="font-recursive weight-relugar mrb_38">Thông tin của bạn</h2>
                    <div>
                        <p class="p1 mrb_25">Họ tên: ' . $hoten . '</p>
                        <p class="p1 mrb_25">Email: ' . $email . '</p>
                        <p class="p1 mrb_25">Địa chỉ: ' . $address . '</p>
                        <p class="p1 mrb_25">Số điện thoại: ' . $numphone . '</p>
                        <p class="p1 mrb_25">Phương thức thành toán: '. $ptthanhtoan .'</p>
                        <p class="p1 mrb_25">Ghi chú đơn hàng: ' . $noteorder . '</p>
                    </div>
                </div>
                <div class="mrb_48">
                    <h2 class="font-recursive weight-relugar">Sản phẩm đã đặt</h2>
                    <div class="dis_col mrt_20">
                        <table style="border-collapse: collapse; width: 100%;">
                            <thead>
                                <tr>
                                    <th style="width: 37%;">Thông tin sản phẩm</th>
                                    <th>Thông số</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>';
$i = 0;
$matrongchuaanh = [];
foreach ($_SESSION['thanhtoan'] as $tt) {
    $manganh = explode('.',$tt['ha']);
    array_push($matrongchuaanh,$manganh);
    $giadien_donhang  .= '<tr>
                            <td>
                                <div>
                                    <img height="50" width="50" src="cid:'.$matrongchuaanh[$i][0].'" alt="">
                                    <p class="p5 name_prd">' . $tt['ten'] . '</p>
                                </div>
                            </td>
                            <td>' . $tt['chl'] . ' - ' . $tt['sz'] . '</td>
                            <td>' . $tt['sl'] . '</td>
                            <td>' . number_format($tt['gia'],0,'.','.') . '</td>
                        </tr>';
    $i++;
}
$giadien_donhang  .= '</tbody>
                        </table>
                        <div style="margin-left: 400px;" class="frame_total">
                            <h4 class="weight-medium">Tổng tiền: ' . $tong_tien . ' VND</h4>
                        </div>
                    </div>
                </div>
                <div class="frame_ft">
                    <div style="padding-left: 30px;" class="dis-ju pd_64">
                        <div class="frame_ava_ft">
                            <div class="mrb_20 flex">
                                <div class="frame_img_ft">
                                    <img src="cid:logo" class="img_logo" alt="">
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
                </div>';
?>