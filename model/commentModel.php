<?php
include_once "model/connectDB.php";

function showAllComments()
{
    $conn = connect();
    $sql = "SELECT * FROM binhluan ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function showAllCommentsByProductId($prod_id)
{
    $conn = connect();
    $sql = "SELECT * FROM binhluan WHERE SanPham_id = $prod_id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function showAllCommentsDesc()
{
    $conn = connect();
    $sql = "SELECT * FROM binhluan ORDER BY id_binhluan desc ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function changeStatusToPublic($id)
{
    $conn = connect();
    $sql = "UPDATE binhluan SET ";
    $sql .= "TinhTrang = 'public' ";
    $sql .= "WHERE id_binhluan  = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function changeStatusToPrivate($id)
{
    $conn = connect();
    $sql = "UPDATE binhluan SET ";
    $sql .= "TinhTrang = 'private' ";
    $sql .= "WHERE id_binhluan  = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function addComment($SanPham_id, $NguoiDung_id, $NoiDung)
{
    $conn = connect();
    $sql = "INSERT INTO binhluan(SanPham_id, NguoiDung_id, NoiDung) ";
    $sql .= "VALUES ('$SanPham_id', '$NguoiDung_id', '$NoiDung' ) ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function updateComment($id, $SanPham_id, $NguoiDung_id, $NoiDung)
{
    $conn = connect();
    $sql = "UPDATE binhluan SET ";
    $sql .= "SanPham_id = '$SanPham_id', ";
    $sql .= "NguoiDung_id = '$NguoiDung_id', ";
    $sql .= "NoiDung = '$NoiDung' ";
    $sql .= "WHERE id_binhluan  = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function countComments()
{
    $conn = connect();
    $sql = "SELECT COUNT(*) FROM binhluan ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $count = $stmt->fetchColumn();
    return $count;
}
