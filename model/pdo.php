<?php
include_once "config.php";
function connect()
{

    $sv_data = "mysql:host=" . servername . ";dbname=" . db_name;

    try {
        $conn = new PDO($sv_data, user_name, user_password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
