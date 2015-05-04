function changeMdp() {
    if ($(".mdp").val() !== "" && $(".nmdp").val() !== "" && $(".cnmdp").val() !== "" && $(".nmdp").val() === $(".cnmdp").val()) {
        $.ajax({
            type: "post",
            url: urlChangeMdp,
            data: "mdp=" + $(".mdp").val() + "&nmdp=" + $(".nmdp").val(),
            success: function (result) {
                if (result !== "0") {
                    $(".mdp").val("");
                    $(".nmdp").val("");
                    $(".cnmdp").val("");
                    couleurAlerteClass(".form-mdp", "has-success");
                    couleurAlerteClass(".form-nmdp", "has-success");
                    couleurAlerteClass(".form-cnmdp", "has-success");
                    message(urlSucces, "Mot de passe modifié avec succés");
                } else {
                    message(urlError, "Une erreure c'est produite veuillez contacter un adminitrasteur.");
                }
            }});
    } else {
        if ($(".mdp").val() === "") {
            couleurAlerteClass(".form-mdp", "has-error");
        }
        if ($(".nmdp").val() === "") {
            couleurAlerteClass(".form-nmdp", "has-error");
        }
        if ($(".cnmdp").val() === "") {
            couleurAlerteClass(".form-cnmdp", "has-error");
        }
        if ($(".nmdp").val() !== $(".cnmdp").val()) {
            message(urlError, "Les mots de passe ne sont pas identiques");
        }
    }

}

function changeEmail() {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (regex.test($(".nemail").val()) && $(".nemail").val() !== "" && $(".cnemail").val() !== "" && $(".mdpMail").val() !== "" && $(".nemail").val() === $(".cnemail").val()) {
        $.ajax({
            type: "post",
            url: urlChangeEmail,
            data: "email=" + $(".nemail").val() + "&mdp=" + $(".mdpMail").val(),
            success: function (result) {
                if (result !== "0") {
                    $(".mdpMail").val("");
                    $(".cnemail").val("");
                    $(".nemail").val("");
                    couleurAlerteClass(".form-mdpMail", "has-success");
                    couleurAlerteClass(".form-cnemail", "has-success");
                    couleurAlerteClass(".form-nemail", "has-success");
                    message(urlSucces, "Email modifié avec succés");
                } else {
                    message(urlError, "Une erreure c'est produite veuillez contacter un adminitrasteur.");
                }
            }});
    } else {

        if ($(".mdpMail").val() === "") {
            couleurAlerteClass(".form-mdpMail", "has-error");
        }
        if ($(".nemail").val() === "") {
            couleurAlerteClass(".form-nemail", "has-error");
        }
        if ($(".cnemail").val() === "") {
            couleurAlerteClass(".form-cnemail", "has-error");
        }
        if ($(".nemail").val() !== $(".cnemail").val()) {
            message(urlError, "Les emails ne sont pas identiques");
        } else if (!regex.test($(".nemail").val())) {
            message(urlError, "L'email n'est pas valide...");
        }
    }

}


$(document).ready(function () {
    $(".confirmationMdp").on("click", function () {
        changeMdp();
    });
    $(".confirmationEmail").on("click", function () {
        changeEmail();
    });

});