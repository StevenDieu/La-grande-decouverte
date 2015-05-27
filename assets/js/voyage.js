
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

$( document ).ready(function() {

	function updateQueryStringParameter(uri, key, value) {
		var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
		var separator = uri.indexOf('?') !== -1 ? "&" : "?";
		if (uri.match(re)) {
			return uri.replace(re, '$1' + key + "=" + value + '$2');
		}
		else {
			return uri + separator + key + "=" + value;
		}
	}

	/*
	Affiche un select avec tous les continents, et recharge la page en conséquence.
	*/
    function selectContinent() {
		var myDiv = document.getElementById("continent");

		//Create array of options to be added
		var continent = ["Amerique du Nord","Amerique du Sud","Afrique","Asie","Europe","Océanie"];
		var value = ["","","14","15","13",""];

		//Create and append select list
		var selectList = document.createElement("select");
		selectList.setAttribute("id", "mySelect");
		myDiv.appendChild(selectList);

		//Create and append the options
		for (var i = 0; i < continent.length; i++) {
		    var option = document.createElement("option");
		    option.setAttribute("value", continent[i]);
		   // option.setAttribute("onClick","window.location.href=document.URL+'?continent='"+value[i]);
		    option.text = continent[i];
		    selectList.appendChild(option);
		}
	}
	selectContinent();
});

