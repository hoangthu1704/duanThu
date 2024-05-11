<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shop</title>
  <!-- For custom css -->
  <link rel="stylesheet" href="assets/css/global.css?v=<?php echo time(); ?>" />
  <link rel="stylesheet" href="assets/css/admin.css?v=<?php echo time(); ?>" />
  <?php

  if (isset($act)) {
    if ($act === "addcategory" || $act === "updatecategory" || $act === "updateproduct" || $act === "addproduct" || $act === "updatesubcategory" || $act === "addsubcategory" || $act === "addbrand" || $act === "updatebrand" || $act === "addblog" || $act === "updateblog" || $act === "adduser" || $act === "updateuser" || $act === "profile" || $act === "orderlist" || $act === "comment" || $act === "adddiscount" || $act === "updatediscount"|| $act === "component") {
      echo '<link rel="stylesheet" href="assets/css/productlist.css?v=<?php echo time(); ?>" />';
    }
  }

  ?>
  <link rel="stylesheet" href="assets/css/<?php

                                          if (isset($act)) {
                                            switch ($act) {
                                              case 'categorylist':
                                                echo "productlist";
                                                break;
                                              case 'subcategorylist':
                                                echo "productlist";
                                                break;
                                              case 'brandlist':
                                                echo "productlist";
                                                break;
                                              case 'bloglist':
                                                echo "productlist";
                                                break;
                                              case 'userlist':
                                                echo "productlist";
                                                break;
                                              case 'discountlist':
                                                echo "productlist";
                                                break;  
                                              case 'show':
                                                echo "productlist";
                                                break;

                                              default:
                                                echo $act;
                                                break;
                                            }
                                          }

                                          ?>.css?v=<?php echo time(); ?>" />
</head>

<body class="body-fixed">
  <!-- Admin Header Start -->

  <header class="admin-header">
    <div class="container">
      <div class="site-admin-header">
        <div class="sah-left">
          <a href="?mod=page&act=home">
            <div class="sah-l-logo">
              <img src="logo-sw.png" alt="" />
            </div>
          </a>
        </div>
        <div class="sah-right">
          <div class="sah-r-avatar">
            <img src="assets/images/" alt="" />
            <div class="sah-r-a-status-online"></div>

            <div class="sah-ra-show">
              <div class="sah-ra-s-top">
                <div class="sah-ra-st-left">
                  <img src="assets/images/" alt="" />
                  <div class="sah-r-a-status-online"></div>
                </div>
                <div class="sah-ra-st-right">
                  <div class="sah-ra-st-r-title eh6">PuuGoo</div>
                  <div class="sah-ra-st-r-content eh" style="color: var(--grey-01)">
                    Admin
                  </div>
                </div>
              </div>
              <div class="sah-ra-s-divider"></div>
              <a href="?mod=user&act=profile">
                <div class="sah-ra-s-mid">
                  <i class="uil uil-user"></i>
                  <div class="sah-ra-sm-title eh" style="color: var(--grey-01)">
                    My Profile
                  </div>
                </div>
              </a>
              <div class="sah-ra-s-divider"></div>
              <a href="?mod=page&act=admin&method=logout">
                <div class="sah-ra-s-bot">
                  <i class="uil uil-sign-out-alt"></i>
                  <div class="sah-ra-sm-title eh" style="color: var(--red-01)">
                    Logout
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="main-admin">
    <div class="container">
      <div class="site-main-admin">
        <div class="sma-left">
          <div class="sma-l-dropdown">
            <div class="dropdown">
              <button type="button" class="btn btn-primary dropdown-toggle btn-lg">Danh Mục</button>
              <div class="dropdown-menu btn-dropdown">
                <a href="?mod=category&act=categorylist" class="dropdown-item">Danh Sách Danh Mục</a>
                <a href="?mod=category&act=addcategory" class="dropdown-item">Thêm Danh Mục</a>
              </div>
            </div>
          </div>
          <div class="sma-l-dropdown" style="display: none;">
            <div class="dropdown">
              <button type="button" class="btn btn-primary dropdown-toggle btn-lg">Danh Mục Phụ</button>
              <div class="dropdown-menu btn-dropdown">
                <a href="?mod=subcategory&act=subcategorylist" class="dropdown-item">Danh Sách Danh Mục Phụ</a>
                <a href="?mod=subcategory&act=addsubcategory" class="dropdown-item">Thêm Danh Mục Phụ </a>
              </div>
            </div>
          </div>
          <div class="sma-l-dropdown">
            <div class="dropdown">
              <button type="button" class="btn btn-primary dropdown-toggle btn-lg">Sản Phẩm</button>
              <div class="dropdown-menu btn-dropdown">
                <a href="?mod=product&act=productlist" class="dropdown-item">Danh Sách Sản Phẩm</a>
                <a href="?mod=product&act=addproduct" class="dropdown-item">Thêm Sản Phẩm</a>
              </div>
            </div>
          </div>
          <div class="sma-l-dropdown">
            <a href="?mod=order&act=orderlist">
              <button type="button" class="btn btn-primary btn-lg">Đơn Hàng</button>
            </a>
          </div>
          <div class="sma-l-dropdown">
            <a href="?mod=comment&act=show">
              <button type="button" class="btn btn-primary btn-lg">Bình Luận</button>
            </a>
          </div>
          <div class="sma-l-dropdown">
            <div class="dropdown">
              <button type="button" class="btn btn-primary dropdown-toggle btn-lg">Bài Viết</button>
              <div class="dropdown-menu btn-dropdown">
                <a href="?mod=blog&act=bloglist" class="dropdown-item">Danh Sách Bài Viết</a>
                <a href="?mod=blog&act=addblog" class="dropdown-item">Thêm Bài Viết</a>
              </div>
            </div>
          </div>
          <div class="sma-l-dropdown">
            <div class="dropdown">
              <button type="button" class="btn btn-primary dropdown-toggle btn-lg">Người Dùng</button>
              <div class="dropdown-menu btn-dropdown">
                <a href="?mod=user&act=userlist" class="dropdown-item">Danh Sách Người Dùng</a>
                <a href="?mod=user&act=adduser" class="dropdown-item">Thêm Người Dùng</a>
              </div>
            </div>
          </div>
          <div class="sma-l-dropdown">
            <div class="dropdown">
              <button type="button" class="btn btn-primary dropdown-toggle btn-lg">Mã Giảm Giá</button>
              <div class="dropdown-menu btn-dropdown">
                <a href="?mod=discount&act=discountlist" class="dropdown-item">Danh Sách Mã Giảm Giá</a>
                <a href="?mod=discount&act=adddiscount" class="dropdown-item">Thêm Mã Giảm Giá</a>
              </div>
            </div>
          </div>
          <div class="sma-l-dropdown">
            <a href="?mod=user&act=profile">
              <button type="button" class="btn btn-primary btn-lg">Hồ Sơ</button>
            </a>
          </div>
          <div class="sma-l-dropdown">
            <a href="?mod=admin&act=component">
              <button type="button" class="btn btn-primary btn-lg">Components</button>
            </a>
          </div>
        </div>