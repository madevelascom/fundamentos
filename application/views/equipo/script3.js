$( document ).ready(function() {
    
   $.getJSON('equipo.json',function(data) {
   		//console.log(data);
   		$(".containerCoordinador").append(
   				$("<div>",{"class":"container"}).append(
                     $("<div>", {"class":"profesor"}).append(
                        $("<img>",{"src":data.coordinador.foto,"class":"img-responsive","class":"img-circle","alt":data.coordinador.nombre}),
                        $("<p>",{"text":data.coordinador.nombre}),
                        $("<p>",{"text":data.coordinador.titulo}),
                        $("<a>",{"text":data.coordinador.mail, "href":"mailto:#"}),
                        $("<p>",{"text":data.coordinador.telefono})
                     )
                  )
   			)

         ///PROFESORES
   		for(var i in data.profesores) {
   			//console.log(data.profesores[i].nombre);
            var $fila1 = $("#Profesores").append("<div>",{"class":"row"});
            var $fila2 = $(".row");
            var $fila;
            if (i>=3 || i>=7) {
               $fila = $fila1;
            } else {
               $fila = $fila2;
            }
   			$fila.append(
                //  $("<div>",{"class":"row"}).append(
                           $("<div>",{"class":"col-xs-12 col-sm-3 col-md-4 col-lg-3"}).append(
                              $("<div>", {"class":"panel panel-default"}).append(
                              $("<div>",{"class":"panel-body"}).append(
                                   $("<div>",{"class":"imagenProfesor"}).append(
                                       $("<img>",{"src":data.profesores[i].foto,"class":"img-responsive","class":"img-circle","class":"centradox","alt":data.coordinador.nombre})
                                    ),
                                    $("<div>",{"class":"detalleProfesor"}).append(
                                       $("<h4>",{"text":data.profesores[i].nombre}),
                                       $("<p>",{"text":data.profesores[i].titulo}),
                                       $("<a>",{"text":data.profesores[i].mail, "href":"mailto:#"}),
                                       $("<p>",{"text":data.profesores[i].telefono})
                                    )
                              )
                           )
                        )
                    // )
   				) 
            /*if (i==5) {
               console.log(i);


            }   */     
   		}


         ///AYUDANTES

         for(var i in data.ayudantes.TA) {
            $("#Ayudantes").append(
               $("<div>",{"class":"col-xs-12 col-sm-3 col-md-4 col-lg-3"}).append(
                  $("<div>", {"class":"panel panel-default"}).append(
                     $("<div>",{"class":"panel-body"}).append(
                        $("<h4>",{"text":data.ayudantes.TA[i].nombre}),
                        $("<a>",{"text":data.ayudantes.TA[i].correo,"href":"mailto:#"})           
                        )
                     )  
                  )     
               )     
         }



   });
   		
});