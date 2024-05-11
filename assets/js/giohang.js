$(document).ready(function() {
    const formatter = new Intl.NumberFormat('en-VN', {
        currency: 'VND',
    });
    var chuoitronggia = 0;
    $('.checkspquabill').on('change',function(){
        var chuoigiatri = $(this).val();
        var manggiatrisp = chuoigiatri.split(" - ");
        if($(this).prop( "checked" )){
            $('#bangthongtincheck').prepend("<tr class='"+manggiatrisp[0]+"'><input class='idspcanremove' type='hidden' value='"+manggiatrisp[0]+"'><td><div style='display: flex;'><img src='assets/images/" + manggiatrisp[4] +"' width='70px' height='70px' alt=''><p>" + manggiatrisp[5] +"</p></div></td><td class='tongtiendachon'>" + manggiatrisp[6] +" VND</td></tr>");
            var manggiadachon = ($('.tongtiendachon').html()).split(' ');
            chuoitronggia += Number(manggiadachon[0]);
        }else{
            var manggiadachon = ($('.tongtiendachon').html()).split(' ');
            $('.'+manggiatrisp[0]+'').empty();
            chuoitronggia -= Number(manggiatrisp[6]);
        }
        $('#ingiatongtien').html(formatter.format(chuoitronggia) + ' VND');
    });
});