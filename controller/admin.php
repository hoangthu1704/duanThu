<?php

extract($_REQUEST);

if (isset($act)) {
    switch ($act) {
        case 'component':
            include_once "view/admin/admin-header.php";
            include_once "view/admin/component.php";
            include_once "view/admin/admin-footer.php";
            break;
    }
}
