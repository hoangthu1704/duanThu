<?php
include_once "model/connectDB.php";

function addCart($SanPham_id, $NguoiDung_id, $Brand_id, $SoLuong, $PhienBan, $MauSac, $Tong)
{
    $conn = connect();
    $sql = "INSERT INTO giohang(SanPham_id, NguoiDung_id, Brand_id,SoLuong, PhienBan, MauSac, Ngay, Tong) ";
    $sql .= "VALUES ('$SanPham_id', '$NguoiDung_id','$Brand_id', '$SoLuong', '$PhienBan', '$MauSac', now(), $Tong) ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function showAllCartsByNguoiDungId($id)
{
    $conn = connect();
    $sql = "SELECT * FROM giohang WHERE NguoiDung_id = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function showBrandId()
{
    $conn = connect();
    $sql = "SELECT DISTINCT Brand_id FROM giohang ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function showAllCartsByBrandId($brand_id)
{
    $conn = connect();
    $sql = "SELECT * FROM giohang WHERE Brand_id = $brand_id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function showCartById($id)
{
    $conn = connect();
    $sql = "SELECT * FROM giohang WHERE id = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function updateCartQuantity($id, $SoLuong, $Tong)
{
    $conn = connect();
    $sql = "UPDATE giohang SET SoLuong = '$SoLuong', Tong = '$Tong' WHERE id = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function deleteCart($id)
{
    $conn = connect();
    $sql = "DELETE FROM giohang WHERE id = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function countCartByUserId($id)
{
    $conn = connect();
    $sql = "SELECT count(*) FROM giohang WHERE NguoiDung_id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $count = $stmt->fetchColumn();
    return $count;
}

function totalCart($id)
{
    $conn = connect();
    $sql = "SELECT SUM(Tong) as Tong FROM giohang WHERE NguoiDung_id = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sum = $stmt->fetch(PDO::FETCH_ASSOC);
    return $sum;
}
