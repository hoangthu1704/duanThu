
<div class="contact-icons">
    <a href="javascript:void(0)">
        <img src="assets/img/map.jpg" alt="Map">
        <span><h6>Địa chỉ:</h6>Tp.Hồ chí minh</span>
    </a>
    <a href="javascript:void(0)">
        <img src="assets/img/phone.jpg" alt="Phone">
        <span><h6>Phone:</h6>099999</span>
    </a>
    <a href="javascript:void(0)">
        <img src="assets/img/mail.jpg" alt="Mail">
        <span><h6>Mail:</h6>SW@gmail.com</span>
    </a>
    <a href="javascript:void(0)">
        <img src="assets/img/web.jpg" alt="Web">
        <span><h6>Website:</h6>SW</span>
    </a>
</div>

<main class="content_main">
    <div class="caichung">
        <form action="" method="post" id="form">
            <h5>Chúng tôi rất vui khi nghe ý kiến từ bạn</h5>
            <br>
            <div class="grid_2cl mrbt_20">
                <div>
                    <label for="name">Họ và tên</label>
                    <input type="text" name="name" id="name" class="input" placeholder="Name">
                    <span id="nameError" class="error"></span> <!-- Thêm phần tử span để hiển thị thông báo lỗi -->
                </div>
                <div>
                    <label for="company">Tên công ty</label>
                    <input type="text" name="company" id="company" class="input" placeholder="Company Name">
                    <span id="companyError" class="error"></span> <!-- Thêm phần tử span để hiển thị thông báo lỗi -->
                </div>
            </div>
            <div class="grid_2cl mrbt_20">
                <div>
                    <label for="phone">Số điện thoại</label>
                    <input type="number" name="phone" id="phone" class="input" placeholder="Phone">
                    <span id="phoneError" class="error"></span> 
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="input" placeholder="Email">
                    <span id="emailError" class="error"></span> 
                </div>
            </div>
            <div class="mrbt_20">
                <label for="address">Địa chỉ</label>
                <input type="text" name="address" id="address" class="input" placeholder="Address">
                <span id="addressError" class="error"></span>
            </div>
            <div class="mrbt_20">
                <label for="message">Message</label>
                <textarea class="input" id="message" placeholder="Message" name="message" cols="30" rows="5"></textarea>
                <span id="messageError" class="error"></span> 
            </div>

            <button class="bt-all bt-red" type="submit" name="guilienhe" onclick="return validfrom()">Gửi</button>
            <div>
                <h1><?php if(isset($thongbao_guitinnhanlienhe)) echo $thongbao_guitinnhanlienhe;?></h1>
            </div>
        </form>
        
        <div>
            <img src="assets/img/anh1.jpg" alt="Image">
        </div>
    </div>
</main>

<script>



    document.getElementById('form').addEventListener('submit', function(event) {
        var name = document.getElementById('name').value.trim();
        var company = document.getElementById('company').value.trim();
        var phone = document.getElementById('phone').value.trim();
        var email = document.getElementById('email').value.trim();
        var address = document.getElementById('address').value.trim();
        var message = document.getElementById('message').value.trim();

        var nameError = document.getElementById('nameError');
        var companyError = document.getElementById('companyError');
        var phoneError = document.getElementById('phoneError');
        var emailError = document.getElementById('emailError');
        var addressError = document.getElementById('addressError');
        var messageError = document.getElementById('messageError');

        if (name === '') {
            nameError.textContent = 'Vui lòng nhập họ và tên';
            event.preventDefault();
        } else {
            nameError.textContent = '';
        }

        if (company === '') {
            companyError.textContent = 'Vui lòng nhập tên công ty';
            event.preventDefault();
        } else {
            companyError.textContent = '';
        }

        if (phone === '') {
            phoneError.textContent = 'Vui lòng nhập số điện thoại';
            event.preventDefault();
        } else {
            phoneError.textContent = '';
        }

        if (email === '') {
            emailError.textContent = 'Vui lòng nhập email';
            event.preventDefault();
        } else {
            emailError.textContent = '';
        }

        if (address === '') {
            addressError.textContent = 'Vui lòng nhập địa chỉ';
            event.preventDefault();
        } else {
            addressError.textContent = '';
        }

        if (message === '') {
            messageError.textContent = 'Vui lòng nhập tin nhắn';
            event.preventDefault();
        } else {
            messageError.textContent = '';
        }
    });

</script>