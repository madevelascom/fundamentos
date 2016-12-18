$( document ).ready(function() {
    
   $.getJSON("cargar_equipo",function(data) {
   		//console.log(data);
   		$(".containerCoordinador").append(
   				$("<div>",{"class":"container"}).append(
                     $("<div>").append(
                      //  $("<div>",{"class":"imagenCordinador"}).append(
                              $("<img>",{"src":data.coordinador.foto,"class":"img-responsive","alt":data.coordinador.nombre})
                      //  )
                        ,
                       // $("<div>",{"clas":"detalleCoordinador"}).append(
                              $("<p>",{"text":data.coordinador.nombre}),
                              $("<p>",{"text":data.coordinador.titulo}),
                              $("<a>",{"text":data.coordinador.mail, "href":"mailto:#"}),
                              $("<p>",{"text":"Teléf. : " + data.coordinador.telefono})
                         //  )
                        
                     )
                  )
   			)


         ///PROFESORES
         var $flag1 = 0;

   		for(var i in data.profesores) {
   			//console.log(data.profesores[i].nombre);
            
           /* var $count = 0;
            var $x;
            var $filaQexiste = $(".row");
            var $NewFila = $("#Profesores").append(
                     $("<div>",{"class":"row"}) );*/

               $("#Profesores").append(
   			//$(".row").append(
                 // $("<div>",{"class":"row"}).append(
                           //$("<div>",{"class":"col-sm-4 col-md-3"}).append(
                              $("<div>", {"class":"panel panel-default"}).append(
                              $("<div>",{"class":"panel-body"}).append(
                                   $("<div>",{"class":"imagenProfesor"}).append(
                                       $("<img>",{"class":"img-responsive","class":"centradox","src":data.profesores[i].foto,"alt":data.coordinador.nombre})
                                    ),
                                    $("<div>",{"class":"detalleProfesor"}).append(
                                       $("<h3>",{"text":data.profesores[i].nombre}),
                                       $("<h5>",{"text":data.profesores[i].titulo}),
                                       $("<a>",{"text":data.profesores[i].mail, "href":"mailto:#"}),
                                       $("<p>",{"text":"Teléf. : " +data.profesores[i].telefono})
                                    )
                              )
                           )
                        //)


                    // )
   			//	)  

            )   
   		}
         ///AYUDANTES

         for(var i in data.ayudantes.TA) {
            $("#Ayudantes").append(
               $("<div>",{"class":"col-xs-12 col-sm-3 col-md-3"}).append(
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