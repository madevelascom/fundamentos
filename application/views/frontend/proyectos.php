
<div id="proyectos-header" class = 'container-fluid pt-70'>
	<div class = 'container'>
		<h1 class="align-center">Lista de Proyectos</h1>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="alert alert-success alert-dismissable">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong>Success!</strong> Indicates a successful or positive action.
				</div>
			</div>
		</div>
	</div>
</div>

<section id="proyectos-body">
	<div class="container">
		<div class="row mb-xs-40 mb-md-40 mb-lg-40">
			<div class="col-lg-10 col-lg-offset-1">
				<ul class="nav nav-tabs" role="tablist" id = 'curso-tabs'>
					<li role="presentation" class="active"><a href="#new-proj" aria-controls="new-proj" role="tab" data-toggle="tab"><span class="daw-folder-upload"> </span>Nuevo Proyecto</a></li>
					<li role="presentation"><a id="up-proj-link" href="#up-proj" aria-controls="up-proj" role="tab" data-toggle="tab" onclick="loadProject()"><span class="daw-folder-plus"> </span>Proyectos Subidos</a></li>
				</ul>
				<div class="tab-content mb-xs-40 mb-md-40 mt-lg-40">
					<div role="tabpanel" class="tab-pane fade in active" id="new-proj">
						<form>
							<div class="form-group">
								<label for="project-title">Título:</label>
							    <input class="form-control validarTitulo" type="text" placeholder="Ingresa un título..." id="project-title">
							</div>
							<div class="form-group">
							    <label for="project-description">Descripción:</label>
							    <textarea class="form-control validarDesc" id="project-description" rows="3"></textarea>
						  	</div>
						  	<div class="form-group">
					  	  		<label for="project-date">Fecha de Entrega:</label>
					  	    	<input class="form-control validarDate" type="date" id="project-date">	
						  	</div>
						  	<div class="form-group">
						  		<label for="project-tags">Tags:</label>
				  		   		<input class="form-control validarTags" type="tags" placeholder="Añade algunos tags..." id="project-tags"/>
						  	</div>
						  	<div class="form-group">
						  	   <input type="file" class="form-control-file" id="project-file" aria-describedby="fileHelp">
						  	 </div>
						  	<button id="botonvalidacion" type="submit" class="btn btn-primary">Enviar</button>
						</form>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="up-proj">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>