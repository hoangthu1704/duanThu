<?php
include_once "funtion.php";


// hàm show sản phẩm nổi bật được admin chọn, nếu noibat = 1 thì được hiển thị ra
function show_pd_hot_4(){
    $sql = "SELECT * FROM sanpham Where NoiBat = 1 LIMIT 4";
    return out_data($sql, true);
}
// hàm show tất cả danh mục ra màng hình
function showcatagory(){
    $sql = 'SELECT * FROM danhmuc';
    return out_data($sql, true);
}
// hàm hiển thị số lượng sản phẩm có cùng id madanhmuc với id danh mục
function insl_theodanhmuc($iddm){
    $sql = "SELECT * FROM sanpham Where MaDanhMuc = $iddm";
    return out_data($sql, true);
}
// hàm show sản phẩm có lượt xem nhiều nhất, giới hạn 6 sản phẩm được hiển thị
function show_sp_theoluotxem_nhieunhat(){
    $sql = "SELECT * FROM `sanpham` ORDER BY luot_xem DESC LIMIT 6";
    return out_data($sql, true);
}

// gọi hàm show tất cả danh mục rồi gán vào biến $showcate
$showcate = showcatagory();
// gọi hàm show 4 sản phẩm hot rồi gán vào biến $show_pd_hot_4
$show_pd_hot_4 = show_pd_hot_4();
// gọi hàm show sp theo lượt xem rồi gán vào biến $show_sp_theoluotxem_nhieunhat
$show_sp_theoluotxem_nhieunhat = show_sp_theoluotxem_nhieunhat();

?>