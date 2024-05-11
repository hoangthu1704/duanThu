<?php

extract($_REQUEST);
include_once "model/subCatelogyModel.php";
include_once "model/catelogyModel.php";
if (isset($act)) {
    switch ($act) {
        case 'subcategorylist':
            $show_subCats = getAllSubCatelogies();
            include_once "view/admin/admin-header.php";
            include_once "view/admin/subcategorylist.php";
            include_once "view/admin/admin-footer.php";
            break;
        case 'addsubcategory':
            $show_cats = getAllCatelogies();
            if (isset($_POST['add_subCategory'])) {

                $subcat_catelogy = $_POST['subcat_catelogy'];
                $subcat_name = $_POST['subcat_name'];
                $subcat_description = $_POST['subcat_description'];

                createSubCatelogy($subcat_catelogy, $subcat_name, $subcat_description);

                header("Location: ?mod=subcategory&act=addsubcategory");
            }
            if (isset($_POST['cancel'])) {

                header("Location: ?mod=subcategory&act=subcategorylist");
            }
            include_once "view/admin/admin-header.php";
            include_once "view/admin/addsubcategory.php";
            include_once "view/admin/admin-footer.php";
            break;
        case 'deletesubcategory':
            if (isset($_GET['subCat_id'])) {
                $subCat_id = $_GET['subCat_id'];
                deleteSubCatelogy($subCat_id);

                header("Location: ?mod=subcategory&act=subcategorylist");
            }
            break;
        case 'updatesubcategory':
            if (isset($_GET['subCat_id'])) {
                $subCat_id = $_GET['subCat_id'];
                $show_cats = getAllCatelogies();
                $show_subCat_id = getSubCatelogyById($subCat_id);
                if (isset($_POST['update_subCategory'])) {
                    $subcat_catelogy = $_POST['subcat_catelogy'];
                    $subcat_name = $_POST['subcat_name'];
                    $subcat_description = $_POST['subcat_description'];

                    updateSubCatelogy($subCat_id, $subcat_catelogy, $subcat_name, $subcat_description);
                    header("Location: ?mod=subcategory&act=updatesubcategory&subCat_id=$subCat_id");
                }
                if (isset($_POST['cancel'])) {

                    header("Location: ?mod=subcategory&act=subcategorylist");
                }
            }
            include_once "view/admin/admin-header.php";
            include_once "view/admin/updatesubcategory.php";
            include_once "view/admin/admin-footer.php";
            break;
    }
}
