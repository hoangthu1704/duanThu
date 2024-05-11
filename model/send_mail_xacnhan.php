
<?php
include_once "smtpemail.php";
// các cấu hình đã được thiết lập ở file config và file smtpmail
$giadien_xacnhan_taikhoanr = '
                <head>
                <style>
                    .frame_xacnhan{
                        padding: 20px 100px;
                        background-color: #dcdcdc;
                        text-align: center;
                    }
                    .magui{
                        margin-top: 50px;
                        letter-spacing: 20px;
                        border: 1px solid #686767;
                        border-radius: 5px;
                        padding: 10px 10px 10px 20px;
                        display: inline-block;
                    }
                </style>
                </head>
                <div class="frame_xacnhan">
                    <h2>Mã Xác Thực Tài Khoản của bạn</h2>
                    <h1 class="magui">';
                    // trường hợp này sẽ kiểm session maxacthuc đã có hay chưa r, 
                    // nhầm tránh lỗi không cần thiết khi chạy web
                    if(isset($_SESSION['maxacthuc']) && !empty($_SESSION['maxacthuc'])){
$giadien_xacnhan_taikhoanr .=  $_SESSION['maxacthuc'];
                    }

$giadien_xacnhan_taikhoanr .= '</h1>
                </div>';
?>