var tabImageSlider = {}

function chargementAjouterVoyage() {
    $.ajax({
        type: "post",
        url: urlAddVoyage,
        success: function (result) {
            $("#add-travel").html(result)
        }});
}

function chargementEditionVoyage() {
    $.ajax({
        type: "post",
        url: urlListeVoyage,
        success: function (result) {
            $("#edit-travel").html(result);
        }});
}

$(window).load(function () {
    chargementAjouterVoyage();
    chargementEditionVoyage();
});