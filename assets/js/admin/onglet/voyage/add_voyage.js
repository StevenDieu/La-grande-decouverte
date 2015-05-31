var confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";

function addLigne() {
    $('.info_de_vente').append("<div class='ligne'><h3>Une déclinaison</h3><a href='javascript:;' class='delete_ligne'>X</a><label for='date_depart'>date_depart:</label><input type='date' id='date_depart' name='date_depart[]'/><br/><label for='date_arrivee'>date_arrivee:</label><input type='date' id='date_arrivee' name='date_arrivee[]'/><br/><label for='depart'>depart:</label><input type='text' id='depart' name='depart[]'/><br/><label for='arrivee'>arrivee:</label><input type='text' id='arrivee' name='arrivee[]'/><br/><label for='formalite'>formalite:</label><TEXTAREA NAME='formalite[]' id='formalite'> </TEXTAREA><br/><label for='asavoir'>asavoir:</label><TEXTAREA NAME='asavoir[]' id='asavoir'> </TEXTAREA><br/><label for='asavoir'>asavoir:</label><TEXTAREA NAME='asavoir[]' id='asavoir'> </TEXTAREA><br/><label for='place_dispo'>place_dispo:</label><input type='text' id='place_dispo' name='place_dispo[]'/><br/><label for='prix'>prix:</label><input type='text' id='prix' name='prix[]'/><br/><label for='special_price'>special_price:</label><input type='text' id='special_price' name='special_price[]'/><br/><label for='tva'>tva:</label><input type='text' id='tva' name='tva[]'/><br/></div>");
}

function addLigneDeroulement() {
    $('.info_deroulement').append("<div class='ligne'><h3>Une déclinaison</h3><a href='javascript:;' class='delete_ligne_deroulement'>X</a><label for='titre'>titre:</label><input type='text' id='titre' name='titrederoulement[]'/><br/><label for='texte'>texte:</label><TEXTAREA NAME='texte[]' id='texte'> </TEXTAREA><br/><label for='jour'>jour:</label><input type='text' id='jour' name='jour[]'/><br/></div>");
}

$(document).ready(function () {
    $('.info_de_vente').on('click', '.delete_ligne', function () {
        if ($('div.ligne').length == 1) {
            alert("vous devez garder au moins une ligne");
            return false;
        }
        if (confirm(confirmation)) {
            $(this).parent().remove();
        }
    });

    $('.info_deroulement').on('click', '.delete_ligne_deroulement', function () {
        if ($('.info_deroulement div.ligne').length == 1) {
            alert("vous devez garder au moins une ligne");
            return false;
        }
        if (confirm(confirmation)) {
            $(this).parent().remove();
        }
    });
});