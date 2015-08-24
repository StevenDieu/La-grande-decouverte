
$(window).load(function () {
	$(".voyage").mouseenter(function () {
        $(this).find('.bloc_description').stop(true,true).slideUp();
        $(this).find('.bloc_description').slideDown("fast");
    });

    $('.voyage').mouseleave(function () {
        $(this).find('.bloc_description').stop(true,true).slideDown();
        $(this).find('.bloc_description').slideUp("fast");
    });
});