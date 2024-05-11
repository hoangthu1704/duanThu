<?php
include_once "connectDB.php";
// hàm gọi
function out_data($sql, $all_one)
{
    $conn = connect();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $all_one ? $stmt->fetchALL(PDO::FETCH_ASSOC) : $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
// hàm nhập
function in_data($sql)
{
    $conn = connect();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt;
}
