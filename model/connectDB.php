<?php

include_once "config.php";
function connect()
{

    $sv_data = "mysql:host=" . servername . ";dbname=" . db_name;

    try {
        // Với mysql là tên của DBMS, localhost có ý nghĩa database được đặt trên cùng server, izlearn là tên của database. $username và $password là 2 biến chứa thông tin xác thực.
        $conn = new PDO($sv_data, user_name, user_password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected Successfully";
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
