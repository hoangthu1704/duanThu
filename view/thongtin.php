<div class="sidebar">
  <div class="hede">
    <h6>Trang cá nhân</h6>
  </div>

  <nav class="nav_editthongtin">
    <ul>
      <li><a href="?mod=page&act=thongtin">Thông tin</a></li>
      <li><a href="?mod=page&act=donhang">Đơn hàng</a></li>
      <li><a href="?mod=page&act=editthongtin">Sửa thông tin</a></li>
      <li><a href="?mod=page&act=dangxuat_taikhoan" style="color: red;">Đăng xuất tài khoản</a></li>
    </ul>
  </nav>
</div>

<main>
  <div class="container-flex">
    <?php
    if (!isset($_SESSION['user'])) {
      echo "<h1 style='margin: 20px 0;'>Vui lòng đăng nhập!</h1>";
    }
    ?>
    <h6>Thông tin của tôi</h6>
    <div class="info-sectionFirst">
      <div class="left">
        <h5><?php if (isset($_SESSION['user'])) echo $_SESSION['user']['UserName']; ?></h5>
        <p>Người dùng</p>
        <p>Việt Nam</p>
      </div>
      <div class="right">
        <a href="?mod=page&act=editthongtin"><button class="edit-button" style="width: 100px">Chỉnh sửa</button></a>
      </div>
    </div>
    <div class="info-section">
      <p class="weight-medium">Thông tin của bạn</p>
      <div class="info">
        <div>
          <p>Tên: <?php if (isset($_SESSION['user'])) echo $_SESSION['user']['FirstName']; ?></p>
          <p>Mail: <?php if (isset($_SESSION['user'])) echo $_SESSION['user']['Email']; ?></p>
        </div>
        <div>
          <p>Họ: <?php if (isset($_SESSION['user'])) echo $_SESSION['user']['LastName']; ?></p>
          <p>Số điện thoại: <?php if (isset($_SESSION['user'])) echo $_SESSION['user']['MobileNumber']; ?></p>
        </div>
      </div>
    </div>

    <!-- <div class="info-section">
      <p class="weight-medium">Địa chỉ</p>
      <div class="info">
        <div>
          <p>Đường: Nguyễn Huệ</p>
          <p>Thành phố: Hồ Chí Minh</p>
        </div>
        <div>
          <p>Quốc gia: Việt Nam</p>
          <p>Bưu điện: 71000</p>
        </div>
      </div>
    </div> -->
  </div>
</main>