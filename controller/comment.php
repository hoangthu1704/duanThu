<?php
extract($_REQUEST);

include_once "model/commentModel.php";
include_once "model/userModel.php";
include_once "model/productModel.php";
if (isset($mod)) {

    switch ($act) {
        case 'show':
            $show_comments = showAllCommentsDesc();
            include_once "view/admin/admin-header.php";
            include_once "view/admin/commentlist.php";
            include_once "view/admin/admin-footer.php";
            break;
        case 'public':
            if (isset($_GET['id'])) {
                changeStatusToPublic($id);
                header("Location: ?mod=comment&act=show");
            }
            break;
        case 'private':
            if (isset($_GET['id'])) {
                changeStatusToPrivate($id);
                header("Location: ?mod=comment&act=show");
            }
            break;

        default:
            # code...
            break;
    }
}
