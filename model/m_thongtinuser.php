<?php
include_once "funtion.php";

// hàm cập nhật thông tin gồm tên, họ, username, email, mật khẩu
function capnhat_thongtin_user($ten, $ho, $email, $sdt, $usename, $mk, $id)
{
    $sql = "UPDATE nguoidung SET FirstName = '$ten', LastName = '$ho',
                                Email = '$email', MobileNumber = '$sdt',
                                UserName = '$usename', MatKhau = '$mk'
     WHERE id_nguoidung = '$id'";
    return in_data($sql);
}
// hàm đăng nhập lại để hiển thị các thông tin mới nhất
function dangnhaplai($email,$pass){
    $sql="SELECT * FROM nguoidung where Email='$email' and MatKhau='$pass'";
    return out_data($sql,false);
}

// khi người dùng bấm cập nhật sẽ có hai trường hợp xảy ra
if (isset($_POST['capnhatthongtin'])) {
    // trường hợp khi người dùng đã đăng nhập
    if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
        // trường hợp khi form nhập đầy đủ sẽ tiến hành các lệnh sau
        if(!empty($_POST['name']) && !empty($_POST['company']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['pass'])) {
            $name = $_POST['name'];
            $company = $_POST['company'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $pass = $_POST['pass'];
            // khi có người dùng và form nhập đầy đủ sẽ bắt đầu lấy thông tin và cập nhật cho người dùng
            capnhat_thongtin_user($company,$name,$email,$phone,$username,$pass,$_SESSION['user']['id_nguoidung']);
            // bắt đầu đăng nhập lại, gọi hàm dangnhaplai để thực thi việc đăng nhập
            $kiemtradangnhaplai = dangnhaplai($email,$pass);
            // chèn các thông tin đăng nhập vào session user
            $_SESSION['user'] = $kiemtradangnhaplai;
            // thông báo người dùng đã cập nhật thành công
            $thongbao_suathongtinuser = "Cập nhật thông tin thành công!";
        }
        // trường hợp người dùng đăng nhập nhưng form không đầy đủ
        else {
            $thongbao_suathongtinuser = "Vui lòng điền đầy đủ thông tin.";
        }
    }
    // trường hợp người dùng chưa đăng nhập
    else{
        $thongbao_suathongtinuser = "Vui lòng đăng nhập";
    }
}
