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
    if ( window.innerHeight <= window.innerWidth) {
        $('.slider_principal').css('height', window.innerHeight - 76);
        $('#slider_top').css('height', window.innerHeight - 76);
        $('#slider_top li').css('height', window.innerHeight - 76);
    } else {
        $('.slider_principal').css('height', window.innerWidth - 76);
        $('#slider_top').css('height', window.innerWidth - 76);
        $('#slider_top li').css('height', window.innerWidth - 76);
    }
}


$(window).load(function () {
    initialiseResponsiveSilide('#slider_top');
    ///$('html,body').animate({scrollTop: 0}, 'slow');

    resizeSlide();
    $(window).resize(function () {
        resizeSlide();
    });
});