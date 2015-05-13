jQuery(document).ready(function () {
    //mode de commande panels
    jQuery('#command_right_column ul li').click(function () {
        jQuery(this).toggleClass("active");
        var index = jQuery(this).index();
        if (index == 0) {
            jQuery('#command_left_column .command_panel:first-child .open_command').toggleClass("active").next().slideToggle("slow");
            return false;
        }
        else {
            var num = index + 1;
            jQuery('#command_left_column .command_panel:nth-child(' + num + ') .open_command').toggleClass("active").next().slideToggle("slow");
            return false;
        }
    });
    jQuery('h2.open_command').click(function () {
        var parent = jQuery(this).parent().index();
        if (parent == 0) {
            jQuery('#command_right_column ul li:first-child').toggleClass("active");
        }
        else {
            var num = parent + 1;
            jQuery('#command_right_column ul li:nth-child(' + num + ')').toggleClass("active");
        }
    });


    jQuery(".inside_command_panel").hide();
    jQuery(".open_command").click(function () {
        jQuery(this).toggleClass("active").next().slideToggle("slow");
        return false;
    });

});

jQuery(function () {
    jQuery('.table').css({height: jQuery(window).innerHeight()});
    jQuery(window).resize(function () {
        jQuery('.table').css({height: jQuery(window).innerHeight()});
    });
});


