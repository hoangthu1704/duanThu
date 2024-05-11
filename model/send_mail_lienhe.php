
<?php
include_once "smtpemail.php";
// các thông tin người dùng muốn liên hệ sẽ được chuyền vào form gửi đi
$giadien_lienhe = '
                <head>
                <style>
                    p{
                        padding: 5px;
                        max-width: 300px;
                        border: 1px solid #3d3d3d;
                        border-radius: 5px;
                    }
                </style>
                </head>
                <div>
                    <p>Họ và Tên: '. $name .'</p>
                    <p>Công ty: '. $company .'</p>
                    <p>Số điện thoại: '. $phone .'</p>
                    <p>Email: '. $email .'</p>
                    <p>Địa chỉ: '. $address .'</p>
                    <p>Nội dung: '. $message .'</p>
                </div>';
?>