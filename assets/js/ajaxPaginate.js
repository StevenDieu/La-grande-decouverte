var page = 1;
var useScrollPaginate = false;
var endList = true;

function check() {

    var tailleWindow = window.innerHeight + $(window).scrollTop()
    var tailleFooter = $('#footer').offset().top;

    if (tailleWindow > tailleFooter && useScrollPaginate && endList) {
        useScrollPaginate = false;
        $(".list").append('<div class="center" id="spinneur"><img src=" ' + urlSpiner + ' " name="spinner" alt="spinner"/></div>');

        $.ajax({
            type: "post",
            url: urlAddArticle,
            data: "page=" + page,
            success: function (result) {
                $("#spinneur").remove();
                if (result !== '0') {
                    var allList = JSON.parse(result);
                    for (var i = 0; i < parseInt(allList["nbr_list"]); i++) {
                        $(allList["header"][i]).appendTo('.ulList').fadeIn('slow', function () {
                            useScrollPaginate = true;
                        });
                        $('.listElement-' + allList["id"][i]).html(allList["content"][i], 1500);
                    }
                    if (allList["nbr_list"] < 8) {
                        endList = false;
                    }
                    page++;
                }
            }});
    }
}

$(document).ready(function () {
    if (activePaginate) {
        $('html, body').animate({scrollTop: 0}, "slow", function () {
            useScrollPaginate = true;
        });

        $(window).scroll(function () {
            check();
        });

        $(window).resize(function () {
            check();
        });
    }
});