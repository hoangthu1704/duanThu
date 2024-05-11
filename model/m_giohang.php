<?php
include_once "funtion.php";

function show_4_sp_goiy()
{
    $sql = "SELECT * FROM sanpham ORDER BY RAND() LIMIT 4";
    return out_data($sql, true);
}
function show_giohang_user($id)
{
    $sql = "SELECT * FROM giohang WHERE NguoiDung_id = '$id'";
    return out_data($sql, true);
}
function show_product_in_cate($id)
{
    $sql = "SELECT sanpham.*,giohang.* FROM sanpham INNER JOIN giohang on sanpham.id_sanpham = giohang.SanPham_id WHERE NguoiDung_id = '$id'";
    return out_data($sql, true);
}
function kiemtra_giohang_user($id_ngdung, $id_sp)
{
    $sql = "SELECT * FROM giohang WHERE NguoiDung_id = '$id_ngdung' And SanPham_id = '$id_sp'";
    return out_data($sql, false);
}
function update_soluong($soluong, $giatong, $id_ngdung, $id_sp)
{
    $sql = "UPDATE giohang SET SoLuong = '$soluong', Tong = '$giatong' WHERE NguoiDung_id = '$id_ngdung' And SanPham_id = '$id_sp'";
    return in_data($sql);
}
function nhap_giohang_user($idsp, $iduser, $soluong, $size, $chatlieu, $tong, $status, $ngay, $magiamgia)
{
    if (!empty($magiamgia)) {
        $sql = "INSERT INTO giohang (SanPham_id,NguoiDung_id,SoLuong,kichthuoc,chatlieu,Tong,StatusBuy,Ngay,magiamgia_id) VALUES 
        ('$idsp','$iduser','$soluong','$size','$chatlieu','$tong','$status','$ngay','$magiamgia')";
    } else {
        $sql = "INSERT INTO giohang (SanPham_id,NguoiDung_id,SoLuong,kichthuoc,chatlieu,Tong,StatusBuy,Ngay) VALUES 
        ('$idsp','$iduser','$soluong','$size','$chatlieu','$tong','$status','$ngay')";
    }
    return in_data($sql);
}
function timkiem_sanpham($id)
{
    $sql = "SELECT * FROM sanpham WHERE id_sanpham = '$id'";
    return out_data($sql, false);
}
function xoa_sp_giohang($id_ngdung, $id_sp)
{
    $sql = "DELETE FROM giohang WHERE NguoiDung_id = '$id_ngdung' And SanPham_id = '$id_sp'";
    return in_data($sql);
}
function kiemtra_magiamgia($code)
{
    $sql = "SELECT * FROM magiamgia WHERE codegiamgia = '$code'";
    return out_data($sql, false);
}
//xoá 1 sản phẩm trong giỏ hàng
function deleteCart($id)
{
    if (isset($_SESSION['cart'][$id])) {
        unset($_SESSION['cart'][$id]);
    }
}
//xoá 1 sản phẩm trong thanh toán
function deletethanhtoan()
{
    if (isset($_SESSION['thanhtoan'])) {
        unset($_SESSION['thanhtoan']);
    }
}
//xoá user
function deleteuser_ss()
{
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }
}

function thongtinsl_giasp($cong_tru,$idsp_iduser){
    $mangidspiduser = explode(' - ', $idsp_iduser);
    $kiemtragiohang = kiemtra_giohang_user($mangidspiduser[0], $mangidspiduser[1]);
    $kiemtrasanpham = timkiem_sanpham($mangidspiduser[1]);
    $upd_soluong = $kiemtragiohang['SoLuong'];
    if($cong_tru){
        $upd_soluong++;
    }else{
        $upd_soluong--;
    }
    if($upd_soluong <= $kiemtrasanpham['Qty']){
        $giatong = $upd_soluong * $kiemtrasanpham['Gia'];
        update_soluong($upd_soluong, $giatong, $mangidspiduser[0], $mangidspiduser[1]);
    }
    
}

function thongtinsl_giasp_ss($cong_tru,$thaysoluongsp_ss){
    $kiemtrasp_ss = timkiem_sanpham($_SESSION['cart'][$thaysoluongsp_ss]['idsp']);
    if($cong_tru){
        if($_SESSION['cart'][$thaysoluongsp_ss]['soluong'] < $kiemtrasp_ss['Qty']){
            $_SESSION['cart'][$thaysoluongsp_ss]['soluong']++;
        }
    }else{
        $_SESSION['cart'][$thaysoluongsp_ss]['soluong']--;
    }
    $_SESSION['cart'][$thaysoluongsp_ss]['tong'] = $_SESSION['cart'][$thaysoluongsp_ss]['soluong'] * $kiemtrasp_ss['Gia'];
    header('location: ?mod=page&act=giohang');
    
    
}

$show_4_sp_goiy = show_4_sp_goiy();


date_default_timezone_set('Asia/Ho_Chi_Minh');
$date = date('Y:m:d H:i:s');
$ymd = date('Y:m:d');

// dữ liệu giỏ hàng

if (isset($_POST['add_to_cart'])) {
    $sz = $_POST['size'];
    $chtl = $_POST['material'];
    if (!empty($sz) && !empty($chtl)) {
        $soluong = 1;
        $tong = $soluong * $show_pd_detail['Gia'];
        $stt = 0;
        $time = $ymd;
        $mgg = '';
        if (isset($_SESSION['user'])) {
            $idngdung = $_SESSION['user']['id_nguoidung'];
            $kiemtra = kiemtra_giohang_user($idngdung, $idsp);
            $kiemtrasanpham_addcart = timkiem_sanpham($idsp);
            if ($kiemtra) {
                $upd_soluong = $kiemtra['SoLuong'];
                $upd_soluong++;
                if($upd_soluong <= $kiemtrasanpham_addcart['Qty']){
                    $giatong = $upd_soluong * $kiemtrasanpham_addcart['Gia'];
                    update_soluong($upd_soluong, $giatong, $idngdung, $idsp);
                }
            } else {
                nhap_giohang_user($idsp, $idngdung, $soluong, $sz, $chtl, $tong, $stt, $time, $mgg);
            }
        } else {
            if (!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
            if (isset($_SESSION['cart'][$idsp])) {
                $kiemtrasanpham_ss = timkiem_sanpham($_SESSION['cart'][$idsp]['idsp']);
                if($_SESSION['cart'][$idsp]['soluong'] < $kiemtrasanpham_ss['Qty']){
                    $_SESSION['cart'][$idsp]['soluong']++;
                }
                $_SESSION['cart'][$idsp]['tong'] = $_SESSION['cart'][$idsp]['soluong'] * $kiemtrasanpham_ss['Gia'];
            } else {
                $_SESSION['cart'][$idsp] =
                    [
                        "idsp" => $idsp,
                        "soluong" => $soluong,
                        "sz" => $sz,
                        "chtl" => $chtl,
                        "tong" => $tong,
                        "stt" => $stt,
                        "time" => $time,
                        "mgg" => $mgg,
                    ];
            }
        }
        header("Location: ?mod=page&act=giohang");
    } else {
        $thongbao_chonoptionpd = 'Xin chọn đầy đủ các option';
    }
}

// xóa sản phẩm trong session
if (isset($_POST['remove_pd_ss'])) {
    $idrm_ss = $_POST['remove_pd_ss'];
    deleteCart($idrm_ss);
}
// xóa sản phẩm trong csdl
if (isset($_POST['remove_pd'])) {
    $idspnd = explode(' - ', $_POST['remove_pd']);
    xoa_sp_giohang($idspnd[0], $idspnd[1]);
}
// nếu có tài khoản user đăng nhập thì hiển thị giỏ hàng csdl còn không có user thì hiển thị giỏ hàng session
if (!isset($_SESSION['user'])) {
    if (isset($_SESSION['cart'])) {
        $show_product_in_cate_ss = $_SESSION['cart'];
    }
} else {
    $show_product_in_cate = show_product_in_cate($_SESSION['user']['id_nguoidung']);
}
// dữ liệu thanh toán
if (isset($_POST['thanhtoan'])) {
    $_SESSION['thanhtoan'] = array();
    if (!isset($_SESSION['user']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        $check_sp_ss = $_POST['check_sp_ss'];
        $i = 0;
        foreach ($check_sp_ss as $value) {
            $mang1 = explode(' - ', $value);
            $_SESSION['thanhtoan'][$i] =
                [
                    "idsp" => $mang1[0],
                    "chl" => $mang1[1],
                    "sz" => $mang1[2],
                    "sl" => $mang1[3],
                    "ha" => $mang1[4],
                    "ten" => $mang1[5],
                    "gia" => $mang1[6],
                ];
            $i++;
        }
    } else {
        $check_sp = $_POST['check_sp'];
        $k = 0;
        foreach ($check_sp as $value) {
            $mang1 = explode(' - ', $value);
            $_SESSION['thanhtoan'][$k] =
                [
                    "idsp" => $mang1[0],
                    "chl" => $mang1[1],
                    "sz" => $mang1[2],
                    "sl" => $mang1[3],
                    "ha" => $mang1[4],
                    "ten" => $mang1[5],
                    "gia" => $mang1[6],
                ];
            $k++;
        }
    }
    header("Location: ?mod=page&act=thanhtoan");
}

if (isset($_POST['tangsoluongsp'])) {
    $tangsoluongsp = $_POST['tangsoluongsp'];
    thongtinsl_giasp(true,$tangsoluongsp);
    header('location: ?mod=page&act=giohang');
}
if (isset($_POST['giamsoluongsp'])) {
    $giamsoluongsp = $_POST['giamsoluongsp'];
    if($giamsoluongsp > 0){
        thongtinsl_giasp(false,$giamsoluongsp);
        header('location: ?mod=page&act=giohang');
    }
}
if (isset($_POST['tangsoluongsp_ss'])) {
    $thaysoluongsp_ss = $_POST['tangsoluongsp_ss'];
    thongtinsl_giasp_ss(true,$thaysoluongsp_ss);
}
if (isset($_POST['giamsoluongsp_ss'])) {
    $phantachgiam_ss = $_POST['giamsoluongsp_ss'];
    $mangphantachsl_ss = explode(' - ',$phantachgiam_ss);
    if($mangphantachsl_ss[0] > 1){
        thongtinsl_giasp_ss(false,$mangphantachsl_ss[1]);
    }
}

if (isset($_POST['kiemtragiamgia'])) {
    $nhapgiamgia = $_POST['nhapgiamgia'];
    if(!empty($nhapgiamgia)){
        $kiemtra_magiamgia = kiemtra_magiamgia($nhapgiamgia);
        if($kiemtra_magiamgia){
            $_SESSION['giamgianhe'] = $kiemtra_magiamgia['gia_tri'];
        }
        else{
            $thongbao_giamgia = 'Mã giảm giá này không tồn tại!';
        }
    }else{
        $thongbao_giamgia = 'Xin vui lòng nhập mã giảm giá';
    }
    
}

