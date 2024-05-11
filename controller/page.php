<?php

extract($_REQUEST);
include_once "model/m_header.php";
if (isset($act)) {
    switch ($act) {
        case 'sanpham':
            
            include_once "model/m_sanpham.php";
            include_once "view/header.php";
            include_once "view/sanpham.php";
            include_once "view/footer.php";
            break;
        case 'home':

            include_once "model/m_home.php";
            include_once "view/header.php";
            include_once "view/home.php";
            include_once "view/footer.php";
            break;
        case 'dangnhap':
            include_once "model/m_user.php";
            include_once "model/m_logingoogle.php";
            include_once "view/header.php";
            include_once "view/dangnhap.php";
            include_once "view/footer.php";
            break;
        case 'dangki':

            include_once "model/m_user.php";
            include_once "view/header.php";
            include_once "view/dangki.php";
            include_once "view/footer.php";
            break;
        case 'quenmatkhau':
            include_once "model/m_forgotpass.php";
            include_once "view/header.php";
            include_once "view/quenmatkhau.php";
            include_once "view/footer.php";
            break;
        case 'taomatkhau':
            include_once "model/m_taolaimatkhau.php";
            include_once "view/header.php";
            include_once "view/taomatkhau.php";
            include_once "view/footer.php";
            break;
        case 'xacnhantaikhoan':
            
            include_once 'model/send_mail_xacnhan.php';
            include_once "model/m_forgotpass.php";
            include_once "view/header.php";
            include_once "view/xacnhantaikhoan.php";
            include_once "view/footer.php";
            break;

        case 'detail_invoice':

            include_once "model/m_donhang.php";
            include_once "view/header.php";
            include_once "view/detail_invoice.php";
            break;
        case 'giohang':

            include_once "model/m_giohang.php";
            include_once "view/header.php";
            include_once "view/giohang.php";
            include_once "view/footer.php";
            break;
        case 'thanhtoan':

            include_once "model/m_giohang.php";
            include_once "model/m_thanhtoan.php";
            include_once "view/header.php";
            include_once "view/thanhtoan.php";
            include_once "view/footer.php";
            break;
        case 'donhang':

            include_once "model/m_donhang.php";
            include_once "model/m_thongtindonhang.php";
            include_once "view/header.php";
            include_once "view/donhang.php";
            include_once "view/footer.php";
            break;
        case 'editthongtin':

            include_once "model/m_thongtinuser.php";
            include_once "view/header.php";
            include_once "view/editthongtin.php";
            include_once "view/footer.php";
            break;
        case 'lienhe':

            include_once "model/m_lienhe.php";
            include_once "view/header.php";
            include_once "view/lienhe.php";
            include_once "view/footer.php";
            break;
        case 'thongtin':

            include_once "view/header.php";
            include_once "view/thongtin.php";
            include_once "view/footer.php";
            break;
        case 'dangxuat_taikhoan':
            unset($_SESSION['user']);
            header("Location: ?mod=page&act=dangnhap");
            break;
        case 'productDetails':
            include_once "model/m_productdetail.php";
            include_once "model/m_giohang.php";
            include_once "view/header.php";
            include_once "view/productDetails.php";
            include_once "view/footer.php";
            break;
        case 'messageSuccessful':

            include_once "model/m_thanhtoan.php";
            include_once "view/header.php";
            include_once "view/messageSuccessful.php";
            include_once "view/footer.php";
            break;
        case 'blog':
            include_once "model/m_blog.php";
            include_once "view/header.php";
            include_once "view/blog.php";
            include_once "view/footer.php";
            break;
        case 'admin':

            header("Location: ?mod=admin&act=component");
            break;
    }
}
