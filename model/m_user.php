<?php
include_once "funtion.php";

function nguoidung_getAll(){
    $sql="SELECT * FROM  nguoidung";
    return out_data($sql,true);
}
function kiemtra_user($email){
    $sql="SELECT * FROM  nguoidung where Email = '$email'";
    return out_data($sql,true);
}
function user_signup($fullname,$email,$pass,$ngaytao){
    $sql="insert into nguoidung(UserName,Email,MatKhau,NgayTao) VALUES('$fullname','$email','$pass','$ngaytao')";
    return in_data($sql);
}

function user_signin($email,$pass){
    $sql="SELECT * FROM nguoidung where Email='$email' and MatKhau='$pass'";
    return out_data($sql,false);
}

date_default_timezone_set('Asia/Ho_Chi_Minh');
$date = date('Y:m:d H:i:s');
$ymd = date('Y:m:d');

// đăng kí
if (isset($_POST['btn-signup'])) {
    $fullname = $_POST['UserName'];
    $email = $_POST['Email'];
    $pass = $_POST['MatKhau'];
    $repass = $_POST['Repass'];
    $dinhdangemail = filter_var($email, FILTER_VALIDATE_EMAIL);

    if(empty($fullname) || empty($email) || empty($pass) || empty($repass)){
        $thongbao = "Vui lòng nhập đầy đủ";
    }
    else if($dinhdangemail === false){
        $thongbao = "Email không đúng định dạng";   
    }
    else if(strlen($pass) < 8){
        $thongbao = "Mật khẩu phải từ 8 đến 10 kí tự";
    }
    else if(strlen($pass) > 10){
        $thongbao = "Mật khẩu phải từ 8 đến 10 kí tự";
    }
    else if($pass != $repass){
        $thongbao = "Mật khẩu không khớp";
    }
    else{
        $kiemtra_user = kiemtra_user($email);
        if($kiemtra_user){
            $thongbao = "Email người dùng đã tồn tại";
        }else{
            $mahoa = md5($pass);
            user_signup($fullname,$email,$mahoa,$ymd);
            header('location: ?mod=page&act=dangnhap');
        }
        
    }
}


// đăng nhập
if (isset($_POST['btn_login'])) {
    $gmail = $_POST['email'];
    $passe = $_POST['pass'];
    if(empty($gmail) || empty($passe)) {
        $thongbao = "Hãy nhập đầy đủ";
    }else{
        $mahoa = md5($passe);
        $check = user_signin($gmail,$mahoa);
        if($check){
            $_SESSION['user'] = $check;
            header('location: ?mod=page&act=home');
        }else{
            $thongbao = "Đăng nhập thất bại";
        }
    }
}

?>