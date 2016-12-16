dias = ["Lunes","Martes","Miercoles","Jueves","Viernes"]
divs = ["collapseOne","collapseTwo","collapseThree","collapseFour","collapseFive"]
$(document).ready(function(){
    buscar();
});

function buscar(){
    var url = "";
    $.getJSON("equipo", function(resp){
        var ayudantes = resp.ayudantes.TA;
        for (i = 0; i<dias.length; i++){
            var dia = dias[i];
            for (j=0; j<ayudantes.length; j++){
                var ayudante = ayudantes[j]
                var horarios = ayudante.horarios
                for (z=0; z<horarios.length; z++){
                    if (horarios[z].dia == dia){
                        var nombre = ayudante.nombre;
                        var correo = ayudante.correo;
                        var aula = ayudante.horarios[z].aula;
                        if (aula == "SP-01"){
                            var modalId = "labs";
                        }
                        if (aula.includes("CIB")){
                            var modalId = "cib";
                        }
                        if (aula.includes("24A") || aula.includes("Sala")){
                            var modalId = "fiec"
                        }

                        var hora = ayudante.horarios[z].hora;
                        var dia = ayudante.horarios[z].dia;
                        console.log(divs[i]);
                        $("#"+divs[i]+" > .panel-body").append(
                            $("<div>", {"class":"row"}).append(
                                $("<div>", {"class":"col-md-3"}).append(
                                    $("<p>", {"text":nombre})
                                ),
                                $("<div>", {"class":"col-md-2"}).append(
                                    $("<p>", {"text":correo})
                                ),                                
                                $("<div>", {"class":"col-md-2"}).append(
                                    $("<p>", {"text":hora})
                                ),                         
                                $("<div>", {"class":"col-md-2"}).append(
                                    $("<p>", {"text":aula})
                                ),     
                                $("<div>", {"class":"col-md-2"}).append('<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#'+modalId+'">Ver en Google Maps</button>') 
                            )
                        )
                    }                            
                }
            }
        }
    });
}