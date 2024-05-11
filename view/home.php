<section class="site-banner">
  <div class="container">
    <div class="header-text">
      <div class="h3">Tôi Là</div>
      <div class="eh1 mybrand">Superwow</div>
      <div class="h4">
        Tôi Sẽ Giúp Bạn Lựa Chọn Những Trang Sức Đẹp Nhất
      </div>
      <div class="btn-main">
        <button type="button" class="btn btn-outline-primary btn-lg">
          Khám Phá Sản Phẩm
        </button>
        <button type="button" class="btn btn-outline-primary btn-icon btn-lg">
          <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_120_1509)">
              <path d="M5.79397 18.4203C6.39866 17.9797 7.18147 17.8672 7.88459 18.1203C9.12678 18.5703 10.519 18.8281 12.0002 18.8281C17.8455 18.8281 21.7502 15.0547 21.7502 11.3281C21.7502 7.60156 17.8455 3.82812 12.0002 3.82812C6.15491 3.82812 2.25022 7.60156 2.25022 11.3281C2.25022 12.8281 2.83147 14.2719 3.92366 15.5094C4.32678 15.9641 4.52366 16.5641 4.47678 17.1734C4.41116 18.0219 4.20959 18.8 3.94709 19.4891C4.74397 19.1187 5.40491 18.7062 5.79397 18.425V18.4203ZM0.993968 20.3234C1.07834 20.1969 1.15803 20.0703 1.23303 19.9437C1.70178 19.1656 2.14709 18.1437 2.23616 16.9953C0.829906 15.3969 0.000218207 13.4422 0.000218207 11.3281C0.000218207 5.94219 5.37209 1.57812 12.0002 1.57812C18.6283 1.57812 24.0002 5.94219 24.0002 11.3281C24.0002 16.7141 18.6283 21.0781 12.0002 21.0781C10.2612 21.0781 8.61116 20.7781 7.12053 20.2391C6.56272 20.6469 5.65334 21.2047 4.57522 21.6734C3.86741 21.9828 3.06116 22.2641 2.22678 22.4281C2.18928 22.4375 2.15178 22.4422 2.11428 22.4516C1.90803 22.4891 1.70647 22.5219 1.49553 22.5406C1.48616 22.5406 1.47209 22.5453 1.46272 22.5453C1.22366 22.5687 0.984593 22.5828 0.745531 22.5828C0.440843 22.5828 0.168968 22.4 0.0517807 22.1188C-0.0654068 21.8375 0.000218198 21.5187 0.211156 21.3031C0.403343 21.1062 0.576781 20.8953 0.740843 20.6703C0.820531 20.5625 0.895531 20.4547 0.965843 20.3469C0.970531 20.3375 0.975218 20.3328 0.979906 20.3234H0.993968Z" fill="black" />
            </g>
            <defs>
              <clipPath id="clip0_120_1509">
                <rect width="24" height="24" fill="white" transform="translate(0 0.078125)" />
              </clipPath>
            </defs>
          </svg>

          Liên Lạc
        </button>
      </div>
    </div>
    <div class="header-slider">
      <?php
      // dùng vòng lặp để duyệt qua từng sản phẩm có lượt xem nhiều nhất
      foreach ($show_sp_theoluotxem_nhieunhat as $luotxem):
        extract($luotxem);
      ?>
      <div class="header-item" style="background-image: url(assets/images/banner-bg.png)">
        <div class="header-item-content">
          <div class="hic-title h4"><?=$TenSanPham?></div>
          <div class="hic-des h5" style="display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    overflow: hidden; min-width: 300px"><?=$MoTa?></div>
          <div class="hic-price h6"><?=number_format($Gia,0,'.','.')?> VND</div>
          <div class="btn-main">
            <a href="?mod=page&act=productDetails&idsp=<?=$id_sanpham?>">
              <button type="button" class="btn btn-outline-primary">
                Xem Chi Tiết
              </button>
            </a>
          </div>
        </div>
        <div class="header-item-img">
          <img src="assets/images/<?=$HinhAnh?>" alt="" />
        </div>
      </div>
      <?php
      endforeach;
      ?>
      <!-- <div class="header-item" style="background-image: url(assets/images/banner-bg.png)">
        <div class="header-item-content">
          <div class="hic-title h4">Tên Sản Phẩm 2</div>
          <div class="hic-des h5">Mô Tả</div>
          <div class="hic-price h6">Giá Sản Phẩm</div>
          <div class="btn-main">
            <button type="button" class="btn btn-outline-primary">
              Xem Chi Tiết
            </button>
          </div>
        </div>
        <div class="header-item-img">
          <img src="assets/images/gioi2.png" alt="" />
        </div>
      </div>

      <div class="header-item" style="background-image: url(assets/images/banner-bg.png)">
        <div class="header-item-content">
          <div class="hic-title h4">Tên Sản Phẩm 3</div>
          <div class="hic-des h5">Mô Tả</div>
          <div class="hic-price h6">Giá Sản Phẩm</div>
          <div class="btn-main">
            <button type="button" class="btn btn-outline-primary">
              Xem Chi Tiết
            </button>
          </div>
        </div>
        <div class="header-item-img">
          <img src="assets/images/gioi3.png" alt="" />
        </div>
      </div>

      <div class="header-item" style="background-image: url(assets/images/banner-bg.png)">
        <div class="header-item-content">
          <div class="hic-title h4">Tên Sản Phẩm 4</div>
          <div class="hic-des h5">Mô Tả</div>
          <div class="hic-price h6">Giá Sản Phẩm</div>
          <div class="btn-main">
            <button type="button" class="btn btn-outline-primary">
              Xem Chi Tiết
            </button>
          </div>
        </div>
        <div class="header-item-img">
          <img src="assets/images/loai4.png" alt="" />
        </div>
      </div>

      <div class="header-item" style="background-image: url(assets/images/banner-bg.png)">
        <div class="header-item-content">
          <div class="hic-title h4">Tên Sản Phẩm 5</div>
          <div class="hic-des h5">Mô Tả</div>
          <div class="hic-price h6">Giá Sản Phẩm</div>
          <div class="btn-main">
            <button type="button" class="btn btn-outline-primary">
              Xem Chi Tiết
            </button>
          </div>
        </div>
        <div class="header-item-img">
          <img src="assets/images/bottom_lf.png" alt="" />
        </div>
      </div>

      <div class="header-item" style="background-image: url(assets/images/banner-bg.png)">
        <div class="header-item-content">
          <div class="hic-title h4">Tên Sản Phẩm 6</div>
          <div class="hic-des h5">Mô Tả</div>
          <div class="hic-price h6">Giá Sản Phẩm</div>
          <div class="btn-main">
            <button type="button" class="btn btn-outline-primary">
              Xem Chi Tiết
            </button>
          </div>
        </div>
        <div class="header-item-img">
          <img src="assets/images/bottom_rg.png" alt="" />
        </div>
      </div> -->

    </div>
    <button type="button" class="btn btn-outline-primary btn-icon btn-arrow-left">
      <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_580_6313)">
          <path d="M0.503209 11.0184C-0.166434 11.6043 -0.166434 12.5559 0.503209 13.1418L9.07464 20.6418C9.74428 21.2277 10.8318 21.2277 11.5014 20.6418C12.1711 20.0559 12.1711 19.1043 11.5014 18.5184L5.84964 13.5777H22.2854C23.2336 13.5777 23.9996 12.9074 23.9996 12.0777C23.9996 11.248 23.2336 10.5777 22.2854 10.5777H5.85499L11.4961 5.63711C12.1657 5.05117 12.1657 4.09961 11.4961 3.51367C10.8264 2.92773 9.73892 2.92773 9.06928 3.51367L0.497852 11.0137L0.503209 11.0184Z" fill="black" />
        </g>
        <defs>
          <clipPath id="clip0_580_6313">
            <rect width="24" height="24" fill="white" transform="translate(0 0.078125)" />
          </clipPath>
        </defs>
      </svg>
    </button>

    <button type="button" class="btn btn-outline-primary btn-icon btn-arrow-right">
      <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M23.4964 13.1371C24.1661 12.5512 24.1661 11.5996 23.4964 11.0137L14.925 3.51367C14.2554 2.92773 13.1679 2.92773 12.4982 3.51367C11.8286 4.09961 11.8286 5.05117 12.4982 5.63711L18.15 10.5777H1.71429C0.766071 10.5777 0 11.248 0 12.0777C0 12.9074 0.766071 13.5777 1.71429 13.5777H18.1446L12.5036 18.5184C11.8339 19.1043 11.8339 20.0559 12.5036 20.6418C13.1732 21.2277 14.2607 21.2277 14.9304 20.6418L23.5018 13.1418L23.4964 13.1371Z" fill="black" />
      </svg>
    </button>
  </div>
</section>
<div class="mr-main frame_intro_h">
  <div class="grid-col-2">
    <div class="frame_img_intro_h">
      <div class="mrr_80">
        <div class="img1_intro_h dis-ju-al">
          <img src="assets/images/gioi3.png" width="100%" alt="">
        </div>
        <div class="img2_intro_h dis-ju-al">
          <img src="assets/images/gioi1.png" width="100%" alt="">
        </div>
      </div>
      <div class="img3_intro_h dis-ju-al">
        <img src="assets/images/gioi2.png" width="100%" alt="">
      </div>
    </div>
    <div>
      <div class="frame_us">
        <p class="p1">về chúng tôi</p>
        <div class="frame_logo">
          <img src="assets/images/logo.png" class="img_logo_us" alt="">
        </div>
      </div>
      <div class="frame_tn">
        <h2 class="text_us">CHÚNG TÔI LUÔN QUAN TÂM ĐẾN CHẤT LƯỢNG VÀ TRẢI NGHIỆM NGƯỜI TIÊU DÙNG</h2>
      </div>
      <div>
        <a href="?mod=page&act=sanpham" class="bt-all bt-big bt-yellow semo">XEM THÊM<i class="fa-solid fa-arrow-right" style="margin-left: var(--pg-8);"></i></a>
      </div>
    </div>
  </div>
</div>
<section class="site-catelogy mt-80">
  <div class="container">
    <div class="catelogy">
      <div class="c-top">
        <div class="h2 c-top-title">Danh Mục</div>
        <div class="c-top-icon">
          <div class="c-top-arrowLeft">
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_580_6313)">
                <path d="M0.503209 11.0184C-0.166434 11.6043 -0.166434 12.5559 0.503209 13.1418L9.07464 20.6418C9.74428 21.2277 10.8318 21.2277 11.5014 20.6418C12.1711 20.0559 12.1711 19.1043 11.5014 18.5184L5.84964 13.5777H22.2854C23.2336 13.5777 23.9996 12.9074 23.9996 12.0777C23.9996 11.248 23.2336 10.5777 22.2854 10.5777H5.85499L11.4961 5.63711C12.1657 5.05117 12.1657 4.09961 11.4961 3.51367C10.8264 2.92773 9.73892 2.92773 9.06928 3.51367L0.497852 11.0137L0.503209 11.0184Z" fill="black" />
              </g>
              <defs>
                <clipPath id="clip0_580_6313">
                  <rect width="24" height="24" fill="white" transform="translate(0 0.078125)" />
                </clipPath>
              </defs>
            </svg>
          </div>
          <div class="c-top-arrowRight">
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M23.4964 13.1371C24.1661 12.5512 24.1661 11.5996 23.4964 11.0137L14.925 3.51367C14.2554 2.92773 13.1679 2.92773 12.4982 3.51367C11.8286 4.09961 11.8286 5.05117 12.4982 5.63711L18.15 10.5777H1.71429C0.766071 10.5777 0 11.248 0 12.0777C0 12.9074 0.766071 13.5777 1.71429 13.5777H18.1446L12.5036 18.5184C11.8339 19.1043 11.8339 20.0559 12.5036 20.6418C13.1732 21.2277 14.2607 21.2277 14.9304 20.6418L23.5018 13.1418L23.4964 13.1371Z" fill="black" />
            </svg>
          </div>
        </div>
      </div>
      <div class="c-bottom">

        <?php
        // dùng vòng lặp để duyệt qua từng danh danh mục
        foreach ($showcate as $cate) :
          extract($cate);
          // hàm count dùng để điếm số lượng sản phẩm có trong danh mục đó
          // sau khi điếm có bao nhiêu sản phẩm có trong danh mục đó thì gán vào biến demsoluongsp_theodm
          $demsoluongsp_theodm = count(insl_theodanhmuc($id_danhmuc));
        ?>
          <div class="cb-item">
            <a href="?mod=page&act=sanpham&page=1&MaDanhMuc=<?=$id_danhmuc?>&Method=1">
              <div class="cb-i-img">
                <img src="assets/images/<?= $HinhAnh ?>" alt="" width="60" height="60" />
              </div>
              <div class="cb-i-title h5"><?= $TenDanhMuc ?></div>
              <div class="cb-i-store p2-regular-16"><?= $demsoluongsp_theodm ?> Sản Phẩm</div>
            </a>
          </div>
        <?php
        endforeach;
        ?>
      </div>
    </div>
  </div>
</section>
<div class="frame_des">
  <div class="dis-ju-al frame_title_hot">
    <h1 class="font-recursive color_y5">CÁC SẢN PHẨM NỔI BẬT</h1>
  </div>
  <div class="mr-main">
    <div class="grid-col-4 frame_all_pd_hot">
      <?php
      // dùng vòng lặp để duyệt qua từng sản phẩm hot
      foreach ($show_pd_hot_4 as $pd) :
        extract($pd);
      ?>
        <div class="frame_pd_hot">
          <div class="dis-ju ed_img">
            <div class="frame_img_pd_hot">
              <img src="assets/images/<?= $HinhAnh ?>" class="ing_pd_hot" alt="">
            </div>
          </div>
          <div class="ed_text_pd_hot">
            <div class="frame_text_pd_hot">
              <div>
                <h4 class="font-recursive mrb_12"><?= $TenSanPham ?></h4>
              </div>
              <div>
                <p class="p4 mrb_12 limit_ct_pd_hot"><?= $MoTa ?></p>
                <h3 class="font-recursive color_pri_pd_hot"><?php echo number_format($Gia,0,'.','.') ?>VND</h3>
              </div>
            </div>
            <div class="dis-ju">
              <a href="?mod=page&act=productDetails&idsp=<?= $id_sanpham ?>" class="bt_showpd bt-all bt-boder-yellow bt-big weight-relugar font-recursive">Xem Chi Tiết</a>
            </div>
          </div>
        </div>
      <?php
      endforeach;
      ?>
    </div>
  </div>
</div>
<div class="frame_des frame_sv">
  <div class="dis-ju-al frame_main_cary">
    <div class="dis_col">
      <div class="dis-ju color_y5">
        <p class="p1">về chúng tôi</p>
        <div class="frame_logo">
          <img src="assets/images/logo.png" class="img_logo_us" alt="">
        </div>
      </div>
      <div class="title_sv">
        <h2>Các Dịnh Vụ Khi Mua Hàng</h2>
      </div>
    </div>
  </div>
  <div class="mr-main frame_doc_sv">
    <div class="frame_img_bcg_sv">
      <img src="assets/images/nendichvu.png" alt="">
    </div>
    <div class="mr-main frame_ct_sv">
      <div class="grid-col-2 frame_ct_sv_in">
        <div>
          <ul>
            <li class="mrb_48">
              <h3 class="p3 weight-relugar">01 Bảo hành 6 tháng</h3>
            </li>
            <li class="mrb_48">
              <h3 class="p3 weight-relugar">02 Miễn phí vận chuyển</h3>
            </li>
            <li class="mrb_48">
              <h3 class="p3 weight-relugar">03 Hộ trợ khách hàng 24/7</h3>
            </li>
            <li>
              <h3 class="p3 weight-relugar">04 Thanh toán an toàn</h3>
            </li>
          </ul>
          <div class="mrt_80">
            <a href="javascript:void(alert('Chưa Xây Dựng'))" class="bt-all bt-big bt-brow semo">XEM THÊM<i class="fa-solid fa-arrow-right icon_r_cary"></i></a>
          </div>
        </div>
        <div class="frame_img_dichvu">
          <img class="img_dichvu" src="assets/images/dichvu.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div>