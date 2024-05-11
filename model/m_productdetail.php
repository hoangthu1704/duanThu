<?php
include_once "funtion.php";

function show_sp_tuongtu($iddm)
{
    $sql = "SELECT * FROM sanpham WHERE MaDanhMuc = $iddm LIMIT 4";
    return out_data($sql, true);
}
function show_pd_detail($id)
{
    $sql = "SELECT * FROM sanpham WHERE id_sanpham = '$id'";
    return out_data($sql, false);
}
function kiemtra_bl($id_bl)
{
    $sql = "SELECT * FROM binhluan WHERE id_binhluan = $id_bl";
    return out_data($sql, false);
}
function nhapbinhluan($idsp, $iduser, $noidung, $ngoisao)
{
    $sql = "INSERT INTO binhluan (SanPham_id,NguoiDung_id,NoiDung,ngoisao) VALUES 
            ('$idsp','$iduser','$noidung','$ngoisao')";
    return in_data($sql);
}
function showten_alluser_cm($idsp)
{
    $sql = "SELECT nguoidung.*,binhluan.* FROM nguoidung INNER JOIN binhluan on nguoidung.id_nguoidung = binhluan.NguoiDung_id WHERE binhluan.SanPham_id = '$idsp'";
    return out_data($sql, true);
}
function tanglike($id_bl, $tanglike)
{
    $sql = "UPDATE binhluan SET soluonglike = $tanglike WHERE id_binhluan = $id_bl";
    return in_data($sql);
}
function tangdislike($id_bl, $tangdislike)
{
    $sql = "UPDATE binhluan SET soluongdislike = $tangdislike WHERE id_binhluan = $id_bl";
    return in_data($sql);
}
function upluotxem($idsp,$datangluotxem){
    $sql = "UPDATE sanpham SET luot_xem = $datangluotxem WHERE id_sanpham = $idsp";
    return in_data($sql);
}
function show_bienthe_hinhanh($idsp){
    $sql = "SELECT * FROM bientheimg WHERE idsanpham  = $idsp LIMIT 4";
    return out_data($sql, true);
}

if(isset($idsp)){
    $show_pd_detail = show_pd_detail($idsp);
    $showten_alluser_cm = showten_alluser_cm($idsp);
    $show_sp_tuongtu = show_sp_tuongtu($show_pd_detail['MaDanhMuc']);
    $show_bienthe_hinhanh = show_bienthe_hinhanh($idsp);
}

$tinhsao = 0;
$demluotdanhgia = 0;

// show tất cả comment của bình luận đó
if(!empty($showten_alluser_cm)){
    foreach ($showten_alluser_cm as $demsao) {
        $tinhsao += $demsao['ngoisao'];
    }
    $tinhsao = round($tinhsao / count($showten_alluser_cm), 1);
    $demluotdanhgia = count($showten_alluser_cm);
}

// kiểm tra sao vào nội dùng bình luận trước khi nhập bình luận vào
if (isset($comment_submit)) {
    if( !empty($_POST['rating']) && !empty($_POST['comment_content'])){
        $ngoisao = $_POST['rating'];
        $noidung = $_POST['comment_content'];
        $iduser = $_SESSION['user']['id_nguoidung'];
        nhapbinhluan($idsp, $iduser, $noidung, $ngoisao);
        header("location: ?mod=page&act=productDetails&idsp=$idsp");
    }
}

// khi có người dùng đăng nhập, có thể bấm nút tăng like hoặc dislike
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    if (isset($_POST['tanglike'])) {
        $idbl = $_POST['tanglike'];
        $soluonglikecm = kiemtra_bl($idbl);
        $upsolike = $soluonglikecm['soluonglike'];
        $upsolike++;
        tanglike($idbl, $upsolike);
        header("location: ?mod=page&act=productDetails&idsp=$idsp");
    }
    if (isset($_POST['tangdislike'])) {
        $idbl = $_POST['tangdislike'];
        $soluongdislikecm = kiemtra_bl($idbl);
        $upsodislike = $soluongdislikecm['soluongdislike'];
        $upsodislike++;
        tangdislike($idbl, $upsodislike);
        header("location: ?mod=page&act=productDetails&idsp=$idsp");
    }
}

// tăng lượt xem khi có idsp trên url
if (isset($idsp) && !empty($idsp)) {
    $tangluotxem = ++$show_pd_detail['luot_xem'];
    upluotxem($idsp,$tangluotxem);
}

// lệnh hoạt động khi bấm mua ngay
if (isset($_POST['muangay'])) {
    $sz = $_POST['size'];
    $chtl = $_POST['material'];
    if (!empty($sz) && !empty($chtl)) {
        unset($_SESSION['thanhtoan']);
        $_SESSION['thanhtoan'][0] =
                    [
                        "idsp" => $show_pd_detail['id_sanpham'],
                        "chl" => $chtl,
                        "sz" => $sz,
                        "sl" => 1,
                        "ha" => $show_pd_detail['HinhAnh'],
                        "ten" => $show_pd_detail['TenSanPham'],
                        "gia" => $show_pd_detail['Gia'],
                    ];
        header('location: ?mod=page&act=thanhtoan');
    }else{
        $thongbao_chonoptionpd = 'Xin chọn đầy đủ các option';
    }
}


