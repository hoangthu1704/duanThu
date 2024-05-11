
<div class="sidebar">
        <div class="tieude">
            <h6>Thông tin của tôi</h6>
</div>
    <nav class="nav_editthongtin">
        <ul>
            <img src="assets/images/<?php if(isset($_SESSION['user'])){ 
                                                    if(!empty($_SESSION['user']['HinhAnh'])){
                                                        echo $_SESSION['user']['HinhAnh'];
                                                    }else{
                                                        // echo 'anh1.webp';
                                                        echo 'avatarnacdinh.jpg';
                                                    }
                                                }?>" alt="anh">
            <li><?php if(isset($_SESSION['user'])) echo $_SESSION['user']['UserName'];?></li>
            <li><?php if(isset($_SESSION['user'])) echo $_SESSION['user']['Email'];?></li>
        </ul>
    </nav>
</div>
<!--         <nav>
            <ul>
                <img src="assets/img/anh1.webp" alt="anh">
                <li>Lê Thị Hoàng Anh Thư</li>
                <li>Anhthu4027@gmail.com</li>
            </ul>
        </nav> -->
<!--     </div> -->

    <div class="caichung">
        <h1 style='margin: 20px 0;'><?php if(!isset($_SESSION['user'])){ echo "Vui lòng đăng nhập!"; }?></h1>
        <h6>Thông tin cá nhân</h6>
        <div class="container_1">
            <form id="form" action="" method="post">
                <div class="row">
                    <div>
                        <label for="name">Họ</label>
                        <input type="text" id="name" name="name" class="input" placeholder="Nhập họ">
                        <span id="name-error" class="error-msg" style="color: red;"></span>
                    </div>
                    <div>
                        <label for="company">Tên</label>
                        <input type="text" id="company" name="company" class="input" placeholder="Nhập tên">
                        <span id="company-error" class="error-msg" style="color: red;"></span>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <label for="phone">Số điện thoại</label>
                        <input type="text" id="phone" name="phone" class="input" placeholder="Nhập số điện thoại">
                        <span id="phone-error" class="error-msg" style="color: red;"></span>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" class="input" placeholder="Nhập email">
                        <span id="email-error" class="error-msg" style="color: red;"></span>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <label for="phone">username</label>
                        <input type="text" id="username" name="username" class="input" placeholder="Nhập tên người dùng">
                        <span id="username-error" class="error-msg" style="color: red;"></span>
                    </div>
                    <div>
                        <label for="email">mật khẩu</label>
                        <input type="text" id="pass" name="pass" class="input" placeholder="Nhập password">
                        <span id="pass-error" class="error-msg" style="color: red;"></span>
                    </div>
                </div>
                
                <!-- <h6>Địa chỉ</h6>
                <div class="row">
                    <div>
                        <label for="address">Đường:</label>
                        <input type="text" id="address" name="address" placeholder="Nhập đường">
                        <span id="address-error" class="error-msg" style="color: red;"></span>
                    </div>
                    <div>
                        <label for="city">Thành phố:</label>
                        <input type="text" id="city" name="city" placeholder="Nhập thành phố">
                        <span id="city-error" class="error-msg" style="color: red;"></span>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <label for="country">Quốc tịch:</label>
                        <input type="text" id="country" name="country" placeholder="Nhập quốc tịch">
                        <span id="country-error" class="error-msg" style="color: red;"></span>
                    </div>
                    <div>
                        <label for="postalCode">Mã Bưu Chính:</label>
                        <input type="text" id="postalCode" name="postalCode" placeholder="Nhập mã">
                        <span id="postalCode-error" class="error-msg" style="color: red;"></span>
                    </div>
                </div> -->
                <h1><?php if(isset($thongbao_suathongtinuser)) echo $thongbao_suathongtinuser;?></h1>
                <div class="button-container">
                    <button type="button" class="bt-all bt-red" onclick="quaylai()">Hủy bỏ</button>
                    <button type="submit" name="capnhatthongtin" class="bt-all bt-green">Cập nhật</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function quaylai() {
            window.location.href = "?mod=page&act=thongtin";
}
       document.getElementById("form").addEventListener("submit", function(event) {
            const fields = ["name", "company", "phone", "email", "username", "pass"];
            const errorMessages = {
                name: "Vui lòng nhập họ.",
                company: "Vui lòng nhập tên.",
                phone: "Vui lòng nhập số điện thoại.",
                email: "Vui lòng nhập email.",
                username: "Vui lòng nhập tên người dùng.",
                pass: "Vui lòng nhập password."
            };

            fields.forEach(function(field) {
                const value = document.getElementById(field).value.trim();
                const errorElement = document.getElementById(`${field}-error`);
                errorElement.textContent = value ? "" : errorMessages[field];
                if (!value) {
                    event.preventDefault();
                }
            });
        });

    </script>
