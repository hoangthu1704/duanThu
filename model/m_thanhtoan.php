<?php
include_once "funtion.php";
include_once "config.php";
header('Content-type: text/html; charset=utf-8');

function kitrauser($email)
{
    $sql = "SELECT * FROM nguoidung where Email='$email'";
    return out_data($sql, false);
}
function tao_user($email, $username, $mk, $time, $nmph)
{
    $sql = "INSERT INTO nguoidung (Email,UserName,MatKhau,NgayTao,MobileNumber) VALUES 
        ('$email','$username','$mk','$time','$nmph')";
    return in_data($sql);
}
function dangnhapkhimua($email)
{
    $sql = "SELECT * FROM nguoidung where Email='$email' and MatKhau=0";
    return out_data($sql, false);
}
function nhap_donhang($ma_donhang, $thongtin_cacsanpham, $tong_tien, $trang_thai, $ghi_chu_donhang, $yeu_cau_huy_donhang, $manguoidung, $ngay_tao, $email, $number_phone, $ho_ten, $dia_chi, $ptttt)
{
    if ($manguoidung == null) {
        $sql = "INSERT INTO donhang (ma_donhang,thongtin_cacsanpham,tong_tien,trang_thai,ghi_chu_donhang,yeu_cau_huy_donhang,ngay_tao,email,number_phone,ho_ten,dia_chi,phuong_thuc_thanh_toan) VALUES 
        ('$ma_donhang','$thongtin_cacsanpham','$tong_tien','$trang_thai','$ghi_chu_donhang','$yeu_cau_huy_donhang','$ngay_tao','$email','$number_phone','$ho_ten','$dia_chi','$ptttt')";
    } else {
        $sql = "INSERT INTO donhang (ma_donhang,thongtin_cacsanpham,tong_tien,trang_thai,ghi_chu_donhang,yeu_cau_huy_donhang,manguoidung,ngay_tao,email,number_phone,ho_ten,dia_chi,phuong_thuc_thanh_toan) VALUES 
        ('$ma_donhang','$thongtin_cacsanpham','$tong_tien','$trang_thai','$ghi_chu_donhang','$yeu_cau_huy_donhang','$manguoidung','$ngay_tao','$email','$number_phone','$ho_ten','$dia_chi','$ptttt')";
    }
    return in_data($sql);
}
function kiemtramadonhang($madonhang)
{
    $sql = "SELECT * FROM donhang where ma_donhang=$madonhang";
    return out_data($sql, false);
}

function execPostRequest($url, $data)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt(
        $ch,
        CURLOPT_HTTPHEADER,
        array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data))
    );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    //execute post
    $result = curl_exec($ch);
    //close connection
    curl_close($ch);
    return $result;
}

function online_checkout($numrd, $thongtinsanpham, $tongtien, $trangthai, $noteorder, $yeucauhuydonhang, $idnguoidung, $date, $email, $numphone, $hoten, $address, $ptthanhtoan)
{
    //thanh toan bang momo
    $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
    
    $partnerCode = partner_Code;
    $accessKey = access_Key;
    $secretKey = secret_Key;

    $orderInfo = "Thanh toán qua MoMo";
    $amount = "$tongtien";
    $orderId = time() . "";
    $redirectUrl = path_pay;
    $ipnUrl = path_pay;
    $extraData = "";

        // $partnerCode = $partnerCode;
        // $accessKey = $accessKey;
        // $serectkey = $secretKey;
        // $orderId = $orderId; // Mã đơn hàng
        // $orderInfo = $orderInfo;
        // $amount = $amount;
        // $ipnUrl = $ipnUrl;
        // $redirectUrl = $redirectUrl;
        // $extraData = $extraData;

    $requestId = time() . "";
    $requestType = "payWithATM";

    //before sign HMAC SHA256 signature
    $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
    $signature = hash_hmac("sha256", $rawHash, $secretKey);
    $data = array(
        'partnerCode' => $partnerCode,
        'partnerName' => "Test",
        "storeId" => "MomoTestStore",
        'requestId' => $requestId,
        'amount' => $amount,
        'orderId' => $orderId,
        'orderInfo' => $orderInfo,
        'redirectUrl' => $redirectUrl,
        'ipnUrl' => $ipnUrl,
        'lang' => 'vi',
        'extraData' => $extraData,
        'requestType' => $requestType,
        'signature' => $signature
    );
    $result = execPostRequest($endpoint, json_encode($data));
    $jsonResult = json_decode($result, true);  // decode json

    $_SESSION['thongtindonhang'] = [
        'numrd' => $numrd,
        'thongtinsanpham' => $thongtinsanpham,
        'tongtien' => $tongtien,
        'trangthai' => $trangthai,
        'noteorder' => $noteorder,
        'yeucauhuydonhang' => $yeucauhuydonhang,
        'idnguoidung' => $idnguoidung,
        'date' => $date,
        'email' => $email,
        'numphone' => $numphone,
        'hoten' => $hoten,
        'address' => $address,
        'ptthanhtoan' => $ptthanhtoan
    ];

    header('Location: ' . $jsonResult['payUrl']);
    
    //Just a example, please check more in there
}

date_default_timezone_set('Asia/Ho_Chi_Minh');
$date = date('Y:m:d H:i:s');
$ymd = date('Y:m:d');

if (isset($_POST['xacnhan'])) {
    if (!empty($_SESSION['thanhtoan'])) {
        $hoten = $_POST['hoten'];
        $email = $_POST['email'];
        $numphone = $_POST['numphone'];
        $address = $_POST['address'];
        $noteorder = $_POST['noteorder'];
        if (isset($_POST['ptthanhtoan'])) {
            $ptthanhtoan = $_POST['ptthanhtoan'];
        }
        $tongtien = $_POST['tongtien'];
        $chuoimongmuon = '0123456789';
        $numrd = substr(str_shuffle($chuoimongmuon), 0, 7);
        $thongtinsanpham = '';

        if (!empty($hoten) && !empty($email) && !empty($numphone) && !empty($address) && !empty($ptthanhtoan)) {
            foreach ($_SESSION['thanhtoan'] as $thanhtoan) {
                $thongtinsanpham .= '"' . $thanhtoan['idsp'] . ' - ' . $thanhtoan['ha'] . ' - ' . $thanhtoan['ten'] . ' - ' . $thanhtoan['chl'] . ' - ' . $thanhtoan['sz'] . ' - ' . $thanhtoan['sl'] . ' - ' . $thanhtoan['gia'] . '" ';
            }
            if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
                if($ptthanhtoan == 'Ví Momo'){
                    online_checkout($numrd, $thongtinsanpham, $tongtien, 'đã lên đơn', $noteorder, '', $_SESSION['user']['id_nguoidung'], $date, $email, $numphone, $hoten, $address, $ptthanhtoan);
                }else{
                    nhap_donhang($numrd, $thongtinsanpham, $tongtien, 'đã lên đơn', $noteorder, '', $_SESSION['user']['id_nguoidung'], $date, $email, $numphone, $hoten, $address, $ptthanhtoan);
                    unset($_SESSION['thanhtoan']);
                    unset($_SESSION['giamgianhe']);
                    header('Location: ?mod=page&act=messageSuccessful');
                }
                
            } else {
                if($ptthanhtoan == 'Ví Momo'){
                    online_checkout($numrd, $thongtinsanpham, $tongtien, 'đã lên đơn', $noteorder, '', '', $date, $email, $numphone, $hoten, $address, $ptthanhtoan);
                }else{
                    nhap_donhang($numrd, $thongtinsanpham, $tongtien, 'đã lên đơn', $noteorder, '', '', $date, $email, $numphone, $hoten, $address, $ptthanhtoan);
                    include_once "model/send_mail_donhang.php";
                    send_mail($email, 'Super Wow', $giadien_donhang,$matrongchuaanh);
                    unset($_SESSION['thanhtoan']);
                    unset($_SESSION['giamgianhe']);
                    header('Location: ?mod=page&act=messageSuccessful');
                }
            }
            $_SESSION['luutrumadonhang'] = $numrd;
        } else {
            $thongbao_thanhtoan = "Xin nhập đầy đủ thông tin";
        }
    } else {
        $thongbao_thanhtoan = "chưa có sản phẩm nào";
    }
}

if(isset($_SESSION['thongtindonhang']) && !empty($_SESSION['thongtindonhang']) && isset($message) && ($message == 'Successful.')){
    extract($_SESSION['thongtindonhang']);
    $kiemtramadonhang = kiemtramadonhang($numrd);
    if(!$kiemtramadonhang){
        nhap_donhang($numrd, $thongtinsanpham, $tongtien, $trangthai, $noteorder, $yeucauhuydonhang, $idnguoidung, $date, $email, $numphone, $hoten, $address, $ptthanhtoan);
        if(!isset($_SESSION['user']) || empty($_SESSION['user'])){
            include_once "model/send_mail_donhang.php";
            send_mail($email, 'Super Wow', $giadien_donhang,$matrongchuaanh);
        }
        unset($_SESSION['thongtindonhang']);
        unset($_SESSION['thanhtoan']);
        unset($_SESSION['giamgianhe']);
    }
}

// http://localhost:3000/index.php?
// mod=page
// &act=messageSuccessful
// &partnerCode=MOMOBKUN20180529
// &orderId=1712696273
// &requestId=1712696273
// &amount=100000
// &orderInfo=Thanh+to%C3%A1n+qua+MoMo
// &orderType=momo_wallet
// &transId=4018947850
// &resultCode=0
// &message=Successful.
// &payType=napas
// &responseTime=1712696311646
// &extraData=
// &signature=5a6724cceae156810e113a8768ce1c53aad7d1de3c76b3a5ad4e5c2b7c2555fa
// &paymentOption=momo