<?php
include_once "model/connectDB.php";

function getAllCatelogies()
{
    $conn = connect();
    $sql = "SELECT * FROM danhmuc ORDER BY id_danhmuc desc";
    // Chuẩn bị một câu lệnh để thực thi(query) và trả về một đối tượng(object) câu lệnh
    $stmt = $conn->prepare($sql);
    // Chuẩn bị một câu lệnh SQL để được thực thi bằng phương thức(method) execute()
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getCatelogyById($id)
{
    $conn = connect();
    $sql = "SELECT * FROM danhmuc WHERE id_danhmuc = $id";
    // Chuẩn bị một câu lệnh để thực thi(query) và trả về một đối tượng(object) câu lệnh
    $stmt = $conn->prepare($sql);
    // Chuẩn bị một câu lệnh SQL để được thực thi bằng phương thức(method) execute()
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function createCatelogy($TenDanhMuc, $HinhAnh, $MoTa)
{

    $conn = connect();
    $sql = "INSERT INTO danhmuc(TenDanhMuc, HinhAnh, MoTa) ";
    $sql .= "VALUES ('$TenDanhMuc', '$HinhAnh', '$MoTa') ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function deleteCatelogy($id)
{

    $conn = connect();
    $sql = "DELETE FROM danhmuc WHERE id_danhmuc = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function updateCatelogy($id, $TenDanhMuc, $HinhAnh, $MoTa)
{

    $conn = connect();
    $sql = "UPDATE danhmuc SET ";
    $sql .= "TenDanhMuc = '$TenDanhMuc', ";
    $sql .= "HinhAnh = '$HinhAnh', ";
    $sql .= "MoTa = '$MoTa' ";
    $sql .= "WHERE id_danhmuc = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function countCatelogies()
{
    $conn = connect();
    $sql = "SELECT COUNT(*) FROM danhmuc ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $count = $stmt->fetchColumn();
    return $count;
}
