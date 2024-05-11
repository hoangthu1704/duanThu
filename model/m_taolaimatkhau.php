<?php
include_once "funtion.php"; 

function capnhat_thongtin_user($mkmoi, $email)
{
    $sql = "UPDATE nguoidung SET MatKhau = '$mkmoi' WHERE Email = '$email'";
    return in_data($sql);
}

if (isset($_POST['submit-repass'])) {
    if(isset($_SESSION['email_xacnhan']) && !empty($_SESSION['email_xacnhan'])){
        $newpass = $_POST['newpass'];
        $repass = $_POST['repass'];
        if(!empty($newpass) && !empty($repass)){
            if(strlen($newpass) < 8){
                $thongbao_taolaimatkhau = "Mật khẩu phải từ 8 đến 10 kí tự";
            }
            else if(strlen($newpass) > 10){
                $thongbao_taolaimatkhau = "Mật khẩu phải từ 8 đến 10 kí tự";
            }
            else{
                if($newpass == $repass){
                    capnhat_thongtin_user(md5($newpass),$_SESSION['email_xacnhan']);
                    header('location: ?mod=page&act=dangnhap');
                }
                else{
                    $thongbao_taolaimatkhau = 'Mật khẩu không trùng khớp';
                }
            }
            
        }
        else{
            $thongbao_taolaimatkhau = 'Xin nhập đầy đủ thông tin';
        }
    }else{
        $thongbao_taolaimatkhau = 'Xin vui lòng nhập email trước khi đến bước này';
    }

}
?>