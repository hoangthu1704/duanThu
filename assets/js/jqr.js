$(window).on("load",function(){
    $(".loader").fadeOut(1500);
    setTimeout(function () { 
        $(".content_loading").fadeIn(1500); 
    }, 1500); 
});