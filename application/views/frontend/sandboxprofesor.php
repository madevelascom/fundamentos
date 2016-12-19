
<div class="container-fluid pt-70">
	<h1 class="align-center"> Sandbox Profesor </h1>  
	<ul class="tab">
		<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'ver_ejercicios')">Ver Ejercicios</a></li>
		<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'editar_ejercicios')">Editar Ejercicios</a></li>
		<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'crear_ejercicios')">Crear Ejercicio</a></li>
	</ul>

	<div id="ver_ejercicios" class="tabcontent">
		<div class="container pt-70" id='practicar'> 

			<ul class="pagination">
			</ul>

			<div class="list-group pt-20" id='ver'>

			</div>

		</div>
	</div>

	<div id="editar_ejercicios" class="tabcontent">
		<div class="container pt-70" id='edicion'> 

			<div class="list-group pt-20" id="editar">

			</div>

		</div>
	</div>

	<div id="crear_ejercicios" class="tabcontent">
		<div class="container pt-70" id='creacion'> 
			<form class="form-horizontal" method = "post">
				<fieldset>

					<!-- Form Name -->

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="titulo">Titulo</label>  
						<div class="col-md-5">
							<input id="titulo" name="titulo" type="text" placeholder="" class="form-control input-md" required="">

						</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="resumen">Resumen</label>  
						<div class="col-md-8">
							<input id="resumen" name="resumen" type="text" placeholder="" class="form-control input-md" required="">
							<span class="help-block">Escriba aqui un resumen del ejercicio</span>  
						</div>
					</div>

					<!-- Textarea -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="desc">Descripcion</label>
						<div class="col-md-4">                     
							<textarea class="form-control" id="desc" name="desc"></textarea>
						</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="dif">Nivel de Dificultad</label>  
						<div class="col-md-1">
							<input id="dif" name="dif" type="number" min="1" max="10" placeholder="" class="form-control input-md" required="">
							<span class="help-block">Numero entre 1 y 10</span>  
						</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="ent">Entrada</label>  
						<div class="col-md-4">
							<input id="ent" name="ent" type="text" placeholder="" class="form-control input-md" required="">

						</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="exit">Salida</label>  
						<div class="col-md-4">
							<input id="exit" name="exit" type="text" placeholder="" class="form-control input-md" required="">

						</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="tags">Etiquetas</label>  
						<div class="col-md-6">
							<input id="tags" name="tags" pattern="^(\w+,)*\w+$" type="text" placeholder="" class="form-control input-md" required="">

						</div>
					</div>

					<!-- Button -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="crear"></label>
						<div class="col-md-4">
							<button id="crear" name="crear" class="btn btn-primary" type="button">Crear</button>
						</div>
					</div>

				</fieldset>
			</form>

		</div>
	</div>