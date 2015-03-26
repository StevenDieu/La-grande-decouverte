function longueurTraitVerticale() {
    nombreBloc = $(".content_fiche_voyage").find(".blocVoyage").size()
    longueurBloc = $(".blocVoyage").height();
    $(".traiVerticalePoitiller").height((longueurBloc + 85) * nombreBloc  + 50);
}

$(window).load(function () {
    longueurTraitVerticale();
});