<?php
include_once "funtion.php";

function showcatagory(){
    $sql = 'SELECT * FROM danhmuc';
    return out_data($sql, true);
}

$showcate = showcatagory();
?>