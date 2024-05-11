<?php
include_once "funtion.php";

if ($act == 'sanpham') {
    // biến hancheslsp dùng để hạn chế số lượng sản phẩm được hiển thị ra trang
    $hancheslsp = 6;
    // biến phantrang dùng để số thứ tự bắt đầu của sản phẩm trong csdl để hiển thị ra
    $phantrang = ($page - 1) * $hancheslsp;
    // biến này dùng để thểm giá trị cho url
    $tham_tinh = '';
}

if (!isset($page) && $act == 'sanpham') {
    header('location: ?mod=page&act=sanpham&page=1');
}

if (!isset($page) && $act == 'sanpham' && !isset($key_seach) && !isset($madanhmuc_tim) && !isset($madanhmuc_phu)) {
    unset($_SESSION['seach_sp']);
}

// hàm này hiển thị tất cả danh mục
function show_cac_danh_muc()
{
    $sql = "SELECT * FROM danhmuc";
    return out_data($sql, true);
}
// hàm này sẽ lấy tất cả sản phẩm
function show_all_pd()
{
    $sql = "SELECT * FROM sanpham ";
    return out_data($sql, true);
}
// hàm này sẽ gọi tất cả sản phẩm tương ứng với giá trị truyền vào
function diemsosp($key, $mdm, $mdmp, $gia)
{
    // hàm này giống với hàm phía dưới nhưng không bị hạn chế
    $sql = "SELECT * FROM sanpham ";
    if ($key != null) {
        $sql .= "WHERE TenSanPham LIKE '%$key%'";
    } else if ($mdm != null && $gia == null) {
        $sql .= "WHERE MaDanhMuc = $mdm";
    } else if ($mdmp != null) {
        $sql .= "WHERE SubCategory = $mdmp";
    } else if ($gia != null && $mdm == null) {
        $catgia = explode(' - ', $gia);
        $sql .= "WHERE Gia >= " . $catgia[0] . " AND Gia <= " . $catgia[1];
    } else if ($mdm != null && $gia != null) {
        $catgia = explode(' - ', $gia);
        $sql .= "WHERE  MaDanhMuc = $mdm AND Gia >= " . $catgia[0] . " AND Gia <= " . $catgia[1] . " ";
    }
    return out_data($sql, true);
}

// hàm này sẽ hạn chế số lượng các sản phẩm tương ứng với giá trị truyền vào
function show_sp_timkiem($page, $hanche, $key, $mdm, $mdm_p, $gia)
{
    $sql = "SELECT * FROM sanpham ";
    if ($key != null) {
        // nếu có giá trị key thì sẽ được nối tiếp với chuỗi sql để hiển thị ra sản phẩm tương ứng
        $sql .= "WHERE TenSanPham LIKE '%$key%' ";
    } else if ($mdm != null && $gia == null) {
        // nếu mdm có giá trị và giá không có giá trị thì sẽ được nối tiếp với chuỗi sql để hiển thị ra sản phẩm tương ứng
        $sql .= "WHERE MaDanhMuc = $mdm ";
    } else if ($mdm_p != null) {
        // nếu có giá trị mdp thì sẽ được nối tiếp với chuỗi sql để hiển thị ra sản phẩm tương ứng
        $sql .= "WHERE SubCategory = $mdm_p ";
    } else if ($gia != null && $mdm == null) {
        // nếu gia có giá trị và mdm không có giá trị thì sẽ được nối tiếp với chuỗi sql để hiển thị ra sản phẩm tương ứng
        // vì giá được truyền vào là một chuỗi (gia_min - gia_max) nên sẽ được cắt thành mảng
        $catgia = explode(' - ', $gia);
        // mảng $catgia[0] là giá min
        // mảng $catgia[1] là giá max
        $sql .= "WHERE Gia >= " . $catgia[0] . " AND Gia <= " . $catgia[1] . " ";
    } else if ($mdm != null && $gia != null) {
        // nếu gia có giá trị và mdm có giá trị thì sẽ được nối tiếp với chuỗi sql để hiển thị ra sản phẩm tương ứng
        // hàm này thực thi giống với giá nhưng chỉ thêm mdm
        $catgia = explode(' - ', $gia);
        $sql .= "WHERE MaDanhMuc = $mdm AND Gia >= " . $catgia[0] . " AND Gia <= " . $catgia[1] . " ";
    }
    // hạn chết số lượt được hiển thị ra màng hình, và số được bắt đầu để hiển thị ra
    $sql .= "Limit $hanche OFFSET $page";
    return out_data($sql, true);
}

// hàm này dùng để đếm số trang cần thiết
// các tham số được được truyền vào: diemso_seach ( điếm tất cả số lượng sản phẩm phù hợp với yêu cầu )
//      hancheslsp ( số lượng sản phẩm đó đươc hiển thị ra trang )
function lamtronsopage($diemso_seach, $hancheslsp)
{
    // hàm count dùng để đếm có bao nhiêu sản phẩm theo yêu cầu sau đó đưa vào biến $sosp
    $sosp = count($diemso_seach);
    // hàm ceil sẽ làm tròn lên vd: 6 / 4 = 1.5 sẽ làm tròn lên 2
    $lamtronsotrang = ceil($sosp / $hancheslsp);
    // trả giá trị về hàm
    return $lamtronsotrang;
}

$show_cac_danh_muc = show_cac_danh_muc();

$show_all_pd = show_all_pd();
// chuẩn bị mảng trống
$mangdemso = [];
// dùng vòng lặp để thêm giá của từng sản phẩm vào mảng trống đã chuẩn bị, thông qua hàm array_push
foreach ($show_all_pd as $value) {
    array_push($mangdemso, $value['Gia']);
}
// khi đã có mảng giá thì dùng hàm max để lấy ra giá lớn nhất
$gialonnhat = max($mangdemso);
// sau đó chia cho 6 để có để có mức giá cho từng giá lọc
$giadaduocchia = $gialonnhat / 6;



// in sản phẩm khi có url key_seach
// khi trên url có key_seach thì sẽ thực hiện các lệnh sau
if (isset($key_seach)) {
    // dùng hàm unset để xóa session seach_sp để tránh việc người dùng đã chọn các lọc sản phẩm trước đó
    unset($_SESSION['seach_sp']);
    // sau đó gọi hàm show_sp_timkiem và truyền các giá trị cần thiết: phân trang, hạn chế số lượng, key seach
    // biến show_sp_timkiem này sẽ được hiển thị ra màng hình.
    $show_sp_timkiem = show_sp_timkiem($phantrang, $hancheslsp, $key_seach, null, null, null);
    // sau đó điếm tất cả số lượng sản phẩm có cùng key seach
    $diemso_seach = diemsosp($key_seach, null, null, null);
    // gọi hàm lamtronsopage truyền các tham số cần thiết, hàm này đã được giải thích trước đó
    // biến lamtronsotrang sẽ được đưa vào trang để tính số trang cần thiết
    $lamtronsotrang = lamtronsopage($diemso_seach, $hancheslsp);
    // biến này dùng để khi bấm chuyển trang sẽ giữ lại các biến cần thiết nếu không có thì khi chuyển trang
    //      các giá trị sẽ mất đi
    $tham_tinh = "&key_seach=$key_seach";
}

// in sản phẩm với url madanhmuc_tim
// các lệnh này được thực thi giống với lệnh seach trước đó chỉ khác tham số truyền vào nên sẽ không giải thích lại
if (isset($madanhmuc_tim) && !isset($_POST['lc_gia_sp']) && !isset($_SESSION['seach_sp']['lc_gia_sp'])) {
    $show_sp_timkiem = show_sp_timkiem($phantrang, $hancheslsp, null, $madanhmuc_tim, null, null);
    $diemso_seach = diemsosp(null, $madanhmuc_tim, null, null);
    $lamtronsotrang = lamtronsopage($diemso_seach, $hancheslsp);
    $tham_tinh = "&madanhmuc_tim=$madanhmuc_tim";
}
// in sản phẩm với url madanhmuc_phu
// các lệnh này được thực thi giống với lệnh seach trước đó chỉ khác tham số truyền vào nên sẽ không giải thích lại
if (isset($madanhmuc_phu)) {
    $show_sp_timkiem = show_sp_timkiem($phantrang, $hancheslsp, null, null, $madanhmuc_phu, null);
    $diemso_seach = diemsosp(null, null, $madanhmuc_phu, null);
    $lamtronsotrang = lamtronsopage($diemso_seach, $hancheslsp);
    $tham_tinh = "&madanhmuc_phu=$madanhmuc_phu";
}

// lệnh này được thực thi khi người dùng click vào nút radio loại sản phẩm
if (isset($_POST['loaisp'])) {
    // sau khi click chọn thì giá trị của radio đó sẽ lưu vào session [seach_sp] [loai_sp]
    $_SESSION['seach_sp']['loaisp'] = $_POST['loaisp'];
    // sau đó sẽ thêm madanhmuc_tim lên url, khi đã có url thì lệnh madanhmuc_tim phía trên sẽ được thực thi
    header("location: ?mod=page&act=sanpham&page=1&madanhmuc_tim=" . $_SESSION['seach_sp']['loaisp'] . "");
}

// in sản phẩm với lọc giá
// lệnh này được thực thi khi chọn lọc giá, sẽ xảy ra 2 trường hợp 
if (isset($_POST['lc_gia_sp'])) {
    // trường hợp khi có madanhmuc_tim trên url
    if (isset($madanhmuc_tim) && !empty($madanhmuc_tim)) {
        // giá trị lọc giá sẽ được gán vào session [seach_sp][lc_gia_sp]
        $_SESSION['seach_sp']['lc_gia_sp'] = $_POST['lc_gia_sp'];
        // các lệnh dưới đây đã được giải thích trên phần seach, nên sẽ không giải thích lại
        $show_sp_timkiem = show_sp_timkiem($phantrang, $hancheslsp, null, $madanhmuc_tim, null, $_SESSION['seach_sp']['lc_gia_sp']);
        $diemso_seach = diemsosp(null, $madanhmuc_tim, null, $_SESSION['seach_sp']['lc_gia_sp']);
        $lamtronsotrang = lamtronsopage($diemso_seach, $hancheslsp);
        $tham_tinh = "&madanhmuc_tim=$madanhmuc_tim";
    } 
    // trường khi không có madanhmuc_tim trên url
    else {
         // giá trị lọc giá sẽ được gán vào session [seach_sp][lc_gia_sp]
        $_SESSION['seach_sp']['lc_gia_sp'] = $_POST['lc_gia_sp'];
        // các lệnh dưới đây đã được giải thích trên phần seach, nên sẽ không giải thích lại
        $show_sp_timkiem = show_sp_timkiem($phantrang, $hancheslsp, null, null, null, $_SESSION['seach_sp']['lc_gia_sp']);
        $diemso_seach = diemsosp(null, null, null, $_SESSION['seach_sp']['lc_gia_sp']);
        $lamtronsotrang = lamtronsopage($diemso_seach, $hancheslsp);
        // trả về trang ban đầu
        header('location: ?mod=page&act=sanpham&page=1');
    }
}

// in sản phẩm khi có url madanhmuc_tim và session lọc giá
// lệnh này được thực khi khi chuyển trang vì còn giữ các giá trị session và url
if (isset($madanhmuc_tim) && !empty($madanhmuc_tim) && isset($_SESSION['seach_sp']['lc_gia_sp']) && !empty($_SESSION['seach_sp']['lc_gia_sp'])) {
    $show_sp_timkiem = show_sp_timkiem($phantrang, $hancheslsp, null, $madanhmuc_tim, null, $_SESSION['seach_sp']['lc_gia_sp']);
    $diemso_seach = diemsosp(null, $madanhmuc_tim, null, $_SESSION['seach_sp']['lc_gia_sp']);
    $lamtronsotrang = lamtronsopage($diemso_seach, $hancheslsp);
    $tham_tinh = "&madanhmuc_tim=$madanhmuc_tim";
}
// in sản phẩm khi session lọc giá và không có url nào đi chung hết
// lệnh này được thực khi khi chuyển trang vì còn giữ các giá trị session
if (!isset($madanhmuc_tim) && !isset($madanhmuc_phu) && isset($_SESSION['seach_sp']['lc_gia_sp']) && !empty($_SESSION['seach_sp']['lc_gia_sp'])) {
    $show_sp_timkiem = show_sp_timkiem($phantrang, $hancheslsp, null, null, null, $_SESSION['seach_sp']['lc_gia_sp']);
    $diemso_seach = diemsosp(null, null, null, $_SESSION['seach_sp']['lc_gia_sp']);
    $lamtronsotrang = lamtronsopage($diemso_seach, $hancheslsp);
}
// in tất cả sản phẩm khi không có điều kiện nào hết
if (isset($page) && !isset($_SESSION['seach_sp']) && !isset($key_seach) && !isset($madanhmuc_tim) && !isset($madanhmuc_phu)) {
    $show_sp_timkiem = show_sp_timkiem($phantrang, $hancheslsp, null, null, null, null);
    $diemso_seach = diemsosp(null, null, null, null);
    $lamtronsotrang = lamtronsopage($diemso_seach, $hancheslsp);
}