function changeMdp() {
    var regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
    if ($(".mdp").val() !== "" && $(".nmdp").val() !== "" && $(".cnmdp").val() !== "" && $(".nmdp").val() === $(".cnmdp").val() && regex.test($(".nmdp").val())) {
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
                    message(urlError, "Le mot de passe est incorrect.");
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
        if (!(regex.test($(".nmdp").val()))) {
            message(urlError, "Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule et un chiffre.");
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
                if (result === "0") {
                    message(urlError, "Le mot de passe est incorrect.");
                } else if (result === "-1") {
                    message(urlError, "L'email est déja utilisé");
                } else {

                    $(".mdpMail").val("");
                    $(".cnemail").val("");
                    $(".nemail").val("");
                    couleurAlerteClass(".form-mdpMail", "has-success");
                    couleurAlerteClass(".form-cnemail", "has-success");
                    couleurAlerteClass(".form-nemail", "has-success");
                    message(urlSucces, "Email modifié avec succés");
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

function changeDescription() {
    if ($(".nom").val() !== "" && $(".prenom").val() !== "") {
        $.ajax({
            type: "post",
            url: urlChangeDecription,
            data: "nom=" + $(".nom").val() + "&prenom=" + $(".prenom").val() + "&description=" + $(".description").val(),
            success: function (result) {
                if (result !== "0") {
                    couleurAlerteClass(".form-nom", "has-success");
                    couleurAlerteClass(".form-prenom", "has-success");
                    couleurAlerteClass(".form-description", "has-success");
                    message(urlSucces, "Desciption modifié avec succés");
                } else {
                    message(urlError, "Une erreure c'est produite veuillez contacter un adminitrasteur.");
                }
            }});
    } else {
        if ($(".nom").val() === "") {
            couleurAlerteClass(".form-nom", "has-error");
        }
        if ($(".prenom").val() === "") {
            couleurAlerteClass(".form-prenom", "has-error");
        }
    }

}

var x;
var y;
var w;
var h;
var boolCoords = true;

function uploadImageProfil() {
    var data = new FormData();
    data.append('fichier', $('.uploadedfile')[0].files[0]);
    data.append('x', x);
    data.append('y', y);
    data.append('w', w);
    data.append('h', h);
    data.append('boolCoords', boolCoords);
    data.append('widht', $('#imageProfile').width());
    data.append('height', $('#imageProfile').height());
    $.ajax({
        url: urlUploadProfile, // Url to which the request is send
        type: "POST", // Type of request to be send, called as method
        data: data, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        contentType: false, // The content type used when sending data to the server.
        cache: false, // To unable request pages to be cached
        processData: false, // To send DOMDocument or non processed data file it is set to false
        success: function (data)   // A function to be called if request succeeds
        {
            if (data !== "0") {
                if ($("body").find($(".tailleImageProfilMinature")).size() == 1) {
                    $(".tailleImageProfilMinature").addClass("tailleImageProfil");
                    $(".tailleImageProfilMinature").removeClass("tailleImageProfilMinature");
                }
                $(".tailleImageProfil").css({"background-image": "url('" + urlImageProfil + data + "')"});
                $('#popUpAddImageProfile').modal('hide');
            }

        }
    });
}


getSelectionStart = function ()
{
    textarea = document.getElementById("zone");

    if (typeof textarea.selectionStart != 'undefined')
        return textarea.selectionStart;

    // IE Support
    textarea.focus();
    var range = textarea.createTextRange();
    range.moveToBookmark(document.selection.createRange().getBookmark());
    range.moveEnd('character', textarea.value.length);

    return textarea.value.length - range.text.length;
}


function chargementFile(thisVar) {
    $(".modal-body").html('<img id="imageProfile"/>');
    var file = thisVar.files[0];
    var imagefile = file.type;
    var match = ["image/jpeg", "image/png", "image/jpg"];
    if (!((imagefile === match[0]) || (imagefile === match[1]) || (imagefile === match[2])))
    {
        return false;
    }
    else
    {

        var reader = new FileReader();
        reader.onload = imageIsLoaded;
        reader.readAsDataURL(thisVar.files[0]);

    }

}
function imageIsLoaded(e) {
    $('#imageProfile').attr('src', e.target.result);
    $('#popUpAddImageProfile').modal('show');
    $('#popUpAddImageProfile').on('shown.bs.modal', function () {
        $('#imageProfile').attr('width', '568px');
        $('#imageProfile').attr('height', $('#imageProfile').height());
        $('#imageProfile').Jcrop({
            bgColor: 'black',
            bgOpacity: .4,
            maxSize: [800, 800],
            aspectRatio: 1,
            setSelect: [(($('#imageProfile').width() / 2) - 50), (($('#imageProfile').height() / 2) - 50), (($('#imageProfile').width() / 2) + 50), (($('#imageProfile').height() / 2) + 50)],
            onSelect: updateCoords,
            onRelease: onReleaseAction
        });
    });
}


function onReleaseAction() {
    boolCoords = false;
}

function updateCoords(c)
{
    boolCoords = true;
    x = c.x;
    y = c.y;
    w = c.w;
    h = c.h;
}

$(document).ready(function (e) {
    $(".confirmationMdp").on("click", function () {
        changeMdp();
    });
    $(".confirmationEmail").on("click", function () {
        changeEmail();
    });
    $(".confirmationDescription").on("click", function () {
        changeDescription();
    });
    setRows($(".description"));
    $(".description").on("keyup", function () {
        setRows($(".description"));
    });

    $(".uploadedfile").click(function () {
        $(".uploadedfile").val('');
    });

    $(".uploadedfile").change(function () {
        chargementFile(this);
    });

    $(".uploadImageProfil").on("click", function () {
        uploadImageProfil();
    });
});
