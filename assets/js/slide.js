function initialiseResponsiveSilide(id) {
    jQuery(function () {
        jQuery(id).responsiveSlides({
            auto: true,
            pager: false,
            timeout: 6000,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                jQuery('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                jQuery('.events').append("<li>after event fired.</li>");
            }
        });
    });
}
function resizeSlide() {
        if ($(".callbacks_container ul li img").height() >= (window.innerHeight - $(".header").height())) {
            $('.slider_principal').css('height', window.innerHeight);
            $('#slider_top').css('height', window.innerHeight);
            $('#slider_top li').css('height', window.innerHeight);
        } else {
            $('.slider_principal').css('height', '');
            $('#slider_top').css('height', '');
            $('#slider_top li').css('height', '');
        }
}

$(window).load(function () {
    initialiseResponsiveSilide('#slider_top');
    $('html,body').animate({scrollTop: 0}, 'slow');

    resizeSlide();
    $(window).resize(function () {
        resizeSlide(); 
     
    });
});