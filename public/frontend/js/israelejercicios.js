$( document ).ready(function() {

	$.getJSON( 'cargar_listaDeEjercicios', function(rest) {
		console.log(rest);
		console.log(rest.ejercicios[0].nivel);
		

		for (var i in rest.ejercicios) {
			
			$(".list-group").append(
			$("<a>",{"class":"list-group-item","href":"detalleejercicio.html"}).append(
					$("<span>",{"class":"pull-right"}).append($("<strong>",{"text":"Dificultad:"}).append($("<span>",{"class":"label label-success","text":rest.ejercicios[i].nivel}).append())),
					$("<h4>",{"class":"list-group-item-heading","text":"Ejercicio. " + rest.ejercicios[i].titulo}).append(),
					$("<div>",{"class":"list-group-item-text"}).append(
							$("<p>",{"text":rest.ejercicios[i].descripcion}).append(),

							$("<span>",{"class":"label label-info","style":"margin-right: 0.5%","text":"#" + rest.ejercicios[i].etiquetas[0].etiqueta1}).append(),
							$("<span>",{"class":"label label-primary","text":"#" + rest.ejercicios[i].etiquetas[1].etiqueta1}).append(),

							$("<span>",{"class":"pull-right"}).append(
									$("<strong>",{"text":"Veces Resuelto: "}).append(rest.ejercicios[i].resuelto)
								)	
					)
				)
				
			);
		}
	});

});