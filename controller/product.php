<?php

extract($_REQUEST);
include_once "model/productModel.php";
include_once "model/catelogyModel.php";
include_once "model/subCatelogyModel.php";

if (isset($act)) {
    switch ($act) {
        case 'productlist':
            $show_prods = getAllProducts();
            include_once "view/admin/admin-header.php";
            include_once "view/admin/productlist.php";
            include_once "view/admin/admin-footer.php";
            break;
        case 'addproduct':
            $show_cats = getAllCatelogies();
            $show_subcats = getAllSubCatelogies();
            if (isset($_POST['add_product'])) {
                $prod_name = $_POST['prod_name'];
                $prod_catelogy = $_POST['prod_catelogy'];
                $prod_qty = $_POST['prod_qty'];
                $prod_price = $_POST['prod_price'];
                $prod_description = $_POST['prod_description'];
                $prod_status = $_POST['prod_status'];
                $prod_featured = $_POST['prod_featured'];
                $prod_image = $_FILES['prod_image']['name'];
                $prod_image_temp = $_FILES['prod_image']['tmp_name'];
                
                if(!empty($prod_name) && !empty($prod_description) && !empty($prod_price) && !empty($prod_qty) && !empty($prod_catelogy)){
                    move_uploaded_file($prod_image_temp, "assets/images/$prod_image");
                    addProduct($prod_name, $prod_description, $prod_image, $prod_price, "Giá Trị", 1, 1, 0, $prod_qty, 1, $prod_status, $prod_featured, $prod_catelogy);
                    header("Location: ?mod=product&act=productlist");
                }else{
                    $thongbaothemsanpham = "vui lòng nhap day du";
                }

                
            }
            if (isset($_POST['cancel'])) {
                header("Location: ?mod=product&act=productlist");
            }
            include_once "view/admin/admin-header.php";
            include_once "view/admin/addproduct.php";
            include_once "view/admin/admin-footer.php";
            break;
        case 'deleteproduct':
            if (isset($_GET['prod_id'])) {
                $prod_id = $_GET['prod_id'];
                deleteProduct($prod_id);

                header("Location: ?mod=product&act=productlist");
            }
            break;
        case 'updateproduct':
            if (isset($_GET['prod_id'])) {
                $prod_id = $_GET['prod_id'];
                $show_cats = getAllCatelogies();
                $show_prod_by_id = getProductById($prod_id);
                $show_subcats = getAllSubCatelogies();
                if (isset($_POST['update_product'])) {
                    $prod_name = $_POST['prod_name'];
                    $prod_catelogy = $_POST['prod_catelogy'];
                    $prod_qty = $_POST['prod_qty'];
                    $prod_price = $_POST['prod_price'];
                    $prod_description = $_POST['prod_description'];
                    $prod_status = $_POST['prod_status'];
                    $prod_featured = $_POST['prod_featured'];
                    $prod_image = $_FILES['prod_image']['name'];
                    $prod_image_temp = $_FILES['prod_image']['tmp_name'];
                    if (empty($prod_image)) {

                        $prod_image = $show_prod_by_id['HinhAnh'];
                    }

                    move_uploaded_file($prod_image_temp, "images/$prod_image");
                    updateProduct($prod_id, $prod_name, $prod_description, $prod_image, $prod_price, "Giá Trị", 1, 1, 0, $prod_qty, 1, $prod_status, $prod_featured, $prod_catelogy);
                    header("Location: ?mod=product&act=updateproduct&prod_id=$prod_id");
                }
                if (isset($_POST['cancel'])) {
                    header("Location: ?mod=product&act=productlist");
                }
            }
            include_once "view/admin/admin-header.php";
            include_once "view/admin/updateproduct.php";
            include_once "view/admin/admin-footer.php";
            break;
    }
}
