<?php

include_once "model/connectDB.php";

function checkLogin($username, $password)
{

    $conn = connect();
    $sql = "SELECT * FROM nguoidung WHERE UserName = '$username' AND MatKhau = '$password' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function checkEmailExists($email)
{
    $conn = connect();
    $sql = "SELECT Email FROM nguoidung WHERE Email = '$email' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getAllUsers()
{
    $conn = connect();
    $sql = "SELECT * FROM nguoidung ORDER BY id_nguoidung  desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getUserById($id)
{
    $conn = connect();
    $sql = "SELECT * FROM nguoidung WHERE id_nguoidung  = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function getUserByUserName($email)
{
    $conn = connect();
    $sql = "SELECT * FROM nguoidung WHERE Email = '$email' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}


function createUser($username, $email, $password, $mobile, $image, $role, $status)
{

    $conn = connect();
    $sql = "INSERT INTO nguoidung(UserName, Email, MatKhau, VaiTro, HinhAnh, MobileNumber, NgayTao, Status) ";
    $sql .= "VALUES ('$username', '$email', '$password', '$role', '$image', '$mobile', now(), '$status' ) ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function createUser_02($fullName, $username, $password)
{

    $conn = connect();
    $sql = "INSERT INTO nguoidung(HoTen, UserName, MatKhau, NgayTao ) ";
    $sql .= "VALUES ('$fullName', '$username', '$password', now() ) ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function updateUser($id, $username, $email, $password, $mobile, $image, $role, $status)
{
    $conn = connect();
    $sql = "UPDATE nguoidung SET ";
    $sql .= "UserName = '$username', ";
    $sql .= "Email = '$email', ";
    $sql .= "MatKhau = '$password', ";
    $sql .= "VaiTro = '$role', ";
    $sql .= "HinhAnh = '$image', ";
    $sql .= "MobileNumber = '$mobile', ";
    $sql .= "Status = '$status' ";
    $sql .= "WHERE id_nguoidung  = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function changePassword($id, $password)
{
    $conn = connect();
    $sql = "UPDATE nguoidung SET ";
    $sql .= "MatKhau = '$password' ";
    $sql .= "WHERE id_nguoidung  = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}


function changeToAdmin($id)
{
    $conn = connect();
    $sql = "UPDATE nguoidung SET VaiTro = '1' WHERE id_nguoidung  = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function changeToCustomer($id)
{
    $conn = connect();
    $sql = "UPDATE nguoidung SET VaiTro = '0' WHERE id_nguoidung  = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function updateUserAdmin($id, $username, $password, $name, $mobile_number, $image, $role)
{
    $conn = connect();
    $sql = "UPDATE nguoidung SET ";
    $sql .= "Email = '$username', ";
    $sql .= "MatKhau = '$password', ";
    $sql .= "HoTen = '$name', ";
    $sql .= "MobileNumber = '$mobile_number', ";
    $sql .= "HinhAnh = '$image', ";
    $sql .= "VaiTro = '$role' ";
    $sql .= "WHERE id_nguoidung  = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function updateUserProfileAdmin($id, $firstName, $lastName, $email, $phone, $username, $password)
{
    $conn = connect();
    $sql = "UPDATE nguoidung SET ";
    $sql .= "FirstName = '$firstName', ";
    $sql .= "LastName = '$lastName', ";
    $sql .= "Email = '$email', ";
    $sql .= "MobileNumber = '$phone', ";
    $sql .= "UserName = '$username', ";
    $sql .= "MatKhau = '$password' ";
    $sql .= "WHERE id_nguoidung  = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function updateUserByEmail($email, $token)
{
    $conn = connect();
    $sql = "UPDATE nguoidung SET Token = '{$token}' WHERE Email = '$email' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function updatePasswordByToken($email, $token, $password)
{
    $conn = connect();
    $sql = "UPDATE nguoidung SET MatKhau = '$password' WHERE Email = '$email' AND Token = '$token' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function deleteUser($id)
{
    $conn = connect();
    $sql = "DELETE FROM nguoidung WHERE id_nguoidung = $id ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function countUsers()
{
    $conn = connect();
    $sql = "SELECT COUNT(*) FROM nguoidung ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $count = $stmt->fetchColumn();
    return $count;
}

function countUsersCustomer()
{
    $conn = connect();
    $sql = "SELECT COUNT(*) FROM nguoidung WHERE VaiTro = 0 ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $count = $stmt->fetchColumn();
    return $count;
}
