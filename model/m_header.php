<?php
include_once "funtion.php";

function showdanhmucchinh_header(){
    $sql = "SELECT * FROM danhmuc";
    return out_data($sql, true);
}
function showdanhmucphu_header($iddmc){
    $sql = "SELECT * FROM subcategory Where MaDanhMuc = $iddmc";
    return out_data($sql, true);
}
$showdanhmucchinh_header = showdanhmucchinh_header();
?>