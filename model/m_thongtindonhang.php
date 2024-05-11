<?php
include_once "funtion.php";

// hàm gửi yêu cầu hủy đơn hàng
function yeucauhuydonhang($iddonhang, $noidunghuydon)
{
    $sql = "UPDATE donhang SET yeu_cau_huy_donhang = '$noidunghuydon', trang_thai = 'Đã gửi yêu cầu hủy đơn hàng' WHERE id_donhang = $iddonhang";
    return in_data($sql);
}

// kiểm tra đã gửi yêu cầu hủy đơn hàng chưa
function kiemtradaguiyeucauchua($iddonhang)
{
    $sql = "SELECT * FROM donhang Where id_donhang = $iddonhang";
    return out_data($sql,false);
}

// khi bấm vào nút hủy đơn sẽ thực hiện các lệnh sau
if(isset($_POST['yeucauhuydon'])){
    // truyền id của đơn hàng vào session iddonhangnay
    $_SESSION['iddonhangnay'] = $_POST['yeucauhuydon'];
    // kiểm tra đơn hàng này
    $kiemtrahuydon = kiemtradaguiyeucauchua($_SESSION['iddonhangnay']);
    // nếu cột yeu_cau_huy_donhang có không giá trị nào thì 
    //  sẽ hiển thị ra form để người dùng có thể yêu cầu hủy đơn
    if($kiemtrahuydon['yeu_cau_huy_donhang'] == ''){
        $hienthanhyeucai = true;
    }
    // nếu cột yeu_cau_huy_donhang có giá trị thì sẽ không hiển thị form nữa
    else{
        $hienthanhyeucai = false;
    }
}

// khi người dùng bấm gửi yêu cầu sẽ xảy ra các trường hợp sau
if(isset($_POST['guiyeucauhuydon'])){
    $noidunghuydon = $_POST['noidunghuydon'];
    // nếu form có giá trị thì sẽ thực hiện các lệnh sau
    if(!empty($noidunghuydon)){
        // trước tiên sẽ làm form gửi yêu cầu mất đi
        $hienthanhyeucai = false;
        // sau đó gọi hàm yeucauhuydonhang để cập nhật các thông tin: yeu_cau_huy_donhang, trang_thai
        // dùng session iddonhangnay đã lưu trước đó để tìm kiếm trong csdl, để cập nhật các giá trị
        yeucauhuydonhang($_SESSION['iddonhangnay'],$noidunghuydon);
        // sau khi dùng xong sẽ xóa session iddonhangnay
        unset($_SESSION['iddonhangnay']);
        // cập nhập giá trị trạng thái lại hiển thị ra cho người dùng
        header('location: ?mod=page&act=donhang');
    }
    // nếu form không có gì thì sẽ hiển thị thông báo sau
    else{
        $thongbao_huydon = 'Xin hãy cho chúng tôi biết vì sao bạn muốn hủy đơn hàng này';
    }
}
?>