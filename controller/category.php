<?php

extract($_REQUEST);
include_once "model/catelogyModel.php";


if (isset($act)) {
    switch ($act) {
        case 'categorylist':
            $show_cats = getAllCatelogies();
            include_once "view/admin/admin-header.php";
            include_once "view/admin/categorylist.php";
            include_once "view/admin/admin-footer.php";
            break;
        case 'addcategory':
            if (isset($_POST['add_category'])) {

                $cat_name = $_POST['cat_name'];
                $cat_image = $_FILES['cat_image']['name'];
                $cat_image_temp = $_FILES['cat_image']['tmp_name'];
                $cat_description = $_POST['cat_description'];

                move_uploaded_file($cat_image_temp, "assets/images/$cat_image");
                createCatelogy($cat_name, $cat_image, $cat_description);

                header("Location: ?mod=category&act=addcategory");
            }
            if (isset($_POST['cancel'])) {

                header("Location: ?mod=category&act=categorylist");
            }
            include_once "view/admin/admin-header.php";
            include_once "view/admin/addcategory.php";
            include_once "view/admin/admin-footer.php";
            break;
        case 'deletecategory':
            if (isset($_GET['cat_id'])) {
                $cat_id = $_GET['cat_id'];
                deleteCatelogy($cat_id);

                header("Location: ?mod=category&act=categorylist");
            }
            break;
        case 'updatecategory':
            if (isset($_GET['cat_id'])) {
                $cat_id = $_GET['cat_id'];
                $show_cat = getCatelogyById($cat_id);
                if (isset($_POST['update_category'])) {
                    $cat_name = $_POST['cat_name'];
                    $cat_image = $_FILES['cat_image']['name'];
                    $cat_image_temp = $_FILES['cat_image']['tmp_name'];
                    $cat_description = $_POST['cat_description'];

                    if (empty($cat_image)) {
                        $cat_image = $show_cat['HinhAnh'];
                    }

                    move_uploaded_file($cat_image_temp, "assets/images/$cat_image");
                    updateCatelogy($cat_id, $cat_name, $cat_image, $cat_description);
                    header("Location: ?mod=category&act=updatecategory&cat_id=$cat_id");
                }
                if (isset($_POST['cancel'])) {

                    header("Location: ?mod=category&act=categorylist");
                }
            }
            include_once "view/admin/admin-header.php";
            include_once "view/admin/updatecategory.php";
            include_once "view/admin/admin-footer.php";
            break;
    }
}
