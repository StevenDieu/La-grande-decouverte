function validate(element) {
    var visible = element.data("visible");
    var id = element.data("id");
    $.ajax({
        url: urlVisibleFiche,
        type: "POST",
        data: "id=" + id + "&visible=" + visible,
        beforeSend: function () {
            $(".validate" + id).children().remove();
            $(".validate" + id).append('<div class="center spinneur"><img src=" ' + urlSpiner + ' " name="spinner" alt="spinner"/></div>');
        },
        success: function (result) {
            $(".validate" + id).children().remove();
            if (result === "0") {
                message(urlError, "Une erreure c'est produite veuillez recharger la page...");
            }
            if (visible === 1) {
                $(".validate" + id).append('<span class="validate icon_click" data-visible="0" data-id="' + id + '"><span class="icon-ok"></span></span>');
            } else {
                $(".validate" + id).append('<span class="validate icon_click" data-visible="1" data-id="' + id + '"><span class="icon-remove"></span></span>');
            }
        }
    });
}


$(document).ready(function () {
    $('.action_validate').on('click', function () {
        validate($(this).children());
    });
});
