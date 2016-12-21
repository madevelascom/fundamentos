<section class="container">
	<h2>Sumar Digitos</h2>
	<p>Autor:<strong>Leonardo Kuffo</strong></p>	

  		<div class="problemaText">
  			<div>
  				<h4><strong class="subtitulosx">Descripción del Problema:</strong></h4>
  			</div>
  			<div>
  				<p>
  					Muestre por pantalla la suma de los dígitos de un número que ingrese previamente el usuario.
  				</p>
  			</div>
  		</div>

  		<div class="formatoEntrada" >
		  		<div>
		  			<h4>
		  				<strong class="subtitulosx">Formato de los Datos de Entrada:</strong>
		  			</h4>
		  		</div>
	  			<div>
	  				<p>
	  					Ingrese uno numero de N cifras, por ejemplo: 8, 56, 678, 4567, 67894.
			  		</p>
	  			</div>
  		</div>

  		
		<div class="output-format">
			<div>
				<h4>
					<strong class="subtitulosx">Formato de los Datos de Salida:</strong>
				</h4>
			</div>

			<div>
				<p>El resultado de la suma sera un numero entero.</p>
			</div>
		</div>



		<div class="row">
			<div class="col-md-4">

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title" id="mih2">
							<strong>Ejemplo de Entrada:</strong>
						</h3>
					</div>
					<div class="panel-body" id="panelentrada">
						<div>
							<p>
								 <b>46</b>
							</p>
							<p> 
								 <b>234</b>
							</p>
						</div>
					</div>
				</div>
			</div>


			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title" id="mih">
							<strong >Ejemplo de Salida:</strong>
						</h3>
					</div>
						<div class="panel-body"  id="panelsalida">
							<div> 
								<p>
									 <b>4</b> + <b>6</b> = 10
								</p>
								<p>
									 <b>2</b> + <b>3</b> + <b>4</b> = 9
								</p>
							</div>
						</div>
				</div>
			</div>

		</div>

	<div>
			<div>
				<h4><strong class="subtitulosx">Probar su codigo:</strong></h4>
			</div>
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading"><span class="glyphicon glyphicon glyphicon-console"> Python IDE</span></div>
							<div class="panel-body" id="panelIde">
								<p><b class="ideliterales">1|  >>> _</b></p>
								<p><b  class="ideliterales">2|</b></p>
								<p><b  class="ideliterales">2|</b></p>
								<p><b  class="ideliterales">3|</b></p>
								<p><b  class="ideliterales">4|</b></p>
								<p><b  class="ideliterales">5|</b></p>
								<p><b  class="ideliterales">6|</b></p>
								<p><b  class="ideliterales">7|</b></p>
							</div>
						</div>
					</div>
				</div>
		
			<div>
				<h4><strong class="subtitulosx">Subir su codigo como Archivo:</strong></h4>
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" id="cuerpo">
					<span class="glyphicon glyphicon-upload" aria-hidden="true"></span> Subir Archivo
				</button>

				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel"><strong>Subir Archivo</strong></h4>
							</div>
							<div class="modal-body">
								<form class="form-inline">
									<div class="form-group">
										<label>Nombre del Archivo:</label>
										<input type="text" class="form-control" placeholder="micodigo.py">
										<label class="btn btn-success btn-file">
   										 	Seleccionar Archivo <input type="file" style="display: none;">
										</label>
									</div>
									
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
								<button type="button" class="btn btn-primary">Subir</button>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
</section>