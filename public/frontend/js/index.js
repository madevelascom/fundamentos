$(window).load(function(){
	if ($("#typo").length){
		$("#typo").type("Fundamentos de Programación", $("#cursor"), 500);
		animText();
		$("#owl-landing-1").owlCarousel({
			autoPlay: 10000,
			navigation : false, // Show next and prev buttons
			slideSpeed : 300,
			paginationSpeed : 400,
			singleItem:true

			});
	}
});

/* FUNCIONES PARA LA ANIMACION DEL TEXTO EN HEADER */

/* Inicializacion de la animacion
* @element es el contenedor del texto a animar. Inicialmente debe estar vacio
* @text es el texto que vamos a animar
* @delay es el tiempo de espera antes de empezar la animacion */
jQuery.fn.type = function(text, cursor, delay) {
	var element = $(this);
	//setInterval('cur()', 100);
	setTimeout(function() { anim(element, text); }, delay);
}
/* Animacion del cursor*/
function cur() {
	$(cursor).animate({
		opacity: 0
	}, 'fast', 'swing').animate({
		opacity: 1
	}, 'fast', 'swing');
}
/* Animacion del titulo */
function anim(element, text) {
	if ($(element).html().length < text.length) {
		$(element).html(text.substring(0, ($(element).html().length + 1)));
		setTimeout(function() {
			anim(element, text);
		}, 100);
	}
}
/* Animacion del texto */
function animText(){
	$('.header-text').animate({opacity: 1}, 'slow', 'linear');
}

/* Carga de JSON para pagina de proyectos */
function loadProject(){
	$("#up-proj").empty();
	$.getJSON("cargar_proyectos", function(ans){
		var projects = ans.proyectos;
		for(i = 0; i<projects.length; i++){
			//console.log("ans");
			var $panel = $("<div>", {"class":"well project-panel"});
			var $title = $("<h4>",  {"class":"bold"});
			var $link = $("<a>", {"data-toggle": "modal", "data-target": "#proj-info"+i});
			$link.text(projects[i].titulo);
			$title.append($link);
			$panel.append($title);
			$("#up-proj").append($panel);
			var $modal = $("<div>",{"id":"proj-info"+i, "class":"modal fade", "role":"dialog"});
			var $modalDialog = $("<div>", {"class":"modal-dialog"});
			var $modalContent = $("<div>", {"class":"modal-content"});
			var $modalHeader = $("<div>", {"class":"modal-header"});
			var $modalTitle = $("<h4>", {"class":"modal-title"});
			$modalTitle.text(projects[i].titulo);
			var $modalBody = $("<div>", {"class":"modal-body"});
			var $modalFooter = $("<div>", {"class":"modal-footer"});
			var url = projects[i].url;
			var $downloadButton = $("<a>", {"href":url, "class":"btn btn-default", "target":"_blank"});
			$downloadButton.text("Descargar");
			var $closeButton = $("<button>", {"type":"button", "class":"btn btn-default", "data-dismiss":"modal"});
			$closeButton.text("Cerrar");
			$modalFooter.append($downloadButton);
			$modalFooter.append($closeButton);
			$modalBody.text(projects[i].descripcion);
			$modalHeader.append($modalTitle);
			$modalContent.append($modalHeader);
			$modalContent.append($modalBody);
			$modalContent.append($modalFooter);
			$modalDialog.append($modalContent);
			$modal.append($modalDialog);
			$("#up-proj").append($modal);
		}
	});
}