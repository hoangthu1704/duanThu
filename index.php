<?php
session_start();
// session_destroy();
extract($_REQUEST);
if (isset($mod)) {
    switch ($mod) {
        case 'page':
            include_once "controller/page.php";
            break;
        case 'category':
            include_once "controller/category.php";
            break;
        case 'product':
            include_once "controller/product.php";
            break;
        case 'subcategory':
            include_once "controller/subcategory.php";
            break;
        case 'blog':
            include_once "controller/blog.php";
            break;
        case 'user':
            include_once "controller/user.php";
            break;
        case 'discount':
            include_once "controller/discount.php";
            break;
        case 'admin':
            include_once "controller/admin.php";
            break;
        case 'order':
            include_once "controller/order.php";
            break;
        case 'comment':
            include_once "controller/comment.php";
            break;
        default:
            # code...
            break;
    }
} else {
    header("Location: ?mod=page&act=home");
}
