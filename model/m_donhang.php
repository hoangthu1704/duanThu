<?php
include_once "funtion.php";

function show_order_one($madonhang)
{
    $sql = "SELECT * FROM donhang WHERE ma_donhang = '$madonhang'";
    return out_data($sql, false);
}
// hàm show tất cả đơn hàng trùng với mã id session user
function kiemtra_donhang_user($id)
{
    $sql = "SELECT * FROM donhang WHERE manguoidung = '$id' and trang_thai NOT IN ('Đã gửi yêu cầu hủy đơn hàng')";
    return out_data($sql, true);
}
function kiemtra_donhang_user_dahuy($id)
{
    $sql = "SELECT * FROM donhang WHERE manguoidung = '$id' and trang_thai = 'Đã gửi yêu cầu hủy đơn hàng'";
    return out_data($sql, true);
}
// hàm chuyển một chuỗi thành mảng nhờ dấu hiệu ( - )
function mang2_donhang($tham1_donhang)
{
    return explode(' - ', $tham1_donhang);
}
function donhang_huy($donhang_huy, $id)
{
    $sql = "SELECT * FROM donhang WHERE trang_thai = '$donhang_huy' and manguoidung = '$id'";
   return out_data($sql, true);
}
function trangthai_donhang(){
    $sql = "SELECT * FROM donhang";
   return out_data($sql, true);
}

$trangthai_donhang = trangthai_donhang();
// nếu có madonhang trên url giống với mã đơn hàng trong csdl thì hiển thị ra thông tin đơn hàng đó
if (isset($madonhang)) {
    $show_order_one = show_order_one($madonhang);
    if($show_order_one){
        $catkhoangtrang = trim($show_order_one['thongtin_cacsanpham']);
        $catngoac2dau = trim($catkhoangtrang, '"');
        $mang1 = explode('" "', $catngoac2dau);
        function mang2($tham1)
        {
            return explode(' - ', $tham1);
        }
        $thongtinsanpham = array_map("mang2", $mang1);
    }
}

// in đơn hàng và các thông tin sản phẩm của đơn hàng đó khi có user
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    // chuẩn bị mảng trống
    $mangstart = [];
    if(isset($trangthai) &&  !empty($trangthai)){
        $kiemtradonhanguser = kiemtra_donhang_user_dahuy($_SESSION['user']['id_nguoidung']);
    }else{
        // khi có session user thì kiểm tra đơn hàng nào có cùng id_nguoidung sẽ được hiển thị ra
        // gọi hàm kiemtra_donhang_user và truyền giá trị id_nguoidung sau đó gán một biến $kiemtradonhanguser cho hàm
        $kiemtradonhanguser = kiemtra_donhang_user($_SESSION['user']['id_nguoidung']);
    }
    // trường hợp có đơn hàng sẽ thực thi các lênh sau
    if ($kiemtradonhanguser) {
        // vì trong mỗi đơn hàng sẽ có một cột là thongtin_cacsanpham, cột này là một chuỗi nên sẽ bị cắt ra để chuyển thành mảng
        //      để có thể hiển thị thông tin từng loại sản phẩm cho một đơn hàng
        //      vd: một đơn hàng có nhiều sản phẩm, thì sẽ hiển thị ra từng loại sản phẩm đó
        // dùng vòng để lọc các chuỗi thongtin_cacsanpham trong đơn hàng
        foreach ($kiemtradonhanguser as $ktrdh) {
            // cắt khoảng trắng 2 đầu của chuỗi vd: ("ten_sp - gia_sp" "ten_sp - gia_sp" )
            // sau khi cắt khoảng trắng kết quả:    ("ten_sp - gia_sp" "ten_sp - gia_sp")
            $catkhoangtrang_donhang = trim($ktrdh['thongtin_cacsanpham']);
            // cắt dấu chấm phẩy 2 đầu của chuỗi phía trên vd: ("ten_sp - gia_sp" "ten_sp - gia_sp")
            // sau khi cắt dấu chấm phẩy 2 đầu kết quả:        (ten_sp - gia_sp" "ten_sp - gia_sp)
            $catngoac2dau_donhang = trim($catkhoangtrang_donhang, '"');
            // sau đó chuyển vừa cắt đó thành mảng nhờ dấu hiệu (" ")
            // kết quả sau khi chuyển thành mảng:
            // Array
            // (
            //     [0] => ten_sp - gia_sp
            //     [1] => ten_sp - gia_sp
            // )
            $mang1_donhang = explode('" "', $catngoac2dau_donhang);
            // từ mảng một chiều này sẽ chuyển thành mảng 2 chiều bằng array_push
            // sau mỗi vòng lặp mảng một chiều này sẽ được cộng thêm cộng thêm vào mảng trống đã chuẩn bị trước đó ($mangstart)
            // kết quả sau khi cộng thêm thành mảng 2 chiều của hai đơn hàng khác nhau
            // Array
            // (
            //     [0] => Array
            //         (
            //             [0] => ten_sp - gia_sp
            //             [1] => ten_sp - gia_sp
            //         )

            //     [1] => Array
            //         (
            //             [0] => ten_sp - gia_sp
            //         )
            // )
            array_push($mangstart, $mang1_donhang);
        }
    }
    // chuẩn bị một mảng trống
    $thongtinsanpham_donhang_user = [];
    // sau khi đã có từng sản phẩm của đơn hàng đó thì tiếp tục cắt giá trị trong mỗi mảng
    // vòng lặp thứ nhất để đếm mảng 2 chiều
    for ($i = 0; $i < count($mangstart); $i++) {
        // vòng lặp thứ hai để đếm mảng 1 chiều trong mảng 2 chiều đó
        for ($j = 0; $j < count($mangstart[$i]); $j++) {
            // hàm mang2_donhang được dùng để cắt chuỗi thành mảng, đã được giải thích phía trên
            // vd giá trị của biến này $mangstart[0][0] là: (ten_sp - gia_sp)
            // sau khi cắt thành mảng:
            // Array
            // (
            //     [0] => ten_sp
            //     [1] => gia_sp
            // )
            // sau khi cắt thành mảng như vậy rồi dùng array_push để thểm mảng này vào mảng trong đã chuẩn bị trước đó
            // kết quả sau khi dùng array_push 
            // Array
            // (
            //     [0] => Array
            //         (
            //             [0] => ten_sp
            //             [1] => gia_sp
            //         )
            //     [1] => Array
            //         (
            //             [0] => ten_sp
            //             [1] => gia_sp
            //         )
            //     [2] => Array
            //         (
            //             [0] => ten_sp
            //             [1] => gia_sp
            //         )
            // )
            array_push($thongtinsanpham_donhang_user, mang2_donhang($mangstart[$i][$j]));
        }
    }
}


if(!isset($_SESSION['user']) && $act == 'donhang' && $act != 'detail_invoice'){
    $thongbao_donhang = "Đăng nhập để xem thông tin";
}
if(isset($_SESSION['user']) && empty($kiemtradonhanguser) && $act == 'donhang' && $act != 'detail_invoice'){
    $thongbao_donhang = "Bạn chưa có đơn hàng nào";
}
// in đơn hàng đax hủy
// if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
//     $mangstart = [];
//     $kiemtradonhanghuy = donhang_huy("Đã gửi yêu cầu hủy đơn hàng" ,$_SESSION['user']['id_nguoidung']);
//     if ($kiemtradonhanghuy) {
//         foreach ($kiemtradonhanghuy as $ktrdh) {
//             $catkhoangtrang_donhang = trim($ktrdh['thongtin_cacsanpham']);
//             $catngoac2dau_donhang = trim($catkhoangtrang_donhang, '"');
//             $mang1_donhang = explode('" "', $catngoac2dau_donhang);
//             array_push($mangstart, $mang1_donhang);
//         }
//     }
//     $thongtinsanpham_donhang_user = [];
//     for ($i = 0; $i < count($mangstart); $i++) {
//         for ($j = 0; $j < count($mangstart[$i]); $j++) {
//             array_push($thongtinsanpham_donhang_user, mang2_donhang($mangstart[$i][$j]));
//         }
//     }
// }