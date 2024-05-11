<?php
include_once "funtion.php";

// kiểm tra email trong csdl
function kiemtra_user_xacnhan($email){
    $sql="SELECT * FROM  nguoidung where Email = '$email'";
    return out_data($sql,true);
}

date_default_timezone_set('Asia/Ho_Chi_Minh');
$secon = date('s');

// khi người dùng bấm tiếp tục sẽ có hai trường hợp xảy ra
if(isset($_POST['tieptuc'])){
    $nhapemail = $_POST['nhapemail'];
    // nếu người dùng không nhập gì mà bấm tiếp tục sẽ thông báo
    if(!empty($nhapemail)){
        // hàm kiemtra_user_xacnhan để kiểm tra email người dùng có tồn tại trong csdl hay không
        $kiemtra_user_quenmatkhau = kiemtra_user_xacnhan($nhapemail);
        // trường hợp khi người dùng nhập đúng email
        if($kiemtra_user_quenmatkhau){
            // biến chuoimongmuon này sẽ định dạng mã xác thực được gửi đi là số
            $chuoimongmuon = '0123456789';
            // biến maxacthuc sẽ sắp xếp các số chuoimongmuon một cách ngẫu nhiên gồm 8 số
            $maxacnhan = substr(str_shuffle($chuoimongmuon), 0, 8);
            // thêm thời gian hiện tại vào session maxacthu_thoigian
            $_SESSION['maxacthuc_thoigian'] = time();
            // if else này nhầm trách người dùng bấm tiếp tục 2 lần
            // nếu bấm 1 lần sẽ gửi biến maxacthuc đã được sắp xếp nhẫu nhiên phía trên
            // nếu bấm lần 2 sẽ gửi lại mã xác thực lúc ban đầu mà không gửi mã mới
            if(isset($_SESSION['maxacthuc']) && !empty($_SESSION['maxacthuc'])){
                $_SESSION['maxacthuc'];
            }else{
                $_SESSION['maxacthuc'] = $maxacnhan;
            }
            // sau khi người dùng bấm tiếp tục email của người dùng sẽ được lưu vào
            //   session email để dễ dàng kiểm tra lại
            $_SESSION['email_xacnhan'] = $nhapemail;
            // include form gửi mail ở file send_mail_xacnhan
            include_once "send_mail_xacnhan.php";
            // sau khi đã có form sẽ tiến hành gửi mail đến người dùng
            send_mail($nhapemail,name_email,$giadien_xacnhan_taikhoanr,'');
            // đồng thời chuyển người dùng đến trang xác nhận tài khoản
            header('location: ?mod=page&act=xacnhantaikhoan');
        }
        // nhập sai email
        else{
            $thongbao_quenmatkhau = 'Không tìm thấy tài khoản của bạn';
        }
    }else{
        $thongbao_quenmatkhau = 'Vui lòng nhập email để nhận mã';
    }
    
}

if(isset($_SESSION['maxacthuc_thoigian']) && (time() - $_SESSION['maxacthuc_thoigian'] > 60)) {
    unset($_SESSION['maxacthuc']);
    unset($_SESSION['maxacthuc_thoigian']);
}

// khi người dùng bấm xác nhận sẽ xảy ra các trường hợp sau
if(isset($_POST['xacnhantaikhoan'])){
    $nhapmaxacthuc = $_POST['nhapmaxacthuc'];
    // trường hợp nếu người dùng không nhập gì mà bấm xác nhận sẽ hiển thị thông báo "Vui lòng nhập mã xác thực"
    if(!empty($nhapmaxacthuc)){
        // trường hợp khi người dùng đã nhập mã xác thực và bấm xác nhận
        include_once "send_mail_xacnhan.php";
        // khi người dùng nhập nhập đúng mã xác nhận đã gửi trước đó sẽ chuyển người dùng qua trang tạo mật khẩu
        // $nhapmaxacthuc == $_SESSION['maxacthuc'] dòng này để kiểm tra mã đã đúng hay chưa
        if(isset($_SESSION['maxacthuc']) && !empty($_SESSION['maxacthuc'] && ($nhapmaxacthuc == $_SESSION['maxacthuc']))){
            header('location: ?mod=page&act=taomatkhau');
        }
        // khi người dùng nhập sai và bấm xác nhận sẽ hiển thị thông báo
        else{
            $thongbao_xacnhanma = 'Mã xác thực không chính xác';
        }
    }else{
        $thongbao_xacnhanma = 'Vui lòng nhập mã xác thực';
    }
}

// khi người dùng bấm gửi lại mã xác nhận sẽ xảy ra các trường hợp sau
if(isset($_POST['guilaimaxacthuc'])){
    // trường hợp này sẽ kiểm tra người dùng là từ trang quên mật khẩu qua hay người dùng qua bằng url
    // nếu đi đúng trình tự session email sẽ có thông tin người dùng và gửi lại mã xác thực
    if(isset($_SESSION['email_xacnhan']) && !empty($_SESSION['email_xacnhan'])){
        // trước tiên xóa mã xác thực đã gửi trước đó đi để có thể gửi lại mã mới 
        // (unset là hàm xóa session maxacthuc)
        unset($_SESSION['maxacthuc']);
        // tạo lại mã mới và gửi đi, các biến dưới đây đã được giải thích phía trên nên hãy coi lại
        $chuoimongmuon = '0123456789';
        $maxacnhan = substr(str_shuffle($chuoimongmuon), 0, 8);
        $_SESSION['maxacthuc'] = $maxacnhan;
        $_SESSION['maxacthuc_thoigian'] = time();
        include_once 'guilai_maxacthuc.php';
        send_mail($_SESSION['email_xacnhan'],name_email,$giadien_xacnhan_taikhoanr,'');
    }
    // nếu người dùng qua bằng đường dẫn url sẽ không có thông tin session email khi này sẽ hiển thị thông báo
    else{
        $thongbao_xacnhanma = "Không có email nào để nhận lại mật khẩu";
    }
}
?>