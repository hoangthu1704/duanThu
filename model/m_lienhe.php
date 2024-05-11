<?php
// khi người dùng bấm gửi liên hệ
if(isset($_POST['guilienhe'])){
    $name = $_POST["name"];
    $company = $_POST["company"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $message = $_POST["message"];
    // sẽ lấy các thông tin trong form liên hệ
    // sau đó chạy qua file send_mail_lienhe để lấy form
    include_once 'model/send_mail_lienhe.php';
    // sau khi đã có form rồi thì gửi mail cho cửa hàng sao đó hiển thị thông báo ra màng hình
    $thongbao_guitinnhanlienhe = send_mail(address_email,$name,$giadien_lienhe,'');
}
?>