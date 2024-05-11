<?php

extract($_REQUEST);
include_once "model/discountModel.php";

if (isset($act)) {
    switch ($act) {
        case 'discountlist':
            $show_discounts = getAllDiscounts();
            include_once "view/admin/admin-header.php";
            include_once "view/admin/discountlist.php";
            include_once "view/admin/admin-footer.php";
            break;
        case 'adddiscount':
            if (isset($_POST['add_discount'])) {

                $TenMaGiamGia = $_POST['TenMaGiamGia'];
                $LoaiGiamGia = $_POST['LoaiGiamGia'];
                $GiaTri = $_POST['GiaTri'];
                $SoLuong = $_POST['SoLuong'];
                $TrangThai = $_POST['TrangThai'];

                createDiscount($TenMaGiamGia, $LoaiGiamGia, $GiaTri, $TrangThai, $SoLuong);

                header("Location: ?mod=discount&act=adddiscount");
            }
            if (isset($_POST['cancel'])) {

                header("Location: ?mod=discount&act=discountlist");
            }
            include_once "view/admin/admin-header.php";
            include_once "view/admin/adddiscount.php";
            include_once "view/admin/admin-footer.php";
            break;
        case 'deletediscount':
            if (isset($_GET['discount_id'])) {
                $discount_id = $_GET['discount_id'];
                deleteDiscount($discount_id);

                header("Location: ?mod=discount&act=discountlist");
            }
            break;
        case 'updatediscount':
            if (isset($_GET['discount_id'])) {
                $discount_id = $_GET['discount_id'];
                $show_discount = getDiscountyById($discount_id);
                if (isset($_POST['update_discount'])) {
                    $TenMaGiamGia = $_POST['TenMaGiamGia'];
                    $LoaiGiamGia = $_POST['LoaiGiamGia'];
                    $GiaTri = $_POST['GiaTri'];
                    $SoLuong = $_POST['SoLuong'];
                    $TrangThai = $_POST['TrangThai'];

                    updateDiscount($discount_id, $TenMaGiamGia, $LoaiGiamGia, $GiaTri, $TrangThai, $SoLuong);
                    header("Location: ?mod=discount&act=updatediscount&discount_id=$discount_id");
                }
                if (isset($_POST['cancel'])) {

                    header("Location: ?mod=discount&act=discountlist");
                }
            }
            include_once "view/admin/admin-header.php";
            include_once "view/admin/updatediscount.php";
            include_once "view/admin/admin-footer.php";
            break;
    }
}
