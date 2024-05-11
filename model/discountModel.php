<?php
include_once "model/connectDB.php";

function getAllDiscounts()
{
    $conn = connect();
    $sql = "SELECT * FROM magiamgia ORDER BY id_ma_giam_gia  desc";
    // Chuẩn bị một câu lệnh để thực thi(query) và trả về một đối tượng(object) câu lệnh
    $stmt = $conn->prepare($sql);
    // Chuẩn bị một câu lệnh SQL để được thực thi bằng phương thức(method) execute()
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getDiscountyById($id)
{
    $conn = connect();
    $sql = "SELECT * FROM magiamgia WHERE id_ma_giam_gia  = $id";
    // Chuẩn bị một câu lệnh để thực thi(query) và trả về một đối tượng(object) câu lệnh
    $stmt = $conn->prepare($sql);
    // Chuẩn bị một câu lệnh SQL để được thực thi bằng phương thức(method) execute()
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function createDiscount($TenMaGiamGia, $LoaiGiamGia, $GiaTri, $TrangThai, $SoLuong)
{

    $conn = connect();
    $sql = "INSERT INTO magiamgia(ten_ma_giam, loai_ma, gia_tri, trang_thai, so_luong) ";
    $sql .= "VALUES ('$TenMaGiamGia', '$LoaiGiamGia', '$GiaTri', '$TrangThai', '$SoLuong') ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function deleteDiscount($id)
{

    $conn = connect();
    $sql = "DELETE FROM magiamgia WHERE id_ma_giam_gia  = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function updateDiscount($id, $TenMaGiamGia, $LoaiGiamGia, $GiaTri, $TrangThai, $SoLuong)
{

    $conn = connect();
    $sql = "UPDATE magiamgia SET ";
    $sql .= "ten_ma_giam = '$TenMaGiamGia', ";
    $sql .= "loai_ma = '$LoaiGiamGia', ";
    $sql .= "gia_tri = '$GiaTri', ";
    $sql .= "trang_thai = '$TrangThai', ";
    $sql .= "so_luong = '$SoLuong' ";
    $sql .= "WHERE id_ma_giam_gia  = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
