<div class = 'container-fluid pt-70 pb-50'>
	<div class = 'container'>
		<h1 class="align-center">Información de ejercicio</h1>  
	</div>
	<div class = 'container'>

		<div class = 'row pt-20'>
			<div class = 'col-md-offset-1 col-md-10'>
				<form id = 'infoejercicio'>
					<div class="form-group">
						<label for="project-title">Título</label>
						<input class="form-control validarTitulox" type="text" placeholder="Ingresa un título" id="project-title">
					</div>
					<div class="form-group">
						<label for="project-description">Descripción</label>
						<textarea class="form-control validarDescx" id="project-description" rows="2" placeholder="Describe brevemente de qué consiste el ejercicio"></textarea>
					</div>
					<div class="form-group">
						<label for="project-description">Formato de entrada</label>
						<textarea class="form-control validarEntrada" id="project-description" rows="2"></textarea>
					</div>
					<div class="form-group">
						<label for="project-description">Formato de salida</label>
						<textarea class="form-control validarSalida" id="project-description" rows="2"></textarea>
					</div>
					<div class="form-group">
						<label for="project-description">Ejemplo de entrada</label>
						<textarea class="form-control validarEjemEn" id="project-description" rows="2"></textarea>
					</div>
					<div class="form-group">
						<label for="project-description">Ejemplo de salida</label>
						<textarea class="form-control validarEjemSa" id="project-description" rows="2"></textarea>
					</div>
					<div class="form-group">
						<label for="project-description">Explicación</label>
						<textarea id="editor1"   class="editorValidar" name="editor1">&lt;p&gt;Ingresa aquí una explicación para tu ejercicio. Debes ser lo más conciso posible.&lt;/p&gt;</textarea>
					</div>


					<div class="control-group" id="fields">
						<label for="project-description">Casos de prueba</label>
						<div data-role="dynamic-fields">
							<div class="form-inline">
								<div class="form-group">
									<input type="text" class="form-control casodeprueba1" id="field-name" placeholder="Caso de prueba: entrada">
								</div>
								<span>-</span>
								<div class="form-group">
									<input type="text" class="form-control casodeprueba2" id="field-value" placeholder="Caso de prueba: salida">
								</div>
								<button class="btn btn-danger" data-role="remove">
									<span class="glyphicon glyphicon-remove"></span>
								</button>
								<button class="btn btn-primary" data-role="add">
									<span class="glyphicon glyphicon-plus"></span>
								</button>
							</div>  <!-- /div.form-inline -->
						</div>
					</div>
					<div class="form-group">
						<div class = 'row pt-15'>
							<div class = 'col-md-3 col-xs-6'>
								<label for="project-description">Dificultad</label>
								<select class="form-control" id="selectValidar">
									<option>Fácil</option>
									<option>Medio</option>
									<option>Difícil</option>
								</select>
							</div>
						</div>
					</div>		
					<div class = 'form-group'>
						<label for="project-tags">Tags:</label>
						<input class="form-control validarTagx" type="tags" placeholder="Añade algunos tags..." data-role="tagsinput" id="project-tags"/>
					</div>

					<div class = 'align-center pt-20'>
						<button type="submit"  id="botonvalidacionx" class="btn btn-default common-btn">Enviar ejercicio</button>
						<a type="submit" class="btn btn-default common-btn" href = "<?php echo site_url("web/practicarprofesor"); ?>">Regresar a ejercicios</a>
					</div>

				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		CKEDITOR.replace( 'editor1' );
	</script>
</div>