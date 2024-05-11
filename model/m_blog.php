<?php
include_once "funtion.php";

function show_all_blog(){
    $sql = "SELECT * FROM blog";
    return out_data($sql, true);
}
function show_blog($id){
    $sql = "SELECT * FROM blog where id_blog = $id";
    return out_data($sql, false);
}
$show_all_blog = show_all_blog();

?>