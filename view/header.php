<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo-sw.png">
    <title>Super Wow</title>
    <?php
    if ($act == 'home' || $act == 'sanpham' || $act == 'search' || $act == 'dangnhap' || $act == 'dangki' || $act == 'quenmatkhau' || $act == 'taomatkhau' || $act == 'xacnhantaikhoan' || $act == 'detail_invoice' || $act == 'giohang' || $act == 'thanhtoan' || $act == 'donhang' || $act == 'editthongtin' || $act == 'lienhe' || $act == 'thongtin' || $act == 'productDetails' || $act == 'messageSuccessful' || $act == 'blog') {
        echo "  
                <link rel='preconnect' href='https://fonts.googleapis.com'>
                <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
                <link href='https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Recursive:wght@300..1000&display=swap' rel='stylesheet'>
                <link rel='stylesheet' href='assets/fontawesome-free-6.4.0-web/css/all.css'>
                <script src='https://code.jquery.com/jquery-3.7.0.js'></script>
                <script src='assets/js/jqr.js'></script>
                <link rel='stylesheet' href='assets/css/global.css'>
                ";
    }
    if (isset($_POST['key_seach'])) {
      if(!empty($_POST['key_seach'])){
          $tutimkiem = $_POST['key_seach'];
          header("location: ?mod=page&act=sanpham&page=1&key_seach=$tutimkiem");
      }else{
          header("location: ?mod=page&act=sanpham&page=1");
      }
    }
    $time = time();
    if (isset($act)) {
        switch ($act) {
            case 'home':
                echo "
                    <link rel='stylesheet' href='assets/css/all.css?v=$time'>
                    <link rel='stylesheet' href='assets/css/ofv.css?v=$time'>
                    <link rel='stylesheet' href='assets/css/home.css?v=$time'>
                    <link rel='stylesheet' href='assets/css/header_footer.css?v=$time'>
                ";
                break;
            case 'sanpham':
                echo "
                    <link rel='stylesheet' href='assets/css/sanpham.css?v=$time'>
                    <link rel='stylesheet' href='assets/css/global.css?v=$time'>
                    <link rel='stylesheet' href='assets/css/header_footer.css?v=$time'>
                ";
                break;
            case 'dangnhap':
                echo "
                    <link rel='stylesheet' href='assets/css/header_footer.css?v=$time'> 
                    <link rel='stylesheet' href='assets/css/global.css?v=$time'> 
                    <link rel='stylesheet' href='assets/css/dangnhap.css?v=$time'> ";
                break;
            case 'dangki':
                echo "
                    <link rel='stylesheet' href='assets/css/header_footer.css?v=$time'> 
                    <link rel='stylesheet' href='assets/css/header_footer.css?v=$time'>
                    <link rel='stylesheet' href='assets/css/global.css?v=$time'> 
                    <link rel='stylesheet' href='assets/css/dangki.css?v=$time'>";
                break;
            case 'quenmatkhau':
                echo "
                    <link rel='stylesheet' href='assets/css/header_footer.css?v=$time'> 
                    <link rel='stylesheet' href='assets/css/global.css?v=$time'> 
                    <link rel='stylesheet' href='assets/css/quenmk.css?v=$time'>";
                break;
            case 'taomatkhau':
                echo "
                    <link rel='stylesheet' href='assets/css/header_footer.css?v=$time'> 
                    <link rel='stylesheet' href='assets/css/global.css?v=$time'> 
                    <link rel='stylesheet' href='assets/css/taomk.css?v=$time'>";
                break;
            case 'xacnhantaikhoan':
                echo "
                    <link rel='stylesheet' href='assets/css/header_footer.css?v=$time'> 
                    <link rel='stylesheet' href='assets/css/global.css?v=$time'> 
                    <link rel='stylesheet' href='assets/css/xacnhantk.css?v=$time'>";
                break;
            case 'detail_invoice':
                echo "
                    <link rel='stylesheet' href='assets/css/header_footer.css?v=$time'>
                    <link rel='stylesheet' href='assets/css/all.css?v=$time'>
                    <link rel='stylesheet' href='assets/css/ofv.css?v=$time'>
                    <link rel='stylesheet' href='assets/css/detail_invoice.css?v=$time'>";
    
                break;
            case 'giohang':
                echo "
                    <link rel='stylesheet' href='assets/css/header_footer.css?v=$time'> 
                    <link rel='stylesheet' href='assets/css/all.css?v=$time'>
                    <link rel='stylesheet' href='assets/css/giohang.css?v=$time'>";
                break;
            case 'thanhtoan':
                echo "
                    <link rel='stylesheet' href='assets/css/header_footer.css?v=$time'> 
                    <link rel='stylesheet' href='assets/css/thanhtoan.css?v=$time'>
                    <link rel='stylesheet' href='assets/css/all.css?v=$time'>
                    ";
                break;
            case 'donhang':
                echo "
                    <link rel='stylesheet' href='assets/css/header_footer.css?v=$time'>
                    <link rel='stylesheet' href='assets/css/global.css?v=$time'>
                    <link rel='stylesheet' href='assets/css/donhang.css?v=$time'>
                    ";
                break;
            case 'editthongtin':
                echo "
                    <link rel='stylesheet' href='assets/css/header_footer.css?v=$time'>
                    <link rel='stylesheet' href='assets/css/all.css?v=$time'>
                    <link rel='stylesheet' href='assets/css/editthongtin.css?v=$time'>                    ";
                break;
            case 'lienhe':
                echo "
                    <link rel='stylesheet' href='assets/css/header_footer.css?v=$time'>
                    <link rel='stylesheet' href='assets/css/all.css?v=$time'>
                    <link rel='stylesheet' href='assets/css/lienhe.css?v=$time'>                    ";
                break;
            case 'thongtin':
                echo "
                    <link rel='stylesheet' href='assets/css/header_footer.css?v=$time'>
                    <link rel='stylesheet' href='assets/css/all.css?v=$time' />
                    <link rel='stylesheet' href='assets/css/thongtin.css?v=$time' />";
                break;
            case 'productDetails':
                echo "
                    <link rel='stylesheet' href='assets/css/ngoisaocomment.css?v=$time' />
                    <link rel='stylesheet' href='assets/css/global.css?v=$time' />
                    <link rel='stylesheet' href='assets/css/productDetails.css?v=$time' />
                    <link rel='stylesheet' href='assets/css/header_footer.css?v=$time'>
                    ";
                break;
            case 'messageSuccessful':
                echo "
                    <link rel='stylesheet' href='assets/css/global.css?v=$time' />
                    <link rel='stylesheet' href='assets/css/messageSuccessful.css?v=$time' />
                    <link rel='stylesheet' href='assets/css/header_footer.css?v=$time'>
                    ";
                break;
            case 'blog':
                echo "

                    <link rel='stylesheet' href='assets/css/all.css?v=$time'>
                    <link rel='stylesheet' href='assets/css/tintuc.css?v=$time'>
                    <link rel='stylesheet' href='assets/css/header_footer.css?v=$time'>
                    ";
                break;
            default:
                # code...
                break;
        }
    }

    ?>
</head>
<div class="loader">
    <div></div>
</div>
<div class="content_loading">
    <!-- --------------------đây là phần header------------------------- -->
    <header class="site-header">
      <div class="container">
        <div class="header">
          <div class="hn-top">
            <div class="hn-top-left">
              <a href="?mod=page&act=home">
                <div class="header-logo">
                  <img src="logo-sw.png" alt="" />
                </div>
              </a>
              <div class="hn-top-formSearch">
                <form method="post" action="" class="nav-search">
                  <div class="form-search-group">
                    <input
                      type="search"
                      name="key_seach"
                      class="form-search"
                      placeholder="Vui Lòng Nhập Từ Tìm Kiếm!"
                    />
                    <ul class="form-search-result p2-medium-16">
                      <li class="form-search-item" >
                        <a href="javascript:void(0)">Phu</a>
                      </li>
                      <li class="form-search-item">
                        <a href="javascript:void(0)">Vinh</a>
                      </li>
                      <li class="form-search-item" >
                        <a href="javascript:void(0)">Tan</a>
                      </li>
                      <li class="form-search-item" >
                        <a href="javascript:void(0)">Thai</a>
                      </li>
                      <li class="form-search-item" >
                        <a href="javascript:void(0)">Minh</a>
                      </li>
                      <li class="form-search-item" >
                        <a href="javascript:void(0)">Thu</a>
                      </li>
                    </ul>
                  </div>
                </form>
              </div>
            </div>
            <div class="hn-top-right">
              <a href="?mod=page&act=giohang">
              <div class="hn-t-right-iconCart">
                <svg
                  width="24"
                  height="25"
                  viewBox="0 0 24 25"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M2 2.07812H3.74001C4.82001 2.07812 5.67 3.00812 5.58 4.07812L4.75 14.0381C4.61 15.6681 5.89999 17.0681 7.53999 17.0681H18.19C19.63 17.0681 20.89 15.8881 21 14.4581L21.54 6.95813C21.66 5.29813 20.4 3.94812 18.73 3.94812H5.82001"
                    stroke="#1B2124"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M16.25 22.0781C16.9404 22.0781 17.5 21.5185 17.5 20.8281C17.5 20.1378 16.9404 19.5781 16.25 19.5781C15.5596 19.5781 15 20.1378 15 20.8281C15 21.5185 15.5596 22.0781 16.25 22.0781Z"
                    stroke="#1B2124"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M8.25 22.0781C8.94036 22.0781 9.5 21.5185 9.5 20.8281C9.5 20.1378 8.94036 19.5781 8.25 19.5781C7.55964 19.5781 7 20.1378 7 20.8281C7 21.5185 7.55964 22.0781 8.25 22.0781Z"
                    stroke="#1B2124"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M9 8.07812H21"
                    stroke="#1B2124"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
              </a>
              <a href="<?php if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
                                echo '?mod=page&act=thongtin';
                              }else{
                                echo '?mod=page&act=dangnhap';
                              }
                        ?>">
                <div class="hn-t-right-User">
                  <img
                    src="assets/images/AvatarDefault.jpg"
                    width="40"
                    height="40"
                    alt=""
                  />
                </div>
              </a>
            </div>
          </div>
          <div class="hn-bottom">
            <nav class="header-nav">
              <ul class="header-nav-items h4">
                <li class="header-nav-item">
                  <a href="?mod=page&act=home">Trang Chủ</a>
                </li>
                <li class="header-nav-item nav-category">
                  <a href="?mod=page&act=sanpham">Danh Mục</a>
                  <ul class="nav-cat-parent">
                    <?php
                      foreach ($showdanhmucchinh_header as $dmc_h):
                    ?>
                    <li class="nav-cat-parent-item">
                      <a href="?mod=page&act=sanpham&page=1&madanhmuc_tim=<?=$dmc_h['id_danhmuc']?>">
                      <span class="nav-cat-parent-item-title"> <?=$dmc_h['TenDanhMuc']?> </span>
                      </a>
                    </li>
                    <?php
                      endforeach;
                    ?>
                  </ul>
                </li>
                <li class="header-nav-item">
                  <a href="?mod=page&act=blog">Tin Tức</a>
                </li>
                <li class="header-nav-item">
                  <a href="?mod=page&act=lienhe">Liên Hệ</a>
                </li>
                <?php
                  if(isset($_SESSION['user']) && ($_SESSION['user']['VaiTro'] == 1)){
                ?>
                  <li class="header-nav-item">
                    <a href="?mod=page&act=admin">Quản Trị</a>
                  </li>
                <?php
                }else{}
                ?>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <!-- ---------------------- đây là phần body----------------------- -->

    <body>