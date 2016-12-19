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
	setInterval('cur()', 100);
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