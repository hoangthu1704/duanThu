<?php

extract($_REQUEST);
include_once "model/orderModel.php";


if (isset($act)) {
    switch ($act) {
        case 'orderlist':
            $show_orders = getAllOrders();
            include_once "view/admin/admin-header.php";
            include_once "view/admin/orderlist.php";
            include_once "view/admin/admin-footer.php";
            break;
    }
}
