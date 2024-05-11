// submit radio loaisp
var submit_loaisp = document.getElementsByClassName('submit_loaisp');
var submit_giasp = document.getElementsByClassName('submit_giasp');

for (let i = 0; i < submit_loaisp.length; i++) {
    submit_loaisp[i].onclick = function() {
        this.form.submit();
    }
}
for (let i = 0; i < submit_loaisp.length; i++) {
    if (submit_loaisp[i].value == '<?php if (isset($_SESSION['seach_sp']['loaisp'])) echo ($_SESSION['seach_sp']['loaisp']); ?>') {
        submit_loaisp[i].checked = 1;
    } else {
        submit_loaisp[i].checked = 0;
    }
}
// submit radio giasp
for (let i = 0; i < submit_giasp.length; i++) {
    submit_giasp[i].onclick = function() {
        this.form.submit();
    }
}
for (let i = 0; i < submit_giasp.length; i++) {
    if (submit_giasp[i].value == '<?php if (isset($_SESSION['seach_sp']['lc_gia_sp'])) echo ($_SESSION['seach_sp']['lc_gia_sp']); ?>') {
        submit_giasp[i].checked = 1;
    } else {
        submit_giasp[i].checked = 0;
    }
}